<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    // Start Method
    public function index()
    {
        $faqs = Faq::all();
        return view('superadmin.faq.index', compact('faqs'));
    }
    // End Method

    // Start Method
    public function create()
    {
        return view('superadmin.faq.create');
    }
    // End Method

    // Start Method
    public function edit($id)
    {
        $faqs = FAQ::findOrFail($id);
        return view('superadmin.faq.edit', compact('faqs'));
    }
    // End Method

    // Start Method
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        FAQ::create($request->all());

        return back()->with('success', 'FAQ added successfully.');
    }
    // End Method

    // Start Method
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faqs = Faq::findOrFail($id);
        $faqs->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('siteadmin.faq.index')->with('success', 'FAQ updated successfully.');
    }
    // End Method



    // Start Method
    public function delete($id)
    {
        $faqs = FAQ::findOrFail($id);
        $faqs->delete();

        return redirect()->route('siteadmin.faq.index')->with('success', 'FAQ deleted successfully.');
    }
    // End Method
}
