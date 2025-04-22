<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ExpertProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    //afficher les consultations pour le user:
    public function index()
    {
        $consultations = Consultation::where('user_id', Auth::id())->with('expert')->get();
        return view('consultations.index', compact('consultations'));
    }

    public function create($expert_id)
    {
        $expert = ExpertProfile::findOrFail($expert_id);
        $datesPrises = Consultation::pluck('date_consultation')->toArray();
        $heuresPrises = Consultation::pluck('heure_debut')->toArray();
        return view('consultations.create', compact('expert', 'datesPrises', 'heuresPrises'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'expert_id' => 'required|exists:expert_profiles,id',
            'date_consultation' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'duree' => 'required|integer|min:30',
            'montant' => 'required|numeric',
        ]);

        // $dateConsultation = \DateTime::createFromFormat('Y-m-d', $request->date_consultation)->format('Y-m-d');
        $dateConsultation = \DateTime::createFromFormat('m/d/Y', $request->date_consultation)->format('Y-m-d');


        // Calculer le montant de la consultation en fonction du tarif de l'expert et de la durée
        $expert = ExpertProfile::findOrFail($request->expert_id);
        $montant = ($expert->tarif * $request->duree) / 30;

        $consultation = Consultation::create([
            'user_id' => $request->user_id,
            'expert_id' => $request->expert_id,
            'date_consultation' => $dateConsultation,
            'heure_debut' => $request->heure_debut,
            'duree' => $request->duree,
            'montant' => $montant,
            'statut' => 'non réalisée',
        ]);

        // return redirect()->route('consultations.index')->with('success', 'Consultation created successfully.');
        return redirect()->route('payment.page', ['consultation_id' => $consultation->id]);

    }



    public function destroy($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();

        return redirect()->route('admin.consultations')->with('success', 'Consultation deleted successfully.');
    }

    //annuler une consultation pour l'utilisateur
    public function cancel(Request $request, $id)
    {
        $request->validate([
            'motif_annulation' => 'required|string',
        ]);

        $consultation = Consultation::findOrFail($id);
        $consultation->statut = 'annulée';

        $consultation->motif_annulation = $request->motif_annulation;

        $consultation->save();
        // $consultation->update(['statut' => 'annulée']);
        return redirect()->route('consultations.index')->with('success', 'Consultation cancelled successfully.');
    }

    public function rate(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $consultation = Consultation::where('id', $id)
            ->where('user_id', auth()->id())
            ->where('statut', 'réalisée')
            ->firstOrFail();

        $consultation->rating = $request->input('rating');
        $consultation->save();

        return redirect()->back()->with('success', 'Thanks for your feedback !');
    }

}
