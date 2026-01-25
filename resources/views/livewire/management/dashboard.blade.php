<div>
       <!-- Welcome Message -->
                <div class="mb-6 lg:mb-8">
                    @php
                        $currentUser = Auth::guard('management')->user();
                    @endphp
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-2">Welcome back, {{ $currentUser->name }}!</h1>
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
</div>