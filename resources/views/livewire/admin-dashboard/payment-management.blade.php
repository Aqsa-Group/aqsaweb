<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    <div class="grid gap-6 md:grid-cols-2">
        <div class="flex h-[92px] flex-col justify-center rounded-md bg-[#A8D1FF] px-5">
            <p class="text-sm font-medium text-gray-950">Total Incoming</p>
            <p class="mt-3 text-2xl font-bold text-gray-950">$109,000</p>
        </div>

        <div class="flex h-[92px] flex-col justify-center rounded-md bg-[#A8D1FF] px-5">
            <p class="text-sm font-medium text-gray-950">Total Outgoing</p>
            <p class="mt-3 text-2xl font-bold text-gray-950">$109,000</p>
        </div>
    </div>

    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-lg font-semibold text-gray-950">Record Payment</h2>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Type *</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Incoming</option>
                        <option>Outgoing</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Party Name (Client / Vendor)</label>
                    <input value="UNHCR Afghanistan" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Company</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Logistic</option>
                        <option>ICT</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Amount</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Invoice Reference</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Method</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Bank Transfer</option>
                        <option>Cash</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Currency</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>USD</option>
                        <option>AFN</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <input type="date" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
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
                <h2 class="text-lg font-semibold text-gray-950">Payment Management</h2>
                <p class="mt-1 text-sm text-gray-500">Track incoming and outgoing income</p>
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
                    {{ $showForm ? 'Close' : 'Record Payments' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[17%]">
                    <col class="w-[22%]">
                    <col class="w-[10%]">
                    <col class="w-[18%]">
                    <col class="w-[12%]">
                    <col class="w-[10%]">
                    <col class="w-[7%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Type</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Party</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Method</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Reference</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Amount</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($payments as $payment)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4 font-medium text-gray-900">{{ $payment['type'] }}</td>
                            <td class="px-2 py-4 text-gray-700">{{ $payment['party'] }}</td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $payment['company'] }}</span>
                            </td>
                            <td class="px-2 py-4 text-gray-700">{{ $payment['method'] }}</td>
                            <td class="px-2 py-4">{{ $payment['reference'] }}</td>
                            <td class="px-2 py-4">{{ $payment['amount'] }}</td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $payment['date'] }}</span>
                            </td>
                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="9" class="h-[250px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'payment-rows-per-page'])
            </div>
        </div>
    </div>
</div>
