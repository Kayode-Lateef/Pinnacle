<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculum = Curriculum::all();
        return view('superadmin.curriculum.index', compact('curriculum'));
    }

    public function create()
    {
        return view('superadmin.curriculum.create');
    }

    public function edit($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        return view('superadmin.curriculum.edit', compact('curriculum') );
    }

    public function update(Request $request, $id)
    {
        $curriculum = Curriculum::findOrFail($id);

        $request->validate([
            'tutor_name' => 'required|string|max:255',
            'subject' => 'required|in:mathematics,english',
            'unit_name' => 'required|string',
            'topic_name' => 'required|string',
            'description' => 'required|string',
            'tutor_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'learning_outcomes' => 'string',
        ]);

        $outcomesArray = [];
        $outcomes = array_values($request->learning_outcomes);
        foreach ($outcomes as $key => $value) {
            $outcomesArray[] = $value['learning_outcomes'];

         }

         $request->merge(['learning_outcomes' => $outcomesArray]);

          // Handle file upload for tutor_image, if provided
          $tutorImage = null;
          if ($request->hasFile('tutor_image')) {
              $tutorImage = $request->file('tutor_image')->store('tutor_images', 'public');
          }


        // Create new curriculum instance
        $curriculum = new Curriculum([
            'tutor_name' => $request->tutor_name,
            'subject' => $request->subject,
            'unit_name' => $request->unit_name,
            'topic_name' => $request->topic_name,
            'description' => $request->description,
            'learning_outcomes' => json_encode($outcomesArray),
            'tutor_image' => $tutorImage,
        ]);
        $curriculum->save();


        return redirect()->route('siteadmin.curriculum.index')->with('success', 'Curriculum updated successfully');
    }


    


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tutor_name' => 'required|string|max:255',
            'subject' => 'required|in:mathematics,english',
            'unit_name' => 'required|string',
            'topic_name' => 'required|string',
            'description' => 'required|string',
            'tutor_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'learning_outcomes' => 'string',
        ]);

        $outcomesArray = [];
        $outcomes = array_values($request->learning_outcomes);
        foreach ($outcomes as $key => $value) {
            $outcomesArray[] = $value['learning_outcomes'];

         }

         $request->merge(['learning_outcomes' => $outcomesArray]);


        // Handle file upload for tutor_image, if provided
        $tutorImage = null;
        if ($request->hasFile('tutor_image')) {
            $tutorImage = $request->file('tutor_image')->store('tutor_images', 'public');
        }

        // Create curriculum instance
        $curriculum = new Curriculum([
            'tutor_name' => $request->tutor_name,
            'subject' => $request->subject,
            'unit_name' => $request->unit_name,
            'topic_name' => $request->topic_name,
            'description' => $request->description,
            'learning_outcomes' => json_encode($outcomesArray),
            'tutor_image' => $tutorImage,
        ]);
        $curriculum->save();

        return redirect()->route('siteadmin.curriculum.index')->with('success', 'Curriculum added successfully.');
    }



    public function delete($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        $curriculum->delete();

        return redirect()->route('siteadmin.curriculum.index')->with('success', 'Curriculum deleted successfully.');
    }


}




