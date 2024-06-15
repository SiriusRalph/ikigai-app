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
    
            $totalRevenue = Consultation::where('expert_id', $expertId)
                                        ->where('statut', 'réalisée')
                                        ->sum('montant');
    
            $totalBookings = Consultation::where('expert_id', $expertId)->count();

            $recentConsultations = Consultation::where('expert_id', $expertId)
                                    ->orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get();

            $consultationsByMonth = Consultation::where('expert_id', $expertId)
                                    ->whereYear('created_at', now()->year)
                                    ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                                    ->groupBy('month')
                                    ->get();            
    
            $months = array_fill(0, 12, 0);
            foreach ($consultationsByMonth as $consultation) {
                $months[$consultation->month - 1] = $consultation->count;
            }
            return view('experts.expertDashboard', compact('totalRevenue', 'totalBookings', 'recentConsultations','months'));
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
        $consultations = Consultation::selectRaw('MONTH(created_at) as month, expert_id, COUNT(*) as count')
            ->groupBy('month', 'expert_id')
            ->get()
            ->groupBy('expert_id');

        // Préparer les données pour Chart.js
        $experts = [];
        $chartData = [];
        foreach ($consultations as $expertId => $data) {
            $expert = User::find($expertId); // Récupérer les informations de l'expert
            $expertName = $expert ? $expert->name : "Expert $expertId";
            $experts[] = $expertName;

            // Initialiser les données mensuelles à zéro pour tous les mois
            $monthlyData = array_fill(0, 12, 0);
            foreach ($data as $entry) {
                $monthlyData[$entry->month - 1] = $entry->count;
            }

            $chartData[] = [
                'label' => $expertName,
                'data' => $monthlyData,

            ];
        }

        return view('admin.adminDashboard', compact('totalRevenue', 'totalClients', 'totalExperts', 'totalBookings', 'chartData', 'experts'));
    }

    public function userDashboard(){
        return view('user.userDashboard');
    }

    public function index(){
        $experts = ExpertProfile::all();
        return view('user.home', compact('experts'));
    }

    public function contact(){
        return view('user.contact');
    }

}
