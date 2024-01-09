<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        return view('superadmin.subject.index', compact('subjects'));
    }


    public function create()
    {
        return view('superadmin.subject.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        $subject = new Subject($validatedData);

        if ($request->hasFile('cover_image')) {
            $subject->cover_image = $request->file('cover_image')->store('subject_cover_images', 'public');
        }

     

        $subject->save();

        return redirect()->route('siteadmin.subjects.index')->with('success', 'Subject created successfully.');
    }



    public function edit(Subject $subject)
    {
        return view('superadmin.subject.edit', compact('subject'));
    }


    public function update(Request $request, Subject $subject)
    {
        $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'nullable',
        'cover_image' => 'nullable|image|max:2048', // Validate file upload
        ]);

    if ($request->hasFile('cover_image')) {
        // Delete the old cover image if exists
        Storage::disk('public')->delete($subject->cover_image);

        // Store the new cover image
        $validatedData['cover_image'] = $request->file('cover_image')->store('subject_cover_images', 'public');
    }

    $subject->update($validatedData);
        return redirect()->route('siteadmin.subjects.index')->with('success', 'Subject updated successfully.');
    }


    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('siteadmin.subjects.index')->with('success', 'Subject deleted successfully.');
    }
}
