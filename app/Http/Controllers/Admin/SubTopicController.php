<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\Subtopic;

class SubTopicController extends Controller
{
    public function index()
    {
        $subtopics = Subtopic::all();
        return view('admin.subtopic.index', compact('subtopics'));
    }


    public function create()
    {
        $topics = Topic::all();
        return view('admin.subtopic.create', compact('topics'));
    }

    public function edit(Subtopic $subtopic)
    {
        $topics = Topic::all();
        return view('admin.subtopic.edit', compact('subtopic', 'topics'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'name' => 'required|max:255',
            'description' => 'nullable',

        ]);

        Subtopic::create($validatedData);

        return redirect()->route('admin.sub_topics.index')->with('success', 'Subtopic created successfully.');
    }

    public function update(Request $request, Subtopic $subtopic)
    {
        $validatedData = $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'name' => 'required|max:255',
        ]);

        $subtopic->update($validatedData);

        return redirect()->route('admin.sub_topics.index')->with('success', 'Subtopic updated successfully.');
    }

    public function destroy(Subtopic $subtopic)
    {
        $subtopic->delete();

        return redirect()->route('admin.sub_topics.index')->with('success', 'Subtopic deleted successfully.');
    }
}
