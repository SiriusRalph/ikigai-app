<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function startTest()
    {
        $questions = Question::all();
        return view('test', compact('questions'));
    }

    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'type' => 'required|string',
            'options' => 'nullable|string',
        ]);
        $options = $request->options ? explode(',', $request->options) : null;

        Question::create([
            'question' => $request->question,
            'type' => $request->type,
            'options' => $options,
        ]);

        return redirect()->route('questions.index')->with('success', 'Question created successfully.');

    }



    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required|string',
            'type' => 'required|string',
            'options' => 'nullable|string',
        ]);
        $options = $request->options ? explode(',', $request->options) : null;

        $question->update([
            'question' => $request->question,
            'type' => $request->type,
            'options' => $options,
        ]);

        return redirect()->route('questions.index')->with('success', 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }
}
