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
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#0f172a',
                            100: '#1e293b',
                            200: '#334155',
                            300: '#475569',
                            400: '#64748b',
                            500: '#94a3b8',
                            600: '#cbd5e1',
                            700: '#e2e8f0',
                            800: '#f1f5f9',
                            900: '#f8fafc',
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
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-up': 'slideUp 0.5s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        :root {
            --primary-dark: #0f172a;
            --primary-light: #1e293b;
            --secondary-dark: #334155;
            --secondary-light: #475569;
            --accent-blue: #3b82f6;
            --accent-purple: #8b5cf6;
            --accent-green: #10b981;
            --accent-orange: #f59e0b;
            --text-primary: #e2e8f0;
            --text-secondary: #94a3b8;
            --border-color: #334155;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: var(--text-primary);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        /* Custom scrollbar */
        .custom-scroll::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        .custom-scroll::-webkit-scrollbar-track {
            background: rgba(30, 41, 59, 0.5);
            border-radius: 10px;
        }
        
        .custom-scroll::-webkit-scrollbar-thumb {
            background: var(--accent-blue);
            border-radius: 10px;
        }
        
        .custom-scroll::-webkit-scrollbar-thumb:hover {
            background: #2563eb;
        }
        
        /* Glass effect */
        .glass-card {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        
        /* Gradient backgrounds */
        .gradient-primary {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }
        
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
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            border-color: rgba(59, 130, 246, 0.3);
        }
        
        /* Status indicators */
        .status-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
            animation: pulse 2s infinite;
        }
        
        .status-active { 
            background-color: var(--accent-green);
            box-shadow: 0 0 0 rgba(16, 185, 129, 0.4);
        }
        
        .status-pending { 
            background-color: var(--accent-orange);
            box-shadow: 0 0 0 rgba(245, 158, 11, 0.4);
        }
        
        .status-inactive { 
            background-color: #64748b;
            box-shadow: 0 0 0 rgba(100, 116, 139, 0.4);
        }
        
        /* Progress bar */
        .progress-bar {
            height: 8px;
            border-radius: 4px;
            background: rgba(30, 41, 59, 0.5);
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            border-radius: 4px;
            transition: width 0.5s ease;
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.3);
        }
        
        /* Table styling */
        .table-row {
            transition: all 0.2s ease;
            border-bottom: 1px solid var(--border-color);
        }
        
        .table-row:hover {
            background: rgba(59, 130, 246, 0.1);
            transform: translateX(5px);
        }
        
        /* Chart animation */
        @keyframes chartGrow {
            from { 
                transform: scaleY(0); 
                opacity: 0;
            }
            to { 
                transform: scaleY(1); 
                opacity: 1;
            }
        }
        
        .chart-bar {
            transform-origin: bottom;
            animation: chartGrow 0.8s ease-out forwards;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        /* Input styling */
        .input-dark {
            background: rgba(15, 23, 42, 0.7);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            transition: all 0.3s ease;
        }
        
        .input-dark:focus {
            outline: none;
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        /* Button styles */
        .btn-primary {
            background: linear-gradient(135deg, var(--accent-blue) 0%, #2563eb 100%);
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }
        
        .btn-secondary {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: rgba(59, 130, 246, 0.1);
            border-color: var(--accent-blue);
        }
        
        /* Glow effects */
        .glow-blue {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }
        
        .glow-green {
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
        }
        
        .glow-purple {
            box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
        }
        
        /* Animation delays */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
    </style>
</head>
<body class="antialiased">
    <!-- Main Container -->
    <div class="flex min-h-screen">
        
        <!-- Sidebar -->
        <div class="hidden lg:flex lg:w-72 lg:flex-col">
            <div class="flex flex-col flex-grow gradient-primary border-r border-gray-800 pt-8 pb-4">
                <!-- Logo -->
                <div class="flex items-center px-8 mb-10">
                    <div class="w-12 h-12 gradient-blue rounded-xl flex items-center justify-center mr-4 float-animation">
                        <span class="text-white font-bold text-xl">AG</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Aqsa Group</h1>
                        <p class="text-sm text-gray-400">Management System</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="flex-1 px-6 overflow-y-auto custom-scroll">
                    <nav class="space-y-2">
                        <!-- Dashboard -->
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600/20 to-blue-800/20 rounded-xl border border-blue-800/30">
                            <i class="fas fa-chart-line w-5 mr-3 text-blue-400"></i>
                            Dashboard
                            <span class="ml-auto w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                        </a>
                        
                        <!-- Company -->
                        <div class="pt-8">
                            <h3 class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Company</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-building w-5 mr-3 text-gray-400"></i>
                                    Departments
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-users w-5 mr-3 text-gray-400"></i>
                                    Employees
                                    <span class="ml-auto bg-blue-900/50 text-blue-300 text-xs font-medium px-2 py-1 rounded-lg">247</span>
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-briefcase w-5 mr-3 text-gray-400"></i>
                                    Projects
                                    <span class="ml-auto bg-green-900/50 text-green-300 text-xs font-medium px-2 py-1 rounded-lg">24</span>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Financial -->
                        <div class="pt-8">
                            <h3 class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Financial</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-chart-bar w-5 mr-3 text-gray-400"></i>
                                    Reports
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-file-invoice-dollar w-5 mr-3 text-gray-400"></i>
                                    Invoices
                                    <span class="ml-auto bg-red-900/50 text-red-300 text-xs font-medium px-2 py-1 rounded-lg">12</span>
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-wallet w-5 mr-3 text-gray-400"></i>
                                    Payments
                                </a>
                            </div>
                        </div>
                        
                        <!-- Operations -->
                        <div class="pt-8">
                            <h3 class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Operations</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-warehouse w-5 mr-3 text-gray-400"></i>
                                    Inventory
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-truck w-5 mr-3 text-gray-400"></i>
                                    Supply Chain
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-chart-pie w-5 mr-3 text-gray-400"></i>
                                    Analytics
                                </a>
                            </div>
                        </div>
                        
                        <!-- Settings -->
                        <div class="pt-8">
                            <h3 class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Settings</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-cog w-5 mr-3 text-gray-400"></i>
                                    System
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-shield-alt w-5 mr-3 text-gray-400"></i>
                                    Security
                                </a>
                                <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                                    <i class="fas fa-headset w-5 mr-3 text-gray-400"></i>
                                    Support
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                
                <!-- User Profile -->
                <div class="px-6 pt-6 mt-6 border-t border-gray-800">
                    <div class="flex items-center p-3 bg-gray-800/30 rounded-xl">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff" 
                             alt="John Doe" class="w-10 h-10 rounded-full border-2 border-blue-500/50">
                        <div class="ml-3 flex-1">
                            <p class="text-sm font-medium text-white">John Doe</p>
                            <p class="text-xs text-gray-400">Administrator</p>
                        </div>
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="sticky top-0 z-10 glass-card border-b border-gray-800">
                <div class="px-8 py-5">
                    <div class="flex items-center justify-between">
                        <!-- Left section -->
                        <div class="flex items-center">
                            <button class="lg:hidden text-gray-400 hover:text-white mr-6">
                                <i class="fas fa-bars text-xl"></i>
                            </button>
                            <div>
                                <h2 class="text-2xl font-bold text-white">Dashboard Overview</h2>
                                <p class="text-sm text-gray-400">Welcome back, John • Today is Friday, June 16, 2023</p>
                            </div>
                        </div>
                        
                        <!-- Right section -->
                        <div class="flex items-center space-x-6">
                            <!-- Search -->
                            <div class="hidden md:block relative">
                                <input type="text" 
                                       placeholder="Search reports, employees, projects..." 
                                       class="w-80 pl-12 pr-4 py-3 input-dark rounded-xl text-sm">
                                <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
                            </div>
                            
                            <!-- Notifications -->
                            <div class="relative">
                                <button class="relative p-3 bg-gray-800/50 hover:bg-gray-800 rounded-xl transition-colors">
                                    <i class="fas fa-bell text-lg text-gray-300"></i>
                                    <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-red-500 rounded-full animate-pulse"></span>
                                </button>
                            </div>
                            
                            <!-- Quick Actions -->
                            <button class="px-6 py-3 btn-primary rounded-xl text-sm font-medium">
                                <i class="fas fa-plus mr-2"></i>
                                <span class="hidden md:inline">New Report</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 p-8 overflow-y-auto custom-scroll">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Revenue Card -->
                    <div class="glass-card rounded-2xl p-6 card-hover animate-slide-up delay-100">
                        <div class="flex items-start justify-between mb-6">
                            <div>
                                <p class="text-sm text-gray-400 mb-2">Total Revenue</p>
                                <h3 class="text-3xl font-bold text-white">$124,580</h3>
                            </div>
                            <div class="p-4 gradient-blue rounded-xl">
                                <i class="fas fa-dollar-sign text-white text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-green-400 font-medium flex items-center text-sm">
                                <i class="fas fa-arrow-up mr-2"></i>18.2%
                            </span>
                            <span class="text-gray-400 ml-3 text-sm">vs last month</span>
                        </div>
                    </div>
                    
                    <!-- Projects Card -->
                    <div class="glass-card rounded-2xl p-6 card-hover animate-slide-up delay-200">
                        <div class="flex items-start justify-between mb-6">
                            <div>
                                <p class="text-sm text-gray-400 mb-2">Active Projects</p>
                                <h3 class="text-3xl font-bold text-white">24</h3>
                            </div>
                            <div class="p-4 gradient-purple rounded-xl">
                                <i class="fas fa-briefcase text-white text-2xl"></i>
                            </div>
                        </div>
                        <div class="text-sm text-gray-400">
                            8 completed this month
                        </div>
                    </div>
                    
                    <!-- Employees Card -->
                    <div class="glass-card rounded-2xl p-6 card-hover animate-slide-up delay-300">
                        <div class="flex items-start justify-between mb-6">
                            <div>
                                <p class="text-sm text-gray-400 mb-2">Total Employees</p>
                                <h3 class="text-3xl font-bold text-white">247</h3>
                            </div>
                            <div class="p-4 gradient-green rounded-xl">
                                <i class="fas fa-users text-white text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-green-400 font-medium flex items-center text-sm">
                                <i class="fas fa-arrow-up mr-2"></i>15
                            </span>
                            <span class="text-gray-400 ml-3 text-sm">new hires</span>
                        </div>
                    </div>
                    
                    <!-- Performance Card -->
                    <div class="glass-card rounded-2xl p-6 card-hover animate-slide-up delay-400">
                        <div class="flex items-start justify-between mb-6">
                            <div>
                                <p class="text-sm text-gray-400 mb-2">Performance Rate</p>
                                <h3 class="text-3xl font-bold text-white">94.5%</h3>
                            </div>
                            <div class="p-4 gradient-orange rounded-xl">
                                <i class="fas fa-chart-line text-white text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-green-400 font-medium flex items-center text-sm">
                                <i class="fas fa-arrow-up mr-2"></i>2.4%
                            </span>
                            <span class="text-gray-400 ml-3 text-sm">vs last month</span>
                        </div>
                    </div>
                </div>
                
                <!-- Charts and Activities -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                    <!-- Revenue Chart -->
                    <div class="lg:col-span-2 glass-card rounded-2xl p-8">
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h3 class="text-xl font-bold text-white mb-2">Revenue Overview</h3>
                                <p class="text-sm text-gray-400">Last 6 months performance</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <select class="text-sm input-dark rounded-lg px-4 py-2.5 focus:outline-none">
                                    <option>Last 6 months</option>
                                    <option>Last year</option>
                                    <option>Last 3 years</option>
                                </select>
                                <button class="p-2.5 bg-gray-800/50 hover:bg-gray-800 rounded-lg transition-colors">
                                    <i class="fas fa-ellipsis-h text-gray-300"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="h-72 mt-4">
                            <!-- Chart bars -->
                            <div class="flex items-end h-56 space-x-3">
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-xl mb-3 chart-bar delay-100" style="height: 60%"></div>
                                    <span class="text-xs text-gray-400">Jan</span>
                                    <span class="text-sm text-gray-300 mt-1">$42K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-xl mb-3 chart-bar delay-200" style="height: 80%"></div>
                                    <span class="text-xs text-gray-400">Feb</span>
                                    <span class="text-sm text-gray-300 mt-1">$56K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-xl mb-3 chart-bar delay-300" style="height: 45%"></div>
                                    <span class="text-xs text-gray-400">Mar</span>
                                    <span class="text-sm text-gray-300 mt-1">$38K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-xl mb-3 chart-bar delay-400" style="height: 70%"></div>
                                    <span class="text-xs text-gray-400">Apr</span>
                                    <span class="text-sm text-gray-300 mt-1">$49K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-xl mb-3 chart-bar delay-500" style="height: 65%"></div>
                                    <span class="text-xs text-gray-400">May</span>
                                    <span class="text-sm text-gray-300 mt-1">$52K</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full gradient-blue rounded-t-xl mb-3 chart-bar delay-600" style="height: 85%"></div>
                                    <span class="text-xs text-gray-400">Jun</span>
                                    <span class="text-sm text-gray-300 mt-1">$58K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="glass-card rounded-2xl p-8">
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h3 class="text-xl font-bold text-white mb-2">Recent Activity</h3>
                                <p class="text-sm text-gray-400">Latest updates and actions</p>
                            </div>
                            <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition-colors">View all</a>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 gradient-green rounded-xl flex items-center justify-center">
                                        <i class="fas fa-check text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <p class="text-sm font-medium text-white">Project "Alpha" completed successfully</p>
                                    <p class="text-xs text-gray-400 mt-1">By Sarah Johnson • 2 hours ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 gradient-blue rounded-xl flex items-center justify-center">
                                        <i class="fas fa-user-plus text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <p class="text-sm font-medium text-white">New employee joined the team</p>
                                    <p class="text-xs text-gray-400 mt-1">Michael Chen, Software Developer • 5 hours ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 gradient-purple rounded-xl flex items-center justify-center">
                                        <i class="fas fa-file-invoice-dollar text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <p class="text-sm font-medium text-white">Invoice #INV-0042 has been paid</p>
                                    <p class="text-xs text-gray-400 mt-1">Client: Tech Solutions Inc. • 1 day ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 gradient-orange rounded-xl flex items-center justify-center">
                                        <i class="fas fa-chart-line text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <p class="text-sm font-medium text-white">Monthly performance report generated</p>
                                    <p class="text-xs text-gray-400 mt-1">Q2 2023 Analysis • 2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projects Table -->
                <div class="glass-card rounded-2xl overflow-hidden">
                    <div class="px-8 py-6 border-b border-gray-800">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-white">Active Projects</h3>
                                <p class="text-sm text-gray-400">Track and manage ongoing projects</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button class="px-5 py-2.5 btn-secondary rounded-xl text-sm font-medium">
                                    <i class="fas fa-filter mr-2"></i>Filter
                                </button>
                                <button class="px-5 py-2.5 btn-primary rounded-xl text-sm font-medium">
                                    <i class="fas fa-plus mr-2"></i>New Project
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto custom-scroll">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-900/50">
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Project Name</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Department</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Progress</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Status</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Due Date</th>
                                    <th class="px-8 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Row 1 -->
                                <tr class="table-row">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 gradient-blue rounded-lg flex items-center justify-center mr-4">
                                                <i class="fas fa-globe text-white"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-white">Website Redesign</div>
                                                <div class="text-xs text-gray-400">Marketing Campaign</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Marketing</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="w-40">
                                            <div class="progress-bar">
                                                <div class="progress-fill gradient-green" style="width: 85%"></div>
                                            </div>
                                            <div class="text-xs text-gray-400 mt-2">85% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-green-900/30 text-green-300 border border-green-800/50">
                                            <span class="status-indicator status-active"></span>On Track
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Jun 15, 2023</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center space-x-3">
                                            <button class="text-blue-400 hover:text-blue-300 transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-400 hover:text-gray-300 transition-colors">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Row 2 -->
                                <tr class="table-row">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 gradient-purple rounded-lg flex items-center justify-center mr-4">
                                                <i class="fas fa-mobile-alt text-white"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-white">Mobile App Development</div>
                                                <div class="text-xs text-gray-400">Customer Platform</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">IT Department</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="w-40">
                                            <div class="progress-bar">
                                                <div class="progress-fill gradient-blue" style="width: 65%"></div>
                                            </div>
                                            <div class="text-xs text-gray-400 mt-2">65% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-yellow-900/30 text-yellow-300 border border-yellow-800/50">
                                            <span class="status-indicator status-pending"></span>In Progress
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Aug 30, 2023</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center space-x-3">
                                            <button class="text-blue-400 hover:text-blue-300 transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-400 hover:text-gray-300 transition-colors">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Row 3 -->
                                <tr class="table-row">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 gradient-green rounded-lg flex items-center justify-center mr-4">
                                                <i class="fas fa-box-open text-white"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-white">Product Launch</div>
                                                <div class="text-xs text-gray-400">New Line Release</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Sales</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="w-40">
                                            <div class="progress-bar">
                                                <div class="progress-fill gradient-purple" style="width: 42%"></div>
                                            </div>
                                            <div class="text-xs text-gray-400 mt-2">42% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-blue-900/30 text-blue-300 border border-blue-800/50">
                                            <span class="status-indicator status-active"></span>Planning
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Oct 12, 2023</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center space-x-3">
                                            <button class="text-blue-400 hover:text-blue-300 transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-400 hover:text-gray-300 transition-colors">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Row 4 -->
                                <tr class="table-row">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 gradient-orange rounded-lg flex items-center justify-center mr-4">
                                                <i class="fas fa-cogs text-white"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-white">ERP Implementation</div>
                                                <div class="text-xs text-gray-400">System Upgrade</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Operations</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="w-40">
                                            <div class="progress-bar">
                                                <div class="progress-fill gradient-orange" style="width: 30%"></div>
                                            </div>
                                            <div class="text-xs text-gray-400 mt-2">30% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-red-900/30 text-red-300 border border-red-800/50">
                                            <span class="status-indicator status-inactive"></span>Delayed
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm text-gray-300">Dec 20, 2023</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center space-x-3">
                                            <button class="text-blue-400 hover:text-blue-300 transition-colors">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-400 hover:text-gray-300 transition-colors">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table Footer -->
                    <div class="px-8 py-6 border-t border-gray-800 bg-gray-900/30">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-400">
                                Showing <span class="font-medium text-gray-300">4</span> of <span class="font-medium text-gray-300">24</span> projects
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="px-4 py-2 btn-secondary rounded-lg text-sm">
                                    Previous
                                </button>
                                <button class="px-4 py-2 btn-primary rounded-lg text-sm">
                                    1
                                </button>
                                <button class="px-4 py-2 btn-secondary rounded-lg text-sm">
                                    2
                                </button>
                                <button class="px-4 py-2 btn-secondary rounded-lg text-sm">
                                    3
                                </button>
                                <button class="px-4 py-2 btn-secondary rounded-lg text-sm">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            <!-- Footer -->
            <footer class="glass-card border-t border-gray-800 py-6 px-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="text-sm text-gray-400">
                        © 2023 Aqsa Group Management System. Version 3.2.1
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-sm text-gray-400 hover:text-gray-300 transition-colors">Help Center</a>
                        <a href="#" class="text-sm text-gray-400 hover:text-gray-300 transition-colors">Privacy Policy</a>
                        <a href="#" class="text-sm text-gray-400 hover:text-gray-300 transition-colors">Terms of Service</a>
                        <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition-colors">Contact Support</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="toggleMobileMenu()"></div>
        <div class="absolute left-0 top-0 bottom-0 w-80 bg-gray-900 transform transition-transform duration-300 -translate-x-full border-r border-gray-800">
            <div class="p-6 h-full flex flex-col">
                <div class="flex items-center justify-between mb-10">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 gradient-blue rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">AG</span>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-white">Aqsa Group</h2>
                            <p class="text-xs text-gray-400">Management</p>
                        </div>
                    </div>
                    <button onclick="toggleMobileMenu()" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <!-- Mobile Navigation -->
                <nav class="flex-1 space-y-2">
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600/20 to-blue-800/20 rounded-xl border border-blue-800/30">
                        <i class="fas fa-chart-line w-5 mr-3 text-blue-400"></i>
                        Dashboard
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                        <i class="fas fa-users w-5 mr-3 text-gray-400"></i>
                        Employees
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                        <i class="fas fa-briefcase w-5 mr-3 text-gray-400"></i>
                        Projects
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                        <i class="fas fa-chart-bar w-5 mr-3 text-gray-400"></i>
                        Reports
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-3 text-sm text-gray-300 hover:text-white hover:bg-gray-800/50 rounded-xl transition-all duration-300">
                        <i class="fas fa-cog w-5 mr-3 text-gray-400"></i>
                        Settings
                    </a>
                </nav>
                
                <!-- User Info -->
                <div class="pt-6 mt-6 border-t border-gray-800">
                    <div class="flex items-center p-3 bg-gray-800/30 rounded-xl">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff" 
                             alt="John Doe" class="w-10 h-10 rounded-full border-2 border-blue-500/50">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">John Doe</p>
                            <p class="text-xs text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Mobile menu functionality
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const menuPanel = menu.querySelector('div:nth-child(2)');
            
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menuPanel.style.transform = 'translateX(0)';
                }, 10);
            } else {
                menuPanel.style.transform = 'translateX(-100%)';
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 300);
            }
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu button
            const mobileMenuBtn = document.querySelector('button.lg\\:hidden');
            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', toggleMobileMenu);
            }
            
            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('.table-row');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(5px)';
                });
                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });
            
            // Add animation delays for cards
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Initialize chart animations
            setTimeout(() => {
                const chartBars = document.querySelectorAll('.chart-bar');
                chartBars.forEach((bar, index) => {
                    bar.style.animationDelay = `${index * 0.1}s`;
                });
            }, 300);
            
            // Add click handlers to action buttons
            document.querySelectorAll('button.text-blue-400').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const projectName = this.closest('tr').querySelector('.text-white').textContent;
                    alert(`Editing: ${projectName}`);
                });
            });
            
            // Search functionality
            const searchInput = document.querySelector('input[type="text"]');
            if (searchInput) {
                searchInput.addEventListener('keyup', function(e) {
                    if (e.key === 'Enter') {
                        alert(`Searching for: ${this.value}`);
                        this.value = '';
                    }
                });
            }
        });
        
        // Demo function for status toggle
        function toggleProjectStatus(button) {
            const statusSpan = button.closest('td').querySelector('span');
            const indicator = statusSpan.querySelector('.status-indicator');
            const currentStatus = statusSpan.textContent.trim();
            
            if (currentStatus.includes('On Track')) {
                statusSpan.className = 'inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-yellow-900/30 text-yellow-300 border border-yellow-800/50';
                indicator.className = 'status-indicator status-pending';
                statusSpan.innerHTML = '<span class="status-indicator status-pending"></span>In Progress';
            } else if (currentStatus.includes('In Progress')) {
                statusSpan.className = 'inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-red-900/30 text-red-300 border border-red-800/50';
                indicator.className = 'status-indicator status-inactive';
                statusSpan.innerHTML = '<span class="status-indicator status-inactive"></span>Delayed';
            } else {
                statusSpan.className = 'inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-green-900/30 text-green-300 border border-green-800/50';
                indicator.className = 'status-indicator status-active';
                statusSpan.innerHTML = '<span class="status-indicator status-active"></span>On Track';
            }
        }
    </script>
</body>
</html>