<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribersController;

Route::view('/', 'home');
Route::view('blog-details/', 'blog-details');
Route::view('blogs/', 'blogs');
Route::view('contact-us/', 'contact');
Route::view('success-story/', 'success-story');

// Define the newsletter subscription routes

Route::post('subscribe', [SubscribersController::class, 'sendEmail'])->name('subscribe');