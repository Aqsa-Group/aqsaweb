<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-[15px] font-semibold text-gray-950">Add Vendor</h2>

            <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-[11px] font-medium">Supplier Name *</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Tax Number</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
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
                    <label class="mb-2 block text-[11px] font-medium">Bank Name</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Address</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Bank Account</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Email</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Date</label>
                    <input type="date" class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button wire:click="cancelForm" type="button"
                    class="h-9 rounded-md border border-blue-700 px-6 text-xs font-medium text-blue-700">
                    Cancel
                </button>
                <button type="button" class="h-9 rounded-md bg-blue-700 px-7 text-xs font-medium text-white">
                    Save
                </button>
            </div>
        </div>
    @endif

    <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">Vendor Management</h2>
                <p class="mt-1 text-sm text-gray-500">Manage suppliers and vendors</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <input
                        class="h-10 w-full rounded-md border border-gray-200 px-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500 sm:w-[280px]"
                        placeholder="Search..."
                    >

                    <button class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-wide-short text-xs"></i>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'Add Vendor' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[23%]">
                    <col class="w-[18%]">
                    <col class="w-[13%]">
                    <col class="w-[13%]">
                    <col class="w-[17%]">
                    <col class="w-[9%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Supplier Name</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Contact Person</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Phone</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Tax Number</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Email</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($vendors as $vendor)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4 text-sm font-medium text-gray-900">{{ $vendor['supplier'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $vendor['contact'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $vendor['phone'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $vendor['tax'] }}</td>
                            <td class="px-2 py-4 text-sm text-gray-700">{{ $vendor['email'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] text-gray-700">
                                    {{ $vendor['date'] }}
                                </span>
                            </td>
                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="8" class="h-[120px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="space-y-4 lg:hidden">
            @foreach ($vendors as $vendor)
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-950">{{ $vendor['supplier'] }}</p>
                            <p class="text-sm text-gray-500">{{ $vendor['contact'] }}</p>
                        </div>

                        <div class="flex shrink-0 items-center gap-2">
                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div>
                            <p class="text-gray-400">Phone</p>
                            <p>{{ $vendor['phone'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Tax Number</p>
                            <p>{{ $vendor['tax'] }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-gray-400">Email</p>
                            <p>{{ $vendor['email'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Date</p>
                            <p>{{ $vendor['date'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'vendor-rows-per-page'])
            </div>
        </div>
    </div>
</div>
