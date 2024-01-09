<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('superadmin.topic.index', compact('topics'));
    }


    public function create()
    {
        $subjects = Subject::all(); // Get all subjects for the dropdown
        return view('superadmin.topic.create', compact('subjects'));
    }

    public function edit(Topic $topic)
    {
        $subjects = Subject::all();
        return view('superadmin.topic.edit', compact('topic', 'subjects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'name' => 'required|max:255',
            'description' => 'nullable',

        ]);

        Topic::create($validatedData);

        return redirect()->route('siteadmin.topics.index')->with('success', 'Topic created successfully.');
    }

    public function update(Request $request, Topic $topic)
    {
        $validatedData = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'name' => 'required|max:255',
        ]);

        $topic->update($validatedData);

        return redirect()->route('siteadmin.topics.index')->with('success', 'Topic updated successfully.');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();

        return redirect()->route('siteadmin.topics.index')->with('success', 'Topic deleted successfully.');
    }


}
