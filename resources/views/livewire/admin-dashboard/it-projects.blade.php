<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-lg font-semibold text-gray-950">New IT Project</h2>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Project Name *</label>
                    <input value="Logistic" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Start Date</label>
                    <details class="staff-date-picker relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
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
                        <div class="absolute left-0 top-12 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                            <div class="mb-3 flex items-center justify-between">
                                <button type="button" class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">June 2026</button>
                                <div class="flex items-center gap-1 text-gray-500">
                                    <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Previous month"><i class="fa-solid fa-chevron-left text-[11px]"></i></button>
                                    <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Next month"><i class="fa-solid fa-chevron-right text-[11px]"></i></button>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                                <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                            </div>
                            <div class="mt-2 grid grid-cols-7 gap-1 text-center text-sm">
                                @foreach (['31', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '1', '2', '3', '4'] as $dayIndex => $day)
                                    <button type="button" data-staff-date="{{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? '' : '06/' . str_pad($day, 2, '0', STR_PAD_LEFT) . '/2026' }}" class="inline-flex h-8 items-center justify-center rounded-lg {{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? 'text-gray-300 hover:bg-gray-50' : ($day === '23' ? 'bg-gray-900 text-white hover:bg-gray-800' : 'text-gray-800 hover:bg-gray-50') }}">{{ $day }}</button>
                                @endforeach
                            </div>
                            <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3 text-sm font-medium">
                                <button type="button" data-staff-date-clear class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50">Clear</button>
                                <button type="button" data-staff-date="06/23/2026" class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50">Today</button>
                            </div>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Client Name *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">End Date</label>
                    <details class="staff-date-picker relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
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
                        <div class="absolute left-0 top-12 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                            <div class="mb-3 flex items-center justify-between">
                                <button type="button" class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">June 2026</button>
                                <div class="flex items-center gap-1 text-gray-500">
                                    <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Previous month"><i class="fa-solid fa-chevron-left text-[11px]"></i></button>
                                    <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Next month"><i class="fa-solid fa-chevron-right text-[11px]"></i></button>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                                <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                            </div>
                            <div class="mt-2 grid grid-cols-7 gap-1 text-center text-sm">
                                @foreach (['31', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '1', '2', '3', '4'] as $dayIndex => $day)
                                    <button type="button" data-staff-date="{{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? '' : '06/' . str_pad($day, 2, '0', STR_PAD_LEFT) . '/2026' }}" class="inline-flex h-8 items-center justify-center rounded-lg {{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? 'text-gray-300 hover:bg-gray-50' : ($day === '23' ? 'bg-gray-900 text-white hover:bg-gray-800' : 'text-gray-800 hover:bg-gray-50') }}">{{ $day }}</button>
                                @endforeach
                            </div>
                            <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3 text-sm font-medium">
                                <button type="button" data-staff-date-clear class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50">Clear</button>
                                <button type="button" data-staff-date="06/23/2026" class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50">Today</button>
                            </div>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Status</label>
                    <details class="staff-select relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-select-value">Planning</span>
                            <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                        </summary>
                        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                            <button type="button" data-staff-select-option="Planning" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Planning</button>
                            <button type="button" data-staff-select-option="In Progress" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">In Progress</button>
                            <button type="button" data-staff-select-option="Completed" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Completed</button>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Assigned Stuff</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Budget</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">SLA Response</label>
                    <input value="4 Hr" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Description</label>
                    <input placeholder="Description..." class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">SLA Resolution</label>
                    <input value="24 Hr" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button wire:click="cancelForm" type="button"
                    class="h-10 rounded-md border border-blue-700 px-7 text-sm font-medium text-blue-700">
                    Cancel
                </button>

                <button type="button" class="h-10 rounded-md bg-blue-700 px-8 text-sm font-medium text-white">
                    Save
                </button>
            </div>
        </div>
    @endif

    <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">IT Projects</h2>
                <p class="mt-1 text-sm text-gray-500">Manage ICT service projects</p>
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

                    <button type="button"
                        class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                       <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97823 8.72119C5.78466 8.52755 5.78462 8.21363 5.97823 8.02002C6.17186 7.82661 6.48583 7.82651 6.67941 8.02002L8.45773 9.79834L8.45773 0.495605C8.45787 0.221884 8.68007 0.000488281 8.95382 0.000488281C9.22751 0.000564575 9.44977 0.221931 9.44991 0.495605L9.44991 9.79834L11.2282 8.02002C11.4219 7.82661 11.7358 7.82651 11.9294 8.02002C12.123 8.21359 12.1228 8.52754 11.9294 8.72119L9.30441 11.3462C9.11077 11.5398 8.79687 11.5398 8.60323 11.3462L5.97823 8.72119ZM0.145226 3.47119C-0.0484087 3.27756 -0.0484087 2.96365 0.145226 2.77002L2.77023 0.14502C2.96389 -0.0482531 3.27788 -0.0484953 3.4714 0.14502L6.0964 2.77002C6.28981 2.96354 6.28964 3.27756 6.0964 3.47119C5.9028 3.66479 5.58887 3.66472 5.39523 3.47119L3.61593 1.69287L3.61593 10.9956C3.61593 11.2693 3.39444 11.4914 3.12081 11.4917C2.84697 11.4917 2.62472 11.2694 2.62472 10.9956L2.62472 1.69287L0.846398 3.47119C0.652797 3.66479 0.33887 3.66472 0.145226 3.47119Z" fill="#71717A"/>
</svg>

                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'New Project' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[22%]">
                    <col class="w-[28%]">
                    <col class="w-[11%]">
                    <col class="w-[11%]">
                    <col class="w-[11%]">
                    <col class="w-[10%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                        </th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Project Name</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Description</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Budget</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">SLA Response</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Deadline</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($projects as $project)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4">
                                <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                            </td>

                            <td class="px-2 py-4 font-medium text-gray-900">
                                {{ $project['name'] }}
                            </td>

                            <td class="px-2 py-4 text-gray-700">
                                {{ $project['description'] }}
                            </td>

                            <td class="px-2 py-4">
                                {{ $project['budget'] }}
                            </td>

                            <td class="px-2 py-4">
                                {{ $project['sla_response'] }}
                            </td>

                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] text-gray-700">
                                    {{ $project['status'] }}
                                </span>
                            </td>

                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] text-gray-700">
                                    {{ $project['deadline'] }}
                                </span>
                            </td>

                            <td class="relative px-2 py-4 text-right">
                               <button type="button" class="staff-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100" aria-label="Actions">
    <i class="fa-solid fa-ellipsis-vertical"></i>
</button>

<div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
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
    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0501 2.48221L11.8225 1.70982C13.1022 0.430062 15.1771 0.430062 16.4569 1.70982C17.7366 2.98957 17.7366 5.06446 16.4569 6.34421L15.6845 7.11661M11.0501 2.48221C11.0501 2.48221 11.1466 4.12356 12.5949 5.57181C14.0431 7.02006 15.6845 7.11661 15.6845 7.11661M11.0501 2.48221L9.08333 4.44894M6.16667 7.3656L3.94902 9.58325C3.46805 10.0642 3.22757 10.3047 3.02075 10.5699C2.77678 10.8827 2.56761 11.2211 2.39695 11.5792C2.25228 11.8828 2.14473 12.2054 1.92963 12.8507L1.01817 15.5851L0.795374 16.2535C0.689523 16.571 0.772171 16.9211 1.00886 17.1578C1.24555 17.3945 1.59565 17.4771 1.9132 17.3713L2.5816 17.1485L5.31598 16.237C5.96127 16.0219 6.28391 15.9144 6.58748 15.7697C6.94558 15.5991 7.28401 15.3899 7.5968 15.1459C7.86196 14.9391 8.10245 14.6986 8.58342 14.2176L8.71773 14.0833L11.3006 11.5005L15.6845 7.11661M2.5816 17.1485L1.01817 15.5851" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        <span>Edit</span>
    </button>
    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
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
                        <td colspan="8" class="h-[150px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

       
    </div>
    <div class="space-y-4 lg:hidden">
    @foreach ($projects as $project)
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
            <div class="mb-3 flex items-start justify-between gap-3">
                <div class="min-w-0">
                    <p class="truncate text-sm font-semibold text-gray-950">
                        {{ $project['name'] }}
                    </p>

                    <p class="mt-1 line-clamp-2 text-sm text-gray-500">
                        {{ $project['description'] }}
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
                    {{ $project['status'] }}
                </span>

                <span class="rounded-md border border-gray-200 px-2 py-1 text-xs text-gray-700">
                    {{ $project['deadline'] }}
                </span>
            </div>

            <div class="grid grid-cols-2 gap-3 text-sm">
                <div>
                    <p class="text-gray-400">Budget</p>
                    <p class="font-medium text-gray-950">{{ $project['budget'] }}</p>
                </div>

                <div>
                    <p class="text-gray-400">SLA Response</p>
                    <p>{{ $project['sla_response'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
 <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'it-projects-rows-per-page'])
            </div>
        </div>
</div>
