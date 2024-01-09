<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{

    public function index()
    {
        $testimonials = Testimonial::All();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }


    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial') );
    }


    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string|min:50',
            'position' => 'nullable|string|max:255',
            'author_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $testimonial = new Testimonial();
        $testimonial->author = $request->author;
        $testimonial->content = $request->content;
        $testimonial->position = $request->position;

        if ($request->hasFile('author_image')) {
            $path = $request->file('author_image')->store('testimonial_images', 'public');
            $testimonial->author_image = $path;
        }

        $testimonial->save();

        return back()->with('success', 'Testimonial added successfully.');
    }


    public function update(Request $request, $id)
    {
    $request->validate([
        'author' => 'required|string|max:255',
        'content' => 'required|string|min:50',
        'position' => 'nullable|string|max:255',
        'author_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    $testimonial = Testimonial::findOrFail($id);
    $testimonial->author = $request->author;
    $testimonial->content = $request->content;
    $testimonial->position = $request->position;

    if ($request->hasFile('author_image')) {
        $path = $request->file('author_image')->store('testimonial_images', 'public');
        $testimonial->author_image = $path;
    }

    $testimonial->save();

    return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully.');
    }




    public function delete($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        $testimonials->delete();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial deleted successfully.');
    }
}
