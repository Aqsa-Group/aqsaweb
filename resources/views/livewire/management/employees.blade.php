<div>
    <div class="space-y-6">
        {{-- Success Alert --}}
        @if (session()->has('success'))
            <div class="animate-slide-up p-4 gradient-green text-white rounded-xl shadow-lg flex items-center justify-between">
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
        <div class="main-card rounded-xl overflow-hidden shadow-sm card-hover border border-gray-200 dark:border-gray-800">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                        <i class="fas {{ $employee_id ? 'fa-user-edit' : 'fa-user-plus' }} mr-3 text-blue-500"></i>
                        {{ $employee_id ? 'Edit Employee' : 'Create New Employee' }}
                    </h3>
                    @if($employee_id)
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs font-medium rounded-full">
                            Editing Mode
                        </span>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Name --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-user text-gray-400 mr-1"></i> First Name
                        </label>
                        <div class="relative">
                            <input wire:model="name" type="text" placeholder="Enter first name"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-user absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-user-tag text-gray-400 mr-1"></i> Last Name
                        </label>
                        <div class="relative">
                            <input wire:model="lastname" type="text" placeholder="Enter last name"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-user-tag absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('lastname') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Phone --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-phone text-gray-400 mr-1"></i> Phone
                        </label>
                        <div class="relative">
                            <input wire:model="phone" type="text" placeholder="Enter phone number"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-phone absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                    </div>

                    {{-- Age --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-birthday-cake text-gray-400 mr-1"></i> Age
                        </label>
                        <div class="relative">
                            <input wire:model="age" type="number" min="18" max="100" placeholder="Enter age"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-birthday-cake absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                    </div>

                    {{-- Gender --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-venus-mars text-gray-400 mr-1"></i> Gender
                        </label>
                        <div class="relative">
                            <select wire:model="gender"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors appearance-none">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <i class="fas fa-venus-mars absolute left-3 top-3.5 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('gender') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Department --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-building text-gray-400 mr-1"></i> Department
                        </label>
                        <div class="relative">
                            <select wire:model="department"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors appearance-none">
                                <option value="">Select Department</option>
                                @foreach($departments as $dep)
                                    <option value="{{ $dep }}">{{ $dep }}</option>
                                @endforeach
                            </select>
                            <i class="fas fa-building absolute left-3 top-3.5 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('department') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Degree --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-graduation-cap text-gray-400 mr-1"></i> Degree
                        </label>
                        <div class="relative">
                            <input wire:model="degree" type="text" placeholder="Enter degree/qualification"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-graduation-cap absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('degree') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Section --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-sitemap text-gray-400 mr-1"></i> Section
                        </label>
                        <div class="relative">
                            <input wire:model="section" type="text" placeholder="Enter section"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-sitemap absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                    </div>

                    {{-- Contract Start --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-calendar-plus text-gray-400 mr-1"></i> Contract Start
                        </label>
                        <input wire:model="contract_start" type="date"
                            class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                        @error('contract_start') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Contract End --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-calendar-check text-gray-400 mr-1"></i> Contract End
                        </label>
                        <input wire:model="contract_end" type="date"
                            class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                        @error('contract_end') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Address --}}
                    <div class="space-y-2 lg:col-span-3">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-map-marker-alt text-gray-400 mr-1"></i> Address
                        </label>
                        <textarea wire:model="address" rows="3" placeholder="Enter full address"
                            class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors"></textarea>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        <span>Fill all required fields marked with asterisks (*)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        @if ($employee_id)
                            <button wire:click="update" 
                                class="px-6 py-3 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-save mr-2"></i> Update Employee
                            </button>
                            <button wire:click="resetForm" 
                                class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors flex items-center">
                                <i class="fas fa-times mr-2"></i> Cancel
                            </button>
                        @else
                            <button wire:click="store" 
                                class="px-6 py-3 gradient-green text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-plus mr-2"></i> Create Employee
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
                            Employees List
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            Showing {{ $employees->count() }} employee(s) out of {{ $employees->total() }}
                        </p>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search employees..." wire:model.debounce.300ms="search"
                            class="w-full sm:w-64 pl-10 pr-4 py-2 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-sm text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900">
                        <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-user mr-2"></i> Employee
                                </div>
                            </th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-building mr-2"></i> Department
                                </div>
                            </th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-phone mr-2"></i> Contact
                                </div>
                            </th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar-alt mr-2"></i> Contract
                                </div>
                            </th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-cog mr-2"></i> Actions
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                        @forelse ($employees as $emp)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 gradient-blue rounded-lg flex items-center justify-center mr-3">
                                            <span class="text-white font-bold text-sm">
                                                {{ strtoupper(substr($emp->name, 0, 1)) }}{{ strtoupper(substr($emp->lastname, 0, 1)) }}
                                            </span>
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900 dark:text-white">
                                                {{ $emp->name }} {{ $emp->lastname }}
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ $emp->degree }} • {{ $emp->gender }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="text-sm text-gray-900 dark:text-white">{{ $emp->department }}</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">{{ $emp->section }}</div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="text-sm text-gray-900 dark:text-white">{{ $emp->phone }}</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">{{ $emp->age }} years</div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        {{ \Carbon\Carbon::parse($emp->contract_start)->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs {{ \Carbon\Carbon::parse($emp->contract_end)->isPast() ? 'text-red-500' : 'text-green-500' }}">
                                        {{ \Carbon\Carbon::parse($emp->contract_end)->format('M d, Y') }}
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <button wire:click="edit({{ $emp->id }})" 
                                            class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 hover:bg-blue-200 dark:hover:bg-blue-800 flex items-center justify-center transition-colors"
                                            title="Edit Employee">
                                            <i class="fas fa-edit text-sm"></i>
                                        </button>
                                        <button onclick="confirmDeleteEmp({{ $emp->id }}, '{{ $emp->name }} {{ $emp->lastname }}')"
                                            class="w-8 h-8 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800 flex items-center justify-center transition-colors"
                                            title="Delete Employee">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                        <button onclick="showEmployeeDetails({{ $emp->id }})"
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
                                        <div class="w-16 h-16 gradient-blue rounded-full flex items-center justify-center mb-4">
                                            <i class="fas fa-users text-white text-xl"></i>
                                        </div>
                                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No Employees Found</h4>
                                        <p class="text-gray-500 dark:text-gray-400 mb-6">
                                            @if($search)
                                                No results for "{{ $search }}"
                                            @else
                                                Start by creating your first employee
                                            @endif
                                        </p>
                                        <button wire:click="resetForm"
                                            class="px-6 py-2 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                            <i class="fas fa-plus mr-2"></i> Create First Employee
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($employees->hasPages())
                <div class="p-6 border-t border-gray-100 dark:border-gray-800">
                    {{ $employees->links() }}
                </div>
            @endif
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    <div id="deleteEmpModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-md w-full transform transition-all animate-slide-up">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 dark:bg-red-900/50 rounded-full">
                    <i class="fas fa-exclamation-triangle text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-2">Confirm Deletion</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center mb-6">
                    Are you sure you want to delete employee "<span id="deleteEmpName" class="font-semibold text-gray-900 dark:text-white"></span>"? This action cannot be undone.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button onclick="closeDeleteEmpModal()"
                        class="flex-1 px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Cancel
                    </button>
                    <button id="confirmDeleteEmpBtn"
                        class="flex-1 px-4 py-3 gradient-red text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fas fa-trash mr-2"></i> Delete Employee
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Employee Details Modal --}}
    <div id="empDetailsModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-lg w-full transform transition-all animate-slide-up">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                        <i class="fas fa-id-card mr-3 text-blue-500"></i>
                        Employee Details
                    </h3>
                    <button onclick="closeEmpDetails()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div id="empDetailsContent">
                    {{-- Employee details will be loaded here --}}
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Delete confirmation modal for employees
        let empToDeleteId = null;
        
        function confirmDeleteEmp(id, name) {
            empToDeleteId = id;
            document.getElementById('deleteEmpName').textContent = name;
            document.getElementById('deleteEmpModal').classList.remove('hidden');
            document.getElementById('confirmDeleteEmpBtn').onclick = function() {
                @this.call('delete', empToDeleteId);
                closeDeleteEmpModal();
            };
        }
        
        function closeDeleteEmpModal() {
            document.getElementById('deleteEmpModal').classList.add('hidden');
            empToDeleteId = null;
        }

        // Employee details modal
        function showEmployeeDetails(employeeId) {
            // Show loading state
            document.getElementById('empDetailsContent').innerHTML = `
                <div class="flex items-center justify-center py-12">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
                </div>
            `;
            
            document.getElementById('empDetailsModal').classList.remove('hidden');
            
            // Get employee data from table row
            setTimeout(() => {
                const empRow = document.querySelector(`button[onclick*="showEmployeeDetails(${employeeId})"]`).closest('tr');
                const name = empRow.querySelector('.font-medium').textContent;
                const details = empRow.querySelectorAll('.text-sm.text-gray-900, .text-xs');
                const department = empRow.querySelector('td:nth-child(2) .text-sm').textContent;
                const section = empRow.querySelector('td:nth-child(2) .text-xs').textContent;
                const phone = empRow.querySelector('td:nth-child(3) .text-sm').textContent;
                const age = empRow.querySelector('td:nth-child(3) .text-xs').textContent;
                const contractStart = empRow.querySelector('td:nth-child(4) .text-sm').textContent;
                const contractEnd = empRow.querySelector('td:nth-child(4) .text-xs').textContent;
                const degree = details[1]?.textContent.split('•')[0]?.trim() || '';
                const gender = details[1]?.textContent.split('•')[1]?.trim() || '';
                
                document.getElementById('empDetailsContent').innerHTML = `
                    <div class="space-y-6">
                        <div class="flex items-center justify-center mb-6">
                            <div class="w-24 h-24 gradient-blue rounded-full flex items-center justify-center text-4xl text-white font-bold">
                                ${name.split(' ').map(n => n.charAt(0).toUpperCase()).join('')}
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Full Name</p>
                                <p class="font-medium text-gray-900 dark:text-white">${name}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Gender</p>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300">
                                    ${gender || 'Not specified'}
                                </span>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Phone</p>
                                <p class="font-medium text-gray-900 dark:text-white">${phone || 'Not specified'}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Age</p>
                                <p class="font-medium text-gray-900 dark:text-white">${age || 'Not specified'}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Department</p>
                                <p class="font-medium text-gray-900 dark:text-white">${department}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Section</p>
                                <p class="font-medium text-gray-900 dark:text-white">${section || 'Not specified'}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Degree</p>
                                <p class="font-medium text-gray-900 dark:text-white">${degree || 'Not specified'}</p>
                            </div>
                        </div>
                        
                        <div class="pt-6 border-t border-gray-100 dark:border-gray-800 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500 dark:text-gray-400">Contract Start</span>
                                <span class="font-medium text-gray-900 dark:text-white">${contractStart}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500 dark:text-gray-400">Contract End</span>
                                <span class="font-medium ${contractEnd.includes('ago') ? 'text-red-500' : 'text-green-500'}">${contractEnd}</span>
                            </div>
                        </div>
                    </div>
                `;
            }, 500);
        }
        
        function closeEmpDetails() {
            document.getElementById('empDetailsModal').classList.add('hidden');
        }

        // Close modals on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDeleteEmpModal();
                closeEmpDetails();
            }
        });

        // Close modals on outside click
        document.addEventListener('click', function(e) {
            if (e.target.id === 'deleteEmpModal') closeDeleteEmpModal();
            if (e.target.id === 'empDetailsModal') closeEmpDetails();
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