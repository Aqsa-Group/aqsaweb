<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    @if ($showForm)
        <div class="space-y-6">
            <h2 class="text-lg font-semibold text-gray-950">New Sales Invoices</h2>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">#Invoice</label>
                    <input value="Auto" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Client Name *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Company</label>
                    <details class="staff-select relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-select-value">Logistic</span>
                            <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                        </summary>
                        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                            <button type="button" data-staff-select-option="Logistic" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Logistic</button>
                            <button type="button" data-staff-select-option="ICT" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">ICT</button>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Project Name *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Status</label>
                    <details class="staff-select relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-select-value">Draft</span>
                            <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                        </summary>
                        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                            <button type="button" data-staff-select-option="Draft" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Draft</button>
                            <button type="button" data-staff-select-option="Sent" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Sent</button>
                            <button type="button" data-staff-select-option="Paid" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Paid</button>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Porches Order Reference</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <details class="staff-date-picker relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.6667 18.3334H8.33341C5.19072 18.3334 3.61937 18.3334 2.64306 17.3571C1.66675 16.3808 1.66675 14.8094 1.66675 11.6667V10C1.66675 6.85734 1.66675 5.286 2.64306 4.30968C3.61937 3.33337 5.19072 3.33337 8.33341 3.33337H11.6667C14.8094 3.33337 16.3808 3.33337 17.3571 4.30968C18.3334 5.286 18.3334 6.85734 18.3334 10V11.6667C18.3334 14.8094 18.3334 16.3808 17.3571 17.3571C16.8128 17.9014 16.0835 18.1422 15.0001 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.83325 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1667 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.9167 7.5H13.8542H8.95841M1.66675 7.5H4.89592" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9999 14.1667C14.9999 14.6269 14.6268 15 14.1666 15C13.7063 15 13.3333 14.6269 13.3333 14.1667C13.3333 13.7064 13.7063 13.3333 14.1666 13.3333C14.6268 13.3333 14.9999 13.7064 14.9999 14.1667Z" fill="#1C274C"/>
<path d="M14.9999 10.8333C14.9999 11.2936 14.6268 11.6667 14.1666 11.6667C13.7063 11.6667 13.3333 11.2936 13.3333 10.8333C13.3333 10.3731 13.7063 10 14.1666 10C14.6268 10 14.9999 10.3731 14.9999 10.8333Z" fill="#1C274C"/>
<path d="M10.8334 14.1667C10.8334 14.6269 10.4603 15 10.0001 15C9.53984 15 9.16675 14.6269 9.16675 14.1667C9.16675 13.7064 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7064 10.8334 14.1667Z" fill="#1C274C"/>
<path d="M10.8334 10.8333C10.8334 11.2936 10.4603 11.6667 10.0001 11.6667C9.53984 11.6667 9.16675 11.2936 9.16675 10.8333C9.16675 10.3731 9.53984 10 10.0001 10C10.4603 10 10.8334 10.3731 10.8334 10.8333Z" fill="#1C274C"/>
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
                    <label class="mb-2 block text-sm font-medium">Due Date</label>
                    <details class="staff-date-picker relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.6667 18.3334H8.33341C5.19072 18.3334 3.61937 18.3334 2.64306 17.3571C1.66675 16.3808 1.66675 14.8094 1.66675 11.6667V10C1.66675 6.85734 1.66675 5.286 2.64306 4.30968C3.61937 3.33337 5.19072 3.33337 8.33341 3.33337H11.6667C14.8094 3.33337 16.3808 3.33337 17.3571 4.30968C18.3334 5.286 18.3334 6.85734 18.3334 10V11.6667C18.3334 14.8094 18.3334 16.3808 17.3571 17.3571C16.8128 17.9014 16.0835 18.1422 15.0001 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.83325 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1667 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.9167 7.5H13.8542H8.95841M1.66675 7.5H4.89592" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9999 14.1667C14.9999 14.6269 14.6268 15 14.1666 15C13.7063 15 13.3333 14.6269 13.3333 14.1667C13.3333 13.7064 13.7063 13.3333 14.1666 13.3333C14.6268 13.3333 14.9999 13.7064 14.9999 14.1667Z" fill="#1C274C"/>
<path d="M14.9999 10.8333C14.9999 11.2936 14.6268 11.6667 14.1666 11.6667C13.7063 11.6667 13.3333 11.2936 13.3333 10.8333C13.3333 10.3731 13.7063 10 14.1666 10C14.6268 10 14.9999 10.3731 14.9999 10.8333Z" fill="#1C274C"/>
<path d="M10.8334 14.1667C10.8334 14.6269 10.4603 15 10.0001 15C9.53984 15 9.16675 14.6269 9.16675 14.1667C9.16675 13.7064 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7064 10.8334 14.1667Z" fill="#1C274C"/>
<path d="M10.8334 10.8333C10.8334 11.2936 10.4603 11.6667 10.0001 11.6667C9.53984 11.6667 9.16675 11.2936 9.16675 10.8333C9.16675 10.3731 9.53984 10 10.0001 10C10.4603 10 10.8334 10.3731 10.8334 10.8333Z" fill="#1C274C"/>
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
            </div>

            <div class="flex justify-end">
                <button class="inline-flex h-10 items-center gap-2 rounded-md border border-gray-200 bg-white px-4 text-sm font-medium hover:bg-gray-50">
                    <i class="fa-solid fa-plus"></i>
                    Add Item
                </button>
            </div>

            <div class="grid gap-4 md:grid-cols-[1.6fr_0.5fr_0.5fr_0.5fr_40px]">
                <div>
                    <label class="mb-2 block text-sm font-medium">Description</label>
                    <input placeholder="Description..." class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Quantity *</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Unit Price *</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Subtotal</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div class="flex items-end">
                    <button class="h-11 w-11 rounded-md border border-gray-200 text-lg">×</button>
                </div>
            </div>

            <div class="rounded-md border border-gray-200 bg-white p-4 text-sm">
                <div class="flex justify-between py-2">
                    <span>Subtotal:</span>
                    <span>$0.00</span>
                </div>
                <div class="flex justify-between py-2 text-gray-400">
                    <span>NGO Tax (2%):</span>
                    <span>-$0.00</span>
                </div>
                <div class="flex justify-between py-2 text-gray-400">
                    <span>Company Tax (2%):</span>
                    <span>-$0.00</span>
                </div>
                <div class="flex justify-between border-t border-gray-200 pt-3 font-medium">
                    <span>Total:</span>
                    <span>$0.00</span>
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
                <h2 class="text-lg font-semibold text-gray-950">Sales Invoices</h2>
                <p class="mt-1 text-sm text-gray-500">Invoice NGOS and Clients</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
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
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97823 8.72119C5.78466 8.52755 5.78462 8.21363 5.97823 8.02002C6.17186 7.82661 6.48583 7.82651 6.67941 8.02002L8.45773 9.79834L8.45773 0.495605C8.45787 0.221884 8.68007 0.000488281 8.95382 0.000488281C9.22751 0.000564575 9.44977 0.221931 9.44991 0.495605L9.44991 9.79834L11.2282 8.02002C11.4219 7.82661 11.7358 7.82651 11.9294 8.02002C12.123 8.21359 12.1228 8.52754 11.9294 8.72119L9.30441 11.3462C9.11077 11.5398 8.79687 11.5398 8.60323 11.3462L5.97823 8.72119ZM0.145226 3.47119C-0.0484087 3.27756 -0.0484087 2.96365 0.145226 2.77002L2.77023 0.14502C2.96389 -0.0482531 3.27788 -0.0484953 3.4714 0.14502L6.0964 2.77002C6.28981 2.96354 6.28964 3.27756 6.0964 3.47119C5.9028 3.66479 5.58887 3.66472 5.39523 3.47119L3.61593 1.69287L3.61593 10.9956C3.61593 11.2693 3.39444 11.4914 3.12081 11.4917C2.84697 11.4917 2.62472 11.2694 2.62472 10.9956L2.62472 1.69287L0.846398 3.47119C0.652797 3.66479 0.33887 3.66472 0.145226 3.47119Z" fill="#71717A"/>
</svg>

                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'New Invoice' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[17%]">
                    <col class="w-[18%]">
                    <col class="w-[18%]">
                    <col class="w-[9%]">
                    <col class="w-[8%]">
                    <col class="w-[12%]">
                    <col class="w-[8%]">
                    <col class="w-[6%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Invoice</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Client</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Project</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Total</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th class="whitespace-nowrap px-2 py-3 text-center font-semibold text-gray-950">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($invoices as $invoice)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="truncate whitespace-nowrap px-2 py-4 font-medium">{{ $invoice['invoice'] }}</td>
                            <td class="truncate whitespace-nowrap px-2 py-4">{{ $invoice['client'] }}</td>
                            <td class="truncate whitespace-nowrap px-2 py-4">{{ $invoice['project'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex max-w-full truncate whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $invoice['company'] }}</span>
                            </td>
                            <td class="px-2 py-4">
                                <span class="inline-flex max-w-full truncate whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $invoice['status'] }}</span>
                            </td>
                            <td class="truncate whitespace-nowrap px-2 py-4">{{ $invoice['total'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $invoice['date'] }}</span>
                            </td>
                            <td class="relative px-2 py-4 text-center">
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
                        <td colspan="9" class="h-[170px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'sales-invoices-rows-per-page'])
            </div>
        </div>
    </div>
    <div class="space-y-4 lg:hidden">
    @foreach ($invoices as $invoice)
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
            <div class="mb-3 flex items-start justify-between gap-3">
                <div class="min-w-0">
                    <p class="truncate text-sm font-semibold text-gray-950">
                        {{ $invoice['invoice'] }}
                    </p>
                    <p class="mt-1 truncate text-sm text-gray-500">
                        {{ $invoice['client'] }}
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
                    {{ $invoice['company'] }}
                </span>

                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-1 text-xs text-green-600">
                    {{ $invoice['status'] }}
                </span>
            </div>

            <div class="grid grid-cols-2 gap-3 text-sm">
                

                <div>
                    <p class="text-gray-400">Total</p>
                    <p class="font-medium text-gray-950">{{ $invoice['total'] }}</p>
                </div>

                <div>
                    <p class="text-gray-400">Date</p>
                    <p>{{ $invoice['date'] }}</p>
                </div>
                <div>
                    <p class="text-gray-400">Project</p>
                    <p class="truncate text-gray-900">{{ $invoice['project'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
    <span>0 of 68 row(s) selected.</span>

    <div class="flex flex-wrap items-center gap-3">
        @include('AdminDashboard.partials.staff-pagination', ['id' => 'sales-invoices-rows-per-page'])
    </div>
</div>
</div>
