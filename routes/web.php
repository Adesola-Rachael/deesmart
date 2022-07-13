<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegEventController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PageUrlController;
use App\Mail\ContactEmail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cube/index', function () {
    return view('/cube/index');
})->middleware(['auth'])->name('index');

require __DIR__.'/auth.php';

// main page route
Route::get('/index',[PagesController::class,'home'] );
Route::get('/contact',[PagesController::class,'contact'] );
Route::get('/about',[PagesController::class,'about'] );
// Route::get('courses',[PagesController::class,'course'] );
Route::get('/book',[PagesController::class,'books'] );
Route::get('book_details/{id}',[PagesController::class,'details'] );
Route::get('details/{book_id}',[PagesController::class,'details'] );


Route::get('/event',[PagesController::class,'getEvent'] ); 

Route::get('skill_details/{id}',[PagesController::class,'skillDetails'] );
// Route::get('/high_income_skill',[PagesController::class,'skillbook'] );


// contact_formcontact_form
Route::post('/contact_form',[ContactController::class,'sendContact'] );
Route::post('/attendEvent',[RegEventController::class,'attendEvent'] );





// Admin pages route
Route::get('/cube/index',[AdminController::class,'adminHome'] );


Route::get('/admin_section/index',[AdminController::class,'NewAdminHome'] );

// // course route
// Route::get('/admin_section/courses',[CourseController::class,'adminCourse'] );
// Route::get('/cube/course',[CourseController::class,'course'] );
// Route::post('/course',[CourseController::class, 'CreateCourse']);
// Route::get('/getCourseById/{id}',[CourseController::class, 'getcourseId']);
// Route::get('/delete-course/{id}',[CourseController::class, 'deletecourse']);
// Route::put('/updateCourse/{id}',[CourseController::class, 'updateCourse']);



// ORIGINAL
// category route

Route::get('/admin_section/cat',[CategoryController::class,'cat'] );
Route::post('/cat',[CategoryController::class, 'Createcat']);
Route::get('/getcatById/{id}',[CategoryController::class, 'getcatId']);
Route::put('/delete-cat/{id}',[CategoryController::class, 'TrashCategory(']);
// Route::put('/updatecat{id}',[CourseCatController::class, 'updatecat']);


// book
Route::get('/admin_section/books',[BookController::class,'adminCourse'] );
//  Route::get('/cube/course',[BookController::class,'course'] );
 Route::post('/course',[BookController::class, 'CreateCourse']);
Route::get('/getBookById/{id}',[BookController::class, 'getbookId']);
// Route::get('/delete-course/{id}',[CourseController::class, 'deletecourse']);
// Route::put('/updateCourse/{id}',[CourseController::class, 'updateCourse']);

// event
Route::get('/admin_section/manage_event',[EventController::class,'getManageEvent'] );
 Route::post('/event',[EventController::class, 'createEvent']);
// Route::get('/getcatById/{id}',[CategoryController::class, 'getcatId']);
// Route::put('/delete-cat/{id}',[CategoryController::class, 'TrashCategory(']);
// Route::put('/updatecat{id}',[CourseCatController::class, 'updatecat']);

// advert

Route::get('/admin_section/manage_advert',[AdvertController::class,'getManageAdvert'] );
 Route::post('/advert',[AdvertController::class, 'createAdvert']);
// Route::get('/getcatById/{id}',[CategoryController::class, 'getcatId']);
// Route::put('/delete-cat/{id}',[CategoryController::class, 'TrashCategory(']);
// Route::put('/updatecat{id}',[CourseCatController::class, 'updatecat']);


// testimonial

Route::get('/admin_section/manage_testimonial',[TestimonialController::class,'getManageTestimonial'] );
 Route::post('/testimonial',[TestimonialController::class, 'createTestimonial']);
// Route::get('/getcatById/{id}',[CategoryController::class, 'getcatId']);
// Route::put('/delete-cat/{id}',[CategoryController::class, 'TrashCategory(']);
// Route::put('/updatecat{id}',[CourseCatController::class, 'updatecat']);

// page_url

Route::get('/admin_section/manage_page_url',[PageUrlController::class,'getManagePageUrl'] );
 Route::post('/pageurl',[PageUrlController::class, 'createPageUrl']);
// Route::get('/getcatById/{id}',[CategoryController::class, 'getcatId']);
// Route::put('/delete-cat/{id}',[CategoryController::class, 'TrashCategory(']);
// Route::put('/updatecat{id}',[CourseCatController::class, 'updatecat']);


// Email

Route::get('send-email', [SendEmailController::class, 'index']);

Route::post('new-email', [SendEmailController::class, 'downloadEmail']);


Route::get('senda-email', function(){
    $mail = [
        "name" => "Test NAME",
        "dob" => "12/12/1990"
    ];

    Mail::to("gtreasure162@gmail.com")->send(new ContactEmail($mail));

    dd("Mail Sent Successfully!");
});

// Route::get('new-email', function () {
// $download = [
// 'title' => 'Mail from ItSolutionStuff.com',
// 'body' => 'This is for testing email using smtp'
// ];
// \Mail::to('gtreasure162@gmail.com')->send(new \App\Mail\download($download));
// dd("Email is Sent.");
// });


// MAIL_MAILER=smtp
// MAIL_HOST=smtp.gmail.com
// MAIL_PORT=587
// MAIL_USERNAME="vic650283@gmail.com"
// MAIL_PASSWORD="08163590610"
// MAIL_ENCRYPTION=tls
// # MAIL_FROM_ADDRESS="hello@example.com"
// # MAIL_FROM_NAME="${APP_NAME}"



Route::get('/search',[PagesController::class,'searchBook'] ); 

Route::get('/book_text',[PagesController::class,'bookText'] ); 
