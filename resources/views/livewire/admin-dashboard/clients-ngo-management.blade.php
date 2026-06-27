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
                                <button type="button" class="staff-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                                    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                        <i class="fa-solid fa-print text-[#1C274C]"></i>
                                        <span>Print</span>
                                    </button>
                                    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                        <i class="fa-regular fa-pen-to-square text-[#1C274C]"></i>
                                        <span>Edit</span>
                                    </button>
                                    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                        <i class="fa-regular fa-trash-can text-[#1C274C]"></i>
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
