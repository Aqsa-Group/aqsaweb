<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-[15px] font-semibold text-gray-950">Add New Client</h2>

            <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-[11px] font-medium">Full Name *</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Tax Rate</label>
                    <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                        <option>2%</option>
                        <option>5%</option>
                        <option>10%</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Type *</label>
                    <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                        <option>NGO</option>
                        <option>INGO</option>
                        <option>Government</option>
                        <option>Private</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Contact Person</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Phone</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Address</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Date</label>
                    <input type="date" class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Email</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button wire:click="cancelForm" type="button"
                    class="h-9 rounded-md border border-blue-700 px-6 text-xs font-medium text-blue-700">
                    Cancel
                </button>

                <button type="button"
                    class="h-9 rounded-md bg-blue-700 px-7 text-xs font-medium text-white">
                    Save
                </button>
            </div>
        </div>
    @endif

    <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">Clients / NGO Management</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Manage NGO, INGO, Government, and Private clients
                </p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label class="relative block w-full sm:w-[280px]">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-300">
                            <i class="fa-solid fa-magnifying-glass text-[13px]"></i>
                        </span>
                        <input
                            class="h-10 w-full rounded-md border border-gray-200 pl-9 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500"
                            placeholder="Search..."
                        >
                    </label>

                    <button type="button"
                        class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-wide-short text-xs text-gray-500"></i>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'Add Client' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[24%]">
                    <col class="w-[9%]">
                    <col class="w-[9%]">
                    <col class="w-[13%]">
                    <col class="w-[12%]">
                    <col class="w-[10%]">
                    <col class="w-[16%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Name</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Type</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Contact</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Phone</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Tax Rate</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Email</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($clients as $client)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4">
                                <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                            </td>

                            <td class="px-2 py-4 text-sm font-medium text-gray-900">
                                {{ $client['name'] }}
                            </td>

                            <td class="px-2 py-4">
                                <span class="inline-flex rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] text-gray-700">
                                    {{ $client['type'] }}
                                </span>
                            </td>

                            <td class="px-2 py-4">
                                <span class="inline-flex items-center gap-1.5 rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] font-medium text-green-700">
                                    {{ $client['status'] }}
                                </span>
                            </td>

                            <td class="px-2 py-4 text-sm text-gray-700">{{ $client['contact'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $client['phone'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $client['tax_rate'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $client['email'] }}</td>

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
                        <td colspan="9" class="h-[76px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="space-y-4 lg:hidden">
            @foreach ($clients as $client)
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-950">{{ $client['name'] }}</p>
                            <p class="text-sm text-gray-500">{{ $client['contact'] }}</p>
                        </div>

                        <div class="flex shrink-0 items-center gap-2">
                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                                <i class="fa-solid fa-print"></i>
                            </button>
                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3 flex flex-wrap gap-2">
                        <span class="rounded-md border border-gray-200 px-2 py-1 text-xs text-gray-600">
                            {{ $client['type'] }}
                        </span>
                        <span class="rounded-md border border-green-500 px-2 py-1 text-xs text-green-600">
                            {{ $client['status'] }}
                        </span>
                    </div>

                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div>
                            <p class="text-gray-400">Phone</p>
                            <p>{{ $client['phone'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Tax Rate</p>
                            <p>{{ $client['tax_rate'] }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-gray-400">Email</p>
                            <p>{{ $client['email'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                <label for="client-rows-per-page" class="font-medium text-gray-700">Rows per page</label>

                <details id="client-rows-per-page" class="staff-select relative">
                    <summary class="flex h-10 min-w-[72px] cursor-pointer list-none items-center justify-between gap-3 rounded-xl border border-gray-200 bg-white px-4 text-sm font-semibold text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                        <span class="staff-select-value">10</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-gray-500"></i>
                    </summary>

                    <div class="staff-select-menu absolute bottom-11 right-0 z-50 w-24 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                        <button type="button" data-staff-select-option="10" class="flex w-full items-center px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">10</button>
                        <button type="button" data-staff-select-option="25" class="flex w-full items-center px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">25</button>
                        <button type="button" data-staff-select-option="50" class="flex w-full items-center px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">50</button>
                        <button type="button" data-staff-select-option="100" class="flex w-full items-center px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">100</button>
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
