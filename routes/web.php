<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})-> name('home');;
Route::get('/register', function () {
    return view('forms.register'); })
    -> name('register');

Route::get('/login', function () {
    return view('forms.login'); })
    -> name('login');

Route::get('/services', function () {
    return view('services'); })
    -> name('services');

Route::get('/aboutUs', function () {
    return view('aboutUs'); })
    -> name('aboutUs');

Route::get('/blog', function () {
    return view('blog'); })
    -> name('blog');

Route::get('/contact', function () {
    return view('contact'); })
    -> name('contact');

Route::get('/register', function () {
    return view('forms.register'); })
    -> name('register');

Route::get('/virificationCode', function () {
    return view('forms.virificationCode'); })
    -> name('virificationCode');

Route::get('/forgetPassword', function () {
    return view('forms.forgetPassword'); })
    -> name('forgetPassword');

Route::get('/changePassword', function () {
    return view('forms.changePassword'); })
    -> name('changePassword');

Route::get('/webService', function () {
    return view('services.webService'); })
    -> name('webService');

Route::get('/GraphicDesign', function () {
    return view('services.GraphicDesign'); })
    -> name('GraphicDesign');

Route::get('/MobileService', function () {
    return view('services.MobileService'); })
    -> name('MobileService');

Route::get('/databaseService', function () {
    return view('services.databaseService'); })
    -> name('databaseService');

// Dashboard Routes 

Route::get('/dashboard', function () {
    return view('web.dashboard');
})-> name('dashboard');; 

Route::get('/profile', function () {
    return view('web.profile');
})-> name('profile');; 

Route::get('/pageHome', function () {
    return view('web.pageHome');
})-> name('pageHome');

Route::get('/pageAboutUs', function () {
    return view('web.pageAboutUs');
})-> name('pageAboutUs');

Route::get('/pageServies', function () {
    return view('web.pageServies');
})-> name('pageServies');

Route::get('/pageProject', function () {
    return view('web.pageProject');
})-> name('pageProject');

Route::get('/pageBlog', function () {
    return view('web.pageBlog');
})-> name('pageBlog');

Route::get('/advertisement', function () {
    return view('web.advertisement');
})-> name('advertisement');

Route::get('/pageContactUs', function () {
    return view('web.pageContactUs');
})-> name('pageContactUs');

Route::get('/user&roles', function () {
    return view('web.user&roles');
})-> name('user&roles');