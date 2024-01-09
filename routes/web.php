<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\SubjectController as AdminSubjectController;
use App\Http\Controllers\Admin\LearningOutcomeController as AdminLearningOutcomeController;
use App\Http\Controllers\Admin\TopicController as AdminTopicController;
use App\Http\Controllers\Admin\SubTopicController as AdminSubTopicController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;


use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\LearningOutcomeController;

use App\Http\Controllers\SubTopicController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TopicController;
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
Route::get('/blog', [FrontPageController::class, 'blog'])->name('blog');
Route::get('/blog/single', [FrontPageController::class, 'blogSingle'])->name('blog-single');
Route::get('/contact-us', [FrontPageController::class, 'contact'])->name('contact');
Route::get('/subjects/mathematics', [FrontPageController::class, 'mathematics'])->name('mathematics');
Route::get('/subjects/english', [FrontPageController::class, 'english'])->name('english');
Route::get('/privacy-and-policy', [FrontPageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [FrontPageController::class, 'terms'])->name('terms');




Auth::routes();


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::get('/profile/edit', [AdminController::class, 'editProfile'])->name('admin.editProfile');

    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');

    Route::post('/password/update', [AdminController::class, 'updatePassword'])->name('admin.password.update');



    // List of subjects
    Route::get('/subjects', [AdminSubjectController::class, 'index'])->name('admin.subjects.index');
    Route::get('/subjects/create', [AdminSubjectController::class, 'create'])->name('admin.subjects.create');
    Route::post('/subjects', [AdminSubjectController::class, 'store'])->name('admin.subjects.store');
    Route::get('/subjects/{subject}/edit', [AdminSubjectController::class, 'edit'])->name('admin.subjects.edit');
    Route::put('/subjects/{subject}', [AdminSubjectController::class, 'update'])->name('admin.subjects.update');
    Route::delete('/subjects/{subject}', [AdminSubjectController::class, 'destroy'])->name('admin.subjects.destroy');


    // Learning Outcomes
    Route::get('/learning_outcomes', [AdminLearningOutcomeController::class, 'index'])->name('admin.learning_outcomes.index');
    Route::get('/learning_outcomes/create', [AdminLearningOutcomeController::class, 'create'])->name('admin.learning_outcomes.create');
    Route::post('/learning_outcomes', [AdminLearningOutcomeController::class, 'store'])->name('admin.learning_outcomes.store');
    Route::get('/learning_outcomes/{learning_outcome}/edit', [AdminLearningOutcomeController::class, 'edit'])->name('admin.learning_outcomes.edit');
    Route::put('/learning_outcomes/{learning_outcome}', [AdminLearningOutcomeController::class, 'update'])->name('admin.learning_outcomes.update');
    Route::delete('/learning_outcomes/{learning_outcome}', [AdminLearningOutcomeController::class, 'destroy'])->name('admin.learning_outcomes.destroy');


    // Topics
    Route::get('/topics', [AdminTopicController::class, 'index'])->name('admin.topics.index');
    Route::get('/topics/create', [AdminTopicController::class, 'create'])->name('admin.topics.create');
    Route::post('/topics', [AdminTopicController::class, 'store'])->name('admin.topics.store');
    Route::get('/topics/{topic}/edit', [AdminTopicController::class, 'edit'])->name('admin.topics.edit');
    Route::put('/topics/{topic}', [AdminTopicController::class, 'update'])->name('admin.topics.update');
    Route::delete('/topics/{topic}', [AdminTopicController::class, 'destroy'])->name('admin.topics.destroy');

    // Sub Topics
    Route::get('/sub_topics', [AdminSubTopicController::class, 'index'])->name('admin.sub_topics.index');
    Route::get('/sub_topics/create', [AdminSubTopicController::class, 'create'])->name('admin.sub_topics.create');
    Route::post('/sub_topics', [AdminSubTopicController::class, 'store'])->name('admin.sub_topics.store');
    Route::get('/sub_topics/{subtopic}/edit', [AdminSubTopicController::class, 'edit'])->name('admin.sub_topics.edit');
    Route::put('/sub_topics/{subtopic}', [AdminSubTopicController::class, 'update'])->name('admin.sub_topics.update');
    Route::delete('/sub_topics/{subtopic}', [AdminSubTopicController::class, 'destroy'])->name('admin.sub_topics.destroy');


    // Testimonial
    Route::get('/testimonial', [AdminTestimonialController::class, 'index'])->name('admin.testimonial.index');
    Route::get('/testimonial/create', [AdminTestimonialController::class, 'create'])->name('admin.testimonial.create');
    Route::post('/testimonial', [AdminTestimonialController::class, 'store'])->name('admin.testimonial.store');
    Route::get('/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin.testimonial.edit');
    Route::put('/testimonial/{id}', [AdminTestimonialController::class, 'update'])->name('admin.testimonial.update');
    Route::delete('/testimonial/{id}', [AdminTestimonialController::class, 'delete'])->name('admin.testimonial.delete');

    // FAQ
    Route::get('/faq', [AdminFaqController::class, 'index'])->name('admin.faq.index');
    Route::get('/faq/create', [AdminFaqController::class, 'create'])->name('admin.faq.create');
    Route::post('/faq', [AdminFaqController::class, 'store'])->name('admin.faq.store');
    Route::get('/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin.faq.edit');
    Route::put('/faq/{id}', [AdminFaqController::class, 'update'])->name('admin.faq.update');
    Route::delete('/faq/{id}', [AdminFaqController::class, 'delete'])->name('admin.faq.delete');









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

    // List of Users
    Route::get('/user/lists', [SuperAdminController::class, 'showUserList'])->name('siteadmin.users.list');
    Route::get('/add/user', [SuperAdminController::class, 'addUser'])->name('siteadmin.adduser');
    Route::post('/store/user', [SuperAdminController::class, 'storeUser'])->name('siteadmin.storeUser');
    Route::get('/edit/user/{user}', [SuperAdminController::class, 'editUser'])->name('siteadmin.editUser');
    Route::put('/update/user/{user}', [SuperAdminController::class, 'updateUser'])->name('siteadmin.updateUser');
    Route::delete('/delete/user/{user}', [SuperAdminController::class, 'deleteUser'])->name('siteadmin.deleteUser');



    // List of subjects
    Route::get('/subjects', [SubjectController::class, 'index'])->name('siteadmin.subjects.index');
    Route::get('/subjects/create', [SubjectController::class, 'create'])->name('siteadmin.subjects.create');
    Route::post('/subjects', [SubjectController::class, 'store'])->name('siteadmin.subjects.store');
    Route::get('/subjects/{subject}/edit', [SubjectController::class, 'edit'])->name('siteadmin.subjects.edit');
    Route::put('/subjects/{subject}', [SubjectController::class, 'update'])->name('siteadmin.subjects.update');
    Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->name('siteadmin.subjects.destroy');


    // Learning Outcomes
    Route::get('/learning_outcomes', [LearningOutcomeController::class, 'index'])->name('siteadmin.learning_outcomes.index');
    Route::get('/learning_outcomes/create', [LearningOutcomeController::class, 'create'])->name('siteadmin.learning_outcomes.create');
    Route::post('/learning_outcomes', [LearningOutcomeController::class, 'store'])->name('siteadmin.learning_outcomes.store');
    Route::get('/learning_outcomes/{learning_outcome}/edit', [LearningOutcomeController::class, 'edit'])->name('siteadmin.learning_outcomes.edit');
    Route::put('/learning_outcomes/{learning_outcome}', [LearningOutcomeController::class, 'update'])->name('siteadmin.learning_outcomes.update');
    Route::delete('/learning_outcomes/{learning_outcome}', [LearningOutcomeController::class, 'destroy'])->name('siteadmin.learning_outcomes.destroy');


    // Topics
    Route::get('/topics', [TopicController::class, 'index'])->name('siteadmin.topics.index');
    Route::get('/topics/create', [TopicController::class, 'create'])->name('siteadmin.topics.create');
    Route::post('/topics', [TopicController::class, 'store'])->name('siteadmin.topics.store');
    Route::get('/topics/{topic}/edit', [TopicController::class, 'edit'])->name('siteadmin.topics.edit');
    Route::put('/topics/{topic}', [TopicController::class, 'update'])->name('siteadmin.topics.update');
    Route::delete('/topics/{topic}', [TopicController::class, 'destroy'])->name('siteadmin.topics.destroy');

    // Sub Topics
    Route::get('/sub_topics', [SubTopicController::class, 'index'])->name('siteadmin.sub_topics.index');
    Route::get('/sub_topics/create', [SubTopicController::class, 'create'])->name('siteadmin.sub_topics.create');
    Route::post('/sub_topics', [SubTopicController::class, 'store'])->name('siteadmin.sub_topics.store');
    Route::get('/sub_topics/{subtopic}/edit', [SubTopicController::class, 'edit'])->name('siteadmin.sub_topics.edit');
    Route::put('/sub_topics/{subtopic}', [SubTopicController::class, 'update'])->name('siteadmin.sub_topics.update');
    Route::delete('/sub_topics/{subtopic}', [SubTopicController::class, 'destroy'])->name('siteadmin.sub_topics.destroy');



    // Testimonial
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('siteadmin.testimonial.index');
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('siteadmin.testimonial.create');
    Route::post('/testimonial', [TestimonialController::class, 'store'])->name('siteadmin.testimonial.store');
    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('siteadmin.testimonial.edit');
    Route::put('/testimonial/{id}', [TestimonialController::class, 'update'])->name('siteadmin.testimonial.update');
    Route::delete('/testimonial/{id}', [TestimonialController::class, 'delete'])->name('siteadmin.testimonial.delete');

    // FAQ
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
