<div>
    <div class="space-y-6">
        {{-- Alert --}}
        @if (session()->has('success'))
        <div
            class="animate-slide-up p-4 gradient-green text-white rounded-xl shadow-lg flex items-center justify-between">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-xl"></i>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-white/80 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
        @endif

        {{-- Form Card --}}
        {{-- Form Card --}}
        <div
            class="main-card rounded-xl overflow-hidden shadow-sm card-hover border border-gray-200 dark:border-gray-800">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                        <i class="fas {{ $user_id ? 'fa-user-edit' : 'fa-user-plus' }} mr-3 text-blue-500"></i>
                        {{ $user_id ? 'Edit User' : 'Create New User' }}
                    </h3>
                    @if($user_id)
                    <span
                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs font-medium rounded-full">
                        Editing Mode
                    </span>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Employee Selection --}}
                    {{-- Employee Selection --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-user text-gray-400 mr-1"></i> Employee
                        </label>
                        <div class="relative">
                            <select wire:model.live="employee_id"
                                class="w-full pl-10 pr-4 py-3 appearance-none bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                                <option value="">Select employee</option>
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">
                                    {{ $employee->name }} {{ $employee->lastname ?? '' }}
                                    @if($employee->department)
                                    - {{ $employee->department }}
                                    @endif
                                </option>
                                @endforeach
                            </select>
                            <i class="fas fa-users absolute left-3 top-3.5 text-gray-400"></i>
                            <i
                                class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('employee_id')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    {{-- Auto-filled Department --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-building text-gray-400 mr-1"></i> Department
                        </label>
                        <div class="relative">
                            <input type="text" wire:model="department"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors"
                                placeholder="Auto-filled from employee" readonly>
                            <i class="fas fa-building absolute left-3 top-3.5 text-gray-400"></i>

                        </div>
                        @error('department') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Auto-filled Section --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-sitemap text-gray-400 mr-1"></i> Section
                        </label>
                        <div class="relative">
                            <input type="text" wire:model="section"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors"
                                placeholder="Auto-filled from employee" readonly>
                            <i class="fas fa-sitemap absolute left-3 top-3.5 text-gray-400"></i>

                        </div>
                        @error('section') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Username --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-at text-gray-400 mr-1"></i> Username
                        </label>
                        <div class="relative">
                            <input wire:model="username" type="text" placeholder="Enter username"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-at absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('username') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Password (only for new users) --}}
                    @if(!$user_id)
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-lock text-gray-400 mr-1"></i> Password
                        </label>
                        <div class="relative">
                            <input wire:model="password" type="password" placeholder="Enter password (default: 123456)"
                                class="w-full pl-10 pr-10 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-lock absolute left-3 top-3.5 text-gray-400"></i>
                            <button type="button" onclick="togglePassword(this)"
                                class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>

                        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    @else
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-lock text-gray-400 mr-1"></i> New Password
                        </label>
                        <div class="relative">
                            <input wire:model="password" type="password" placeholder="Leave empty to keep current"
                                class="w-full pl-10 pr-10 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-lock absolute left-3 top-3.5 text-gray-400"></i>
                            <button type="button" onclick="togglePassword(this)"
                                class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                            Enter new password only if you want to change it
                        </p>
                        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    @endif

                    {{-- Role --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-user-tag text-gray-400 mr-1"></i> Role
                        </label>
                        <div class="relative">
                            <select wire:model="role"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors appearance-none">
                                <option value="">Select Role</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Manager">Manager</option>
                                <option value="HR Manager">HR Manager</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Employee" selected>Employee</option>
                                <option value="Viewer">Viewer</option>
                            </select>
                            <i class="fas fa-user-tag absolute left-3 top-3.5 text-gray-400"></i>
                            <i
                                class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('role') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Job Title --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-briefcase text-gray-400 mr-1"></i> Job Title
                        </label>
                        <div class="relative">
                            <input wire:model="job" type="text" placeholder="Enter job title"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-briefcase absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('job') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>



                <div
                    class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        <span>
                            @if($employee_id)
                            Department and Section will be auto-filled from the selected employee.
                            @else
                            Select an employee to auto-fill Department and Section.
                            @endif
                        </span>
                    </div>
                    <div class="flex items-center gap-3">
                        @if ($user_id)
                        <button wire:click="update"
                            class="px-6 py-3 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                            <i class="fas fa-save mr-2"></i> Update User
                        </button>
                        <button wire:click="resetForm"
                            class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors flex items-center">
                            <i class="fas fa-times mr-2"></i> Cancel
                        </button>
                        @else
                        <button wire:click="store"
                            class="px-6 py-3 gradient-green text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                            <i class="fas fa-plus mr-2"></i> Create User
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        {{-- Table Card --}}
        <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
            <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-users mr-3 text-blue-500"></i>
                            Users List
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            Showing {{ $users->count() }} user(s) in the system
                        </p>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search users..." wire:model.debounce.300ms="search"
                            class="w-full sm:w-64 pl-10 pr-4 py-2 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-sm text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900">
                        <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-user mr-2"></i> User
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-user-tag mr-2"></i> Role
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-building mr-2"></i> Department
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase mr-2"></i> Job Title
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-2"></i> Actions
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                        @forelse ($users as $user)
                        <tr class="table-row hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 gradient-blue rounded-lg flex items-center justify-center mr-3">
                                        <span class="text-white font-bold text-sm">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </span>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-900 dark:text-white">{{ $user->name }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $user->username }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                            {{ $user->role == 'Administrator' ? 'bg-purple-100 dark:bg-purple-900/50 text-purple-800 dark:text-purple-300' : 
                                            ($user->role == 'Manager' ? 'bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300' :
                                            ($user->role == 'Supervisor' ? 'bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300' :
                                            'bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-300')) }}">
                                    <i class="fas fa-user-tag mr-1 text-xs"></i>
                                    {{ $user->role }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="text-sm text-gray-900 dark:text-white">{{ $user->department }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">{{ $user->section }}</div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="text-sm text-gray-900 dark:text-white">{{ $user->job }}</div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-2">
                                    <button wire:click="edit({{ $user->id }})"
                                        class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 hover:bg-blue-200 dark:hover:bg-blue-800 flex items-center justify-center transition-colors"
                                        title="Edit User">
                                        <i class="fas fa-edit text-sm"></i>
                                    </button>
                                    <button onclick="confirmDelete({{ $user->id }}, '{{ $user->name }}')"
                                        class="w-8 h-8 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800 flex items-center justify-center transition-colors"
                                        title="Delete User">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                    <button onclick="showUserDetails({{ $user->id }})"
                                        class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 flex items-center justify-center transition-colors"
                                        title="View Details">
                                        <i class="fas fa-eye text-sm"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="py-12 px-6 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div
                                        class="w-16 h-16 gradient-blue rounded-full flex items-center justify-center mb-4">
                                        <i class="fas fa-users text-white text-xl"></i>
                                    </div>
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No Users Found
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 mb-6">Start by creating your first user
                                    </p>
                                    <button wire:click="resetForm"
                                        class="px-6 py-2 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                        <i class="fas fa-plus mr-2"></i> Create First User
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($users->hasPages())
            <div class="p-6 border-t border-gray-100 dark:border-gray-800">
                {{ $users->links() }}
            </div>
            @endif
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    <div id="deleteModal"
        class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div
            class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-md w-full transform transition-all animate-slide-up">
            <div class="p-6">
                <div
                    class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 dark:bg-red-900/50 rounded-full">
                    <i class="fas fa-exclamation-triangle text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-2">Confirm Deletion</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center mb-6">
                    Are you sure you want to delete user "<span id="deleteUserName"
                        class="font-semibold text-gray-900 dark:text-white"></span>"? This action cannot be undone.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button onclick="closeDeleteModal()"
                        class="flex-1 px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Cancel
                    </button>
                    <button id="confirmDeleteBtn"
                        class="flex-1 px-4 py-3 gradient-red text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fas fa-trash mr-2"></i> Delete User
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- User Details Modal --}}
    <div id="userDetailsModal"
        class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div
            class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-lg w-full transform transition-all animate-slide-up">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                        <i class="fas fa-user-circle mr-3 text-blue-500"></i>
                        User Details
                    </h3>
                    <button onclick="closeUserDetails()"
                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div id="userDetailsContent">
                    {{-- User details will be loaded here --}}
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Password toggle functionality
            function togglePassword(button) {
                const input = button.closest('.relative').querySelector('input[type="password"], input[type="text"]');
                const icon = button.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }

            // Delete confirmation modal
            let userToDeleteId = null;
            
            function confirmDelete(id, name) {
                userToDeleteId = id;
                document.getElementById('deleteUserName').textContent = name;
                document.getElementById('deleteModal').classList.remove('hidden');
                document.getElementById('confirmDeleteBtn').onclick = function() {
                    @this.call('delete', userToDeleteId);
                    closeDeleteModal();
                };
            }
            
            function closeDeleteModal() {
                document.getElementById('deleteModal').classList.add('hidden');
                userToDeleteId = null;
            }

            // User details modal
            function showUserDetails(userId) {
                // Show loading state
                document.getElementById('userDetailsContent').innerHTML = `
                    <div class="flex items-center justify-center py-12">
                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
                    </div>
                `;
                
                document.getElementById('userDetailsModal').classList.remove('hidden');
                
                // Get user data from table row
                setTimeout(() => {
                    const userRow = document.querySelector(`button[onclick*="showUserDetails(${userId})"]`).closest('tr');
                    const name = userRow.querySelector('.font-medium').textContent;
                    const username = userRow.querySelector('.text-sm.text-gray-500').textContent;
                    const role = userRow.querySelector('.inline-flex span').textContent.trim();
                    const department = userRow.querySelector('td:nth-child(3) .text-sm').textContent;
                    const section = userRow.querySelector('td:nth-child(3) .text-xs').textContent;
                    const job = userRow.querySelector('td:nth-child(4) .text-sm').textContent;
                    
                    document.getElementById('userDetailsContent').innerHTML = `
                        <div class="space-y-6">
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-24 h-24 gradient-blue rounded-full flex items-center justify-center text-4xl text-white font-bold">
                                    ${name.charAt(0).toUpperCase()}
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Full Name</p>
                                    <p class="font-medium text-gray-900 dark:text-white">${name}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Username</p>
                                    <p class="font-medium text-gray-900 dark:text-white">${username}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Role</p>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300">
                                        ${role}
                                    </span>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Department</p>
                                    <p class="font-medium text-gray-900 dark:text-white">${department}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Section</p>
                                    <p class="font-medium text-gray-900 dark:text-white">${section}</p>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Job Title</p>
                                    <p class="font-medium text-gray-900 dark:text-white">${job}</p>
                                </div>
                            </div>
                            
                            <div class="pt-6 border-t border-gray-100 dark:border-gray-800 space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Account Created</span>
                                    <span class="font-medium text-gray-900 dark:text-white">Today</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Last Login</span>
                                    <span class="font-medium text-gray-900 dark:text-white">Never</span>
                                </div>
                            </div>
                        </div>
                    `;
                }, 500);
            }
            
            function closeUserDetails() {
                document.getElementById('userDetailsModal').classList.add('hidden');
            }

            // Close modals on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeDeleteModal();
                    closeUserDetails();
                }
            });

            // Close modals on outside click
            document.addEventListener('click', function(e) {
                if (e.target.id === 'deleteModal') closeDeleteModal();
                if (e.target.id === 'userDetailsModal') closeUserDetails();
            });

            // Tooltip functionality
            document.addEventListener('DOMContentLoaded', function() {
                const tooltips = document.querySelectorAll('[title]');
                tooltips.forEach(tooltip => {
                    tooltip.addEventListener('mouseenter', function(e) {
                        const title = this.getAttribute('title');
                        const tooltipEl = document.createElement('div');
                        tooltipEl.className = 'fixed z-50 px-2 py-1 text-xs font-medium text-white bg-gray-900 dark:bg-gray-700 rounded shadow-lg';
                        tooltipEl.textContent = title;
                        tooltipEl.id = 'dynamic-tooltip';
                        
                        document.body.appendChild(tooltipEl);
                        
                        const rect = this.getBoundingClientRect();
                        tooltipEl.style.left = rect.left + rect.width/2 - tooltipEl.offsetWidth/2 + 'px';
                        tooltipEl.style.top = rect.top - tooltipEl.offsetHeight - 5 + 'px';
                    });
                    
                    tooltip.addEventListener('mouseleave', function() {
                        const tooltipEl = document.getElementById('dynamic-tooltip');
                        if (tooltipEl) {
                            tooltipEl.remove();
                        }
                    });
                });

                // Livewire success message auto-hide
                @if (session()->has('success'))
                    setTimeout(() => {
                        const alerts = document.querySelectorAll('.gradient-green');
                        alerts.forEach(alert => {
                            alert.style.opacity = '0';
                            alert.style.transition = 'opacity 0.5s ease';
                            setTimeout(() => alert.remove(), 500);
                        });
                    }, 5000);
                @endif
            });
    </script>

    <style>
        .gradient-red {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .dark select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        }

        /* Custom scrollbar for table */
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: rgba(241, 245, 249, 0.3);
            border-radius: 3px;
        }

        .dark .overflow-x-auto::-webkit-scrollbar-track {
            background: rgba(30, 41, 59, 0.3);
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        .dark .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #475569;
        }
    </style>
    @endpush
</div>