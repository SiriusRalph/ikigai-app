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
        $experts = ExpertProfile::all();
        $results = [];

        foreach ($experts as $expert) {
            $score = 0;

            $answerCategory = $this->getAnswerByQuestionText($answers, "Do you want a consultation for work or school guidance ?");
            if ($answerCategory && strtolower($expert->categorie) === strtolower($answerCategory)) {
                $score += 20;
            }

            $experiencePref = $this->getAnswerByQuestionText($answers, "Do you prefer a senior or junior consultant ?");
            if ($experiencePref === 'Senior' && $expert->experience >= 5) {
                $score += 15;
            } elseif ($experiencePref === 'Junior' && $expert->experience < 5) {
                $score += 15;
            } elseif ($experiencePref === "It doesn't matter") {
                $score += 5;
            }

            $budget = $this->getAnswerByQuestionText($answers, "What is your maximum budget for one hour session ?");
            if ($budget && $expert->tarif <= intval($budget)) {
                $score += 15;
            }

            $genderPref = $this->getAnswerByQuestionText($answers, "Do you prefer a male or female expert ?");
            if ($genderPref && $genderPref !== "It doesn't matter" && strtolower($expert->genre) === strtolower($genderPref)) {
                $score += 10;
            } elseif ($genderPref === "It doesn't matter") {
                $score += 5;
            }

            $userDomain = $this->getAnswerByQuestionText($answers, "Which consultant field interests you ?");
            if ($userDomain && strtolower($expert->domaine) === strtolower($userDomain)) {
                $score += 15;
            }

            $clarity = $this->getAnswerByQuestionText($answers, "How clear are you about your professional future ? 1 (I'm completely lost) to 5 (I know exactly what I want)");
            if ($clarity >= 3 && $expert->experience >= 5) {
                $score += 10;
            } elseif ($clarity <= 2 && $expert->experience < 5) {
                $score += 10;
            }

            $results[] = ['expert' => $expert, 'score' => $score];
        }

        $sortedResults = collect($results)->sortByDesc('score');
        
        $filtered = $sortedResults->filter(function($r) {
            return $r['score'] >= 30;
        });

        return view('recommendations.index', ['results' => $filtered]);
    }

    private function getAnswerByQuestionText($answers, $questionText)
    {
        $question = Question::where('question', $questionText)->first();
        return $question && isset($answers[$question->id]) ? $answers[$question->id] : null;
    }

}
