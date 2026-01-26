<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqsa Group | Management System</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/aqsa.jpg') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        accent: {
                            blue: '#3b82f6',
                            purple: '#8b5cf6',
                            green: '#10b981',
                            orange: '#f59e0b',
                            red: '#ef4444',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.3s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --accent-blue: #3b82f6;
            --accent-green: #10b981;
            --accent-orange: #f59e0b;
        }

        * {
            font-family: 'Inter', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        /* Custom scrollbar */
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .custom-scroll::-webkit-scrollbar-track {
            background: rgba(241, 245, 249, 0.3);
            border-radius: 10px;
        }

        .dark .custom-scroll::-webkit-scrollbar-track {
            background: rgba(30, 41, 59, 0.3);
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background: var(--accent-blue);
            border-radius: 10px;
        }

        /* Card styling */
        .main-card {
            background: white;
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }

        .dark .main-card {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Gradient backgrounds */
        .gradient-blue {
            background: linear-gradient(135deg, var(--accent-blue) 0%, #2563eb 100%);
        }

        .gradient-purple {
            background: linear-gradient(135deg, var(--accent-purple) 0%, #7c3aed 100%);
        }

        .gradient-green {
            background: linear-gradient(135deg, var(--accent-green) 0%, #059669 100%);
        }

        .gradient-orange {
            background: linear-gradient(135deg, var(--accent-orange) 0%, #d97706 100%);
        }

        /* Card hover effect */
        .card-hover {
            transition: all 0.2s ease;
        }

        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .dark .card-hover:hover {
            border-color: rgba(59, 130, 246, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        /* Status indicators */
        .status-indicator {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 4px;
        }

        .status-active {
            background-color: var(--accent-green);
        }

        .status-pending {
            background-color: var(--accent-orange);
        }

        .status-inactive {
            background-color: #94a3b8;
        }

        /* Progress bar */
        .progress-bar {
            height: 6px;
            border-radius: 3px;
            background: #e2e8f0;
            overflow: hidden;
        }

        .dark .progress-bar {
            background: rgba(30, 41, 59, 0.5);
        }

        .progress-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 0.3s ease;
        }

        /* Table styling */
        .table-row {
            transition: background-color 0.2s ease;
        }

        .table-row:hover {
            background: #f8fafc;
        }

        .dark .table-row:hover {
            background: rgba(59, 130, 246, 0.05);
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            .mobile-text-sm {
                font-size: 0.875rem;
            }

            .mobile-p-4 {
                padding: 1rem;
            }

            .mobile-space-y-4>*+* {
                margin-top: 1rem;
            }

            .mobile-flex-col {
                flex-direction: column;
            }

            .mobile-w-full {
                width: 100%;
            }

            .mobile-text-center {
                text-align: center;
            }

            .mobile-hide {
                display: none !important;
            }

            .mobile-show {
                display: block !important;
            }
        }

        /* Touch-friendly buttons */
        .touch-button {
            min-height: 44px;
            min-width: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Safe area for notched phones */
        .safe-top {
            padding-top: env(safe-area-inset-top);
        }

        .safe-bottom {
            padding-bottom: env(safe-area-inset-bottom);
        }

        /* Theme toggle button */
        .theme-toggle {
            position: relative;
            width: 60px;
            height: 30px;
            border-radius: 15px;
            background: #e2e8f0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dark .theme-toggle {
            background: #334155;
        }

        .theme-toggle.active {
            background: var(--accent-blue);
        }

        .theme-toggle-slider {
            position: absolute;
            left: 3px;
            top: 3px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .theme-toggle.active .theme-toggle-slider {
            transform: translateX(30px);
        }

        .sun-icon,
        .moon-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
        }

        .sun-icon {
            left: 8px;
            color: #f59e0b;
        }

        .moon-icon {
            right: 8px;
            color: #cbd5e1;
        }

        .dark .sun-icon {
            color: #fbbf24;
        }

        .dark .moon-icon {
            color: #60a5fa;
        }
    </style>
</head>

@php
$usercount =\App\Models\Management\User::count();
$departmentcount =\App\Models\Management\Department::count();
$employeecount =\App\Models\Management\Employee::count();


$currentUser = Auth::guard('management')->user();
@endphp

<body
    class="antialiased bg-gradient-to-br from-gray-50 to-white text-gray-800 dark:from-gray-900 dark:to-gray-950 dark:text-gray-100">
    <!-- Mobile Header (Sticky) -->
    <header class="lg:hidden sticky top-0 z-50 main-card border-b border-gray-200 dark:border-gray-800 safe-top">
        <div class="px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Mobile Menu Button and Logo -->
                <div class="flex items-center space-x-3">
                    <button id="mobileMenuBtn"
                        class="touch-button w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800/50 flex items-center justify-center">
                        <i class="fas fa-bars text-gray-600 dark:text-gray-300"></i>
                    </button>
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 gradient-blue rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold"><img src="{{ asset('images/aqsa.jpg') }}" alt=""></span>
                        </div>
                        <div>
                            <h1 class="text-sm font-bold text-gray-900 dark:text-white">Aqsa Group</h1>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Dashboard</p>
                        </div>
                    </div>
                </div>

                <!-- Mobile Actions -->
                <div class="flex items-center space-x-2">
                    <!-- Theme Toggle for Mobile -->
                    <div class="theme-toggle mr-2" id="mobileThemeToggle">
                        <div class="theme-toggle-slider">
                            <i class="fas fa-sun sun-icon"></i>
                            <i class="fas fa-moon moon-icon"></i>
                        </div>
                    </div>

                    <button
                        class="touch-button w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800/50 flex items-center justify-center relative">
                        <i class="fas fa-bell text-gray-600 dark:text-gray-300"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <button id="mobileSearchBtn"
                        class="touch-button w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800/50 flex items-center justify-center">
                        <i class="fas fa-search text-gray-600 dark:text-gray-300"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Search Overlay -->
    <div id="mobileSearch" class="lg:hidden fixed inset-0 z-50 bg-white dark:bg-gray-900 hidden">
        <div class="p-4 pt-20">
            <div class="relative">
                <input type="text" placeholder="Search reports, employees, projects..."
                    class="w-full pl-12 pr-4 py-4 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900">
                <i class="fas fa-search absolute left-4 top-4 text-gray-400"></i>
                <button id="closeSearch" class="absolute right-4 top-4 text-gray-400">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="flex min-h-screen">
        <!-- Desktop Sidebar -->
        <div class="hidden lg:flex lg:w-64 lg:flex-col">
            <div
                class="flex flex-col flex-grow bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 pt-6 pb-4">
                <!-- Logo -->
                <div class="flex items-center px-6 mb-8">
                    <div class="w-10 h-10 gradient-blue rounded-xl flex items-center justify-center mr-3">
                        <span class="text-white font-bold"><img src="{{ asset('images/aqsa.jpg') }}" alt=""></span>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-gray-900 dark:text-white">Aqsa Group</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Management System</p>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="flex-1 px-4 overflow-y-auto custom-scroll">
                    <nav class="space-y-1">

                        <a href="{{ route('management.home') }}" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg
                {{ request()->routeIs('management.home') 
                        ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/30' 
                        : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50' }}">
                            <i class="fas fa-chart-line w-4 mr-3 
                    {{ request()->routeIs('management.home') ? 'text-blue-500' : 'text-gray-400' }}"></i>
                            Dashboard
                        </a>




                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">HR
                                Management
                            </h3>
                            <div class="space-y-1">
                                @if ($currentUser->role === 'Manager' || $currentUser->role === 'HR Manager' ||
                                $currentUser->role === 'Administrator')

                                <a href="{{ route('management.departments') }}"
                                    class="flex items-center px-3 py-2 text-sm rounded-lg
                                    {{ request()->routeIs('management.departments') 
                                            ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/30' 
                                            : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50' }}">
                                    <i
                                        class="fa-solid fa-building w-4 mr-3 
                                        {{ request()->routeIs('management.departments') ? 'text-blue-500' : 'text-gray-400' }}"></i>
                                    Departments
                                    <span
                                        class="ml-auto bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs px-2 py-0.5 rounded">{{
                                        $departmentcount }}</span>
                                </a>
                                @endif
                                @if ($currentUser->role === 'Manager' || $currentUser->role === 'HR Manager' ||
                                $currentUser->role === 'Administrator')
                                <a href="{{ route('management.employees') }}"
                                    class="flex items-center px-3 py-2 text-sm rounded-lg
                                    {{ request()->routeIs('management.employees') 
                                            ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/30' 
                                            : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50' }}">
                                    <i
                                        class="fa-regular fa-address-book w-4 mr-3 
                                        {{ request()->routeIs('management.employees') ? 'text-blue-500' : 'text-gray-400' }}"></i>
                                    Employees
                                    <span
                                        class="ml-auto bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs px-2 py-0.5 rounded">{{
                                        $employeecount }}</span>
                                </a>
                                @endif

                                @if ($currentUser->role === 'Manager' || $currentUser->role === 'HR Manager' ||
                                $currentUser->role === 'Employee' ||
                                $currentUser->role === 'Administrator')
                                <a href="{{ route('management.employee_reports') }}"
                                    class="flex items-center px-3 py-2 text-sm rounded-lg
                                    {{ request()->routeIs('management.employee_reports') 
                                            ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/30' 
                                            : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50' }}">

                                    <svg width="24" height="24" class="w-4 mr-3  " viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.5 2V9.85999C15.5 10.3 14.98 10.52 14.66 10.23L12.34 8.09003C12.15 7.91003 11.85 7.91003 11.66 8.09003L9.34003 10.23C9.02003 10.52 8.5 10.3 8.5 9.85999V2H15.5Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.25 14H17.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 18H17.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>



                                    Employee Reports

                                </a>
                                @endif


                            </div>
                        </div>

                        @if ($currentUser->role === 'Manager' ||
                        $currentUser->role === 'Administrator')
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Financial
                            </h3>
                            <div class="space-y-1">

                                @if ($currentUser->role === 'Manager' ||
                                $currentUser->role === 'Administrator')
                                <a href="{{ route('management.withdraws') }}"
                                    class="flex items-center px-3 py-2 text-sm rounded-lg
                                    {{ request()->routeIs('management.withdraws') 
                                            ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/30' 
                                            : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50' }}">
                                    <i
                                        class="fa-solid fa-arrow-up w-4 mr-3 
                                        {{ request()->routeIs('management.withdraws') ? 'text-blue-500' : 'text-gray-400' }}"></i>
                                    Withdraws

                                </a>
                                @endif
                                <a href="#"
                                    class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-file-invoice-dollar w-4 mr-3 text-gray-400"></i>
                                    Invoices
                                </a>
                            </div>
                        </div>

                        @endif







                        <div class="pt-6">
                            @if ($currentUser->role === 'Manager' ||
                            $currentUser->role === 'Administrator')
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Settings
                            </h3>

                            <div class="space-y-1">
                                <a href="#"
                                    class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-cog w-4 mr-3 text-gray-400"></i>
                                    System
                                </a>


                                <a href="{{ route('management.user') }}"
                                    class="flex items-center px-3 py-2 text-sm rounded-lg
                                    {{ request()->routeIs('management.user') 
                                            ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/30 border border-blue-100 dark:border-blue-800/30' 
                                            : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50' }}">
                                    <i
                                        class="fa-solid fa-user w-4 mr-3 
                                        {{ request()->routeIs('management.user') ? 'text-blue-500' : 'text-gray-400' }}"></i>

                                    Users
                                    <span
                                        class="ml-auto bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs px-2 py-0.5 rounded">{{
                                        $usercount }}</span>
                                </a>

                            </div>
                            @endif
                        </div>
                    </nav>
                </div>

                <!-- User Profile and Theme Toggle -->
                <div class="px-4 pt-4 border-t border-gray-200 dark:border-gray-800">
                    <div class="flex items-center justify-between p-2">
                        <!-- User Info -->
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff"
                                alt="{{ $currentUser->name  }}"
                                class="w-8 h-8 rounded-full border-2 border-white dark:border-gray-800 shadow-sm">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $currentUser->name }}
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $currentUser->role }}</p>
                            </div>
                        </div>

                        <!-- Logout Icon Button -->
                        <form method="POST" action="{{ route('management.logout') }}">
                            @csrf
                            <button type="submit"
                                class="ml-4 p-2 bg-red-500 hover:bg-red-600 text-white rounded-full shadow-sm flex items-center justify-center">
                                <i class="fas fa-right-from-bracket"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col lg:ml-0">
            <!-- Desktop Header -->
            <header class="hidden lg:block main-card border-b border-gray-200 dark:border-gray-800">
                <div class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                                @yield('page_title', 'Dashboard Overview')
                            </h2> @php
                            $currentUser = Auth::guard('management')->user();
                            @endphp


                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                @yield('page_subtitle', 'Welcome back, '.$currentUser->name)
                            </p>

                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" placeholder="Search..."
                                    class="w-64 pl-10 pr-4 py-2 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-sm text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900">
                                <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                            </div>


                            <div class="theme-toggle" id="desktopThemeToggle">
                                <div class="theme-toggle-slider">
                                    <i class="fas fa-sun sun-icon"></i>
                                    <i class="fas fa-moon moon-icon"></i>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </header>

            <!-- Page Content -->
            <main class="flex-1 p-4 md:p-6 lg:p-8 overflow-y-auto custom-scroll safe-bottom">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="main-card border-t border-gray-200 dark:border-gray-800 py-4 px-4 lg:px-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="text-xs lg:text-sm text-gray-500 mb-2 md:mb-0">
                        © 2023 Aqsa Group Management System
                    </div>
                    <div class="flex space-x-4 text-xs lg:text-sm">
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">Help</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">Privacy</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">Terms</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenuOverlay"
        class="lg:hidden fixed inset-0 z-50 bg-white/95 dark:bg-gray-900/95 backdrop-blur-sm hidden">
        <div
            class="absolute left-0 top-0 bottom-0 w-64 bg-white dark:bg-gray-900 transform -translate-x-full transition-transform duration-300 ease-out border-r border-gray-200 dark:border-gray-800 shadow-xl">
            <div class="p-6 h-full flex flex-col">
                <!-- Menu Header -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 gradient-blue rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold"><img src="{{ asset('images/aqsa.jpg') }}" alt=""></span>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900 dark:text-white">Aqsa Group</h2>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Management</p>
                        </div>
                    </div>
                    <button id="closeMobileMenu" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <!-- Mobile Navigation -->
                <nav class="flex-1 space-y-2">
                    <a href="#"
                        class="flex items-center px-4 py-3 text-sm font-medium text-blue-600 dark:text-white bg-blue-50 dark:bg-blue-900/30 rounded-xl">
                        <i class="fas fa-chart-line w-4 mr-3 text-blue-500 dark:text-blue-400"></i>
                        Dashboard
                    </a>

                    <a href="#"
                        class="flex items-center px-4 py-3 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800/50 rounded-xl transition-colors">
                        <i class="fas fa-users w-4 mr-3 text-gray-400"></i>
                        Employees
                    </a>

                    <a href="#"
                        class="flex items-center px-4 py-3 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800/50 rounded-xl transition-colors">
                        <i class="fas fa-briefcase w-4 mr-3 text-gray-400"></i>
                        Projects
                    </a>
                </nav>

                <!-- Theme Toggle in Mobile Menu -->
                <div class="pt-6 border-t border-gray-200 dark:border-gray-800">
                    <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800/30 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-moon text-gray-400 mr-3"></i>
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Dark Mode</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Toggle theme</p>
                            </div>
                        </div>
                        <div class="theme-toggle" id="mobileMenuThemeToggle">
                            <div class="theme-toggle-slider">
                                <i class="fas fa-sun sun-icon"></i>
                                <i class="fas fa-moon moon-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Bottom Navigation -->
    <nav
        class="lg:hidden fixed bottom-0 left-0 right-0 z-40 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 safe-bottom shadow-lg">
        <div class="flex justify-around">
            <a href="#" class="flex flex-col items-center py-3 px-4 text-blue-600 dark:text-blue-400">
                <i class="fas fa-chart-line text-lg mb-1"></i>
                <span class="text-xs">Dashboard</span>
            </a>
            <a href="#"
                class="flex flex-col items-center py-3 px-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fas fa-users text-lg mb-1"></i>
                <span class="text-xs">Employees</span>
            </a>
            <a href="#"
                class="flex flex-col items-center py-3 px-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fas fa-briefcase text-lg mb-1"></i>
                <span class="text-xs">Projects</span>
            </a>
            <a href="#"
                class="flex flex-col items-center py-3 px-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fas fa-cog text-lg mb-1"></i>
                <span class="text-xs">More</span>
            </a>
        </div>
    </nav>

    <script>
        // Theme management
        class ThemeManager {
            constructor() {
                this.themeToggleButtons = document.querySelectorAll('.theme-toggle');
                this.init();
            }
            
            init() {
                // Check saved theme or system preference
                const savedTheme = localStorage.getItem('theme');
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                
                if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
                    this.enableDarkMode();
                } else {
                    this.enableLightMode();
                }
                
                // Add event listeners to all toggle buttons
                this.themeToggleButtons.forEach(button => {
                    button.addEventListener('click', () => this.toggleTheme());
                });
                
                // Listen for system theme changes
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                    if (!localStorage.getItem('theme')) {
                        e.matches ? this.enableDarkMode() : this.enableLightMode();
                    }
                });
            }
            
            toggleTheme() {
                if (document.documentElement.classList.contains('dark')) {
                    this.enableLightMode();
                } else {
                    this.enableDarkMode();
                }
            }
            
            enableDarkMode() {
                document.documentElement.classList.add('dark');
                this.themeToggleButtons.forEach(button => {
                    button.classList.add('active');
                });
                localStorage.setItem('theme', 'dark');
            }
            
            enableLightMode() {
                document.documentElement.classList.remove('dark');
                this.themeToggleButtons.forEach(button => {
                    button.classList.remove('active');
                });
                localStorage.setItem('theme', 'light');
            }
        }
        
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileMenuPanel = mobileMenuOverlay.querySelector('div');
        const mobileSearchBtn = document.getElementById('mobileSearchBtn');
        const mobileSearch = document.getElementById('mobileSearch');
        const closeSearch = document.getElementById('closeSearch');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuOverlay.classList.remove('hidden');
            setTimeout(() => {
                mobileMenuPanel.style.transform = 'translateX(0)';
            }, 10);
        });
        
        closeMobileMenu.addEventListener('click', () => {
            mobileMenuPanel.style.transform = 'translateX(-100%)';
            setTimeout(() => {
                mobileMenuOverlay.classList.add('hidden');
            }, 300);
        });
        
        mobileMenuOverlay.addEventListener('click', (e) => {
            if (e.target === mobileMenuOverlay) {
                mobileMenuPanel.style.transform = 'translateX(-100%)';
                setTimeout(() => {
                    mobileMenuOverlay.classList.add('hidden');
                }, 300);
            }
        });
        
        // Mobile search functionality
        mobileSearchBtn.addEventListener('click', () => {
            mobileSearch.classList.remove('hidden');
            setTimeout(() => {
                mobileSearch.querySelector('input').focus();
            }, 100);
        });
        
        closeSearch.addEventListener('click', () => {
            mobileSearch.classList.add('hidden');
        });
        
        // Handle touch events for better mobile experience
        document.addEventListener('touchstart', function() {}, {passive: true});
        
        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize theme manager
            const themeManager = new ThemeManager();
            
            // Add slide-up animation to cards
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Handle project edit buttons
            document.querySelectorAll('button:has(.fa-edit)').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const projectName = this.closest('.bg-gray-50, .bg-gray-900\\/50, tr').querySelector('.text-gray-900, .text-white').textContent;
                    alert(`Editing: ${projectName}`);
                });
            });
        });
    </script>
</body>

</html>