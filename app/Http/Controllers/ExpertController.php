<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ExpertProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpertController extends Controller
{
    public function indexProfiles()
    {
        $profiles = ExpertProfile::all();
        return view('admin.profiles.index', compact('profiles'));
    }

    public function createProfile()
    {
        $users = User::where('type', 1)
            ->whereDoesntHave('expertProfile')
            ->get();
        return view('admin.profiles.create-profile', compact('users'));
    }

    public function storeProfile(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nom' => 'required|string|max:255',
            'tel' => 'required|string|max:15',
            'categorie' => 'required|string|max:255',
            'tarif' => 'required|numeric',
            'experience' => 'required|integer|min:0',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('photo')->store('photos', 'public');

        ExpertProfile::create([
            'user_id' => $request->user_id,
            'nom' => $request->nom,
            'tel' => $request->tel,
            'categorie' => $request->categorie,
            'tarif' => $request->tarif,
            'experience' => $request->experience,
            'photo' => $path,
        ]);

        return redirect()->route('experts.indexProfiles')->with('success', 'Expert profile created successfully.');
    }

    public function editProfile(ExpertProfile $profile)
    {
        return view('admin.profiles.edit', compact('profile'));
    }

    public function updateProfile(Request $request, ExpertProfile $profile)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'tel' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'tarif' => 'required|numeric',
            'experience' => 'required|integer|min:0',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $profile->photo = $photoPath;
        }

        $profile->update([
            'nom' => $request->nom,
            'tel' => $request->tel,
            'categorie' => $request->categorie,
            'tarif' => $request->tarif,
            'experience' => $request->experience,
        ]);

        return redirect()->route('experts.indexProfiles')->with('success', 'Profile updated successfully.');
    }

    public function destroyProfile(ExpertProfile $profile)
    {
        $profile->delete();
        return redirect()->route('experts.indexProfiles')->with('success', 'Profile deleted successfully.');
    }

    //pour que l'expert voit ses consultations:
    public function expertConsultations()
    {
        $expertProfile = ExpertProfile::where('user_id', Auth::id())->first();
        if (!$expertProfile) {
            return redirect()->route('expertDashboardShow')->with('error', 'Profil d\'expert non trouvé.');
        }
        $consultations = Consultation::where('expert_id', $expertProfile->id)->get();
        return view('experts.consultations', compact('consultations'));
    }

    // pour marquer une consultation comme réalisée
    public function done($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->statut = 'réalisée';
        $consultation->save();
        // $consultation->update(['statut' => 'réalisée']);

        return redirect()->route('expert.consultations')->with('success', 'Consultation marked as done.');
    }
}
