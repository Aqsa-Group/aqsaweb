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
    
    <style>
        :root {
            --primary: #1e40af;
            --primary-light: #3b82f6;
            --secondary: #4f46e5;
            --success: #059669;
            --warning: #d97706;
            --danger: #dc2626;
            --dark: #111827;
            --light: #f9fafb;
            --border: #e5e7eb;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        /* Custom scrollbar */
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        
        .custom-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .custom-scroll::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        
        .custom-scroll::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }
        
        /* Loading animation */
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        
        .loading-shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }
        
        /* Card hover effect */
        .card-hover {
            transition: all 0.2s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Status indicators */
        .status-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
        }
        
        .status-active { background-color: #10b981; }
        .status-pending { background-color: #f59e0b; }
        .status-inactive { background-color: #6b7280; }
        
        /* Progress bar */
        .progress-bar {
            height: 6px;
            border-radius: 3px;
            background-color: #e5e7eb;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 0.3s ease;
        }
        
        /* Table styling */
        .table-row {
            transition: background-color 0.15s ease;
        }
        
        .table-row:hover {
            background-color: #f9fafb;
        }
        
        /* Chart animation */
        @keyframes chartGrow {
            from { transform: scaleY(0); }
            to { transform: scaleY(1); }
        }
        
        .chart-bar {
            transform-origin: bottom;
            animation: chartGrow 0.6s ease-out forwards;
        }
        
        /* Subtle animations */
        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .slide-up {
            animation: slideUp 0.3s ease-out;
        }
        
        @keyframes slideUp {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Main Container -->
    <div class="min-h-screen flex">
        
        <!-- Sidebar -->
        <div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
            <div class="flex flex-col flex-grow bg-white border-r border-gray-200 pt-5 pb-4">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0 px-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-700 to-blue-900 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-white font-bold">AG</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Aqsa Group</h1>
                        <p class="text-xs text-gray-500">Management System</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="mt-8 flex-grow flex flex-col custom-scroll overflow-y-auto px-4">
                    <nav class="flex-1 space-y-2">
                        <!-- Dashboard -->
                        <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-blue-700 bg-blue-50 rounded-lg">
                            <i class="fas fa-chart-line w-5 mr-3 text-blue-600"></i>
                            Dashboard
                        </a>
                        
                        <!-- Company -->
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Company</h3>
                            <div class="mt-2 space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-building w-5 mr-3 text-gray-400"></i>
                                    Departments
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-users w-5 mr-3 text-gray-400"></i>
                                    Employees
                                    <span class="ml-auto bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded">247</span>
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-briefcase w-5 mr-3 text-gray-400"></i>
                                    Projects
                                    <span class="ml-auto bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded">24</span>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Financial -->
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Financial</h3>
                            <div class="mt-2 space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-chart-bar w-5 mr-3 text-gray-400"></i>
                                    Reports
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-file-invoice-dollar w-5 mr-3 text-gray-400"></i>
                                    Invoices
                                    <span class="ml-auto bg-red-100 text-red-800 text-xs font-medium px-2 py-0.5 rounded">12</span>
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-wallet w-5 mr-3 text-gray-400"></i>
                                    Payments
                                </a>
                            </div>
                        </div>
                        
                        <!-- Operations -->
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Operations</h3>
                            <div class="mt-2 space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-warehouse w-5 mr-3 text-gray-400"></i>
                                    Inventory
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-truck w-5 mr-3 text-gray-400"></i>
                                    Supply Chain
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-chart-pie w-5 mr-3 text-gray-400"></i>
                                    Analytics
                                </a>
                            </div>
                        </div>
                        
                        <!-- Settings -->
                        <div class="pt-6">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Settings</h3>
                            <div class="mt-2 space-y-1">
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-cog w-5 mr-3 text-gray-400"></i>
                                    System
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-shield-alt w-5 mr-3 text-gray-400"></i>
                                    Security
                                </a>
                                <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                                    <i class="fas fa-headset w-5 mr-3 text-gray-400"></i>
                                    Support
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                
                <!-- User Profile -->
                <div class="px-4 pt-4 border-t border-gray-200">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=1e40af&color=fff" 
                             alt="John Doe" class="w-9 h-9 rounded-full">
                        <div class="ml-3 flex-1">
                            <p class="text-sm font-medium text-gray-900">John Doe</p>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="lg:pl-64 flex flex-col flex-1">
            <!-- Header -->
            <header class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <!-- Left section -->
                        <div class="flex items-center">
                            <button class="lg:hidden text-gray-500 hover:text-gray-700 mr-4">
                                <i class="fas fa-bars text-xl"></i>
                            </button>
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900">Dashboard Overview</h2>
                                <p class="text-sm text-gray-500">Welcome back, John • Today is Friday, June 16, 2023</p>
                            </div>
                        </div>
                        
                        <!-- Right section -->
                        <div class="flex items-center space-x-4">
                            <!-- Search -->
                            <div class="hidden md:block relative">
                                <input type="text" 
                                       placeholder="Search reports, employees, projects..." 
                                       class="w-72 pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            
                            <!-- Notifications -->
                            <div class="relative">
                                <button class="relative p-2 text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-bell text-lg"></i>
                                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                                </button>
                            </div>
                            
                            <!-- Quick Actions -->
                            <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition flex items-center">
                                <i class="fas fa-plus mr-2"></i>
                                <span class="hidden md:inline">New Report</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Revenue Card -->
                    <div class="bg-white rounded-xl border border-gray-200 p-6 card-hover slide-up" style="animation-delay: 0.1s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Total Revenue</p>
                                <h3 class="text-2xl font-bold text-gray-900">$124,580</h3>
                            </div>
                            <div class="p-3 bg-blue-50 rounded-lg">
                                <i class="fas fa-dollar-sign text-blue-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 font-medium flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>18.2%
                            </span>
                            <span class="text-gray-500 ml-2">vs last month</span>
                        </div>
                    </div>
                    
                    <!-- Projects Card -->
                    <div class="bg-white rounded-xl border border-gray-200 p-6 card-hover slide-up" style="animation-delay: 0.2s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Active Projects</p>
                                <h3 class="text-2xl font-bold text-gray-900">24</h3>
                            </div>
                            <div class="p-3 bg-purple-50 rounded-lg">
                                <i class="fas fa-briefcase text-purple-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500">
                            8 completed this month
                        </div>
                    </div>
                    
                    <!-- Employees Card -->
                    <div class="bg-white rounded-xl border border-gray-200 p-6 card-hover slide-up" style="animation-delay: 0.3s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Total Employees</p>
                                <h3 class="text-2xl font-bold text-gray-900">247</h3>
                            </div>
                            <div class="p-3 bg-green-50 rounded-lg">
                                <i class="fas fa-users text-green-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 font-medium flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>15
                            </span>
                            <span class="text-gray-500 ml-2">new hires</span>
                        </div>
                    </div>
                    
                    <!-- Performance Card -->
                    <div class="bg-white rounded-xl border border-gray-200 p-6 card-hover slide-up" style="animation-delay: 0.4s">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Performance Rate</p>
                                <h3 class="text-2xl font-bold text-gray-900">94.5%</h3>
                            </div>
                            <div class="p-3 bg-orange-50 rounded-lg">
                                <i class="fas fa-chart-line text-orange-600 text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 font-medium flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>2.4%
                            </span>
                            <span class="text-gray-500 ml-2">vs last month</span>
                        </div>
                    </div>
                </div>
                
                <!-- Charts and Activities -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Revenue Chart -->
                    <div class="lg:col-span-2 bg-white rounded-xl border border-gray-200 p-6 fade-in">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900">Revenue Overview</h3>
                            <div class="flex items-center space-x-2">
                                <select class="text-sm border border-gray-300 rounded-lg px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>Last 6 months</option>
                                    <option>Last year</option>
                                    <option>Last 3 years</option>
                                </select>
                                <button class="text-sm text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="h-64">
                            <!-- Chart bars -->
                            <div class="flex items-end h-48 space-x-1 mt-4">
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-gradient-to-t from-blue-500 to-blue-300 rounded-t-lg mb-2 chart-bar" style="height: 60%; animation-delay: 0.1s"></div>
                                    <span class="text-xs text-gray-500">Jan</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-gradient-to-t from-blue-500 to-blue-300 rounded-t-lg mb-2 chart-bar" style="height: 80%; animation-delay: 0.2s"></div>
                                    <span class="text-xs text-gray-500">Feb</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-gradient-to-t from-blue-500 to-blue-300 rounded-t-lg mb-2 chart-bar" style="height: 45%; animation-delay: 0.3s"></div>
                                    <span class="text-xs text-gray-500">Mar</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-gradient-to-t from-blue-500 to-blue-300 rounded-t-lg mb-2 chart-bar" style="height: 70%; animation-delay: 0.4s"></div>
                                    <span class="text-xs text-gray-500">Apr</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-gradient-to-t from-blue-500 to-blue-300 rounded-t-lg mb-2 chart-bar" style="height: 65%; animation-delay: 0.5s"></div>
                                    <span class="text-xs text-gray-500">May</span>
                                </div>
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-full bg-gradient-to-t from-blue-500 to-blue-300 rounded-t-lg mb-2 chart-bar" style="height: 85%; animation-delay: 0.6s"></div>
                                    <span class="text-xs text-gray-500">Jun</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="bg-white rounded-xl border border-gray-200 p-6 fade-in">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Activity</h3>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-800">View all</a>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                                        <i class="fas fa-check text-green-600"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">Project "Alpha" completed successfully</p>
                                    <p class="text-xs text-gray-500">By Sarah Johnson • 2 hours ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                        <i class="fas fa-user-plus text-blue-600"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">New employee joined the team</p>
                                    <p class="text-xs text-gray-500">Michael Chen, Software Developer • 5 hours ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                        <i class="fas fa-file-invoice-dollar text-purple-600"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">Invoice #INV-0042 has been paid</p>
                                    <p class="text-xs text-gray-500">Client: Tech Solutions Inc. • 1 day ago</p>
                                </div>
                            </div>
                            
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center">
                                        <i class="fas fa-chart-line text-orange-600"></i>
                                    </div>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">Monthly performance report generated</p>
                                    <p class="text-xs text-gray-500">Q2 2023 Analysis • 2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projects Table -->
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden fade-in">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Active Projects</h3>
                                <p class="text-sm text-gray-500">Track and manage ongoing projects</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <button class="px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg hover:bg-gray-50 transition">
                                    <i class="fas fa-filter mr-2"></i>Filter
                                </button>
                                <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">
                                    <i class="fas fa-plus mr-2"></i>New Project
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto custom-scroll">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Row 1 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-globe text-blue-600"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">Website Redesign</div>
                                                <div class="text-xs text-gray-500">Marketing Campaign</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Marketing</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-32">
                                            <div class="progress-bar">
                                                <div class="progress-fill bg-green-600" style="width: 85%"></div>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1">85% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            <span class="status-indicator status-active"></span>On Track
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Jun 15, 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                <!-- Row 2 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-mobile-alt text-purple-600"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">Mobile App Development</div>
                                                <div class="text-xs text-gray-500">Customer Platform</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">IT Department</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-32">
                                            <div class="progress-bar">
                                                <div class="progress-fill bg-blue-600" style="width: 65%"></div>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1">65% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            <span class="status-indicator status-pending"></span>In Progress
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Aug 30, 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                <!-- Row 3 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-box-open text-green-600"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">Product Launch</div>
                                                <div class="text-xs text-gray-500">New Line Release</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Sales</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-32">
                                            <div class="progress-bar">
                                                <div class="progress-fill bg-purple-600" style="width: 42%"></div>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1">42% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            <span class="status-indicator status-active"></span>Planning
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Oct 12, 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                                <!-- Row 4 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-cogs text-orange-600"></i>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">ERP Implementation</div>
                                                <div class="text-xs text-gray-500">System Upgrade</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Operations</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-32">
                                            <div class="progress-bar">
                                                <div class="progress-fill bg-orange-600" style="width: 30%"></div>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-1">30% complete</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            <span class="status-indicator status-inactive"></span>Delayed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Dec 20, 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table Footer -->
                    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                Showing <span class="font-medium">4</span> of <span class="font-medium">24</span> projects
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="px-3 py-1.5 border border-gray-300 rounded text-sm hover:bg-gray-100 transition">
                                    Previous
                                </button>
                                <button class="px-3 py-1.5 bg-blue-600 text-white rounded text-sm hover:bg-blue-700 transition">
                                    1
                                </button>
                                <button class="px-3 py-1.5 border border-gray-300 rounded text-sm hover:bg-gray-100 transition">
                                    2
                                </button>
                                <button class="px-3 py-1.5 border border-gray-300 rounded text-sm hover:bg-gray-100 transition">
                                    3
                                </button>
                                <button class="px-3 py-1.5 border border-gray-300 rounded text-sm hover:bg-gray-100 transition">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 py-4 px-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="text-sm text-gray-500">
                        © 2023 Aqsa Group Management System. Version 3.2.1
                    </div>
                    <div class="flex space-x-4 mt-2 md:mt-0">
                        <a href="#" class="text-sm text-gray-500 hover:text-gray-700">Help Center</a>
                        <a href="#" class="text-sm text-gray-500 hover:text-gray-700">Privacy Policy</a>
                        <a href="#" class="text-sm text-gray-500 hover:text-gray-700">Terms of Service</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50" onclick="toggleMobileMenu()"></div>
        <div class="absolute left-0 top-0 bottom-0 w-64 bg-white transform transition-transform duration-300 ease-out -translate-x-full">
            <div class="p-6 h-full flex flex-col">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-700 to-blue-900 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold">AG</span>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">Aqsa Group</h2>
                            <p class="text-xs text-gray-500">Management</p>
                        </div>
                    </div>
                    <button onclick="toggleMobileMenu()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <!-- Mobile Navigation -->
                <nav class="flex-1 space-y-2">
                    <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-blue-700 bg-blue-50 rounded-lg">
                        <i class="fas fa-chart-line w-5 mr-3 text-blue-600"></i>
                        Dashboard
                    </a>
                    
                    <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-users w-5 mr-3 text-gray-400"></i>
                        Employees
                    </a>
                    
                    <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-briefcase w-5 mr-3 text-gray-400"></i>
                        Projects
                    </a>
                    
                    <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-chart-bar w-5 mr-3 text-gray-400"></i>
                        Reports
                    </a>
                    
                    <a href="#" class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-cog w-5 mr-3 text-gray-400"></i>
                        Settings
                    </a>
                </nav>
                
                <!-- User Info -->
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=1e40af&color=fff" 
                             alt="John Doe" class="w-9 h-9 rounded-full">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">John Doe</p>
                            <p class="text-xs text-gray-500">Administrator</p>
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
            
            // Add click handlers to table action buttons
            document.querySelectorAll('button.text-blue-600').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    alert('Edit functionality would open here');
                });
            });
            
            // Add animation delays for cards
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
            
            // Simple search functionality
            const searchInput = document.querySelector('input[type="text"]');
            if (searchInput) {
                searchInput.addEventListener('keyup', function(e) {
                    if (e.key === 'Enter') {
                        alert(`Searching for: ${this.value}`);
                    }
                });
            }
            
            // Initialize chart animations
            setTimeout(() => {
                const chartBars = document.querySelectorAll('.chart-bar');
                chartBars.forEach((bar, index) => {
                    bar.style.animationDelay = `${index * 0.1}s`;
                });
            }, 300);
        });
        
        // Status toggle function (for demo)
        function toggleStatus(button) {
            const statusSpan = button.closest('td').querySelector('span');
            const indicator = statusSpan.querySelector('.status-indicator');
            const currentStatus = statusSpan.textContent.trim();
            
            if (currentStatus.includes('On Track')) {
                statusSpan.className = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800';
                indicator.className = 'status-indicator status-pending';
                statusSpan.innerHTML = '<span class="status-indicator status-pending"></span>In Progress';
            } else if (currentStatus.includes('In Progress')) {
                statusSpan.className = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800';
                indicator.className = 'status-indicator status-inactive';
                statusSpan.innerHTML = '<span class="status-indicator status-inactive"></span>Delayed';
            } else {
                statusSpan.className = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800';
                indicator.className = 'status-indicator status-active';
                statusSpan.innerHTML = '<span class="status-indicator status-active"></span>On Track';
            }
        }
    </script>
</body>
</html>