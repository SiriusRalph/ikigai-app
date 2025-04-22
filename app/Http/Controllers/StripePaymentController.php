<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function showPaymentPage($consultation_id)
    {
        $consultation = Consultation::findOrFail($consultation_id);
        $expert = $consultation->expert;

        return view('stripe', compact('consultation', 'expert'));
    }

    public function stripePost(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $consultation = Consultation::findOrFail($request->consultation_id);

        $charge = Stripe\Charge::create([
            "amount" => $consultation->montant * 100, // Montant en centimes
            "currency" => "usd", // Stripe n'accepte pas "dhs", utilisez "usd" ou une autre devise supportée
            "source" => $request->stripeToken,
            "description" => "Payment for consultation with " . $consultation->expert->nom
        ]);
        Session::flash('success', 'Payment successful!');
        return redirect()->route('consultations.index');
    }
}
