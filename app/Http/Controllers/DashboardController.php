<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ExpertProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class DashboardController extends Controller
{
    public function expertDashboard(){
        $user = auth()->user(); 
        $expertProfile = $user->expertProfile; 
    
        if ($expertProfile) {
            $expertId = $expertProfile->id; 
            $consultations = Consultation::where('expert_id', $expertId)->get();
            $monthsCancelled = array_fill(0, 12, 0);
            $monthsNotRealized = array_fill(0, 12, 0);
            $monthsRealized = array_fill(0, 12, 0);

            foreach ($consultations as $consultation) {
                $month = $consultation->created_at->month - 1; // Mois en index 0-11
                switch (strtolower($consultation->statut)) {
                    case 'annulée':
                        $monthsCancelled[$month]++;
                        break;
                    case 'non réalisée':
                        $monthsNotRealized[$month]++;
                        break;
                    case 'réalisée':
                        $monthsRealized[$month]++;
                        break;
                }
            }
    
            $totalRevenue = Consultation::where('expert_id', $expertId)
                                        ->where('statut', 'réalisée')
                                        ->sum('montant');
    
            $totalBookings = Consultation::where('expert_id', $expertId)->count();

            $recentConsultations = Consultation::where('expert_id', $expertId)
                                    ->orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get();
                                    
            return view('experts.expertDashboard', compact('totalRevenue', 'totalBookings', 'recentConsultations','monthsCancelled','monthsNotRealized', 'monthsRealized'));
        } else {
            return redirect()->route('accueil')->with('error', 'No expert profile found');
        }
    }

    public function adminDashboard(){
        $totalRevenue = Consultation::where('statut', 'réalisée')->sum('montant');
        $totalClients = User::where('type', 'user')->count();
        $totalExperts = User::where('type', 'expert')->count();
        $totalBookings = Consultation::count();

        // Récupérer les consultations par mois et par expert
        $consultations = Consultation::selectRaw('MONTH(created_at) as month, expert_id, statut, COUNT(*) as count')
            ->groupBy('month', 'expert_id', 'statut')
            ->get()
            ->groupBy('expert_id');

        // Préparer les données pour Chart.js
        $experts = [];
        $chartData = [];
        $colors = ['#f44055', '#fb6d40', '#2dcd94'];

        foreach ($consultations as $expertId => $data) {
            $expert = ExpertProfile::where('id', $expertId)->first();

            if ($expert) {
                $expertName = $expert->nom;
                $experts[] = $expertName;
    
                // Initialiser les données mensuelles à zéro pour tous les mois
                $monthlyData = [
                    'annulée' => array_fill(0, 12, 0),
                    'non réalisée' => array_fill(0, 12, 0),
                    'réalisée' => array_fill(0, 12, 0),
                ];
    
                foreach ($data as $entry) {
                    $statut = strtolower($entry->statut);
                    $monthlyData[$statut][$entry->month - 1] = $entry->count;
                }
    
                foreach (['annulée', 'non réalisée', 'réalisée'] as $index => $statut) {
                    $chartData[] = [
                        'label' => "$expertName - $statut",
                        'backgroundColor' => $colors[$index % count($colors)],
                        'data' => $monthlyData[$statut],
                    ];
                }
            }

        }

        return view('admin.adminDashboard', compact('totalRevenue', 'totalClients', 'totalExperts', 'totalBookings', 'chartData', 'experts'));
    }

    public function userDashboard(){
        return view('user.userDashboard');
    }

    public function index(){
        $experts = ExpertProfile::with('consultations')->get();
        return view('user.home', compact('experts'));
    }

    public function contact(){
        return view('user.contact');
    }

}
