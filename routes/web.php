<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BookingController;
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
Route::get('/booking',[BookingController::class,'index'])->name('booking');
Route::post('booking',[BookingController::class,'check'])->name('booking');
Route::post('booking_cont',[BookingController::class,'store'])->name('booking_cont');