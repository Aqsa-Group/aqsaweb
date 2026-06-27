<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-[15px] font-semibold text-gray-950">Add New Contract</h2>

            <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-[11px] font-medium">Project *</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Client *</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Company</label>
                    <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                        <option>Logistic</option>
                        <option>ICT</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Type</label>
                    <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                        <option>Service</option>
                        <option>One Time</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Amount</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-[11px] font-medium">Net Receivable</label>
                    <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
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
                <h2 class="text-lg font-semibold text-gray-950">Contract & Project management</h2>
                <p class="mt-1 text-sm text-gray-500">Manage Contracts lifecycle across companies</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <input class="h-10 w-full rounded-md border border-gray-200 px-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500 sm:w-[280px]" placeholder="Search...">

                    <button class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-wide-short text-xs"></i>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'New Contract' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-2 py-3 font-semibold">Project</th>
                        <th class="px-2 py-3 font-semibold">Client</th>
                        <th class="px-2 py-3 font-semibold">Company</th>
                        <th class="px-2 py-3 font-semibold">Type</th>
                        <th class="px-2 py-3 font-semibold">Amount</th>
                        <th class="px-2 py-3 font-semibold">Net Receivable</th>
                        <th class="px-2 py-3 font-semibold">Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contracts as $item)
                        <tr class="border-t border-gray-100">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4 font-medium">{{ $item['project'] }}</td>
                            <td class="px-2 py-4">{{ $item['client'] }}</td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $item['company'] }}</span>
                            </td>
                            <td class="px-2 py-4">{{ $item['type'] }}</td>
                            <td class="px-2 py-4">{{ $item['amount'] }}</td>
                            <td class="px-2 py-4">{{ $item['net'] }}</td>
                            <td class="px-2 py-4">
                                <select class="h-7 rounded-md border border-gray-200 px-2 text-[11px]">
                                    <option>{{ $item['status'] }}</option>
                                    <option>Approved</option>
                                    <option>Rejected</option>
                                </select>
                            </td>
                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>
            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'contract-project-rows-per-page'])
            </div>
        </div>
    </div>
</div>
