<?php

namespace App\Http\Controllers;

use App\Models\LearningOutcome;
use App\Models\Testimonial;
use App\Models\Subject;
use App\Models\Topic;
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
        $mathematics = Subject::where('name', 'Mathematics')->first();
        $english = Subject::where('name', 'English')->first();
        // $subjects = Subject::all();
        return view('frontend.subjects', compact('mathematics', 'english'));
    }

    public function mathematics()
    {
        // Fetch the Mathematics subject
         $mathematics = Subject::where('name', 'Mathematics')->first();
         $mathematicsOutcomes = $mathematics ? $mathematics->learningOutcomes : collect();

        // Fetch the Mathematics subject
        $mathematicsSubject = Subject::with('topics')->where('name', 'Mathematics')->first();
        // If the subject exists, fetch its topics
        $mathematicsTopics = $mathematicsSubject ? $mathematicsSubject->topics : collect();

        $topics = Topic::with('subtopics')->get();

        return view('frontend.mathematics', compact('mathematics', 'mathematicsOutcomes', 'mathematicsTopics', 'topics'));
    }

    public function english()
    {
         // Fetch the Mathematics subject
         $english = Subject::where('name', 'English')->first();
         $englishOutcomes = $english ? $english->learningOutcomes : collect();

        // Fetch the Mathematics subject
        $englishSubject = Subject::with('topics')->where('name', 'English')->first();
        // If the subject exists, fetch its topics
        $englishTopics = $englishSubject ? $englishSubject->topics : collect();

        $topics = Topic::with('subtopics')->get();

        return view('frontend.english', compact('english', 'englishOutcomes', 'englishTopics', 'topics'));
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

    public function blog()
    {
      return view('frontend.blog');
    }

    public function blogSingle()
    {
      return view('frontend.blog-single');
    }

    public function contact()
    {
      return view('frontend.contact');
    }

    public function terms()
    {
      return view('frontend.terms');
    }

    public function privacy()
    {
      return view('frontend.privacy');
    }
}
