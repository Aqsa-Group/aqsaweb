<div class="space-y-8">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-950">Staff Profiles</h1>
            <p class="mt-1 text-gray-500">HR management for all staff</p>
        </div>

        <button wire:click="toggleForm"
            class="inline-flex items-center justify-center gap-2 rounded-md bg-blue-700 px-5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
            <i class="fa-solid fa-plus"></i>
            Add Staff
        </button>
    </div>

    @if ($showForm)
        <div class="space-y-6">
            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <i class="fa-regular fa-user text-blue-600"></i>
                    1. Personal Information
                </h2>

                <div class="grid gap-5 lg:grid-cols-[120px_1fr_1fr]">
                    <div class="text-center">
                        <img class="mx-auto h-20 w-20 rounded-full object-cover"
                            src="https://ui-avatars.com/api/?name=Staff&background=e5e7eb&color=111827"
                            alt="Staff">
                        <button class="mt-2 text-sm text-gray-700">Add Photo</button>
                        <p class="text-xs text-gray-400">PNG,JPG,Max(2MB)</p>
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-medium">Full Name *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="Farzana Mohammadi">

                        <label class="block text-sm font-medium">Email *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="Farzana.909@gmail.com">
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-medium">Employee ID *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="EMP-2024-135">

                        <label class="block text-sm font-medium">Phone *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="0785342345">
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <i class="fa-regular fa-id-card text-blue-600"></i>
                    2. Employment Details
                </h2>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                    <div>
                        <label class="mb-2 block text-sm font-medium">Position *</label>
                        <select class="w-full rounded-md border border-gray-200 px-3 py-2">
                            <option>Logistic Manager</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Contract Type *</label>
                        <select class="w-full rounded-md border border-gray-200 px-3 py-2">
                            <option>Full Time</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Company *</label>
                        <select class="w-full rounded-md border border-gray-200 px-3 py-2">
                            <option>Logistic</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Hire Date *</label>
                        <input type="date" class="w-full rounded-md border border-gray-200 px-3 py-2">
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <i class="fa-regular fa-folder-open text-blue-600"></i>
                    3. Company Assignment
                </h2>

                <div class="grid gap-5 lg:grid-cols-[180px_1fr]">
                    <div class="space-y-3">
                        <p class="font-medium">Assigned To *</p>
                        <label class="block"><input type="radio" name="assigned"> Logistic</label>
                        <label class="block"><input type="radio" name="assigned"> ICT</label>
                        <label class="block"><input type="radio" name="assigned" checked> Both (with % split)</label>
                    </div>

                    <div class="overflow-hidden rounded-lg border border-gray-200">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left">Company</th>
                                    <th class="px-4 py-3 text-left">Allocation Percentage</th>
                                    <th class="px-4 py-3 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-3">AQSA LOGISTIC</td>
                                    <td class="px-4 py-3">70 %</td>
                                    <td class="px-4 py-3 text-right"><i class="fa-regular fa-trash-can"></i></td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-3">AQSA ICT</td>
                                    <td class="px-4 py-3">30 %</td>
                                    <td class="px-4 py-3 text-right"><i class="fa-regular fa-trash-can"></i></td>
                                </tr>
                                <tr class="bg-green-100 text-green-700">
                                    <td class="px-4 py-3 font-medium">Total Allocation</td>
                                    <td colspan="2" class="px-4 py-3 text-right">100 %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <i class="fa-regular fa-money-bill-1 text-blue-600"></i>
                    4. Payment Information
                </h2>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                    <input class="rounded-md border border-gray-200 px-3 py-2" placeholder="Base Salary">
                    <input class="rounded-md border border-gray-200 px-3 py-2" placeholder="Allowances">
                    <input class="rounded-md border border-gray-200 px-3 py-2" placeholder="Deductions">
                    <input class="rounded-md border border-gray-200 px-3 py-2" placeholder="Net Salary">
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button wire:click="cancelForm" class="rounded-md border border-blue-700 px-6 py-2 text-blue-700">
                    Cancel
                </button>
                <button class="rounded-md bg-blue-700 px-6 py-2 text-white">
                    Save Staff
                </button>
            </div>
        </div>
    @endif

    <div>
        <div class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
            <h2 class="text-xl font-semibold">Staff Profiles</h2>

            <div class="flex gap-2">
                <input class="w-full rounded-md border border-gray-200 px-3 py-2 lg:w-80" placeholder="Find Staff...">
                <button class="rounded-md border border-gray-200 px-4 py-2">
                    <i class="fa-solid fa-arrow-up-wide-short"></i>
                    Filter
                </button>
            </div>
        </div>

        <div class="hidden overflow-hidden rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3"><input type="checkbox"></th>
                        <th class="px-4 py-3">Full Name</th>
                        <th class="px-4 py-3">Position</th>
                        <th class="px-4 py-3">Company</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Base Salary</th>
                        <th class="px-4 py-3">Net Salary</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $item)
                        <tr class="border-t">
                            <td class="px-4 py-4"><input type="checkbox"></td>
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <img class="h-9 w-9 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($item['name']) }}">
                                    <span>{{ $item['name'] }}</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">{{ $item['position'] }}</td>
                            <td class="px-4 py-4">
                                @foreach ($item['company'] as $company)
                                    <span class="mr-1 rounded-md border border-blue-600 px-2 py-1 text-xs text-blue-600">{{ $company }}</span>
                                @endforeach
                            </td>
                            <td class="px-4 py-4">
                                <span class="rounded-md border border-green-500 px-2 py-1 text-xs text-green-600">
                                    ● {{ $item['status'] }}
                                </span>
                            </td>
                            <td class="px-4 py-4">{{ $item['base_salary'] }}</td>
                            <td class="px-4 py-4">{{ $item['net_salary'] }}</td>
                            <td class="px-4 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-1">{{ $item['date'] }}</span>
                            </td>
                            <td class="px-4 py-4 text-right"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="space-y-4 lg:hidden">
            @foreach ($staff as $item)
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($item['name']) }}">
                            <div>
                                <p class="font-medium">{{ $item['name'] }}</p>
                                <p class="text-sm text-gray-500">{{ $item['position'] }}</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>

                    <div class="mb-3 flex flex-wrap gap-2">
                        @foreach ($item['company'] as $company)
                            <span class="rounded-md border border-blue-600 px-2 py-1 text-xs text-blue-600">{{ $company }}</span>
                        @endforeach
                        <span class="rounded-md border border-green-500 px-2 py-1 text-xs text-green-600">● {{ $item['status'] }}</span>
                    </div>

                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div>
                            <p class="text-gray-400">Base Salary</p>
                            <p>{{ $item['base_salary'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Net Salary</p>
                            <p>{{ $item['net_salary'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Date</p>
                            <p>{{ $item['date'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>
            <div class="flex items-center gap-4">
                <span>Rows per page</span>
                <span class="rounded-md border border-gray-200 px-4 py-2">10</span>
                <span>Page 1 of 7</span>
            </div>
        </div>
    </div>
</div>
