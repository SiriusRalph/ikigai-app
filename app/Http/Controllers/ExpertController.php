<?php

namespace App\Http\Controllers;

use App\Models\ExpertProfile;
use App\Models\User;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function createProfile()
    {
        $users = User::where('type', 1)->get(); // Only experts
        return view('admin.create-profile', compact('users'));
    }

    public function storeProfile(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nom' => 'required|string|max:255',
            'tel' => 'required|string|max:15',
            'categorie' => 'required|string|max:255',
            'tarif' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('photo')->store('public/photos');

        ExpertProfile::create([
            'user_id' => $request->user_id,
            'nom' => $request->nom,
            'tel' => $request->tel,
            'categorie' => $request->categorie,
            'tarif' => $request->tarif,
            'photo' => $path,
        ]);

        return redirect()->route('adminDashboardShow')->with('success', 'Expert profile created successfully.');
    }
}
