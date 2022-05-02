<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\FeedbackController;
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
    return view('home');
})->name('home');

Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/faq',[QuestionController::class,'index'])->name('FAQ');
Route::post('questions',[QuestionController::class,'store'])->name('questions');
Route::get('/feedbacks',[FeedbackController::class,'index'])->name('feedbacks');
Route::post('feedbacks',[FeedbackController::class,'store'])->name('feedbacks');
