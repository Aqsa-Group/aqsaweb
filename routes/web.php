<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminDashboardController;
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


    Route::get('/privacy-policy',function () {
    return view('privacy-policy'); })
    -> name('priviciy');


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







// Management Panel

Route::prefix('logistic-dashboard')->name('logistic.')->group(function () {
    Route::get('/', function () {
        return view('LogisticAdminDashboard.pages.dashboard');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return redirect()->route('logistic.dashboard');
    })->name('home');

    Route::post('/logout', function () {
        return redirect()->route('logistic.dashboard');
    })->name('logout');

    Route::get('/{section}/{page}', function (string $section, string $page) {
        $modules = [
            'hr.staff-profiles' => ['title' => 'Staff Profiles', 'section' => 'HR Management'],
            'hr.attendance-leave' => ['title' => 'Attendance & Leave', 'section' => 'HR Management'],
            'hr.payroll' => ['title' => 'Payroll', 'section' => 'HR Management'],
            'finance.sales-invoices' => ['title' => 'Sales Invoices', 'section' => 'Finance'],
            'finance.purchase-invoices' => ['title' => 'Purchase Invoices', 'section' => 'Finance'],
            'finance.expenses' => ['title' => 'Expenses', 'section' => 'Finance'],
            'finance.payments' => ['title' => 'Payments', 'section' => 'Finance'],
            'ict.projects' => ['title' => 'Projects', 'section' => 'ICT'],
            'ict.tasks' => ['title' => 'Tasks', 'section' => 'ICT'],
            'ict.time-tracking' => ['title' => 'Time Tracking', 'section' => 'ICT'],
            'ict.infrastructure' => ['title' => 'Infrastructure', 'section' => 'ICT'],
            'logistic.contracts' => ['title' => 'Contracts', 'section' => 'Logistic'],
            'logistic.vehicles' => ['title' => 'Vehicles', 'section' => 'Logistic'],
            'logistic.fuel' => ['title' => 'Fuel', 'section' => 'Logistic'],
            'clients.clients' => ['title' => 'Clients', 'section' => 'Clients / NGO'],
            'clients.client-interaction' => ['title' => 'Client Interaction', 'section' => 'Clients / NGO'],
            'accounting.journal-entries' => ['title' => 'Journal Entries', 'section' => 'Accounting'],
            'accounting.general-ledger' => ['title' => 'General Ledger', 'section' => 'Accounting'],
            'crm.contacts' => ['title' => 'Contacts', 'section' => 'CRM'],
            'crm.vendors' => ['title' => 'Vendors', 'section' => 'CRM'],
            'crm.tickets' => ['title' => 'Tickets', 'section' => 'CRM'],
            'crm.customer-interaction' => ['title' => 'Customer Interaction', 'section' => 'CRM'],
            'reports.finance' => ['title' => 'Finance Reports', 'section' => 'Reports'],
            'reports.logistic' => ['title' => 'Logistic Reports', 'section' => 'Reports'],
            'reports.audit' => ['title' => 'Audit Reports', 'section' => 'Reports'],
            'support.support-tickets' => ['title' => 'Support Tickets', 'section' => 'Support'],
            'setting.roles-permissions' => ['title' => 'Roles & Permissions', 'section' => 'Setting'],
            'setting.audit-log' => ['title' => 'Audit Log', 'section' => 'Setting'],
            'setting.system-colors' => ['title' => 'System Colors', 'section' => 'Setting'],
        ];

        $key = $section.'.'.$page;

        abort_unless(isset($modules[$key]), 404);

        return view('LogisticAdminDashboard.pages.module', [
            'module' => $modules[$key],
        ]);
    })->name('module');
});

Route::prefix('admin-dashboard')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('home');
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/{section}/{page}', [AdminDashboardController::class, 'module'])->name('module');
});


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

    // تبدیل ___ به /
    $path = str_replace('___', '/', $path);

    // اگر اشتباها storage/ ذخیره شده باشه
    $path = str_replace(['storage/', '/storage/'], '', $path);

    $fullPath = storage_path('app/public/' . $path);

    abort_if(!file_exists($fullPath), 404, 'File not found');

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

    // بقیه دانلود
    return response()->download($fullPath);
})->name('employee.report.file');




Route::get('/userinformation', function () {
    return view('userinformation');
})-> name('userinformation');; 
