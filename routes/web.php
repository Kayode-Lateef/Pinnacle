<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// FrontPage route
Route::get('/', [FrontPageController::class, 'home'])->name('home');
Route::get('/about-us', [FrontPageController::class, 'about'])->name('about');
Route::get('/subjects', [FrontPageController::class, 'subjects'])->name('subjects');
Route::get('/testimonial', [FrontPageController::class, 'testimonial'])->name('testimonial');
Route::get('/faq', [FrontPageController::class, 'faq'])->name('faq');
Route::get('/book-assessment', [FrontPageController::class, 'bookAssessment'])->name('book-assessment');
Route::get('/contact-us', [FrontPageController::class, 'contact'])->name('contact');
Route::get('/subjects/mathematics', [FrontPageController::class, 'mathematics'])->name('mathematics');
Route::get('/subjects/english', [FrontPageController::class, 'english'])->name('english');



Auth::routes();


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::get('/profile/edit', [AdminController::class, 'editProfile'])->name('admin.editProfile');

    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');

    Route::post('/password/update', [AdminController::class, 'updatePassword'])->name('admin.password.update');



    Route::get('/testimonials', [AdminController::class, 'testimonials'])->name('admin.testimonials');
    Route::post('/testimonials', [AdminController::class, 'storeTestimonial'])->name('admin.testimonials.store');


    Route::get('/english', [AdminController::class, 'english'])->name('admin.english');
    Route::get('/mathematics', [AdminController::class, 'mathematics'])->name('admin.mathematics');

    Route::get('/ui-toasts', [AdminController::class, 'ui'])->name('admin.ui');

    Route::get('/{locale}', [AdminController::class, 'lang'])->name('admin.locale');


    Route::delete('/{user}/delete', [AdminController::class, 'destroy'])->name('admin.destroy');

    // Route::get('{any}', [AdminController::class, 'admin'])->where('any', '.*');
});




Route::prefix('siteadmin')->middleware(['auth', 'superadmin'])->group(function () {

    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('siteadmin.index');
    Route::get('/profile', [SuperAdminController::class, 'profile'])->name('siteadmin.profile');

    Route::get('/profile/edit', [SuperAdminController::class, 'editProfile'])->name('siteadmin.editProfile');
    Route::post('/profile/update', [SuperAdminController::class, 'updateProfile'])->name('siteadmin.updateProfile');
    Route::post('/password/update', [SuperAdminController::class, 'updatePassword'])->name('siteadmin.password.update');


    Route::get('/user/lists', [SuperAdminController::class, 'showUserList'])->name('siteadmin.users.list');
    Route::get('/add/user', [SuperAdminController::class, 'addUser'])->name('siteadmin.adduser');
    Route::post('/store/user', [SuperAdminController::class, 'storeUser'])->name('siteadmin.storeUser');


    
    Route::get('/curriculum', [CurriculumController::class, 'index'])->name('siteadmin.curriculum.index');
    Route::get('/curriculum/create', [CurriculumController::class, 'create'])->name('siteadmin.curriculum.create');
    Route::post('/curriculum', [CurriculumController::class, 'store'])->name('siteadmin.curriculum.store');
    Route::get('/curriculum/edit/{id}', [CurriculumController::class, 'edit'])->name('siteadmin.curriculum.edit');
    Route::put('/curriculum/{id}', [CurriculumController::class, 'update'])->name('siteadmin.curriculum.update');
    Route::delete('/curriculum/{id}', [CurriculumController::class, 'delete'])->name('siteadmin.curriculum.delete');


    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('siteadmin.testimonial.index');
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('siteadmin.testimonial.create');
    Route::post('/testimonial', [TestimonialController::class, 'store'])->name('siteadmin.testimonial.store');
    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('siteadmin.testimonial.edit');
    Route::put('/testimonial/{id}', [TestimonialController::class, 'update'])->name('siteadmin.testimonial.update');
    Route::delete('/testimonial/{id}', [TestimonialController::class, 'delete'])->name('siteadmin.testimonial.delete');


    Route::get('/faq', [FaqController::class, 'index'])->name('siteadmin.faq.index');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('siteadmin.faq.create');
    Route::post('/faq', [FaqController::class, 'store'])->name('siteadmin.faq.store');
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('siteadmin.faq.edit');
    Route::put('/faq/{id}', [FaqController::class, 'update'])->name('siteadmin.faq.update');
    Route::delete('/faq/{id}', [FaqController::class, 'delete'])->name('siteadmin.faq.delete');



    Route::get('/english', [SuperAdminController::class, 'english'])->name('siteadmin.english');
    Route::get('/mathematics', [SuperAdminController::class, 'mathematics'])->name('siteadmin.mathematics');








    Route::get('/ui-toasts', [SuperAdminController::class, 'ui'])->name('siteadmin.ui');


    Route::get('/{locale}', [SuperAdminController::class, 'lang'])->name('siteadmin.locale');

    // Route::get('{any}', [SuperAdminController::class, 'siteadmin'])->where('any', '.*');
});









// Route::get('/siteadmin', [App\Http\Controllers\HomeController::class, 'root']);

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);

//Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
