<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Consultation;
use App\Models\ExpertProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Notifications\MeetingLinkGenerate;

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
            'genre' => 'nullable|string|max:25',
            'domaine' => 'nullable|string|max:245',
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
            'genre' => $request->genre,
            'domaine' => $request->domaine,
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
            'genre' => 'nullable|string|max:25',
            'domaine' => 'nullable|string|max:245',
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
            'genre' => $request->genre,
            'domaine' => $request->domaine,
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

    public function generateMeetingLink($id)
    {
        $consultation = Consultation::findOrFail($id);

        // Formater la date et l'heure au format ISO 8601
        $startDate = Carbon::parse($consultation->date_consultation . ' ' . $consultation->heure_debut)->toIso8601String();
        
        try {
            $data = [
                'endDate' => $startDate,
                'fields' => ['hostRoomUrl']
            ];
            Log::info('Request data: ' . json_encode($data));


            $response = Http::withToken(env('WHEREBY_API_KEY'))
                            ->post('https://api.whereby.dev/v1/meetings', $data);

            if ($response->successful()) {
                $meetingData = $response->json();
                Log::info('Meeting created successfully: ' . json_encode($meetingData));

                $meeting_link = $meetingData['hostRoomUrl'];
                
                // Raccourcir l'URL avec Bitly
                $shortenedLink = $this->shortenUrl($meeting_link);

                $consultation->meeting_link = $shortenedLink;
                $consultation->save();

                $consultation->user->notify(new MeetingLinkGenerate($consultation));

                return redirect()->route('expert.consultations')->with('success', 'Lien de la réunion généré et notification envoyée.');
            } else {
                Log::error('Failed to create meeting: ' . $response->body());
                return redirect()->route('expert.consultations')->with('error', 'Erreur lors de la génération du lien de réunion.');
            }
        } catch (\Exception $e) {
            Log::error('Exception while creating meeting: ' . $e->getMessage());
            return redirect()->route('expert.consultations')->with('error', 'Une erreur est survenue lors de la génération du lien de réunion.');
        }
    }

    private function shortenUrl($url)
    {
        $bitlyToken = env('BITLY_API_KEY');
        $response = Http::withToken($bitlyToken)->post('https://api-ssl.bitly.com/v4/shorten', [
            'long_url' => $url,
            'domain' => 'bit.ly'
        ]);

        if ($response->successful()) {
            return $response->json()['link'];
        }

        Log::error('Failed to shorten URL: ' . $response->body());
        return $url;  
    }

}
