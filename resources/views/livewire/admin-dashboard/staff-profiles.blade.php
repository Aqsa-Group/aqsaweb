<div class="space-y-8">


    @if ($showForm)
        <div class="space-y-6">
            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <i class="fa-regular fa-user text-blue-600"></i>
                    1. Personal Information
                </h2>

                <div class="grid gap-5 lg:grid-cols-[120px_1fr_1fr]">
                    <div class="text-center">
                        <button type="button" onclick="document.getElementById('staff-photo-input')?.click()" class="group mx-auto block rounded-full outline-none focus:ring-2 focus:ring-gray-200">
                            <img id="staff-photo-preview" class="h-20 w-20 rounded-full object-cover transition group-hover:opacity-80"
                                src="https://ui-avatars.com/api/?name=Staff&background=e5e7eb&color=111827"
                                alt="Staff">
                        </button>
                        <input id="staff-photo-input" class="hidden" type="file" accept="image/png,image/jpeg,image/jpg">
                        <button type="button" onclick="document.getElementById('staff-photo-input')?.click()" class="mt-2 text-sm font-medium text-gray-700 hover:text-blue-700">Add Photo</button>
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
                        <details class="staff-select relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-select-value">Logistic Manager</span>
                                <i class="fa-solid fa-chevron-down text-[11px] text-gray-400"></i>
                            </summary>
                            <div class="absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                <button type="button" data-staff-select-option="Logistic Manager" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Logistic Manager</button>
                                <button type="button" data-staff-select-option="HR Manager" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">HR Manager</button>
                                <button type="button" data-staff-select-option="Finance Officer" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Finance Officer</button>
                            </div>
                        </details>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Contract Type *</label>
                        <details class="staff-select relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-select-value">Full Time</span>
                                <i class="fa-solid fa-chevron-down text-[11px] text-gray-400"></i>
                            </summary>
                            <div class="absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                <button type="button" data-staff-select-option="Full Time" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Full Time</button>
                                <button type="button" data-staff-select-option="Part Time" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Part Time</button>
                                <button type="button" data-staff-select-option="Contract" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Contract</button>
                            </div>
                        </details>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Company *</label>
                        <details class="staff-select relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-select-value">Logistic</span>
                                <i class="fa-solid fa-chevron-down text-[11px] text-gray-400"></i>
                            </summary>
                            <div class="absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                <button type="button" data-staff-select-option="Logistic" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Logistic</button>
                                <button type="button" data-staff-select-option="ICT" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">ICT</button>
                                <button type="button" data-staff-select-option="Both" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Both</button>
                            </div>
                        </details>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Hire Date *</label>
                        <details class="staff-date-picker relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
                                <i class="fa-regular fa-calendar text-sm text-gray-400"></i>
                            </summary>
                            <div class="absolute right-0 top-12 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                                <div class="mb-3 flex items-center justify-between">
                                    <button type="button" class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">June 2026</button>
                                    <div class="flex items-center gap-1 text-gray-500">
                                        <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Previous month">
                                            <i class="fa-solid fa-chevron-left text-[11px]"></i>
                                        </button>
                                        <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Next month">
                                            <i class="fa-solid fa-chevron-right text-[11px]"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                                    <span>Su</span>
                                    <span>Mo</span>
                                    <span>Tu</span>
                                    <span>We</span>
                                    <span>Th</span>
                                    <span>Fr</span>
                                    <span>Sa</span>
                                </div>

                                <div class="mt-2 grid grid-cols-7 gap-1 text-center text-sm">
                                    @foreach (['31', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '1', '2', '3', '4'] as $dayIndex => $day)
                                        <button type="button"
                                            data-staff-date="{{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? '' : '06/' . str_pad($day, 2, '0', STR_PAD_LEFT) . '/2026' }}"
                                            class="inline-flex h-8 items-center justify-center rounded-lg {{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? 'text-gray-300 hover:bg-gray-50' : ($day === '23' ? 'bg-gray-900 text-white hover:bg-gray-800' : 'text-gray-800 hover:bg-gray-50') }}">
                                            {{ $day }}
                                        </button>
                                    @endforeach
                                </div>

                                <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3 text-sm font-medium">
                                    <button type="button" data-staff-date-clear class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50">Clear</button>
                                    <button type="button" data-staff-date="06/23/2026" class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50">Today</button>
                                </div>
                            </div>
                        </details>
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

   <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">Staff Profiles</h2>
                <p class="mt-1 text-sm text-gray-500">HR management for all staff</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <input
                        class="h-10 w-full rounded-md border border-gray-200 px-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500 sm:w-[280px]"
                        placeholder="Find Staff..."
                    >

                    <button class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-wide-short text-xs"></i>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md px-4 text-sm font-medium text-white shadow-sm {{ $showForm ? 'bg-red-600 hover:bg-red-700' : 'bg-blue-700 hover:bg-blue-800' }}">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'Add Staff' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[3%]">
                    <col class="w-[19%]">
                    <col class="w-[13%]">
                    <col class="w-[17%]">
                    <col class="w-[9%]">
                    <col class="w-[10%]">
                    <col class="w-[9%]">
                    <col class="w-[13%]">
                    <col class="w-[7%]">
                </colgroup>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Full Name</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Position</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Base Salary</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Net Salary</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th class="whitespace-nowrap px-2 py-3 text-right font-semibold text-gray-950">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $item)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4">
                                <div class="flex min-w-0 items-center gap-3">
                                    <img class="h-9 w-9 shrink-0 rounded-full object-cover" src="https://ui-avatars.com/api/?name={{ urlencode($item['name']) }}">
                                    <span class="min-w-0 break-words text-sm font-medium leading-5 text-gray-900">{{ $item['name'] }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-4 text-sm font-medium leading-5 text-gray-900">{{ $item['position'] }}</td>
                            <td class="px-2 py-4">
                                <div class="flex max-w-full flex-wrap gap-1.5">
                                    @foreach ($item['company'] as $company)
                                        <span class="inline-flex max-w-full items-center rounded-md border border-blue-500 bg-blue-50 px-2 py-0.5 text-[11px] font-medium leading-5 text-blue-700">
                                            <span class="truncate">{{ $company }}</span>
                                        </span>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-2 py-4">
                                <span class="inline-flex items-center gap-1.5 whitespace-nowrap rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] font-medium leading-5 text-green-700">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                    {{ $item['status'] }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-700">{{ $item['base_salary'] }}</td>
                            <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-700">{{ $item['net_salary'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] leading-5 text-gray-700">
                                    {{ $item['date'] }}
                                </span>
                            </td>
                            <td class="relative px-2 py-4 text-right">
    <button type="button" class="staff-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100">
        <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>

    <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3337 10C18.3337 12.357 18.3337 13.5355 17.6014 14.2678C17.067 14.8022 16.2949 14.9466 15.0003 14.9856M5.00033 14.9856C3.70579 14.9466 2.93364 14.8022 2.39923 14.2678C1.66699 13.5355 1.66699 12.357 1.66699 10C1.66699 7.64298 1.66699 6.46447 2.39923 5.73223C3.13146 5 4.30997 5 6.66699 5H13.3337C15.6907 5 16.8692 5 17.6014 5.73223C17.8513 5.98206 18.0158 6.28385 18.1243 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.33337H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.833 12.5L4.16634 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99996C14.9466 3.70542 14.8022 2.93328 14.2678 2.39886C13.5355 1.66663 12.357 1.66663 10 1.66663C7.64298 1.66663 6.46447 1.66663 5.73223 2.39886C5.19781 2.93328 5.05344 3.70542 5.01444 4.99996M15 12.5V13.3333C15 15.6903 15 16.8688 14.2678 17.6011C13.7334 18.1355 12.9612 18.2799 11.6667 18.3189M5 12.5V13.3333C5 15.6903 5 16.8688 5.73223 17.6011C6.26665 18.1355 7.03879 18.2799 8.33333 18.3189" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1663" cy="8.33333" r="0.833333" fill="#1C274C"/>
</g>
<defs>
<clipPath id="clip0_1202_33320">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

            <span>Print</span>
        </button>
        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0501 2.48221L11.8225 1.70982C13.1022 0.430062 15.1771 0.430062 16.4569 1.70982C17.7366 2.98957 17.7366 5.06446 16.4569 6.34421L15.6845 7.11661M11.0501 2.48221C11.0501 2.48221 11.1466 4.12356 12.5949 5.57181C14.0431 7.02006 15.6845 7.11661 15.6845 7.11661M11.0501 2.48221L9.08333 4.44894M6.16667 7.3656L3.94902 9.58325C3.46805 10.0642 3.22757 10.3047 3.02075 10.5699C2.77678 10.8827 2.56761 11.2211 2.39695 11.5792C2.25228 11.8828 2.14473 12.2054 1.92963 12.8507L1.01817 15.5851L0.795374 16.2535C0.689523 16.571 0.772171 16.9211 1.00886 17.1578C1.24555 17.3945 1.59565 17.4771 1.9132 17.3713L2.5816 17.1485L5.31598 16.237C5.96127 16.0219 6.28391 15.9144 6.58748 15.7697C6.94558 15.5991 7.28401 15.3899 7.5968 15.1459C7.86196 14.9391 8.10245 14.6986 8.58342 14.2176L8.71773 14.0833L11.3006 11.5005L15.6845 7.11661M2.5816 17.1485L1.01817 15.5851" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

            <span>Edit</span>
        </button>
        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0837 5H2.91699" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91699 9.16663L8.33366 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0837 9.16663L11.667 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41699 5C5.46356 5 5.48684 5 5.50795 4.99947C6.19415 4.98208 6.79951 4.54576 7.03301 3.90027C7.04019 3.88041 7.04755 3.85832 7.06228 3.81415L7.14318 3.57143C7.21225 3.36423 7.24678 3.26063 7.29259 3.17267C7.47533 2.82173 7.81345 2.57803 8.20417 2.51564C8.3021 2.5 8.4113 2.5 8.62971 2.5H11.3709C11.5893 2.5 11.6986 2.5 11.7965 2.51564C12.1872 2.57803 12.5253 2.82173 12.7081 3.17267C12.7539 3.26063 12.7884 3.36423 12.8575 3.57143L12.9384 3.81415C12.9531 3.85826 12.9605 3.88042 12.9676 3.90027C13.2011 4.54576 13.8065 4.98208 14.4927 4.99947C14.5138 5 14.5371 5 14.5837 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8326C15.1638 15.0451 15.09 16.1513 14.3692 16.8257C13.6483 17.5 12.5397 17.5 10.3223 17.5H9.67787C7.46054 17.5 6.35187 17.5 5.63103 16.8257C4.91019 16.1513 4.83644 15.0451 4.68895 12.8326L4.30566 7.08337M15.6946 7.08337L15.5279 9.58337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

            <span>Delete</span>
        </button>
    </div>
</td>
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
                        <div class="flex shrink-0 items-center gap-2">
    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3337 10C18.3337 12.357 18.3337 13.5355 17.6014 14.2678C17.067 14.8022 16.2949 14.9466 15.0003 14.9856M5.00033 14.9856C3.70579 14.9466 2.93364 14.8022 2.39923 14.2678C1.66699 13.5355 1.66699 12.357 1.66699 10C1.66699 7.64298 1.66699 6.46447 2.39923 5.73223C3.13146 5 4.30997 5 6.66699 5H13.3337C15.6907 5 16.8692 5 17.6014 5.73223C17.8513 5.98206 18.0158 6.28385 18.1243 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.33337H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.833 12.5L4.16634 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99996C14.9466 3.70542 14.8022 2.93328 14.2678 2.39886C13.5355 1.66663 12.357 1.66663 10 1.66663C7.64298 1.66663 6.46447 1.66663 5.73223 2.39886C5.19781 2.93328 5.05344 3.70542 5.01444 4.99996M15 12.5V13.3333C15 15.6903 15 16.8688 14.2678 17.6011C13.7334 18.1355 12.9612 18.2799 11.6667 18.3189M5 12.5V13.3333C5 15.6903 5 16.8688 5.73223 17.6011C6.26665 18.1355 7.03879 18.2799 8.33333 18.3189" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1663" cy="8.33333" r="0.833333" fill="#1C274C"/>
</g>
<defs>
<clipPath id="clip0_1202_33320">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
    </button>
    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
         <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0501 2.48221L11.8225 1.70982C13.1022 0.430062 15.1771 0.430062 16.4569 1.70982C17.7366 2.98957 17.7366 5.06446 16.4569 6.34421L15.6845 7.11661M11.0501 2.48221C11.0501 2.48221 11.1466 4.12356 12.5949 5.57181C14.0431 7.02006 15.6845 7.11661 15.6845 7.11661M11.0501 2.48221L9.08333 4.44894M6.16667 7.3656L3.94902 9.58325C3.46805 10.0642 3.22757 10.3047 3.02075 10.5699C2.77678 10.8827 2.56761 11.2211 2.39695 11.5792C2.25228 11.8828 2.14473 12.2054 1.92963 12.8507L1.01817 15.5851L0.795374 16.2535C0.689523 16.571 0.772171 16.9211 1.00886 17.1578C1.24555 17.3945 1.59565 17.4771 1.9132 17.3713L2.5816 17.1485L5.31598 16.237C5.96127 16.0219 6.28391 15.9144 6.58748 15.7697C6.94558 15.5991 7.28401 15.3899 7.5968 15.1459C7.86196 14.9391 8.10245 14.6986 8.58342 14.2176L8.71773 14.0833L11.3006 11.5005L15.6845 7.11661M2.5816 17.1485L1.01817 15.5851" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
    </button>
    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0837 5H2.91699" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91699 9.16663L8.33366 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0837 9.16663L11.667 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41699 5C5.46356 5 5.48684 5 5.50795 4.99947C6.19415 4.98208 6.79951 4.54576 7.03301 3.90027C7.04019 3.88041 7.04755 3.85832 7.06228 3.81415L7.14318 3.57143C7.21225 3.36423 7.24678 3.26063 7.29259 3.17267C7.47533 2.82173 7.81345 2.57803 8.20417 2.51564C8.3021 2.5 8.4113 2.5 8.62971 2.5H11.3709C11.5893 2.5 11.6986 2.5 11.7965 2.51564C12.1872 2.57803 12.5253 2.82173 12.7081 3.17267C12.7539 3.26063 12.7884 3.36423 12.8575 3.57143L12.9384 3.81415C12.9531 3.85826 12.9605 3.88042 12.9676 3.90027C13.2011 4.54576 13.8065 4.98208 14.4927 4.99947C14.5138 5 14.5371 5 14.5837 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8326C15.1638 15.0451 15.09 16.1513 14.3692 16.8257C13.6483 17.5 12.5397 17.5 10.3223 17.5H9.67787C7.46054 17.5 6.35187 17.5 5.63103 16.8257C4.91019 16.1513 4.83644 15.0451 4.68895 12.8326L4.30566 7.08337M15.6946 7.08337L15.5279 9.58337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
    </button>
</div>
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
            <div class="flex flex-wrap items-center gap-3">
                <label for="staff-rows-per-page" class="font-medium text-gray-700">Rows per page</label>
                <details id="staff-rows-per-page" class="staff-select relative">
                    <summary class="flex h-10 min-w-[72px] cursor-pointer list-none items-center justify-between gap-3 rounded-xl border border-gray-200 bg-white px-4 text-sm font-semibold text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                        <span class="staff-select-value">10</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-gray-500"></i>
                    </summary>
                    <div class="absolute right-0 top-11 z-40 w-24 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                        <button type="button" data-staff-select-option="10" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">10</button>
                        <button type="button" data-staff-select-option="25" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">25</button>
                        <button type="button" data-staff-select-option="50" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">50</button>
                        <button type="button" data-staff-select-option="100" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">100</button>
                    </div>
                </details>
                <span class="font-medium text-gray-700">Page 1 of 7</span>
                <div class="flex items-center gap-1">
                    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-400 hover:bg-gray-50">
                        <i class="fa-solid fa-angles-left text-[10px]"></i>
                    </button>
                    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-400 hover:bg-gray-50">
                        <i class="fa-solid fa-chevron-left text-[10px]"></i>
                    </button>
                    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-700 hover:bg-gray-50">
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </button>
                    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-700 hover:bg-gray-50">
                        <i class="fa-solid fa-angles-right text-[10px]"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener("click", function (event) {
    const toggle = event.target.closest(".staff-action-toggle");
    const selectOption = event.target.closest("[data-staff-select-option]");
    const dateOption = event.target.closest("[data-staff-date]");
    const dateClear = event.target.closest("[data-staff-date-clear]");

    document.querySelectorAll(".staff-action-menu").forEach((menu) => {
        if (!toggle || !toggle.parentElement.contains(menu)) {
            menu.classList.add("hidden");
        }
    });

    document.querySelectorAll(".staff-select[open]").forEach((select) => {
        if (!select.contains(event.target)) {
            select.removeAttribute("open");
        }
    });

    document.querySelectorAll(".staff-date-picker[open]").forEach((picker) => {
        if (!picker.contains(event.target)) {
            picker.removeAttribute("open");
        }
    });

    if (selectOption) {
        event.stopPropagation();
        const select = selectOption.closest(".staff-select");
        const value = select?.querySelector(".staff-select-value");

        if (value) {
            value.textContent = selectOption.dataset.staffSelectOption;
        }

        select?.removeAttribute("open");
        return;
    }

    if (dateOption || dateClear) {
        event.stopPropagation();
        const picker = event.target.closest(".staff-date-picker");
        const value = picker?.querySelector(".staff-date-value");
        const selectedDate = dateOption?.dataset.staffDate;

        if (value) {
            value.textContent = dateClear ? "mm/dd/yyyy" : selectedDate || value.textContent;
            value.classList.toggle("text-gray-500", Boolean(dateClear));
            value.classList.toggle("text-gray-800", !dateClear);
        }

        if (selectedDate || dateClear) {
            picker?.removeAttribute("open");
        }

        return;
    }

    if (toggle) {
        event.stopPropagation();
        const menu = toggle.parentElement.querySelector(".staff-action-menu");
        menu?.classList.toggle("hidden");
    }
});

document.addEventListener("change", function (event) {
    if (event.target.id !== "staff-photo-input") {
        return;
    }

    const file = event.target.files?.[0];
    const preview = document.getElementById("staff-photo-preview");

    if (!file || !preview) {
        return;
    }

    preview.src = URL.createObjectURL(file);
});
</script>
