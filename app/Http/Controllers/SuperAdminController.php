<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Topic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->check() && auth()->user()->role !== 'superadmin') {
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
    public function siteadmin(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }


    // Start Method
    public function index()
    {
        $totalUsers = User::count(); // Count total Users
        $totalsubjects = Subject::count(); // Count total Users
        $totaltopics = Topic::count(); // Count total Users


        $users = User::all(); // Fetch all users
        return view('superadmin.index', compact('users', 'totalUsers', 'totalsubjects', 'totaltopics'));
    }
    // End Method

    // Start Method
    public function profile()
    {
        $user = Auth::user();
        return view('superadmin.profile', compact('user'));
    }
    // End Method

    // Start Method
    public function editProfile()
    {
        $user = Auth::user(); // Retrieve the currently authenticated user
        return view('superadmin.editProfile', compact('user'));
    }
    // End Method


    // Start Method
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

            $path = $request->file('photo')->store('superadmin_images', 'public');
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

    public function showUserList()
    {
        $totalUsers = User::count(); // Count total Users

        $users = User::all(); // Fetch all users

        return view('superadmin.user-list', compact('users', 'totalUsers'));
    }

    public function addUser()
    {
        return view('superadmin.add-user');
    }

    public function editUser(User $user)
    {
        $users = User::all(); // Fetch all users

        return view('superadmin.edit-user', compact('user'));
    }


    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('siteadmin.users.list')->with('success', 'User added successfully.');
    }


    public function updateUser(Request $request, User $user)
    {
         // Prevent changing the role of a superadmin from the application
        if ($user->role === 'superadmin') {
            return redirect()->route('siteadmin.users.list')->with('error', 'Superadmin role cannot be changed.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|in:user,admin',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('siteadmin.users.list')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('siteadmin.users.list')->with('success', 'User deleted successfully.');
    }



    // Start Method
    public function english()
    {
        return view('superadmin.english');
    }
    // End Method


    // Start Method
    public function mathematics()
    {
        return view('superadmin.mathematics');
    }
    // End Method

    // Start Method
    public function ui()
    {
        return view('superadmin.ui-toasts');
    }
    // End Method









    // Start Method
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
    // End Method


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
}
