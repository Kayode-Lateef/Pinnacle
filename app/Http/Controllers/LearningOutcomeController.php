<?php


namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\LearningOutcome;
use Illuminate\Http\Request;

class LearningOutcomeController extends Controller
{
    public function index()
    {
        $learning_outcomes = LearningOutcome::all();
        return view('superadmin.learning_outcomes.index', compact('learning_outcomes'));
    }


    public function create()
    {
        $subjects = Subject::all();
        return view('superadmin.learning_outcomes.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject_id' => 'required|exists:subjects,id', // Validate subject_id
            'description' => 'required',
        ]);

        $learningOutcome = new LearningOutcome();
        $learningOutcome->subject_id = $validatedData['subject_id'];
        $learningOutcome->description = $validatedData['description'];
        $learningOutcome->save();
        return redirect()->route('siteadmin.learning_outcomes.index')->with('success', 'Learning Outcome created successfully.');
    }

    public function edit(LearningOutcome $learningOutcome)
    {
        $subjects = Subject::all();
        return view('superadmin.learning_outcomes.edit', compact('learningOutcome','subjects'));
    }


    public function update(Request $request, LearningOutcome $learningOutcome)
    {
        $validatedData = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'description' => 'required',
        ]);

        // Update the learning outcome with validated data
        $learningOutcome->update($validatedData);

        return redirect()->route('siteadmin.learning_outcomes.index')->with('success', 'Learning outcome updated successfully.');
    }



    public function destroy(LearningOutcome $learningOutcome)
    {
        $learningOutcome->delete();
        return redirect()->route('siteadmin.learning_outcomes.index')->with('success', 'Learning Outcome deleted successfully.');
    }
}

