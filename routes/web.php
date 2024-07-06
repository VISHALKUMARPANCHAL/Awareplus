<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\aboutcontroller;
use App\Http\Controllers\frontend\contactuscontroller;
use App\Http\Controllers\frontend\faqcontroller;
use App\Http\Controllers\frontend\feedbackcontroller;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\logincontroller;
use App\Http\Controllers\frontend\registrationcontroller;
use App\Http\Controllers\frontend\reportcontroller;
use App\Http\Controllers\logoutcontroller;
use App\Models\faq;

//                                  UserSide
Route::get('/', [homecontroller::class, 'index'])->name("home");
Route::post('/', [homecontroller::class, 'change'])->name("change");
Route::get('/feedback', [feedbackcontroller::class, 'index']);
Route::post('/feedback', [feedbackcontroller::class, 'store']);
Route::get('/report', [reportcontroller::class, 'index']);
Route::post('/report', [reportcontroller::class, 'store1']);
Route::get('/about', [aboutcontroller::class, 'index']);
Route::get('/contactus', [contactuscontroller::class, 'index']);
Route::get('/faq', [faqcontroller::class, 'index']);
Route::post('/faq', [faqcontroller::class, 'store']);
Route::get('/validate', [registrationcontroller::class, 'validate'])->name("validate");
Route::post('/validate', [registrationcontroller::class, 'validatepost'])->name("validatepost");
Route::get('/login', [logincontroller::class, 'index'])->name("login");
Route::post('/login', [logincontroller::class, 'loginstart'])->name("login_post");
Route::get('/logout', [logoutcontroller::class, 'index']);

Route::get('/registration', [registrationcontroller::class, 'index'])->name("register");
Route::get('/tandc', [registrationcontroller::class, 'tandc'])->name("tandc");
Route::post('/registration', [registrationcontroller::class, 'mail'])->name("rmail");
Route::get('/registration/varification', [registrationcontroller::class, 'varifn'])->name("varifn");
Route::post('/registration/varification', [registrationcontroller::class, 'store'])->name("varification");

Route::get('/login/forget', [logincontroller::class, 'forget'])->name("forget");
Route::post('/login/forget', [logincontroller::class, 'mail'])->name("forgetpost");
Route::get('/login/forget/otp', [logincontroller::class, 'indexotp'])->name("otp");
Route::post('/login/forget/otp', [logincontroller::class, 'otp'])->name("otppost");
Route::get('/login/forget/otp/newpas', [logincontroller::class, 'newpas'])->name("newpas");
Route::post('/login/forget/otp/newpas', [logincontroller::class, 'change'])->name("newpaspost");

//                                  AdminSide
Route::get('/Afeedback', [feedbackcontroller::class, 'Admin']);
Route::get('/Afeedback/managereport', [feedbackcontroller::class, 'manage']);
Route::get('/managereport', [reportcontroller::class, 'Admin']);
Route::get('/manageuser', [registrationcontroller::class, 'Admin']);
Route::get('/managefaq', [faqcontroller::class, 'Admin']);
// Route::post('/managefaq', [faqcontroller::class, 'Astore']);
Route::post('/answer/update/{id}', [faqcontroller::class, 'Astore'])->name('update');
