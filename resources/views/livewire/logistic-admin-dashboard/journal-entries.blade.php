<div class="space-y-8">
    @include('livewire.logistic-admin-dashboard._shared-ui')
    @if ($showForm)
        <section class="rounded-xl bg-white">
            <h2 class="mb-5 text-xl font-semibold text-gray-950">New Journal Entry</h2>

            <div class="space-y-5">
                {{-- 1. Entry Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">1. Entry Information</h3>

                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Company <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Logistic</span>
                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8337 7.5L10.0003 12.5L8.54199 11.25M4.16699 7.5L6.11144 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Logistic', 'ICT'] as $company)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $company }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $company }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Date <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-date-picker relative" data-dynamic-date-picker>
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-date-value text-gray-500">Select Date</span>

                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.667 18.3334H8.33366C5.19096 18.3334 3.61961 18.3334 2.6433 17.3571C1.66699 16.3808 1.66699 14.8094 1.66699 11.6667V10C1.66699 6.85734 1.66699 5.286 2.6433 4.30968C3.61961 3.33337 5.19096 3.33337 8.33366 3.33337H11.667C14.8097 3.33337 16.381 3.33337 17.3573 4.30968C18.3337 5.286 18.3337 6.85734 18.3337 10V11.6667C18.3337 14.8094 18.3337 16.3808 17.3573 17.3571C16.813 17.9014 16.0838 18.1422 15.0003 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.83301 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.167 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.917 7.5H13.8545H8.95866M1.66699 7.5H4.89616" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9997 14.1667C14.9997 14.6269 14.6266 15 14.1663 15C13.7061 15 13.333 14.6269 13.333 14.1667C13.333 13.7064 13.7061 13.3333 14.1663 13.3333C14.6266 13.3333 14.9997 13.7064 14.9997 14.1667Z" fill="#1C274C"/>
<path d="M14.9997 10.8333C14.9997 11.2936 14.6266 11.6667 14.1663 11.6667C13.7061 11.6667 13.333 11.2936 13.333 10.8333C13.333 10.3731 13.7061 10 14.1663 10C14.6266 10 14.9997 10.3731 14.9997 10.8333Z" fill="#1C274C"/>
<path d="M10.8337 14.1667C10.8337 14.6269 10.4606 15 10.0003 15C9.54009 15 9.16699 14.6269 9.16699 14.1667C9.16699 13.7064 9.54009 13.3333 10.0003 13.3333C10.4606 13.3333 10.8337 13.7064 10.8337 14.1667Z" fill="#1C274C"/>
<path d="M10.8337 10.8333C10.8337 11.2936 10.4606 11.6667 10.0003 11.6667C9.54009 11.6667 9.16699 11.2936 9.16699 10.8333C9.16699 10.3731 9.54009 10 10.0003 10C10.4606 10 10.8337 10.3731 10.8337 10.8333Z" fill="#1C274C"/>
<path d="M6.66667 14.1667C6.66667 14.6269 6.29357 15 5.83333 15C5.3731 15 5 14.6269 5 14.1667C5 13.7064 5.3731 13.3333 5.83333 13.3333C6.29357 13.3333 6.66667 13.7064 6.66667 14.1667Z" fill="#1C274C"/>
<path d="M6.66667 10.8333C6.66667 11.2936 6.29357 11.6667 5.83333 11.6667C5.3731 11.6667 5 11.2936 5 10.8333C5 10.3731 5.3731 10 5.83333 10C6.29357 10 6.66667 10.3731 6.66667 10.8333Z" fill="#1C274C"/>
</svg>

                                </summary>

                                <input type="hidden" name="entry_date" class="staff-date-input">

                                <div class="absolute right-0 top-11 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                                    <div class="mb-3 flex items-center justify-between">
                                        <button
                                            type="button"
                                            data-date-month-label
                                            class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50"
                                        >
                                            June 2026
                                        </button>

                                        <div class="flex items-center gap-1 text-gray-500">
                                            <button
                                                type="button"
                                                data-date-prev
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50"
                                                aria-label="Previous month"
                                            >
                                                <i class="fa-solid fa-chevron-left text-[11px]"></i>
                                            </button>

                                            <button
                                                type="button"
                                                data-date-next
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50"
                                                aria-label="Next month"
                                            >
                                                <i class="fa-solid fa-chevron-right text-[11px]"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                                        <span>Su</span><span>Mo</span><span>Tu</span><span>We</span>
                                        <span>Th</span><span>Fr</span><span>Sa</span>
                                    </div>

                                    <div data-date-grid class="mt-2 grid grid-cols-7 gap-1 text-center text-sm"></div>

                                    <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3 text-sm font-medium">
                                        <button
                                            type="button"
                                            data-staff-date-clear
                                            class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50"
                                        >
                                            Clear
                                        </button>

                                        <button
                                            type="button"
                                            data-date-today
                                            class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50"
                                        >
                                            Today
                                        </button>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <div class="md:col-span-2">
                            <div class="grid gap-4 md:grid-cols-[1fr_1fr_1fr]">
                                <div>
                                    <label class="mb-2 block text-xs font-medium text-gray-900">
                                        Link To (Expense, Invoice, Payment) <span class="text-red-500">*</span>
                                    </label>

                                    <details class="staff-select relative">
                                        <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                            <span class="staff-select-value">Payment</span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8337 7.5L10.0003 12.5L8.54199 11.25M4.16699 7.5L6.11144 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                        </summary>

                                        <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                            @foreach (['Payment', 'Invoice', 'Expense'] as $linkType)
                                                <button
                                                    type="button"
                                                    data-staff-select-option="{{ $linkType }}"
                                                    class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                                >
                                                    {{ $linkType }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </details>
                                </div>

                                <div>
                                    <label class="mb-2 block text-xs font-medium text-gray-900">Reference</label>

                                    <details class="staff-select relative">
                                        <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                            <span class="staff-select-value text-gray-500">Select Reference</span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8337 7.5L10.0003 12.5L8.54199 11.25M4.16699 7.5L6.11144 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </summary>

                                        <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                            @foreach (['PAY-00045', 'INV-00045', 'EXP-00045'] as $reference)
                                                <button
                                                    type="button"
                                                    data-staff-select-option="{{ $reference }}"
                                                    class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                                >
                                                    {{ $reference }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </details>
                                </div>

                                <div>
                                    <label class="mb-2 block text-xs font-medium text-gray-900">Reference No</label>
                                    <input
                                        type="text"
                                        name="reference_number"
                                        placeholder="Enter reference number"
                                        class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-2">
                            <label class="mb-2 block text-xs font-medium text-gray-900">Description</label>
                            <textarea
                                name="description"
                                rows="4"
                                placeholder="Description..."
                                class="min-h-[86px] w-full resize-none rounded-md border border-gray-200 bg-white px-3 py-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            ></textarea>
                        </div>
                    </div>
                </div>

                {{-- 2. Journal Lines --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <div class="mb-4 flex items-center justify-between gap-3">
                        <h3 class="text-sm font-semibold text-gray-950">2. Journal Lines</h3>

                        <button
                            id="addJournalLineButton"
                            type="button"
                            class="inline-flex h-8 items-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-xs font-medium text-gray-700 transition hover:bg-gray-50"
                        >
                            <i class="fa-solid fa-plus text-[10px]"></i>
                            Add Item
                        </button>
                    </div>

                    <div class="overflow-x-auto rounded-md border border-gray-200">
                        <table class="min-w-[820px] w-full table-fixed text-left text-xs">
                            <colgroup>
                                <col class="w-[4%]">
                                <col class="w-[28%]">
                                <col class="w-[15%]">
                                <col class="w-[14%]">
                                <col class="w-[17%]">
                                <col class="w-[17%]">
                                <col class="w-[5%]">
                            </colgroup>

                            <thead class="bg-gray-50 text-gray-700">
                                <tr>
                                    <th class="px-2 py-2 font-medium">#</th>
                                    <th class="px-2 py-2 font-medium">Account Code</th>
                                    <th class="px-2 py-2 font-medium">Account Name</th>
                                    <th class="px-2 py-2 font-medium">Type</th>
                                    <th class="px-2 py-2 font-medium">Debit</th>
                                    <th class="px-2 py-2 font-medium">Credit</th>
                                    <th class="px-2 py-2 text-center font-medium"></th>
                                </tr>
                            </thead>

                            <tbody id="journalLinesBody">
                                @foreach ([1, 2] as $lineNumber)
                                    <tr class="journal-line-row border-t border-gray-100">
                                        <td class="journal-line-number px-2 py-2 text-gray-700">{{ $lineNumber }}</td>

                                        <td class="px-2 py-2">
                                            <input
                                                type="text"
                                                name="lines[{{ $lineNumber - 1 }}][account_code]"
                                                placeholder="Enter account code"
                                                class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>

                                        <td class="px-2 py-2">
                                            <input
                                                type="text"
                                                name="lines[{{ $lineNumber - 1 }}][account_name]"
                                                value="Cash"
                                                class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>

                                        <td class="px-2 py-2">
                                            <details class="staff-select relative">
                                                <summary class="flex h-9 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                                    <span class="staff-select-value">Assets</span>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.8337 7.5L10.0003 12.5L8.54199 11.25M4.16699 7.5L6.11144 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </summary>

                                                <div class="staff-select-menu absolute left-0 right-0 top-10 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                                    @foreach (['Assets', 'Liability', 'Equity', 'Revenue', 'Expense'] as $accountType)
                                                        <button
                                                            type="button"
                                                            data-staff-select-option="{{ $accountType }}"
                                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                                        >
                                                            {{ $accountType }}
                                                        </button>
                                                    @endforeach
                                                </div>
                                            </details>
                                        </td>

                                        <td class="px-2 py-2">
                                            <input
                                                type="number"
                                                name="lines[{{ $lineNumber - 1 }}][debit]"
                                                value="0.00"
                                                min="0"
                                                step="0.01"
                                                class="journal-line-debit h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>

                                        <td class="px-2 py-2">
                                            <input
                                                type="number"
                                                name="lines[{{ $lineNumber - 1 }}][credit]"
                                                value="0.00"
                                                min="0"
                                                step="0.01"
                                                class="journal-line-credit h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>

                                        <td class="px-2 py-2 text-center">
                                            <button
                                                type="button"
                                                class="remove-journal-line inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-200 text-gray-600 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                                                aria-label="Remove line"
                                            >
                                                <i class="fa-solid fa-xmark text-[11px]"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr class="border-t border-emerald-100 bg-emerald-50">
                                    <td colspan="2" class="px-4 py-3 text-sm font-semibold text-emerald-600">
                                        Total Debit: USD <span id="journalTotalDebit">0.00</span>
                                    </td>

                                    <td colspan="3" class="px-4 py-3 text-center text-sm font-semibold text-emerald-600">
                                        Total Credit: USD <span id="journalTotalCredit">0.00</span>
                                    </td>

                                    <td colspan="2" class="px-4 py-3 text-right text-sm font-semibold text-emerald-600">
                                        Difference: USD <span id="journalDifference">0.00</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-end gap-3">
                <button
                    wire:click="cancelForm"
                    type="button"
                    class="inline-flex h-10 items-center justify-center rounded-md border border-blue-600 bg-white px-6 text-xs font-medium text-blue-600 transition hover:bg-blue-50"
                >
                    Cancel
                </button>

                <button
                    type="button"
                    class="inline-flex h-10 items-center justify-center rounded-md bg-[#2059D4] px-6 text-xs font-medium text-white transition hover:bg-blue-800"
                >
                    Save Entry
                </button>
            </div>
        </section>
    @endif

    <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">Journal Entries</h2>
                <p class="mt-1 text-sm text-gray-500">Double Entry Accounting Records</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label class="relative block w-full sm:w-[280px]">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-300">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6665 16.6666L18.3332 18.3333" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M5.62484 2.72573C6.78927 2.05214 8.1412 1.66663 9.58317 1.66663C13.9554 1.66663 17.4998 5.21104 17.4998 9.58329C17.4998 13.9555 13.9554 17.5 9.58317 17.5C5.21092 17.5 1.6665 13.9555 1.6665 9.58329C1.6665 8.14132 2.05202 6.7894 2.72561 5.62496" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </span>

                    <input
                        class="h-10 w-full rounded-md border border-gray-200 pl-9 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500"
                        placeholder="Search..."
                    >
                </label>

                    <button class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97823 8.72119C5.78466 8.52755 5.78462 8.21363 5.97823 8.02002C6.17186 7.82661 6.48583 7.82651 6.67941 8.02002L8.45773 9.79834L8.45773 0.495605C8.45787 0.221884 8.68007 0.000488281 8.95382 0.000488281C9.22751 0.000564575 9.44977 0.221931 9.44991 0.495605L9.44991 9.79834L11.2282 8.02002C11.4219 7.82661 11.7358 7.82651 11.9294 8.02002C12.123 8.21359 12.1228 8.52754 11.9294 8.72119L9.30441 11.3462C9.11077 11.5398 8.79687 11.5398 8.60323 11.3462L5.97823 8.72119ZM0.145226 3.47119C-0.0484087 3.27756 -0.0484087 2.96365 0.145226 2.77002L2.77023 0.14502C2.96389 -0.0482531 3.27788 -0.0484953 3.4714 0.14502L6.0964 2.77002C6.28981 2.96354 6.28964 3.27756 6.0964 3.47119C5.9028 3.66479 5.58887 3.66472 5.39523 3.47119L3.61593 1.69287L3.61593 10.9956C3.61593 11.2693 3.39444 11.4914 3.12081 11.4917C2.84697 11.4917 2.62472 11.2694 2.62472 10.9956L2.62472 1.69287L0.846398 3.47119C0.652797 3.66479 0.33887 3.66472 0.145226 3.47119Z" fill="#71717A"/>
</svg>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'New Entry' }}
                </button>
            </div>
        </div>

        <div class="hidden min-h-[470px] overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[4%]">
                    <col class="w-[18%]">
                    <col class="w-[28%]">
                    <col class="w-[9%]">
                    <col class="w-[10%]">
                    <col class="w-[10%]">
                    <col class="w-[13%]">
                    <col class="w-[4%]">
                </colgroup>

                <thead class="bg-gray-50 text-gray-950">
                    <tr>
                        <th class="px-2 py-3"></th>

                        <th class="px-2 py-3">
                            <input
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300"
                                aria-label="Select all journal entries"
                            >
                        </th>

                        <th class="whitespace-nowrap px-2 py-3 font-semibold">Entry</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold">Description</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold">Company</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold">Debit</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold">Credit</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold">Link To</th>
                        <th class="whitespace-nowrap px-2 py-3 text-center font-semibold"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($entries as $entry)
                        @php
                            $linkType = $entry['link_type']
                                ?? ($entry['status'] === 'Payment'
                                    ? 'Payment'
                                    : ($entry['status'] === 'Expense' ? 'Expense' : 'Invoice'));

                            $linkReference = $entry['reference']
                                ?? ($linkType === 'Payment'
                                    ? 'PAY-00045'
                                    : ($linkType === 'Expense' ? 'EXP-00045' : 'INV-00045'));

                            $linkClasses = $linkType === 'Payment'
                                ? 'border-emerald-400 bg-emerald-50 text-emerald-600'
                                : ($linkType === 'Expense'
                                    ? 'border-amber-400 bg-amber-50 text-amber-600'
                                    : 'border-blue-400 bg-blue-50 text-blue-600');
                        @endphp

                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4 text-center text-gray-400">
                                <i class="fa-solid fa-grip-vertical text-[10px]"></i>
                            </td>

                            <td class="px-2 py-4">
                                <input
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300"
                                    aria-label="Select {{ $entry['entry'] }}"
                                >
                            </td>

                            <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">
                                {{ $entry['entry'] }}
                            </td>

                            <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                {{ $entry['description'] }}
                            </td>

                            <td class="px-2 py-4">
                                <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px] text-gray-500">
                                    {{ $entry['company'] }}
                                </span>
                            </td>

                            <td class="truncate whitespace-nowrap px-2 py-4 text-gray-900">
                                {{ $entry['debit'] }}
                            </td>

                            <td class="truncate whitespace-nowrap px-2 py-4 text-gray-900">
                                {{ $entry['credit'] }}
                            </td>

                            <td class="px-2 py-4">
                                <div class="flex flex-wrap items-center gap-1.5">
                                    <span class="inline-flex whitespace-nowrap rounded-md border px-2 py-0.5 text-[11px] font-medium {{ $linkClasses }}">
                                        {{ $linkType }}
                                    </span>

                                    <span class="inline-flex whitespace-nowrap rounded-md border px-2 py-0.5 text-[11px] font-medium {{ $linkClasses }}">
                                        {{ $linkReference }}
                                    </span>
                                </div>
                            </td>

                            <td class="relative px-2 py-4 text-center">
                                <button
                                    type="button"
                                    class="staff-action-toggle rounded-md p-2 text-gray-700 transition hover:bg-gray-100"
                                    aria-label="Actions"
                                >
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                                    <button
                                        type="button"
                                        class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                    >
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3333 10C18.3333 12.357 18.3333 13.5355 17.6011 14.2678C17.0666 14.8022 16.2945 14.9466 15 14.9856M4.99996 14.9856C3.70542 14.9466 2.93328 14.8022 2.39886 14.2678C1.66663 13.5355 1.66663 12.357 1.66663 10C1.66663 7.64298 1.66663 6.46447 2.39886 5.73223C3.13109 5 4.3096 5 6.66663 5H13.3333C15.6903 5 16.8688 5 17.6011 5.73223C17.8509 5.98206 18.0155 6.28385 18.1239 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.3335H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8334 12.5L4.16671 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99984C14.9466 3.7053 14.8022 2.93316 14.2678 2.39874C13.5355 1.6665 12.357 1.6665 10 1.6665C7.64298 1.6665 6.46447 1.6665 5.73223 2.39874C5.19781 2.93316 5.05344 3.7053 5.01444 4.99984M15 12.4998V13.3332C15 15.6902 15 16.8687 14.2678 17.6009C13.7334 18.1354 12.9612 18.2797 11.6667 18.3187M5 12.4998V13.3332C5 15.6902 5 16.8687 5.73223 17.6009C6.26665 18.1354 7.03879 18.2797 8.33333 18.3187" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1667" cy="8.33333" r="0.833333" fill="#1C274C"/>
</g>
<defs>
<clipPath id="clip0_1202_33320">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                                        <span>Print</span>
                                    </button>

                                    <button
                                        type="button"
                                        class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                    >
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33313)">
<path d="M11.9667 3.39872L12.7391 2.62632C14.0188 1.34657 16.0937 1.34657 17.3735 2.62632C18.6532 3.90607 18.6532 5.98096 17.3735 7.26072L16.6011 8.03312M11.9667 3.39872C11.9667 3.39872 12.0632 5.04007 13.5115 6.48832C14.9597 7.93657 16.6011 8.03312 16.6011 8.03312M11.9667 3.39872L9.99996 5.36544M7.08329 8.28211L4.86565 10.4998C4.38468 10.9807 4.14419 11.2212 3.93737 11.4864C3.6934 11.7992 3.48424 12.1376 3.31358 12.4957C3.1689 12.7993 3.06136 13.1219 2.84626 13.7672L1.9348 16.5016L1.712 17.17C1.60615 17.4875 1.6888 17.8376 1.92549 18.0743C2.16217 18.311 2.51228 18.3936 2.82983 18.2878L3.49823 18.065L6.23261 17.1535C6.87789 16.9384 7.20054 16.8309 7.50411 16.6862C7.8622 16.5156 8.20064 16.3064 8.51343 16.0624C8.77859 15.8556 9.01907 15.6151 9.50004 15.1341L9.63436 14.9998L12.2172 12.417L16.6011 8.03312M3.49823 18.065L1.9348 16.5016" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1202_33313">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                                        <span>Edit</span>
                                    </button>

                                    <button
                                        type="button"
                                        class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0834 5H2.91663" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91663 9.1665L8.33329 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0833 9.1665L11.6666 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41663 5C5.46319 5 5.48648 5 5.50758 4.99947C6.19379 4.98208 6.79915 4.54576 7.03264 3.90027C7.03982 3.88041 7.04719 3.85832 7.06191 3.81415L7.14282 3.57143C7.21188 3.36423 7.24642 3.26063 7.29222 3.17267C7.47497 2.82173 7.81308 2.57803 8.2038 2.51564C8.30173 2.5 8.41094 2.5 8.62934 2.5H11.3706C11.589 2.5 11.6982 2.5 11.7961 2.51564C12.1868 2.57803 12.525 2.82173 12.7077 3.17267C12.7535 3.26063 12.788 3.36423 12.8571 3.57143L12.938 3.81415C12.9527 3.85826 12.9601 3.88042 12.9673 3.90027C13.2008 4.54576 13.8061 4.98208 14.4923 4.99947C14.5134 5 14.5367 5 14.5833 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8328C15.1638 15.0452 15.09 16.1514 14.3692 16.8258C13.6483 17.5002 12.5397 17.5002 10.3223 17.5002H9.67787C7.46054 17.5002 6.35187 17.5002 5.63103 16.8258C4.91019 16.1514 4.83644 15.0452 4.68895 12.8328L4.30566 7.0835M15.6946 7.0835L15.5279 9.5835" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                                        <span>Delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="9" class="h-[220px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div class="space-y-4 lg:hidden">
    @foreach ($entries as $entry)
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
            <div class="mb-3 flex items-start justify-between gap-3">
                <div class="min-w-0">
                    <p class="truncate text-sm font-semibold text-gray-950">
                        {{ $entry['entry'] }}
                    </p>

                    <p class="mt-1 line-clamp-2 text-sm text-gray-500">
                        {{ $entry['description'] }}
                    </p>
                </div>

               <div class="flex shrink-0 items-center gap-2">
                    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3333 10C18.3333 12.357 18.3333 13.5355 17.6011 14.2678C17.0666 14.8022 16.2945 14.9466 15 14.9856M4.99996 14.9856C3.70542 14.9466 2.93328 14.8022 2.39886 14.2678C1.66663 13.5355 1.66663 12.357 1.66663 10C1.66663 7.64298 1.66663 6.46447 2.39886 5.73223C3.13109 5 4.3096 5 6.66663 5H13.3333C15.6903 5 16.8688 5 17.6011 5.73223C17.8509 5.98206 18.0155 6.28385 18.1239 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.3335H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8334 12.5L4.16671 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99984C14.9466 3.7053 14.8022 2.93316 14.2678 2.39874C13.5355 1.6665 12.357 1.6665 10 1.6665C7.64298 1.6665 6.46447 1.6665 5.73223 2.39874C5.19781 2.93316 5.05344 3.7053 5.01444 4.99984M15 12.4998V13.3332C15 15.6902 15 16.8687 14.2678 17.6009C13.7334 18.1354 12.9612 18.2797 11.6667 18.3187M5 12.4998V13.3332C5 15.6902 5 16.8687 5.73223 17.6009C6.26665 18.1354 7.03879 18.2797 8.33333 18.3187" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1667" cy="8.33333" r="0.833333" fill="#1C274C"/>
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
<path d="M17.0834 5H2.91663" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91663 9.1665L8.33329 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0833 9.1665L11.6666 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41663 5C5.46319 5 5.48648 5 5.50758 4.99947C6.19379 4.98208 6.79915 4.54576 7.03264 3.90027C7.03982 3.88041 7.04719 3.85832 7.06191 3.81415L7.14282 3.57143C7.21188 3.36423 7.24642 3.26063 7.29222 3.17267C7.47497 2.82173 7.81308 2.57803 8.2038 2.51564C8.30173 2.5 8.41094 2.5 8.62934 2.5H11.3706C11.589 2.5 11.6982 2.5 11.7961 2.51564C12.1868 2.57803 12.525 2.82173 12.7077 3.17267C12.7535 3.26063 12.788 3.36423 12.8571 3.57143L12.938 3.81415C12.9527 3.85826 12.9601 3.88042 12.9673 3.90027C13.2008 4.54576 13.8061 4.98208 14.4923 4.99947C14.5134 5 14.5367 5 14.5833 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8328C15.1638 15.0452 15.09 16.1514 14.3692 16.8258C13.6483 17.5002 12.5397 17.5002 10.3223 17.5002H9.67787C7.46054 17.5002 6.35187 17.5002 5.63103 16.8258C4.91019 16.1514 4.83644 15.0452 4.68895 12.8328L4.30566 7.0835M15.6946 7.0835L15.5279 9.5835" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
                    </button>
                </div>
            </div>

            <div class="mb-3 flex flex-wrap gap-2">
                <span class="rounded-md border border-gray-200 px-2 py-1 text-xs text-gray-700">
                    {{ $entry['company'] }}
                </span>

                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-1 text-xs text-green-600">
                    {{ $entry['status'] }}
                </span>
            </div>

            <div class="grid grid-cols-2 gap-3 text-sm">
                <div>
                    <p class="text-gray-400">Date</p>
                    <p>{{ $entry['date'] }}</p>
                </div>

                <div>
                    <p class="text-gray-400">Debit</p>
                    <p class="font-medium text-gray-950">{{ $entry['debit'] }}</p>
                </div>

                <div>
                    <p class="text-gray-400">Credit</p>
                    <p class="font-medium text-gray-950">{{ $entry['credit'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'journal-entries-rows-per-page'])
            </div>
        </div>
</div>

@once
    <script>
        document.addEventListener('click', function (event) {
            const picker = event.target.closest('[data-dynamic-date-picker]');
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            function pad(value) {
                return String(value).padStart(2, '0');
            }

            function formatDate(date) {
                return `${pad(date.getMonth() + 1)}/${pad(date.getDate())}/${date.getFullYear()}`;
            }

            function renderPicker(currentPicker) {
                const grid = currentPicker.querySelector('[data-date-grid]');
                const label = currentPicker.querySelector('[data-date-month-label]');

                if (!grid || !label) {
                    return;
                }

                const month = Number(currentPicker.dataset.viewMonth ?? 5);
                const year = Number(currentPicker.dataset.viewYear ?? 2026);
                const selectedDate = currentPicker.dataset.selectedDate || '';
                const firstDay = new Date(year, month, 1);
                const startDate = new Date(year, month, 1 - firstDay.getDay());

                currentPicker.dataset.viewMonth = String(month);
                currentPicker.dataset.viewYear = String(year);
                label.textContent = `${monthNames[month]} ${year}`;
                grid.innerHTML = '';

                for (let index = 0; index < 42; index += 1) {
                    const day = new Date(startDate);
                    day.setDate(startDate.getDate() + index);

                    const value = formatDate(day);
                    const isCurrentMonth = day.getMonth() === month;
                    const isSelected = value === selectedDate;
                    const button = document.createElement('button');

                    button.type = 'button';
                    button.dataset.staffDate = value;
                    button.textContent = day.getDate();
                    button.className = [
                        'inline-flex h-8 items-center justify-center rounded-lg',
                        isSelected ? 'staff-select-option-active text-white' : '',
                        !isSelected && isCurrentMonth ? 'text-gray-800 hover:bg-gray-50' : '',
                        !isSelected && !isCurrentMonth ? 'text-gray-300 hover:bg-gray-50' : '',
                    ].filter(Boolean).join(' ');

                    grid.appendChild(button);
                }
            }

            if (!picker) {
                document.querySelectorAll('[data-dynamic-date-picker][open]').forEach(function (openPicker) {
                    if (!openPicker.contains(event.target)) {
                        openPicker.removeAttribute('open');
                    }
                });
                return;
            }

            renderPicker(picker);

            const previous = event.target.closest('[data-date-prev]');
            const next = event.target.closest('[data-date-next]');
            const today = event.target.closest('[data-date-today]');
            const clear = event.target.closest('[data-staff-date-clear]');
            const day = event.target.closest('[data-staff-date]');
            const value = picker.querySelector('.staff-date-value');

            if (previous || next) {
                event.preventDefault();
                let month = Number(picker.dataset.viewMonth);
                let year = Number(picker.dataset.viewYear);

                month += next ? 1 : -1;

                if (month < 0) {
                    month = 11;
                    year -= 1;
                }

                if (month > 11) {
                    month = 0;
                    year += 1;
                }

                picker.dataset.viewMonth = String(month);
                picker.dataset.viewYear = String(year);
                renderPicker(picker);
                return;
            }

            if (today) {
                event.preventDefault();
                const now = new Date();

                picker.dataset.viewMonth = String(now.getMonth());
                picker.dataset.viewYear = String(now.getFullYear());
                picker.dataset.selectedDate = formatDate(now);

                if (value) {
                    value.textContent = picker.dataset.selectedDate;
                    value.classList.remove('text-gray-500');
                    value.classList.add('text-gray-800');
                }

                renderPicker(picker);
                picker.removeAttribute('open');
                return;
            }

            if (clear) {
                event.preventDefault();
                picker.dataset.selectedDate = '';

                if (value) {
                    value.textContent = 'mm/dd/yyyy';
                    value.classList.add('text-gray-500');
                    value.classList.remove('text-gray-800');
                }

                renderPicker(picker);
                picker.removeAttribute('open');
                return;
            }

            if (day) {
                event.preventDefault();
                picker.dataset.selectedDate = day.dataset.staffDate;

                if (value) {
                    value.textContent = day.dataset.staffDate;
                    value.classList.remove('text-gray-500');
                    value.classList.add('text-gray-800');
                }

                renderPicker(picker);
                picker.removeAttribute('open');
            }
        });
    </script>
@endonce

<script>
    (() => {
        const getJournalLinesBody = () => document.getElementById('journalLinesBody');

        const parseJournalAmount = (value) => {
            const number = Number(String(value ?? '').replace(/,/g, ''));
            return Number.isFinite(number) ? Math.max(0, number) : 0;
        };

        const updateJournalLineNames = () => {
            const rows = getJournalLinesBody()?.querySelectorAll('.journal-line-row') || [];

            rows.forEach((row, index) => {
                const number = row.querySelector('.journal-line-number');
                const accountCode = row.querySelector('input[name*="[account_code]"]');
                const accountName = row.querySelector('input[name*="[account_name]"]');
                const debit = row.querySelector('input[name*="[debit]"]');
                const credit = row.querySelector('input[name*="[credit]"]');

                if (number) number.textContent = index + 1;
                if (accountCode) accountCode.name = `lines[${index}][account_code]`;
                if (accountName) accountName.name = `lines[${index}][account_name]`;
                if (debit) debit.name = `lines[${index}][debit]`;
                if (credit) credit.name = `lines[${index}][credit]`;
            });
        };

        const calculateJournalTotals = () => {
            const rows = getJournalLinesBody()?.querySelectorAll('.journal-line-row') || [];
            let totalDebit = 0;
            let totalCredit = 0;

            rows.forEach((row) => {
                totalDebit += parseJournalAmount(row.querySelector('.journal-line-debit')?.value);
                totalCredit += parseJournalAmount(row.querySelector('.journal-line-credit')?.value);
            });

            const difference = Math.abs(totalDebit - totalCredit);

            const debitElement = document.getElementById('journalTotalDebit');
            const creditElement = document.getElementById('journalTotalCredit');
            const differenceElement = document.getElementById('journalDifference');

            if (debitElement) debitElement.textContent = totalDebit.toFixed(2);
            if (creditElement) creditElement.textContent = totalCredit.toFixed(2);
            if (differenceElement) differenceElement.textContent = difference.toFixed(2);
        };

        const createJournalLine = () => {
            const body = getJournalLinesBody();
            const index = body?.querySelectorAll('.journal-line-row').length || 0;

            if (!body) return;

            const row = document.createElement('tr');
            row.className = 'journal-line-row border-t border-gray-100';

            row.innerHTML = `
                <td class="journal-line-number px-2 py-2 text-gray-700">${index + 1}</td>

                <td class="px-2 py-2">
                    <input
                        type="text"
                        name="lines[${index}][account_code]"
                        placeholder="Enter account code"
                        class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                    >
                </td>

                <td class="px-2 py-2">
                    <input
                        type="text"
                        name="lines[${index}][account_name]"
                        value="Cash"
                        class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                    >
                </td>

                <td class="px-2 py-2">
                    <select
                        name="lines[${index}][type]"
                        class="h-9 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600"
                    >
                        <option>Assets</option>
                        <option>Liability</option>
                        <option>Equity</option>
                        <option>Revenue</option>
                        <option>Expense</option>
                    </select>
                </td>

                <td class="px-2 py-2">
                    <input
                        type="number"
                        name="lines[${index}][debit]"
                        value="0.00"
                        min="0"
                        step="0.01"
                        class="journal-line-debit h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                    >
                </td>

                <td class="px-2 py-2">
                    <input
                        type="number"
                        name="lines[${index}][credit]"
                        value="0.00"
                        min="0"
                        step="0.01"
                        class="journal-line-credit h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                    >
                </td>

                <td class="px-2 py-2 text-center">
                    <button
                        type="button"
                        class="remove-journal-line inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-200 text-gray-600 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                        aria-label="Remove line"
                    >
                        <i class="fa-solid fa-xmark text-[11px]"></i>
                    </button>
                </td>
            `;

            body.appendChild(row);
            calculateJournalTotals();
        };

        document.addEventListener('click', (event) => {
            if (event.target.closest?.('#addJournalLineButton')) {
                createJournalLine();
                return;
            }

            const removeButton = event.target.closest?.('.remove-journal-line');

            if (!removeButton) return;

            const body = getJournalLinesBody();
            const rows = body?.querySelectorAll('.journal-line-row') || [];

            if (rows.length <= 1) {
                const row = removeButton.closest('.journal-line-row');

                row?.querySelectorAll('input').forEach((input) => {
                    input.value = input.classList.contains('journal-line-debit') ||
                        input.classList.contains('journal-line-credit')
                        ? '0.00'
                        : '';
                });

                calculateJournalTotals();
                return;
            }

            removeButton.closest('.journal-line-row')?.remove();
            updateJournalLineNames();
            calculateJournalTotals();
        });

        document.addEventListener('input', (event) => {
            if (
                event.target.classList?.contains('journal-line-debit') ||
                event.target.classList?.contains('journal-line-credit')
            ) {
                calculateJournalTotals();
            }
        });

        calculateJournalTotals();
    })();
</script>

