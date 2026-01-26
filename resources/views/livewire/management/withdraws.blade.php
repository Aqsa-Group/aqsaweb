<div>
    <div class="space-y-6">
        {{-- Alerts --}}
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

        @if (session()->has('error'))
            <div class="animate-slide-up p-4 gradient-red text-white rounded-xl shadow-lg flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-triangle mr-3 text-xl"></i>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-white/80 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        {{-- Safe Balance Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- AFN Balance --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">AFN Balance</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format($safe->afn ?? 0, 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">AFN</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-orange rounded-lg flex items-center justify-center">
                            <i class="fas fa-money-bill-wave text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-wallet mr-1"></i> Available in safe
                    </div>
                </div>
            </div>

            {{-- USD Balance --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">USD Balance</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format($safe->usd ?? 0, 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">USD</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-blue rounded-lg flex items-center justify-center">
                            <i class="fas fa-dollar-sign text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-wallet mr-1"></i> Available in safe
                    </div>
                </div>
            </div>

            {{-- Total Balance --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Balance</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format(($safe->afn ?? 0) + ($safe->usd ?? 0), 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Total</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-green rounded-lg flex items-center justify-center">
                            <i class="fas fa-coins text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-chart-line mr-1"></i> Combined value
                    </div>
                </div>
            </div>

            {{-- Last Withdrawal --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Last Withdrawal</h3>
                            @php
                                $lastWithdraw = \App\Models\Management\Withdraw::latest()->first();
                            @endphp
                            <div class="mt-2">
                                @if($lastWithdraw)
                                    <div class="text-lg font-bold text-gray-900 dark:text-white">
                                        {{ number_format($lastWithdraw->amount, 2) }} {{ $lastWithdraw->currency }}
                                    </div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ \Carbon\Carbon::parse($lastWithdraw->date)->format('M d, Y') }}
                                    </div>
                                @else
                                    <div class="text-lg font-bold text-gray-900 dark:text-white">No withdrawals</div>
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

        {{-- Statistics Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Today's Withdrawals --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Today's Withdrawals</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format($todayTotal, 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Total</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-blue rounded-lg flex items-center justify-center">
                            <i class="fas fa-sun text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-calendar-day mr-1"></i> {{ \Carbon\Carbon::today()->format('M d, Y') }}
                    </div>
                </div>
            </div>

            {{-- This Week's Withdrawals --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">This Week</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format($weekTotal, 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Total</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-green rounded-lg flex items-center justify-center">
                            <i class="fas fa-calendar-week text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-calendar mr-1"></i> Week {{ \Carbon\Carbon::now()->week }}
                    </div>
                </div>
            </div>

            {{-- This Month's Withdrawals --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">This Month</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format($monthTotal, 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Total</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-orange rounded-lg flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-calendar mr-1"></i> {{ \Carbon\Carbon::now()->format('F Y') }}
                    </div>
                </div>
            </div>

            {{-- Overall Withdrawals --}}
            <div class="main-card rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-800">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Overall Withdrawals</h3>
                            <div class="flex items-baseline mt-2">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                    {{ number_format($overallTotal, 2) }}
                                </span>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Total</span>
                            </div>
                        </div>
                        <div class="w-12 h-12 gradient-purple rounded-lg flex items-center justify-center">
                            <i class="fas fa-chart-bar text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-chart-line mr-1"></i> All time total
                    </div>
                </div>
            </div>
        </div>

        {{-- Form Card --}}
        <div class="main-card rounded-xl overflow-hidden shadow-sm card-hover border border-gray-200 dark:border-gray-800">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white flex items-center">
                        <i class="fas {{ $withdraw_id ? 'fa-edit' : 'fa-money-bill-wave' }} mr-3 text-blue-500"></i>
                        {{ $withdraw_id ? 'Edit Withdrawal' : 'Record New Withdrawal' }}
                    </h3>
                    @if($withdraw_id)
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 text-xs font-medium rounded-full">
                            Editing Mode
                        </span>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Amount --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-money-bill text-gray-400 mr-1"></i> Amount
                        </label>
                        <div class="relative">
                            <input wire:model="amount" type="number" step="0.01" min="0.01" placeholder="Enter amount"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                            <i class="fas fa-money-bill absolute left-3 top-3.5 text-gray-400"></i>
                        </div>
                        @error('amount') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Currency --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-globe text-gray-400 mr-1"></i> Currency
                        </label>
                        <div class="relative">
                            <select wire:model="currency"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors appearance-none">
                                <option value="AFN">AFN (Afghan Afghani)</option>
                                <option value="USD">USD (US Dollar)</option>
                            </select>
                            <i class="fas fa-globe absolute left-3 top-3.5 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('currency') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Expense Type --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-tag text-gray-400 mr-1"></i> Expense Type
                        </label>
                        <div class="relative">
                            <select wire:model="expensess_type"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors appearance-none">
                                <option value="">Select Expense Type</option>
                                @foreach($expenseTypes as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                            <i class="fas fa-tag absolute left-3 top-3.5 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('expensess_type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Employee --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-user text-gray-400 mr-1"></i> Employee
                        </label>
                        <div class="relative">
                            <select wire:model="employee_id"
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors appearance-none">
                                <option value="">Select Employee</option>
                                @foreach($employees as $emp)
                                    <option value="{{ $emp->id }}">{{ $emp->name }} {{ $emp->lastname }}</option>
                                @endforeach
                            </select>
                            <i class="fas fa-user absolute left-3 top-3.5 text-gray-400"></i>
                            <i class="fas fa-chevron-down absolute right-3 top-3.5 text-gray-400 pointer-events-none"></i>
                        </div>
                        @error('employee_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Date --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-calendar text-gray-400 mr-1"></i> Date
                        </label>
                        <input wire:model="date" type="date"
                            class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors">
                        @error('date') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- Description --}}
                    <div class="space-y-2 lg:col-span-3">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            <i class="fas fa-file-alt text-gray-400 mr-1"></i> Description
                        </label>
                        <textarea wire:model="description" rows="3" placeholder="Enter withdrawal description"
                            class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg text-gray-900 dark:text-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition-colors"></textarea>
                    </div>
                </div>

                {{-- Safe Balance Warning --}}
                @if($currency === 'AFN' && $amount > 0 && $safe && $amount > $safe->afn)
                    <div class="mt-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle text-red-600 dark:text-red-400 mr-3"></i>
                            <div>
                                <p class="text-red-800 dark:text-red-300 font-medium">Insufficient AFN Balance!</p>
                                <p class="text-red-600 dark:text-red-400 text-sm">
                                    Available: {{ number_format($safe->afn, 2) }} AFN • 
                                    Required: {{ number_format($amount, 2) }} AFN
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                @if($currency === 'USD' && $amount > 0 && $safe && $amount > $safe->usd)
                    <div class="mt-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle text-red-600 dark:text-red-400 mr-3"></i>
                            <div>
                                <p class="text-red-800 dark:text-red-300 font-medium">Insufficient USD Balance!</p>
                                <p class="text-red-600 dark:text-red-400 text-sm">
                                    Available: {{ number_format($safe->usd, 2) }} USD • 
                                    Required: {{ number_format($amount, 2) }} USD
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                        <span>Withdrawals will automatically deduct from safe balance</span>
                    </div>
                    <div class="flex items-center gap-3">
                        @if ($withdraw_id)
                            <button wire:click="update" 
                                class="px-6 py-3 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-save mr-2"></i> Update Withdrawal
                            </button>
                            <button wire:click="resetForm" 
                                class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors flex items-center">
                                <i class="fas fa-times mr-2"></i> Cancel
                            </button>
                        @else
                            <button wire:click="store" 
                                class="px-6 py-3 gradient-green text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-plus mr-2"></i> Record Withdrawal
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
                            Withdrawals History
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            Showing {{ $withdraws->count() }} withdrawal(s)
                        </p>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search withdrawals..." wire:model.debounce.300ms="search"
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
                                    <i class="fas fa-money-bill mr-2"></i> Amount
                                </div>
                            </th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-tag mr-2"></i> Type
                                </div>
                            </th>
                             <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar mr-2"></i> Date
                                </div>
                            </th>
                            <th class="py-4 px-6 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                <div class="flex items-center">
                                    <i class="fas fa-file-alt mr-2"></i> Description
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
                        @forelse ($withdraws as $withdraw)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
                              
                                <td class="py-4 px-6">
                                    @if($withdraw->employee)
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 gradient-blue rounded-lg flex items-center justify-center mr-3">
                                                <span class="text-white font-bold text-xs">
                                                    {{ strtoupper(substr($withdraw->employee->name, 0, 1)) }}
                                                </span>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-900 dark:text-white">
                                                    {{ $withdraw->employee->name }} {{ $withdraw->employee->lastname }}
                                                </div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">
                                                    ID: {{ $withdraw->employee->id }}
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <span class="text-gray-500 dark:text-gray-400">N/A</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <span class="text-lg font-bold {{ $withdraw->currency === 'AFN' ? 'text-orange-600 dark:text-orange-400' : 'text-green-600 dark:text-green-400' }}">
                                            {{ number_format($withdraw->amount, 2) }}
                                        </span>
                                        <span class="ml-2 px-2 py-1 text-xs font-medium rounded-full {{ $withdraw->currency === 'AFN' ? 'bg-orange-100 dark:bg-orange-900/50 text-orange-800 dark:text-orange-300' : 'bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300' }}">
                                            {{ $withdraw->currency }}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300">
                                        {{ $withdraw->expansess_type }}
                                    </span>
                                </td>

                                  <td class="py-4 px-6">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        {{ \Carbon\Carbon::parse($withdraw->date)->format('M d, Y') }}
                                    </div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ \Carbon\Carbon::parse($withdraw->created_at)->format('h:i A') }}
                                    </div>
                                </td>

                                <td class="py-4 px-6">
                                    <div class="text-sm text-gray-900 dark:text-white">
                                        {{ Str::limit($withdraw->description, 50) }}
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <button wire:click="edit({{ $withdraw->id }})" 
                                            class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 hover:bg-blue-200 dark:hover:bg-blue-800 flex items-center justify-center transition-colors"
                                            title="Edit Withdrawal">
                                            <i class="fas fa-edit text-sm"></i>
                                        </button>
                                        <button onclick="confirmDeleteWithdraw({{ $withdraw->id }}, '{{ number_format($withdraw->amount, 2) }} {{ $withdraw->currency }}')"
                                            class="w-8 h-8 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 hover:bg-red-200 dark:hover:bg-red-800 flex items-center justify-center transition-colors"
                                            title="Delete Withdrawal">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-12 px-6 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="w-16 h-16 gradient-blue rounded-full flex items-center justify-center mb-4">
                                            <i class="fas fa-money-bill-wave text-white text-xl"></i>
                                        </div>
                                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No Withdrawals Found</h4>
                                        <p class="text-gray-500 dark:text-gray-400 mb-6">
                                            @if($search)
                                                No results for "{{ $search }}"
                                            @else
                                                Start by recording your first withdrawal
                                            @endif
                                        </p>
                                        <button wire:click="resetForm"
                                            class="px-6 py-2 gradient-blue text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                            <i class="fas fa-plus mr-2"></i> Record First Withdrawal
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($withdraws->hasPages())
                <div class="p-6 border-t border-gray-100 dark:border-gray-800">
                    {{ $withdraws->links() }}
                </div>
            @endif
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    <div id="deleteWithdrawModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-md w-full transform transition-all animate-slide-up">
            <div class="p-6">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 dark:bg-red-900/50 rounded-full">
                    <i class="fas fa-exclamation-triangle text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center mb-2">Confirm Deletion</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center mb-6">
                    Are you sure you want to delete withdrawal of "<span id="deleteWithdrawAmount" class="font-semibold text-gray-900 dark:text-white"></span>"? This action will return the amount to safe balance.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button onclick="closeDeleteWithdrawModal()"
                        class="flex-1 px-4 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Cancel
                    </button>
                    <button id="confirmDeleteWithdrawBtn"
                        class="flex-1 px-4 py-3 gradient-red text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fas fa-trash mr-2"></i> Delete Withdrawal
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Delete confirmation modal for withdrawals
        let withdrawToDeleteId = null;
        
        function confirmDeleteWithdraw(id, amount) {
            withdrawToDeleteId = id;
            document.getElementById('deleteWithdrawAmount').textContent = amount;
            document.getElementById('deleteWithdrawModal').classList.remove('hidden');
            document.getElementById('confirmDeleteWithdrawBtn').onclick = function() {
                @this.call('delete', withdrawToDeleteId);
                closeDeleteWithdrawModal();
            };
        }
        
        function closeDeleteWithdrawModal() {
            document.getElementById('deleteWithdrawModal').classList.add('hidden');
            withdrawToDeleteId = null;
        }

        // Close modals on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDeleteWithdrawModal();
            }
        });

        // Close modals on outside click
        document.addEventListener('click', function(e) {
            if (e.target.id === 'deleteWithdrawModal') closeDeleteWithdrawModal();
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
        .gradient-red {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }
        
        .gradient-orange {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }
        
        .gradient-purple {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
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