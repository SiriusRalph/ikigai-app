<?php

namespace App\Http\Controllers;

use App\Models\ExpertProfile;
use App\Models\Question;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function recommend(Request $request)
    {
        $request->validate([
            'answers' => 'required|array',
        ]);

        $answers = $request->input('answers');
        $category = null;
        $experience = null;

        $questions = Question::all();

        foreach ($questions as $question) {
            if (isset($answers[$question->id])) {
                $answer = $answers[$question->id];
                if ($question->question == 'Voulez-vous consulter pour le travail ou bien pour l\'orientation scolaire ?') {
                    if ($answer == 'travail') {
                        $category = 'travail';
                    } elseif ($answer == 'orientation') {
                        $category = 'orientation';
                    }
                } elseif ($question->question == 'Avez-vous déjà eu une consultation ?' && $answer == 'yes') {
                    $experience = 5;
                }
            }
        }

        $query = ExpertProfile::query();
        if ($category) {
            $query->where('categorie', $category);
        }
        if ($experience) {
            $query->where('experience', '>=', $experience);
        }

        $experts = $query->get();
        return view('recommendations.index', compact('experts'));
    }
}
