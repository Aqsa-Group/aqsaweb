<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementPanel\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
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

Route::get('/advertisement', function () {
    return view('web.advertisement');
})-> name('advertisement');;


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

Route::get('/pageContactUs', function () {
    return view('web.pageContactUs');
})-> name('pageContactUs');

Route::get('/user&roles', function () {
    return view('web.user&roles');
})-> name('user&roles');

// Advertisement Routes
Route::get('/ads/create', [AdController::class, 'create'])->name('ads.create');
Route::post('/ads', [AdController::class, 'store'])->name('ads.store');

// // Admin save/update
// Route::post('/admin/home', [HomeController::class, 'store'])->name('home.store');

// // Frontend show
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
// Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/', [HomeController::class, 'index'])->name('home'); // show
Route::post('/', [HomeController::class, 'store'])->name('home.store'); // save







// Management Panel


Route::get('/management', [AuthController::class, 'showLoginForm'])->name('management.login.form');

Route::post('/management/login', [AuthController::class, 'login'])->name('management.login');

Route::post('/management/logout', [AuthController::class, 'logout'])->name('management.logout');




// Pages   

// Dashboard
Route::get('/management/dashboard', function () {
    if (!Auth::guard('management')->check()) {
        return redirect()->route('management.login.form');
    }
    return view('Management.components.dashboard');
})->name('management.home');



// users
Route::get('/management/users', function () {
    if (!Auth::guard('management')->check()) {
        return redirect()->route('management.login.form');
    }
    return view('Management.components.user');
})->name('management.user');



// departments
Route::get('/management/departments', function () {
    if (!Auth::guard('management')->check()) {
        return redirect()->route('management.login.form');
    }
    return view('Management.components.departments');
})->name('management.departments');


// employees
Route::get('/management/employee', function () {
    if (!Auth::guard('management')->check()) {
        return redirect()->route('management.login.form');
    }
    return view('Management.components.employees');
})->name('management.employees');


// Withdraws
Route::get('/management/withdraw', function () {
    if (!Auth::guard('management')->check()) {
        return redirect()->route('management.login.form');
    }
    return view('Management.components.withdraws');
})->name('management.withdraws');



// Employee_reports
Route::get('/management/employee_reports', function () {
    if (!Auth::guard('management')->check()) {
        return redirect()->route('management.login.form');
    }
    return view('Management.components.employee_reports');
})->name('management.employee_reports');



// web.php
Route::get('/employee-report-file/{path}', function ($path) {
    $path = str_replace('___', '/', $path);
    $fullPath = storage_path('app/' . $path);

    abort_if(!file_exists($fullPath), 404);

    $mime = mime_content_type($fullPath);

    // فایل‌هایی که تو مرورگر باز میشن
    $inlineMimes = [
        'application/pdf',
        'image/png',
        'image/jpeg',
        'image/webp',
        'text/plain',
    ];

    if (in_array($mime, $inlineMimes)) {
        return response()->file($fullPath);
    }

    // بقیه دانلود بشن
    return response()->download($fullPath);
})->name('employee.report.file');
















