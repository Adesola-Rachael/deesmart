<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCatController;
use App\Http\Controllers\CategoryController;
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
Route::get('courses',[PagesController::class,'course'] );

// Admin pages route
Route::get('/cube/index',[AdminController::class,'adminHome'] );


Route::get('/admin_section/index',[AdminController::class,'NewAdminHome'] );

// course route
Route::get('/admin_section/courses',[CourseController::class,'adminCourse'] );
Route::get('/cube/course',[CourseController::class,'course'] );
Route::post('/course',[CourseController::class, 'CreateCourse']);
Route::get('/getCourseById/{id}',[CourseController::class, 'getcourseId']);
Route::get('/delete-course/{id}',[CourseController::class, 'deletecourse']);
Route::put('/updateCourse/{id}',[CourseController::class, 'updateCourse']);



// category route

Route::get('/admin_section/cat',[CategoryController::class,'cat'] );
Route::post('/cat',[CategoryController::class, 'Createcat']);
Route::get('/getcatById/{id}',[CourseCatController::class, 'getcatId']);
Route::put('/delete-cat/{id}',[CategoryController::class, 'TrashCategory(']);
Route::put('/updatecat{id}',[CourseCatController::class, 'updatecat']);



// course

