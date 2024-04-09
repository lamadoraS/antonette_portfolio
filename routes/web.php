<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('profiles',ProfileController::class);

Route::resource('skills',SkillController::class);

Route::resource('education',EducationalController::class);

Route::resource('experiences',ExperienceController::class);

Route::resource('webinars',WebinarController::class);

Route::resource('blogs',BlogController::class);

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('users');

Route::resource('users', UserController::class); 

Route::resource('contacts', ContactController::class); 





