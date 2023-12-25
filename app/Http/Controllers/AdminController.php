<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->check() && auth()->user()->role !== 'admin') {
                return redirect('/'); // Or to a 'not authorized' page
            }
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user(); // Retrieve the currently authenticated user
        return view('admin.editProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:1000',
            'photo' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:1000',
        ]);

        $user = Auth::user();

        // Handle the photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($user->photo) {
                Storage::delete('public/' . $user->photo);
            }

            $path = $request->file('photo')->store('admin_images', 'public');
            $user->photo = $path;
        }

        // Update other user attributes
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->bio = $request->bio;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function updatePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check if the current password is correct
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Your old password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Your password has been updated.');
    }


    public function english()
    {
        return view('admin.english');
    }

    public function mathematics()
    {
        return view('admin.mathematics');
    }

    public function testimonials()
    {
        return view('admin.testimonials');
    }

    public function storeTestimonial(Request $request)
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


    public function destroy(User $user)
    {
    // Optional: Check if the authenticated user can delete this account
    // if (Auth::user()->cannot('delete', $user)) {
    //     return back()->with('error', 'Unauthorized action.');
    // }

    // Delete the user
    $user->delete();

    // Redirect with a success message
    return redirect()->route('home')->with('success', 'Account deleted successfully.');
    }


    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    // public function FormSubmit(Request $request)
    // {
    //     return view('form-repeater');
    // }

    public function ui()
    {
        return view('admin.ui-toasts');
    }
}
