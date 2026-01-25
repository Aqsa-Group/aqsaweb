<div>
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
</div>