<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Subtopic;
use Illuminate\Http\Request;

class SubTopicController extends Controller
{
    public function index()
    {
        $subtopics = Subtopic::all();
        return view('superadmin.subtopic.index', compact('subtopics'));
    }


    public function create()
    {
        $topics = Topic::all();
        return view('superadmin.subtopic.create', compact('topics'));
    }

    public function edit(Subtopic $subtopic)
    {
        $topics = Topic::all();
        return view('superadmin.subtopic.edit', compact('subtopic', 'topics'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'name' => 'required|max:255',
            'description' => 'nullable',

        ]);

        Subtopic::create($validatedData);

        return redirect()->route('siteadmin.sub_topics.index')->with('success', 'Subtopic created successfully.');
    }

    public function update(Request $request, Subtopic $subtopic)
    {
        $validatedData = $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'name' => 'required|max:255',
        ]);

        $subtopic->update($validatedData);

        return redirect()->route('siteadmin.sub_topics.index')->with('success', 'Subtopic updated successfully.');
    }

    public function destroy(Subtopic $subtopic)
    {
        $subtopic->delete();

        return redirect()->route('siteadmin.sub_topics.index')->with('success', 'Subtopic deleted successfully.');
    }
}
