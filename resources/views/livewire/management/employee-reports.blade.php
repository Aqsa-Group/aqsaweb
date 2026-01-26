<div>
    <div class="space-y-6">
        {{-- Alerts --}}
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

        @if (session()->has('error'))
        <div
            class="animate-slide-up p-4 bg-red-500 text-white rounded-xl shadow-lg flex items-center justify-between">
            <div class="flex items-center">
                <i class="fas fa-exclamation-triangle mr-3 text-xl"></i>
                <span class="font-medium">{{ session('error') }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-white/80 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
        @endif


        @php

        $currentUser = Auth::guard('management')->user();

        @endphp


     @if ($currentUser->role === 'Manager' || $currentUser->role === 'HR Manager' ||
                                $currentUser->role === 'Administrator')


        {{-- Statistics Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Total Reports --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Reports</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ $reports->count() }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Reports</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-blue rounded-lg flex items-center justify-center">
                            <i class="fas fa-file-alt text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-chart-bar mr-1"></i> All employee reports
                    </div>
                </div>
            </div>

            {{-- This Month Reports --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">This Month</h3>
                            <div class="flex items-baseline mt-2">
                                @php
                                $monthCount = $reports->where('date', '>=', now()->startOfMonth())->count();
                                @endphp
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ $monthCount }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Reports</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-green rounded-lg flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-calendar mr-1"></i> {{ now()->format('F Y') }}
                    </div>
                </div>
            </div>

            {{-- Reports with Files --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">With Attachments</h3>
                            <div class="flex items-baseline mt-2">
                                @php
                                $withFiles = $reports->whereNotNull('file')->count();
                                @endphp
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ $withFiles }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Reports</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-orange rounded-lg flex items-center justify-center">
                            <i class="fas fa-paperclip text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-file-upload mr-1"></i> Reports with files
                    </div>
                </div>
            </div>

            {{-- Last Report --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Last Report</h3>
                            @php
                            $lastReport = $reports->first();
                            @endphp
                            <div class="mt-2">
                                @if($lastReport)
                                <div class="text-lg font-bold text-gray-900 dark:text-white truncate">
                                    {{ $lastReport->title }}
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $lastReport->date->format('M d, Y') }}
                                </div>
                                @else
                                <div class="text-lg font-bold text-gray-900 dark:text-white">No reports</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Yet</div>
                                @endif
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-purple rounded-lg flex items-center justify-center">
                            <i class="fas fa-history text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Form Card --}}
        <div
            class="main-card rounded-xl overflow-hidden shadow-sm card-hover border border-gray-200 dark:border-gray-800">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                        <i class="fas {{ $report_id ? 'fa-edit' : 'fa-file-medical' }} mr-3 text-blue-500"></i>
                        {{ $report_id ? 'Edit Report' : 'Create New Report' }}
                    </h3>
                    @if($report_id)
                    <span
                        class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs font-medium rounded-full">
                        Editing Mode
                    </span>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Title --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-heading text-gray-400 mr-1"></i> Title
                        </label>
                        <div class="relative">
                            <input wire:model="title" type="text" placeholder="Enter report title"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-heading absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>


                    {{-- File Upload --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-paperclip text-gray-400 mr-1"></i> Attachment
                        </label>
                        <div class="relative">
                            <input wire:model="file" type="file"
                                class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                        @error('file') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                        @if($existing_file)
                        <div class="mt-2 p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <i class="fas fa-file text-blue-500 mr-2"></i>
                                    <span class="text-sm text-blue-700 dark:text-blue-300 truncate">
                                        {{ basename($existing_file) }}
                                    </span>
                                </div>
                                <a href="{{ Storage::url($existing_file) }}" target="_blank"
                                    class="text-blue-600 hover:text-blue-800 dark:text-blue-400">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>

                    {{-- Date --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-calendar text-gray-400 mr-1"></i> Date
                        </label>
                        <input wire:model="date" type="date" readonly
                            class="w-full  px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                        @error('date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>


                    {{-- Description --}}
                    <div class="space-y-2 lg:col-span-3">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-align-left text-gray-400 mr-1"></i> Description
                        </label>
                        <textarea wire:model="description" rows="3" placeholder="Enter report description"
                            class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors"></textarea>
                    </div>
                </div>

                <div
                    class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        <span>Reports support file attachments up to 10MB</span>
                    </div>
                    <div class="flex items-center gap-3">
                        @if ($report_id)
                        <button wire:click="update"
                            class="px-6 py-3 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                            <i class="fas fa-save mr-2"></i> Update Report
                        </button>
                        <button wire:click="resetForm"
                            class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors flex items-center">
                            <i class="fas fa-times mr-2"></i> Cancel
                        </button>
                        @else
                        <button wire:click="store"
                            class="px-6 py-3 gradient-green text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                            <i class="fas fa-plus mr-2"></i> Create Report
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
                            <i class="fas fa-list mr-3 text-blue-500"></i>
                            Employee Reports
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            Showing {{ $reports->count() }} report(s)
                        </p>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search reports..." wire:model.debounce.300ms="search"
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
                                    <i class="fas fa-user mr-2"></i> Employee
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-heading mr-2"></i> Title
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar mr-2"></i> Date
                                </div>
                            </th>
                            <th
                                class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-paperclip mr-2"></i> Attachment
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
                        @forelse ($reports as $report)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                            <td class="py-4 px-6">
                                @if($report->user && $report->user->employee)
                                <div class="flex items-center">
                                    <div class="w-8 h-8 gradient-blue rounded-lg flex items-center justify-center mr-3">
                                        <span class="text-white font-bold text-xs">
                                            {{ strtoupper(substr($report->user->employee->name, 0, 1)) }}
                                        </span>
                                    </div>

                                    <div>
                                        <div class="font-medium text-gray-900 dark:text-white">
                                            {{ $report->user->employee->name }}
                                        </div>

                                        <div class="text-xs text-gray-500 dark:text-gray-400">
                                            Employee ID: {{ $report->user->employee->id }}
                                        </div>
                                    </div>
                                </div>
                                @else
                                <span class="text-gray-500 dark:text-gray-400">N/A</span>
                                @endif
                            </td>

                            <td class="py-4 px-6">
                                <div class="font-medium text-gray-900 dark:text-white">
                                    {{ $report->title }}
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                    {{ Str::limit($report->description, 50) }}
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="text-sm text-gray-900 dark:text-white">
                                    {{ $report->date->format('M d, Y') }}
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $report->created_at->format('h:i A') }}
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                @if($report->file)
                                <a href="{{ Storage::url($report->file) }}" target="_blank"
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300 hover:bg-green-200 dark:hover:bg-green-800 transition-colors">
                                    <i class="fas fa-file-download mr-1"></i> View File
                                </a>
                                @else
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400">
                                    <i class="fas fa-times mr-1"></i> No File
                                </span>
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-2">
                                    <button wire:click="edit({{ $report->id }})"
                                        class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 hover:bg-blue-200 dark:hover:bg-blue-800 flex items-center justify-center transition-colors"
                                        title="Edit Report">
                                        <i class="fas fa-edit text-sm"></i>
                                    </button>
                                    <button onclick="confirmDeleteReport({{ $report->id }}, '{{ $report->title }}')"
                                        class="w-8 h-8 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800 flex items-center justify-center transition-colors"
                                        title="Delete Report">
                                        <i class="fas fa-trash text-sm"></i>
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
                                        <i class="fas fa-file-alt text-white text-xl"></i>
                                    </div>
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No Reports Found
                                    </h4>
                                    <p class="text-gray-500 dark:text-gray-400 mb-6">
                                        @if($search)
                                        No results for "{{ $search }}"
                                        @else
                                        Start by creating your first report
                                        @endif
                                    </p>
                                    <button wire:click="resetForm"
                                        class="px-6 py-2 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                        <i class="fas fa-plus mr-2"></i> Create First Report
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    <div id="deleteReportModal"
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
                    Are you sure you want to delete report "<span id="deleteReportTitle"
                        class="font-semibold text-gray-900 dark:text-white"></span>"? This action cannot be undone.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button onclick="closeDeleteReportModal()"
                        class="flex-1 px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Cancel
                    </button>
                    <button id="confirmDeleteReportBtn"
                        class="flex-1 px-4 py-3 gradient-red text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fas fa-trash mr-2"></i> Delete Report
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Delete confirmation modal for reports
        let reportToDeleteId = null;
        
        function confirmDeleteReport(id, title) {
            reportToDeleteId = id;
            document.getElementById('deleteReportTitle').textContent = title;
            document.getElementById('deleteReportModal').classList.remove('hidden');
            document.getElementById('confirmDeleteReportBtn').onclick = function() {
                @this.call('delete', reportToDeleteId);
                closeDeleteReportModal();
            };
        }
        
        function closeDeleteReportModal() {
            document.getElementById('deleteReportModal').classList.add('hidden');
            reportToDeleteId = null;
        }

        // Close modals on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDeleteReportModal();
            }
        });

        // Close modals on outside click
        document.addEventListener('click', function(e) {
            if (e.target.id === 'deleteReportModal') closeDeleteReportModal();
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

            // Auto-hide success/error messages
            @if (session()->has('success') || session()->has('error'))
                setTimeout(() => {
                    const alerts = document.querySelectorAll('.gradient-green, .gradient-red');
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
        .gradient-blue {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .gradient-green {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        .gradient-orange {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        .gradient-purple {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        .gradient-red {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        .main-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.6) 100%);
        }

        .dark .main-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.8) 0%, rgba(15, 23, 42, 0.6) 100%);
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

        /* File input styling */
        input[type="file"]::-webkit-file-upload-button {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 9999px;
            cursor: pointer;
            font-weight: 600;
        }

        input[type="file"]::-webkit-file-upload-button:hover {
            opacity: 0.9;
        }

        .animate-slide-up {
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    @endpush
</div>