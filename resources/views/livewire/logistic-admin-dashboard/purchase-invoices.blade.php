<div class="space-y-8">
    @include('livewire.logistic-admin-dashboard._shared-ui')
    @if ($showForm)
        @php
            $purchaseCalendarDays = [
                '31', '1', '2', '3', '4', '5', '6',
                '7', '8', '9', '10', '11', '12', '13',
                '14', '15', '16', '17', '18', '19', '20',
                '21', '22', '23', '24', '25', '26', '27',
                '28', '29', '30', '1', '2', '3', '4',
            ];
        @endphp

        <section class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm sm:p-5">
            <h2 class="mb-4 text-base font-semibold text-gray-950">New Purchase Invoices</h2>

            <div class="space-y-4">
                {{-- 1. Invoice Information --}}
                <div class="rounded-lg border border-gray-200 p-4">
                    <h3 class="mb-4 text-sm font-medium text-gray-950">1. Invoice Information</h3>

                    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">#System Invoice</label>
                            <input
                                type="text"
                                name="system_invoice"
                                value="Auto (INV-2026-001)"
                                readonly
                                class="h-10 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-500 outline-none"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Vendor Invoice No <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="vendor_invoice_number"
                                class="h-10 w-full rounded-md border border-gray-200 px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Vendor <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value text-gray-500">Select Vendor</span>
                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-lg border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Ariana Logistics', 'Kabul Supply Company', 'Herat Trading Group'] as $vendor)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $vendor }}"
                                            class="flex w-full items-center rounded-md px-3 py-2 text-left text-xs text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $vendor }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Project <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value text-gray-500">Select Project</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-lg border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Food Distribution Logistic', 'ICT Infrastructure Setup', 'Vehicle Lease Agreement'] as $project)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $project }}"
                                            class="flex w-full items-center rounded-md px-3 py-2 text-left text-xs text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $project }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Status</label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Draft</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8333 7.5L9.99996 12.5L8.54163 11.25M4.16663 7.5L6.11107 9.16667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-lg border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Draft', 'Pending', 'Approved', 'Paid'] as $status)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $status }}"
                                            class="flex w-full items-center rounded-md px-3 py-2 text-left text-xs text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $status }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Invoice Date <span class="text-red-500">*</span>
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

                                <input type="hidden" name="invoice_date" class="staff-date-input">

                                <div class="absolute right-0 top-11 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                                    <div class="mb-3 flex items-center justify-between">
                                        <button type="button" class="rounded-lg px-2 py-1 text-sm font-semibold text-gray-900 hover:bg-gray-50">
                                            June 2026
                                        </button>

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
                                        <span>Su</span><span>Mo</span><span>Tu</span><span>We</span>
                                        <span>Th</span><span>Fr</span><span>Sa</span>
                                    </div>

                                    <div class="mt-2 grid grid-cols-7 gap-1 text-center text-sm">
                                        @foreach ($purchaseCalendarDays as $dayIndex => $day)
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
                                        <button type="button" data-staff-date-clear class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50">
                                            Clear
                                        </button>
                                        <button type="button" data-staff-date="06/23/2026" class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50">
                                            Today
                                        </button>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                {{-- 2. Vendor Details --}}
                <div class="rounded-lg border border-gray-200 p-4">
                    <h3 class="mb-4 text-sm font-medium text-gray-950">2. Vendor Details (Auto Fill)</h3>

                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Vendor Name <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="vendor_name"
                                readonly
                                class="h-10 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Contact Person <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="vendor_contact_person"
                                readonly
                                class="h-10 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="email"
                                name="vendor_email"
                                readonly
                                class="h-10 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Phone <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="tel"
                                name="vendor_phone"
                                readonly
                                class="h-10 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Tax Number <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="vendor_tax_number"
                                readonly
                                class="h-10 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                            >
                        </div>
                    </div>
                </div>

                {{-- 3. Items --}}
                <div class="rounded-lg border border-gray-200 p-4">
                    <div class="mb-4 flex items-center justify-between gap-3">
                        <h3 class="text-sm font-medium text-gray-950">3. Items</h3>

                        <button
                            id="addPurchaseItemButton"
                            type="button"
                            class="inline-flex h-8 items-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-xs font-medium text-gray-700 transition hover:bg-gray-50"
                        >
                            <i class="fa-solid fa-plus text-[10px]"></i>
                            Add Item
                        </button>
                    </div>

                    <div class="overflow-x-auto rounded-md border border-gray-200">
                        <table class="min-w-[760px] w-full table-fixed text-left text-xs">
                            <colgroup>
                                <col class="w-[4%]">
                                <col class="w-[34%]">
                                <col class="w-[20%]">
                                <col class="w-[20%]">
                                <col class="w-[18%]">
                                <col class="w-[4%]">
                            </colgroup>

                            <thead class="bg-gray-50 text-gray-700">
                                <tr>
                                    <th class="px-2 py-2 font-medium">#</th>
                                    <th class="px-2 py-2 font-medium">Description</th>
                                    <th class="px-2 py-2 font-medium">Quantity <span class="text-red-500">*</span></th>
                                    <th class="px-2 py-2 font-medium">Unit Price <span class="text-red-500">*</span></th>
                                    <th class="px-2 py-2 font-medium">Subtotal <span class="text-red-500">*</span></th>
                                    <th class="px-2 py-2"></th>
                                </tr>
                            </thead>

                            <tbody id="purchaseItemsBody">
                                @foreach ([1, 2] as $itemNumber)
                                    <tr class="purchase-item-row border-t border-gray-100">
                                        <td class="purchase-item-number px-2 py-2 text-gray-700">{{ $itemNumber }}</td>
                                        <td class="px-2 py-2">
                                            <input
                                                type="text"
                                                name="items[{{ $itemNumber - 1 }}][description]"
                                                placeholder="Item Description..."
                                                class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>
                                        <td class="px-2 py-2">
                                            <input
                                                type="number"
                                                name="items[{{ $itemNumber - 1 }}][quantity]"
                                                value="0"
                                                min="0"
                                                step="1"
                                                class="purchase-item-quantity h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>
                                        <td class="px-2 py-2">
                                            <input
                                                type="number"
                                                name="items[{{ $itemNumber - 1 }}][unit_price]"
                                                value="0"
                                                min="0"
                                                step="0.01"
                                                class="purchase-item-price h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                                            >
                                        </td>
                                        <td class="px-2 py-2">
                                            <input
                                                type="text"
                                                value="0.00$"
                                                readonly
                                                class="purchase-item-subtotal h-9 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                                            >
                                        </td>
                                        <td class="px-2 py-2 text-center">
                                            <button
                                                type="button"
                                                class="remove-purchase-item inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-200 text-gray-600 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                                                aria-label="Remove item"
                                            >
                                                <i class="fa-solid fa-xmark text-[11px]"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr class="border-t border-emerald-100 bg-emerald-50">
                                    <td colspan="4" class="px-3 py-3 text-sm font-medium text-emerald-600">Total</td>
                                    <td colspan="2" id="purchaseItemsTotal" class="px-3 py-3 text-right text-sm font-semibold text-emerald-600">
                                        0.00$
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                {{-- 4. Attachments --}}
                <div class="rounded-lg border border-gray-200 p-4">
                    <h3 class="mb-4 text-sm font-medium text-gray-950">4. Attachments</h3>

                    <label
                        id="purchaseAttachmentDropZone"
                        class="flex min-h-[108px] cursor-pointer flex-col items-center justify-center rounded-md border border-dashed border-blue-400 bg-white px-4 py-5 text-center transition hover:bg-blue-50/40"
                    >
                        <i class="fa-solid fa-cloud-arrow-up text-lg text-blue-600"></i>
                        <span class="mt-2 text-xs font-medium text-gray-800">Drag &amp; Drop files here</span>
                        <span class="mt-1 text-xs text-gray-500">
                            or <span class="font-medium text-blue-600">click to browse</span>
                        </span>
                        <span id="purchaseAttachmentFileName" class="mt-2 hidden max-w-full truncate text-xs font-medium text-emerald-600"></span>

                        <input
                            id="purchaseAttachmentInput"
                            type="file"
                            name="attachments[]"
                            accept=".pdf,.jpg,.jpeg,.png,.bmp,.tif,.tiff"
                            multiple
                            class="hidden"
                        >
                    </label>

                    <p class="mt-2 text-[11px] text-gray-400">
                        Accepted files: PDF, JPG, PNG, BMP, TIFF
                    </p>
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
    @endif

    <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">Purchase Invoices</h2>
                <p class="mt-1 text-sm text-gray-500">Track vendor purchases</p>
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
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.94125 9.97534C6.74767 9.7817 6.74763 9.46778 6.94125 9.27417C7.13488 9.08076 7.44885 9.08066 7.64242 9.27417L9.42074 11.0525L9.42074 1.74976C9.42088 1.47603 9.64308 1.25464 9.91683 1.25464C10.1905 1.25471 10.4128 1.47608 10.4129 1.74976L10.4129 11.0525L12.1912 9.27417C12.3849 9.08076 12.6988 9.08066 12.8924 9.27417C13.086 9.46774 13.0859 9.78169 12.8924 9.97534L10.2674 12.6003C10.0738 12.794 9.75988 12.794 9.56625 12.6003L6.94125 9.97534ZM1.10824 4.72534C0.914604 4.53171 0.914604 4.2178 1.10824 4.02417L3.73324 1.39917C3.9269 1.2059 4.2409 1.20566 4.43441 1.39917L7.05941 4.02417C7.25282 4.21769 7.25265 4.53171 7.05941 4.72534C6.86581 4.91894 6.55188 4.91887 6.35824 4.72534L4.57894 2.94702L4.57894 12.2498C4.57894 12.5234 4.35745 12.7456 4.08382 12.7458C3.80998 12.7458 3.58773 12.5236 3.58773 12.2498L3.58773 2.94702L1.80941 4.72534C1.61581 4.91894 1.30188 4.91887 1.10824 4.72534Z" fill="#71717A"/>
</svg>

                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'New Purchase' }}
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
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Vendor</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Project</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Total</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th class="whitespace-nowrap px-2 py-3 text-center font-semibold text-gray-950"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($purchases as $purchase)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="truncate whitespace-nowrap px-2 py-4 font-medium">{{ $purchase['invoice'] }}</td>
                            <td class="truncate whitespace-nowrap px-2 py-4">{{ $purchase['vendor'] }}</td>
                            <td class="truncate whitespace-nowrap px-2 py-4">{{ $purchase['project'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex max-w-full truncate whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $purchase['company'] }}</span>
                            </td>
                            <td class="px-2 py-4">
                                <span class="inline-flex max-w-full truncate whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $purchase['status'] }}</span>
                            </td>
                            <td class="truncate whitespace-nowrap px-2 py-4">{{ $purchase['total'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $purchase['date'] }}</span>
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
                        <td colspan="9" class="h-[170px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div class="space-y-4 lg:hidden">
    @foreach ($purchases as $purchase)
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
            <div class="mb-3 flex items-start justify-between gap-3">
                <div class="min-w-0">
                    <p class="truncate text-sm font-semibold text-gray-950">
                        {{ $purchase['invoice'] }}
                    </p>
                    <p class="mt-1 truncate text-sm text-gray-500">
                        {{ $purchase['vendor'] }}
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
                    {{ $purchase['company'] }}
                </span>

                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-1 text-xs text-green-600">
                    {{ $purchase['status'] }}
                </span>
            </div>

            <div class="grid grid-cols-2 gap-3 text-sm">
                <div>
                    <p class="text-gray-400">Project</p>
                    <p class="truncate text-gray-900">{{ $purchase['project'] }}</p>
                </div>

                <div>
                    <p class="text-gray-400">Total</p>
                    <p class="font-medium text-gray-950">{{ $purchase['total'] }}</p>
                </div>

                <div>
                    <p class="text-gray-400">Date</p>
                    <p>{{ $purchase['date'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
 <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'purchase-invoices-rows-per-page'])
            </div>
        </div>
</div>

<script>
    (() => {
        const getItemsBody = () => document.getElementById('purchaseItemsBody');

        const updatePurchaseItemNames = () => {
            const rows = getItemsBody()?.querySelectorAll('.purchase-item-row') || [];

            rows.forEach((row, index) => {
                const number = row.querySelector('.purchase-item-number');
                const description = row.querySelector('input[name*="[description]"]');
                const quantity = row.querySelector('input[name*="[quantity]"]');
                const unitPrice = row.querySelector('input[name*="[unit_price]"]');

                if (number) number.textContent = index + 1;
                if (description) description.name = `items[${index}][description]`;
                if (quantity) quantity.name = `items[${index}][quantity]`;
                if (unitPrice) unitPrice.name = `items[${index}][unit_price]`;
            });
        };

        const calculatePurchaseItems = () => {
            const rows = getItemsBody()?.querySelectorAll('.purchase-item-row') || [];
            let total = 0;

            rows.forEach((row) => {
                const quantity = Number(row.querySelector('.purchase-item-quantity')?.value || 0);
                const unitPrice = Number(row.querySelector('.purchase-item-price')?.value || 0);
                const subtotal = Math.max(0, quantity) * Math.max(0, unitPrice);
                const subtotalInput = row.querySelector('.purchase-item-subtotal');

                total += subtotal;

                if (subtotalInput) {
                    subtotalInput.value = `${subtotal.toFixed(2)}$`;
                }
            });

            const totalElement = document.getElementById('purchaseItemsTotal');

            if (totalElement) {
                totalElement.textContent = `${total.toFixed(2)}$`;
            }
        };

        const createPurchaseItemRow = () => {
            const body = getItemsBody();
            const index = body?.querySelectorAll('.purchase-item-row').length || 0;

            if (!body) return;

            const row = document.createElement('tr');
            row.className = 'purchase-item-row border-t border-gray-100';

            row.innerHTML = `
                <td class="purchase-item-number px-2 py-2 text-gray-700">${index + 1}</td>
                <td class="px-2 py-2">
                    <input
                        type="text"
                        name="items[${index}][description]"
                        placeholder="Item Description..."
                        class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                    >
                </td>
                <td class="px-2 py-2">
                    <input
                        type="number"
                        name="items[${index}][quantity]"
                        value="0"
                        min="0"
                        step="1"
                        class="purchase-item-quantity h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                    >
                </td>
                <td class="px-2 py-2">
                    <input
                        type="number"
                        name="items[${index}][unit_price]"
                        value="0"
                        min="0"
                        step="0.01"
                        class="purchase-item-price h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none transition hover:border-gray-300 focus:border-blue-600"
                    >
                </td>
                <td class="px-2 py-2">
                    <input
                        type="text"
                        value="0.00$"
                        readonly
                        class="purchase-item-subtotal h-9 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-xs text-gray-600 outline-none"
                    >
                </td>
                <td class="px-2 py-2 text-center">
                    <button
                        type="button"
                        class="remove-purchase-item inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-200 text-gray-600 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600"
                        aria-label="Remove item"
                    >
                        <i class="fa-solid fa-xmark text-[11px]"></i>
                    </button>
                </td>
            `;

            body.appendChild(row);
            calculatePurchaseItems();
        };

        document.addEventListener('click', (event) => {
            const addButton = event.target.closest?.('#addPurchaseItemButton');

            if (addButton) {
                createPurchaseItemRow();
                return;
            }

            const removeButton = event.target.closest?.('.remove-purchase-item');

            if (!removeButton) return;

            const body = getItemsBody();
            const rows = body?.querySelectorAll('.purchase-item-row') || [];

            if (rows.length <= 1) {
                const row = removeButton.closest('.purchase-item-row');

                row?.querySelectorAll('input').forEach((input) => {
                    input.value = input.classList.contains('purchase-item-subtotal') ? '0.00$' : '';
                });

                const quantity = row?.querySelector('.purchase-item-quantity');
                const price = row?.querySelector('.purchase-item-price');

                if (quantity) quantity.value = '0';
                if (price) price.value = '0';

                calculatePurchaseItems();
                return;
            }

            removeButton.closest('.purchase-item-row')?.remove();
            updatePurchaseItemNames();
            calculatePurchaseItems();
        });

        document.addEventListener('input', (event) => {
            if (
                event.target.classList?.contains('purchase-item-quantity') ||
                event.target.classList?.contains('purchase-item-price')
            ) {
                calculatePurchaseItems();
            }
        });

        document.addEventListener('change', (event) => {
            if (event.target?.id !== 'purchaseAttachmentInput') return;

            const files = Array.from(event.target.files || []);
            const fileName = document.getElementById('purchaseAttachmentFileName');

            if (!fileName) return;

            if (files.length === 0) {
                fileName.textContent = '';
                fileName.classList.add('hidden');
                return;
            }

            fileName.textContent = files.length === 1
                ? files[0].name
                : `${files.length} files selected`;

            fileName.classList.remove('hidden');
        });

        document.addEventListener('dragover', (event) => {
            const dropZone = event.target.closest?.('#purchaseAttachmentDropZone');

            if (!dropZone) return;

            event.preventDefault();
            dropZone.classList.add('border-blue-600', 'bg-blue-50');
        });

        document.addEventListener('dragleave', (event) => {
            const dropZone = event.target.closest?.('#purchaseAttachmentDropZone');

            if (!dropZone) return;

            dropZone.classList.remove('border-blue-600', 'bg-blue-50');
        });

        document.addEventListener('drop', (event) => {
            const dropZone = event.target.closest?.('#purchaseAttachmentDropZone');

            if (!dropZone) return;

            event.preventDefault();
            dropZone.classList.remove('border-blue-600', 'bg-blue-50');

            const input = document.getElementById('purchaseAttachmentInput');
            const fileName = document.getElementById('purchaseAttachmentFileName');
            const files = event.dataTransfer?.files;

            if (!input || !files?.length) return;

            input.files = files;

            if (fileName) {
                fileName.textContent = files.length === 1
                    ? files[0].name
                    : `${files.length} files selected`;

                fileName.classList.remove('hidden');
            }
        });

        calculatePurchaseItems();
    })();
</script>

