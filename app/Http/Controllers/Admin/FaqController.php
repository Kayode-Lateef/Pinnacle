<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;


class FaqController extends Controller
{

    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function edit($id)
    {
        $faqs = FAQ::findOrFail($id);
        return view('admin.faq.edit', compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        FAQ::create($request->all());

        return back()->with('success', 'FAQ added successfully.');
    }

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

        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully.');
    }



    public function delete($id)
    {
        $faqs = FAQ::findOrFail($id);
        $faqs->delete();

        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully.');
    }
}
