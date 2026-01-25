<div>
    <div class="space-y-6">

        {{-- Alert --}}
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
                        <i class="fas {{ $department_id ? 'fa-edit' : 'fa-plus' }} mr-3 text-blue-500"></i>
                        {{ $department_id ? 'Edit Department' : 'Create New Department' }}
                    </h3>
                    @if($department_id)
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs font-medium rounded-full">
                            Editing Mode
                        </span>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Department Name --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-building text-gray-400 mr-1"></i> Department Name
                        </label>
                        <div class="relative">
                            <input wire:model="name" type="text" placeholder="Enter department name"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-building absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    {{-- Coach --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-chalkboard-teacher text-gray-400 mr-1"></i> Coach
                        </label>
                        <div class="relative">
                            <input wire:model="coach" type="text" placeholder="Enter coach name"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-chalkboard-teacher absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('coach') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    {{-- Members Number --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-users text-gray-400 mr-1"></i> Members Number
                        </label>
                        <div class="relative">
                            <input wire:model="members_number" type="number" placeholder="Enter number of members"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-users absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('members_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        <span>All fields are required</span>
                    </div>
                    <div class="flex items-center gap-3">
                        @if ($department_id)
                            <button wire:click="update" 
                                class="px-6 py-3 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-save mr-2"></i> Update
                            </button>
                            <button wire:click="resetForm" 
                                class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors flex items-center">
                                <i class="fas fa-times mr-2"></i> Cancel
                            </button>
                        @else
                            <button wire:click="store" 
                                class="px-6 py-3 gradient-green text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-plus mr-2"></i> Create
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Departments Table --}}
        <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800 mt-6">
            <div class="p-6 border-b border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                    <i class="fas fa-building mr-3 text-blue-500"></i> Departments List
                </h3>
                <div class="relative">
                    <input type="text" placeholder="Search departments..." wire:model="search"
                        class="w-full sm:w-64 pl-10 pr-4 py-2 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-sm text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900">
                    <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 dark:bg-gray-800/50">
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Department</th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Coach</th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Members</th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                        @forelse ($departments as $dep)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                                <td class="py-4 px-6 text-gray-900 dark:text-white">{{ $dep->name }}</td>
                                <td class="py-4 px-6 text-gray-900 dark:text-white">{{ $dep->coach }}</td>
                                <td class="py-4 px-6 text-gray-900 dark:text-white">{{ $dep->members_number }}</td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <button wire:click="edit({{ $dep->id }})"
                                            class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 hover:bg-blue-200 dark:hover:bg-blue-800 flex items-center justify-center transition-colors"
                                            title="Edit">
                                            <i class="fas fa-edit text-sm"></i>
                                        </button>
                                        <button onclick="confirmDelete({{ $dep->id }}, '{{ $dep->name }}')"
                                            class="w-8 h-8 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800 flex items-center justify-center transition-colors"
                                            title="Delete">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 px-6 text-center text-gray-500 dark:text-gray-400">
                                    No departments found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($departments->hasPages())
                <div class="p-6 border-t border-gray-100 dark:border-gray-800">
                    {{ $departments->links() }}
                </div>
            @endif
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-md w-full transform transition-all animate-slide-up">
            <div class="p-6 text-center">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 dark:bg-red-900/50 rounded-full">
                    <i class="fas fa-exclamation-triangle text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Confirm Deletion</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Are you sure you want to delete "<span id="deleteDepName" class="font-semibold text-gray-900 dark:text-white"></span>"?
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button onclick="closeDeleteModal()"
                        class="flex-1 px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Cancel
                    </button>
                    <button id="confirmDeleteBtn"
                        class="flex-1 px-4 py-3 gradient-red text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fas fa-trash mr-2"></i> Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        let depToDelete = null;

        function confirmDelete(id, name) {
            depToDelete = id;
            document.getElementById('deleteDepName').textContent = name;
            document.getElementById('deleteModal').classList.remove('hidden');

            // Use Livewire.emit instead of @this.call
            document.getElementById('confirmDeleteBtn').onclick = function() {
                Livewire.emit('deleteDepartment', depToDelete);
                closeDeleteModal();
            };
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            depToDelete = null;
        }

        // Close on Escape
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeDeleteModal();
        });
        // Close on outside click
        document.addEventListener('click', e => {
            if (e.target.id === 'deleteModal') closeDeleteModal();
        });
    </script>
    @endpush
</div>
