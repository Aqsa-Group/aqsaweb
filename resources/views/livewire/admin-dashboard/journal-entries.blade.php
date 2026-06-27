<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    @if ($showForm)
        <div class="space-y-6">
            <h2 class="text-lg font-semibold text-gray-950">New Journal Entry</h2>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Company</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Logistic</option>
                        <option>ICT</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <input type="date" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Ref Type</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Manual</option>
                        <option>Invoice</option>
                        <option>Payment</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Description</label>
                    <input value="Description" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500">Journal Lines</p>
                <button class="inline-flex h-10 items-center gap-2 rounded-md border border-gray-200 bg-white px-4 text-sm font-medium hover:bg-gray-50">
                    <i class="fa-solid fa-plus"></i>
                    Add Line
                </button>
            </div>

            <div class="grid gap-4 md:grid-cols-[1fr_1fr_0.7fr_0.7fr_0.7fr_40px]">
                <div>
                    <label class="mb-2 block text-sm font-medium">Account Code</label>
                    <input value="1003" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Account Name</label>
                    <input value="Cash" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Type</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Assets</option>
                        <option>Liability</option>
                        <option>Equity</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Debit</label>
                    <input value="$0.00" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Credit</label>
                    <input value="$0.00" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div class="flex items-end">
                    <button class="h-11 w-11 rounded-md border border-gray-200 text-lg">×</button>
                </div>
            </div>

            <div class="grid rounded-md bg-green-100 px-4 py-3 text-sm font-medium text-gray-900 md:grid-cols-3">
                <span>Total Debit: <b>$0.00</b></span>
                <span>Total Credit: <b>$0.00</b></span>
                <span class="text-right text-green-600">Balanced</span>
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
                <h2 class="text-lg font-semibold text-gray-950">Journal Entries</h2>
                <p class="mt-1 text-sm text-gray-500">Double Entry Accounting Records</p>
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
                    {{ $showForm ? 'Close' : 'New Entry' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[17%]">
                    <col class="w-[28%]">
                    <col class="w-[9%]">
                    <col class="w-[13%]">
                    <col class="w-[10%]">
                    <col class="w-[10%]">
                    <col class="w-[6%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Entry</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Description</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Debit</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Credit</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($entries as $entry)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4 font-medium">{{ $entry['entry'] }}</td>
                            <td class="px-2 py-4">{{ $entry['description'] }}</td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $entry['company'] }}</span>
                            </td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $entry['date'] }}</span>
                            </td>
                            <td class="px-2 py-4">{{ $entry['debit'] }}</td>
                            <td class="px-2 py-4">{{ $entry['credit'] }}</td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $entry['status'] }}</span>
                            </td>
                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
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
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'journal-entries-rows-per-page'])
            </div>
        </div>
    </div>
</div>
