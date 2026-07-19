<div class="space-y-8">
    @include('livewire.logistic-admin-dashboard._shared-ui')

    @if ($showForm)
        @php
            $expenseCalendarDays = [
                '31', '1', '2', '3', '4', '5', '6',
                '7', '8', '9', '10', '11', '12', '13',
                '14', '15', '16', '17', '18', '19', '20',
                '21', '22', '23', '24', '25', '26', '27',
                '28', '29', '30', '1', '2', '3', '4',
            ];
        @endphp

        <section class="rounded-xl bg-white">
            <h2 class="mb-5 text-xl font-semibold text-gray-950">Expense Management</h2>

            <div class="space-y-5">
                {{-- 1. Basic Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">1. Basic Information</h3>

                    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-5">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Expense Title</label>
                            <input
                                type="text"
                                name="title"
                                placeholder="Enter Expense Title"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Expense Category <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Office rent</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Office rent', 'Internet', 'Fuel', 'Market Expenses', 'License renewal', 'Bank fees'] as $category)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $category }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $category }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Expense Currency <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">USD</span>
                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['USD', 'AFN'] as $currency)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $currency }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $currency }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Amount</label>
                            <input
                                type="number"
                                name="amount"
                                value="00.0"
                                min="0"
                                step="0.01"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Expense Date <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-date-picker relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-date-value text-gray-500">Select Date</span>

                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.6666 18.3334H8.33329C5.1906 18.3334 3.61925 18.3334 2.64294 17.3571C1.66663 16.3808 1.66663 14.8094 1.66663 11.6667V10C1.66663 6.85734 1.66663 5.286 2.64294 4.30968C3.61925 3.33337 5.1906 3.33337 8.33329 3.33337H11.6666C14.8093 3.33337 16.3807 3.33337 17.357 4.30968C18.3333 5.286 18.3333 6.85734 18.3333 10V11.6667C18.3333 14.8094 18.3333 16.3808 17.357 17.3571C16.8127 17.9014 16.0834 18.1422 15 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.83337 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1666 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.9166 7.5H13.8541H8.95829M1.66663 7.5H4.89579" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15 14.1667C15 14.6269 14.6269 15 14.1667 15C13.7065 15 13.3334 14.6269 13.3334 14.1667C13.3334 13.7064 13.7065 13.3333 14.1667 13.3333C14.6269 13.3333 15 13.7064 15 14.1667Z" fill="#1C274C"/>
<path d="M15 10.8333C15 11.2936 14.6269 11.6667 14.1667 11.6667C13.7065 11.6667 13.3334 11.2936 13.3334 10.8333C13.3334 10.3731 13.7065 10 14.1667 10C14.6269 10 15 10.3731 15 10.8333Z" fill="#1C274C"/>
<path d="M10.8333 14.1667C10.8333 14.6269 10.4602 15 9.99996 15C9.53972 15 9.16663 14.6269 9.16663 14.1667C9.16663 13.7064 9.53972 13.3333 9.99996 13.3333C10.4602 13.3333 10.8333 13.7064 10.8333 14.1667Z" fill="#1C274C"/>
<path d="M10.8333 10.8333C10.8333 11.2936 10.4602 11.6667 9.99996 11.6667C9.53972 11.6667 9.16663 11.2936 9.16663 10.8333C9.16663 10.3731 9.53972 10 9.99996 10C10.4602 10 10.8333 10.3731 10.8333 10.8333Z" fill="#1C274C"/>
<path d="M6.66667 14.1667C6.66667 14.6269 6.29357 15 5.83333 15C5.3731 15 5 14.6269 5 14.1667C5 13.7064 5.3731 13.3333 5.83333 13.3333C6.29357 13.3333 6.66667 13.7064 6.66667 14.1667Z" fill="#1C274C"/>
<path d="M6.66667 10.8333C6.66667 11.2936 6.29357 11.6667 5.83333 11.6667C5.3731 11.6667 5 11.2936 5 10.8333C5 10.3731 5.3731 10 5.83333 10C6.29357 10 6.66667 10.3731 6.66667 10.8333Z" fill="#1C274C"/>
</svg>

                                </summary>

                                <input type="hidden" name="date" class="staff-date-input">

                                <div class="absolute right-0 top-11 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
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
                                        <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                                    </div>

                                    <div class="mt-2 grid grid-cols-7 gap-1 text-center text-sm">
                                        @foreach ($expenseCalendarDays as $dayIndex => $day)
                                            @php
                                                $outsideMonth = in_array($dayIndex, [0, 31, 32, 33, 34], true);
                                                $calendarDate = $outsideMonth
                                                    ? ''
                                                    : '06/' . str_pad($day, 2, '0', STR_PAD_LEFT) . '/2026';
                                            @endphp

                                            <button
                                                type="button"
                                                data-staff-date="{{ $calendarDate }}"
                                                class="inline-flex h-8 items-center justify-center rounded-lg {{ $outsideMonth ? 'text-gray-300 hover:bg-gray-50' : ($day === '23' ? 'bg-gray-900 text-white hover:bg-gray-800' : 'text-gray-800 hover:bg-gray-50') }}"
                                            >
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

                {{-- 2. Payment Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">2. Payment Information</h3>

                    <div class="grid gap-4 md:grid-cols-3">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Paid Source</label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Cash</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Cash', 'Bank Transfer', 'Card', 'Other'] as $source)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $source }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $source }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Paid reference (Optional)</label>
                            <input
                                type="text"
                                name="paid_reference"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Paid Status</label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Paid</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Paid', 'Pending', 'Partially Paid', 'Unpaid'] as $status)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $status }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $status }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                {{-- 3. Projects & Notes --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">3. Projects &amp; Notes</h3>

                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Notes</label>
                            <input
                                type="text"
                                name="notes"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Linked Project (Optional)</label>
                            <input
                                type="text"
                                name="project"
                                placeholder="Project link"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>
                    </div>
                </div>

                {{-- 4. Attachments --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">4. Attachments</h3>

                    <div class="grid gap-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Receipt Upload</label>

                            <label class="flex h-10 cursor-pointer items-center rounded-md border border-dashed border-blue-400 bg-white px-3 text-xs text-gray-700 transition hover:bg-blue-50/40">
                                <span id="expenseReceiptFileName" class="min-w-0 flex-1 truncate">Upload file</span>
                                <i class="fa-solid fa-paperclip shrink-0 text-sm text-[#1C274C]"></i>
                                <input id="expenseReceiptInput" type="file" name="receipt" class="hidden">
                            </label>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Invoice Upload</label>

                            <label class="flex h-10 cursor-pointer items-center rounded-md border border-dashed border-blue-400 bg-white px-3 text-xs text-gray-700 transition hover:bg-blue-50/40">
                                <span id="expenseInvoiceFileName" class="min-w-0 flex-1 truncate">Upload file</span>
                                <i class="fa-solid fa-paperclip shrink-0 text-sm text-[#1C274C]"></i>
                                <input id="expenseInvoiceInput" type="file" name="invoice" class="hidden">
                            </label>
                        </div>
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
                    Save Invoice
                </button>
            </div>
        </section>
    @else
        <section class="rounded-xl bg-white">
            <div class="mb-5">
                <h2 class="text-xl font-semibold text-gray-950">Expense Management</h2>
                <p class="mt-1 text-sm text-gray-400">Track all company expenses</p>
            </div>

            <div class="mb-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label class="relative block w-full sm:w-[280px]">
                        <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6666 16.6666L18.3333 18.3333" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M5.62496 2.72573C6.7894 2.05214 8.14132 1.66663 9.58329 1.66663C13.9555 1.66663 17.5 5.21104 17.5 9.58329C17.5 13.9555 13.9555 17.5 9.58329 17.5C5.21104 17.5 1.66663 13.9555 1.66663 9.58329C1.66663 8.14132 2.05214 6.7894 2.72573 5.62496" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>

                        <input
                            class="h-10 w-full rounded-md border border-gray-200 pl-10 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500"
                            placeholder="Search..."
                        >
                    </label>

  <button class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.94125 9.97534C6.74767 9.7817 6.74763 9.46778 6.94125 9.27417C7.13488 9.08076 7.44885 9.08066 7.64242 9.27417L9.42074 11.0525L9.42074 1.74976C9.42088 1.47603 9.64308 1.25464 9.91683 1.25464C10.1905 1.25471 10.4128 1.47608 10.4129 1.74976L10.4129 11.0525L12.1912 9.27417C12.3849 9.08076 12.6988 9.08066 12.8924 9.27417C13.086 9.46774 13.0859 9.78169 12.8924 9.97534L10.2674 12.6003C10.0738 12.794 9.75988 12.794 9.56625 12.6003L6.94125 9.97534ZM1.10824 4.72534C0.914604 4.53171 0.914604 4.2178 1.10824 4.02417L3.73324 1.39917C3.9269 1.2059 4.2409 1.20566 4.43441 1.39917L7.05941 4.02417C7.25282 4.21769 7.25265 4.53171 7.05941 4.72534C6.86581 4.91894 6.55188 4.91887 6.35824 4.72534L4.57894 2.94702L4.57894 12.2498C4.57894 12.5234 4.35745 12.7456 4.08382 12.7458C3.80998 12.7458 3.58773 12.5236 3.58773 12.2498L3.58773 2.94702L1.80941 4.72534C1.61581 4.91894 1.30188 4.91887 1.10824 4.72534Z" fill="#71717A"/>
</svg>

                        Filter
                    </button>
                </div>

                <button
                    wire:click="toggleForm"
                    type="button"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm transition hover:bg-blue-800"
                >
                    <i class="fa-solid fa-plus text-xs"></i>
                    Add Expense
                </button>
            </div>

            <div class="hidden min-h-[305px] overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
                <table class="w-full table-fixed text-left text-xs">
                    <colgroup>
                        <col class="w-[4%]">
                        <col class="w-[4%]">
                        <col class="w-[17%]">
                        <col class="w-[16%]">
                        <col class="w-[14%]">
                        <col class="w-[15%]">
                        <col class="w-[9%]">
                        <col class="w-[12%]">
                        <col class="w-[9%]">
                        <col class="w-[5%]">
                    </colgroup>

                    <thead class="bg-gray-50 text-gray-950">
                        <tr>
                            <th class="px-2 py-3"></th>
                            <th class="px-2 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                            </th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Title</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Category</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Project</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Source</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Status</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Amount</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Date</th>
                            <th class="whitespace-nowrap px-2 py-3 text-center font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr class="border-t border-gray-100 align-middle">
                                <td class="px-2 py-4 text-center text-gray-400">
                                    <i class="fa-solid fa-grip-vertical text-[11px]"></i>
                                </td>

                                <td class="px-2 py-4">
                                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">
                                    {{ $expense['title'] }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-700">
                                    {{ $expense['category'] }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-700">
                                    {{ $expense['project'] ?? $expense['company'] ?? '-' }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-700">
                                    {{ $expense['source'] }}
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex max-w-full truncate whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px] text-gray-500">
                                        {{ $expense['status'] }}
                                    </span>
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-900">
                                    {{ $expense['amount'] }}
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px] leading-5 text-gray-500">
                                        {{ $expense['date'] }}
                                    </span>
                                </td>

                                <td class="relative px-2 py-4 text-center">
                                    <button
                                        type="button"
                                        class="staff-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100"
                                        aria-label="Actions"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                                        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                            <i class="fa-solid fa-print w-4 text-center text-xs"></i>
                                            <span>Print</span>
                                        </button>

                                        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                            <i class="fa-solid fa-pen w-4 text-center text-xs"></i>
                                            <span>Edit</span>
                                        </button>

                                        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                            <i class="fa-solid fa-trash w-4 text-center text-xs"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="10" class="h-[150px]"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="space-y-4 lg:hidden">
                @foreach ($expenses as $expense)
                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-gray-950">{{ $expense['title'] }}</p>
                                <p class="mt-1 truncate text-sm text-gray-500">{{ $expense['category'] }}</p>
                            </div>

                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                        </div>

                        <div class="grid grid-cols-2 gap-3 text-sm">
                            <div>
                                <p class="text-gray-400">Project</p>
                                <p class="truncate text-gray-900">{{ $expense['project'] ?? $expense['company'] ?? '-' }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Source</p>
                                <p>{{ $expense['source'] }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Amount</p>
                                <p class="font-medium text-gray-950">{{ $expense['amount'] }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Date</p>
                                <p>{{ $expense['date'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
                <span>0 of 68 row(s) selected.</span>

                <div class="flex flex-wrap items-center gap-3">
                    @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'expense-rows-per-page'])
                </div>
            </div>
        </section>
    @endif
</div>

<script>
    document.addEventListener('change', (event) => {
        const fileNameTargets = {
            expenseReceiptInput: 'expenseReceiptFileName',
            expenseInvoiceInput: 'expenseInvoiceFileName',
        };

        const targetId = fileNameTargets[event.target?.id];

        if (!targetId) return;

        const file = event.target.files?.[0];
        const target = document.getElementById(targetId);

        if (target) {
            target.textContent = file ? file.name : 'Upload file';
        }
    });
</script>
