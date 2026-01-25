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
        
        .status-active { background-color: var(--accent-green); }
        .status-pending { background-color: var(--accent-orange); }
        .status-inactive { background-color: #94a3b8; }
        
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
            
            .mobile-space-y-4 > * + * {
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
        
        .sun-icon, .moon-icon {
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
<body class="antialiased bg-gradient-to-br from-gray-50 to-white text-gray-800 dark:from-gray-900 dark:to-gray-950 dark:text-gray-100">
    <!-- Mobile Header (Sticky) -->
    <header class="lg:hidden sticky top-0 z-50 main-card border-b border-gray-200 dark:border-gray-800 safe-top">
        <div class="px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Mobile Menu Button and Logo -->
                <div class="flex items-center space-x-3">
                    <button id="mobileMenuBtn" class="touch-button w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800/50 flex items-center justify-center">
                        <i class="fas fa-bars text-gray-600 dark:text-gray-300"></i>
                    </button>
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 gradient-blue rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">AG</span>
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
                    
                    <button class="touch-button w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800/50 flex items-center justify-center relative">
                        <i class="fas fa-bell text-gray-600 dark:text-gray-300"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <button id="mobileSearchBtn" class="touch-button w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800/50 flex items-center justify-center">
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
                <input type="text" 
                       placeholder="Search reports, employees, projects..." 
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
            <div class="flex flex-col flex-grow bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 pt-6 pb-4">
                <!-- Logo -->
                <div class="flex items-center px-6 mb-8">
                    <div class="w-10 h-10 gradient-blue rounded-xl flex items-center justify-center mr-3">
                        <span class="text-white font-bold">AG</span>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold text-gray-900 dark:text-white">Aqsa Group</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Management System</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="flex-1 px-4 overflow-y-auto custom-scroll">
                    <nav class="space-y-1">
                        <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-blue-600 dark:text-white bg-blue-50 dark:bg-blue-900/30 rounded-lg border border-blue-100 dark:border-blue-800/30">
                            <i class="fas fa-chart-line w-4 mr-3 text-blue-500 dark:text-blue-400"></i>
                            Dashboard
                        </a>
                        
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Company</h3>
                            <div class="space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-building w-4 mr-3 text-gray-400"></i>
                                    Departments
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-users w-4 mr-3 text-gray-400"></i>
                                    Employees
                                    <span class="ml-auto bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs px-2 py-0.5 rounded">247</span>
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-briefcase w-4 mr-3 text-gray-400"></i>
                                    Projects
                                    <span class="ml-auto bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-300 text-xs px-2 py-0.5 rounded">24</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Financial</h3>
                            <div class="space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-chart-bar w-4 mr-3 text-gray-400"></i>
                                    Reports
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-file-invoice-dollar w-4 mr-3 text-gray-400"></i>
                                    Invoices
                                </a>
                            </div>
                        </div>
                        
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Settings</h3>
                            <div class="space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg">
                                    <i class="fas fa-cog w-4 mr-3 text-gray-400"></i>
                                    System
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                
                <!-- User Profile and Theme Toggle -->
                <div class="px-4 pt-4 border-t border-gray-200 dark:border-gray-800">
                    <div class="flex items-center justify-between p-2">
                        <div class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff" 
                                 alt="John Doe" class="w-8 h-8 rounded-full border-2 border-white dark:border-gray-800 shadow-sm">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">John Doe</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Administrator</p>
                            </div>
                        </div>
                        <!-- Theme Toggle for Desktop -->
                        <div class="theme-toggle" id="desktopThemeToggle">
                            <div class="theme-toggle-slider">
                                <i class="fas fa-sun sun-icon"></i>
                                <i class="fas fa-moon moon-icon"></i>
                            </div>
                        </div>
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
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Dashboard Overview</h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Welcome back, John</p>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" 
                                       placeholder="Search..." 
                                       class="w-64 pl-10 pr-4 py-2 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-sm text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900">
                                <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                            </div>
                            
                            <button class="px-4 py-2 gradient-blue text-white text-sm font-medium rounded-lg hover:opacity-90 transition-opacity">
                                <i class="fas fa-plus mr-2"></i>New Report
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 p-4 md:p-6 lg:p-8 overflow-y-auto custom-scroll safe-bottom">
                <!-- Welcome Message -->
                <div class="mb-6 lg:mb-8">
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-2">Welcome back, John!</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-sm lg:text-base">Here's what's happening with your company today.</p>
                </div>
                
                <!-- Stats Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6 lg:mb-8">
                    <!-- Revenue Card -->
                    <div class="main-card rounded-xl p-4 lg:p-6 card-hover animate-slide-up">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 mb-1">Total Revenue</p>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">$124,580</h3>
                            </div>
                            <div class="p-2 lg:p-3 gradient-blue rounded-lg shadow-sm">
                                <i class="fas fa-dollar-sign text-white text-lg lg:text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center text-xs lg:text-sm">
                            <span class="text-green-600 dark:text-green-400 font-medium flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>18.2%
                            </span>
                            <span class="text-gray-500 dark:text-gray-400 ml-2">vs last month</span>
                        </div>
                    </div>
                    
                    <!-- Projects Card -->
                    <div class="main-card rounded-xl p-4 lg:p-6 card-hover animate-slide-up" style="animation-delay: 0.1s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 mb-1">Active Projects</p>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">24</h3>
                            </div>
                            <div class="p-2 lg:p-3 gradient-purple rounded-lg shadow-sm">
                                <i class="fas fa-briefcase text-white text-lg lg:text-xl"></i>
                            </div>
                        </div>
                        <div class="text-xs lg:text-sm text-gray-500 dark:text-gray-400">
                            8 completed this month
                        </div>
                    </div>
                    
                    <!-- Employees Card -->
                    <div class="main-card rounded-xl p-4 lg:p-6 card-hover animate-slide-up" style="animation-delay: 0.2s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 mb-1">Total Employees</p>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">247</h3>
                            </div>
                            <div class="p-2 lg:p-3 gradient-green rounded-lg shadow-sm">
                                <i class="fas fa-users text-white text-lg lg:text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center text-xs lg:text-sm">
                            <span class="text-green-600 dark:text-green-400 font-medium flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>15
                            </span>
                            <span class="text-gray-500 dark:text-gray-400 ml-2">new hires</span>
                        </div>
                    </div>
                    
                    <!-- Performance Card -->
                    <div class="main-card rounded-xl p-4 lg:p-6 card-hover animate-slide-up" style="animation-delay: 0.3s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 mb-1">Performance</p>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">94.5%</h3>
                            </div>
                            <div class="p-2 lg:p-3 gradient-orange rounded-lg shadow-sm">
                                <i class="fas fa-chart-line text-white text-lg lg:text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center text-xs lg:text-sm">
                            <span class="text-green-600 dark:text-green-400 font-medium flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>2.4%
                            </span>
                            <span class="text-gray-500 dark:text-gray-400 ml-2">vs last month</span>
                        </div>
                    </div>
                </div>
                
                <!-- Charts and Activities Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6 lg:mb-8">
                    <!-- Revenue Chart -->
                    <div class="lg:col-span-2 main-card rounded-xl p-4 lg:p-6">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6">
                            <div class="mb-4 sm:mb-0">
                                <h3 class="text-lg lg:text-xl font-bold text-gray-900 dark:text-white mb-1">Revenue Overview</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Last 6 months</p>
                            </div>
                            <select class="text-sm bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg px-3 py-2 text-gray-700 dark:text-white focus:outline-none focus:border-blue-500">
                                <option>Last 6 months</option>
                                <option>Last year</option>
                            </select>
                        </div>
                        
                        <!-- Simple Chart -->
                        <div class="h-48 lg:h-56">
                            <div class="flex items-end h-32 lg:h-40 space-x-1 lg:space-x-2 mt-4">
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-lg mb-2" style="height: 60%"></div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Jan</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">$42K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-lg mb-2" style="height: 80%"></div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Feb</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">$56K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-lg mb-2" style="height: 45%"></div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Mar</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">$38K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-lg mb-2" style="height: 70%"></div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Apr</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">$49K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-lg mb-2" style="height: 65%"></div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">May</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">$52K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-lg mb-2" style="height: 85%"></div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Jun</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">$58K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="main-card rounded-xl p-4 lg:p-6">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-lg lg:text-xl font-bold text-gray-900 dark:text-white mb-1">Recent Activity</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Latest updates</p>
                            </div>
                            <button class="text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">View all</button>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 lg:w-10 lg:h-10 gradient-green rounded-lg flex items-center justify-center shadow-sm">
                                        <i class="fas fa-check text-white text-sm lg:text-base"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Project Alpha completed</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 lg:w-10 lg:h-10 gradient-blue rounded-lg flex items-center justify-center shadow-sm">
                                        <i class="fas fa-user-plus text-white text-sm lg:text-base"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">New employee joined</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">5 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 lg:w-10 lg:h-10 gradient-purple rounded-lg flex items-center justify-center shadow-sm">
                                        <i class="fas fa-file-invoice text-white text-sm lg:text-base"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Invoice #0042 paid</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projects Table -->
                <div class="main-card rounded-xl overflow-hidden">
                    <div class="p-4 lg:p-6 border-b border-gray-200 dark:border-gray-800">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                            <div class="mb-4 sm:mb-0">
                                <h3 class="text-lg lg:text-xl font-bold text-gray-900 dark:text-white mb-1">Active Projects</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Track ongoing projects</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 lg:px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-white text-sm rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                    <i class="fas fa-filter mr-2"></i>Filter
                                </button>
                                <button class="px-3 lg:px-4 py-2 gradient-blue text-white text-sm rounded-lg hover:opacity-90 transition-opacity">
                                    <i class="fas fa-plus mr-2"></i>New
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Projects List -->
                    <div class="lg:hidden">
                        <div class="p-4 space-y-4">
                            <!-- Project Card 1 -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 rounded-lg p-4">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 gradient-blue rounded-lg flex items-center justify-center mr-3 shadow-sm">
                                            <i class="fas fa-globe text-white"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900 dark:text-white">Website Redesign</h4>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">Marketing</p>
                                        </div>
                                    </div>
                                    <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 text-xs rounded-full">
                                        <span class="status-indicator status-active"></span>On Track
                                    </span>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-1">
                                        <span>Progress</span>
                                        <span>85%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill gradient-green" style="width: 85%"></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Due: Jun 15, 2023</span>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Card 2 -->
                            <div class="bg-gray-50 dark:bg-gray-900/50 rounded-lg p-4">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 gradient-purple rounded-lg flex items-center justify-center mr-3 shadow-sm">
                                            <i class="fas fa-mobile-alt text-white"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-900 dark:text-white">Mobile App</h4>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">IT Department</p>
                                        </div>
                                    </div>
                                    <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 text-xs rounded-full">
                                        <span class="status-indicator status-pending"></span>In Progress
                                    </span>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-1">
                                        <span>Progress</span>
                                        <span>65%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill gradient-blue" style="width: 65%"></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500 dark:text-gray-400">Due: Aug 30, 2023</span>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Load More Button for Mobile -->
                        <div class="p-4 border-t border-gray-200 dark:border-gray-800">
                            <button class="w-full py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-white text-sm rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                Load More Projects
                            </button>
                        </div>
                    </div>
                    
                    <!-- Desktop Projects Table -->
                    <div class="hidden lg:block overflow-x-auto custom-scroll">
                        <table class="min-w-full">
                            <thead class="bg-gray-50 dark:bg-gray-900/50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 gradient-blue rounded-lg flex items-center justify-center mr-3 shadow-sm">
                                                <i class="fas fa-globe text-white"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">Website Redesign</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">Marketing Campaign</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Marketing</td>
                                    <td class="px-6 py-4">
                                        <div class="w-32">
                                            <div class="progress-bar">
                                                <div class="progress-fill gradient-green" style="width: 85%"></div>
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">85% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 text-xs rounded-full">
                                            <span class="status-indicator status-active"></span>On Track
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Jun 15, 2023</td>
                                    <td class="px-6 py-4">
                                        <div class="flex space-x-2">
                                            <button class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
    <div id="mobileMenuOverlay" class="lg:hidden fixed inset-0 z-50 bg-white/95 dark:bg-gray-900/95 backdrop-blur-sm hidden">
        <div class="absolute left-0 top-0 bottom-0 w-64 bg-white dark:bg-gray-900 transform -translate-x-full transition-transform duration-300 ease-out border-r border-gray-200 dark:border-gray-800 shadow-xl">
            <div class="p-6 h-full flex flex-col">
                <!-- Menu Header -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 gradient-blue rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold">AG</span>
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
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-blue-600 dark:text-white bg-blue-50 dark:bg-blue-900/30 rounded-xl">
                        <i class="fas fa-chart-line w-4 mr-3 text-blue-500 dark:text-blue-400"></i>
                        Dashboard
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800/50 rounded-xl transition-colors">
                        <i class="fas fa-users w-4 mr-3 text-gray-400"></i>
                        Employees
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800/50 rounded-xl transition-colors">
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
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 z-40 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 safe-bottom shadow-lg">
        <div class="flex justify-around">
            <a href="#" class="flex flex-col items-center py-3 px-4 text-blue-600 dark:text-blue-400">
                <i class="fas fa-chart-line text-lg mb-1"></i>
                <span class="text-xs">Dashboard</span>
            </a>
            <a href="#" class="flex flex-col items-center py-3 px-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fas fa-users text-lg mb-1"></i>
                <span class="text-xs">Employees</span>
            </a>
            <a href="#" class="flex flex-col items-center py-3 px-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fas fa-briefcase text-lg mb-1"></i>
                <span class="text-xs">Projects</span>
            </a>
            <a href="#" class="flex flex-col items-center py-3 px-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
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