<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Models\Curriculum;
use App\Models\FAQ;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::all();
        return view('frontend.index', compact('testimonials'));
    }

    public function about()
    {
      return view('frontend.about');
    }

    public function subjects()
    {
      return view('frontend.subjects');
    }

    public function mathematics()
    {
        $curriculum = Curriculum::all();
        return view('frontend.mathematics', compact('curriculum'));
    }

    public function english()
    {
        $curriculum = Curriculum::all();
        return view('frontend.english', compact('curriculum'));
    }

    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('frontend.testimonial', compact('testimonials'));
    }

    public function faq()
    {
        $faqs = FAQ::all();
        return view('frontend.faq', compact('faqs'));
    }

    public function bookAssessment()
    {
      return view('frontend.book-assessment');
    }

    public function contact()
    {
      return view('frontend.contact');
    }
}
