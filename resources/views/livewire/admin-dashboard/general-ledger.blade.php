<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    <div>
        <h2 class="text-lg font-semibold text-gray-950">General Ledger</h2>
        <p class="mt-1 text-sm text-gray-500">Account Balances and trail balance</p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="flex h-[92px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
            <p class="text-sm font-medium text-gray-950">Total Debit</p>
            <p class="mt-3 text-2xl font-bold text-gray-950">$0.00</p>
        </div>

        <div class="flex h-[92px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
            <p class="text-sm font-medium text-gray-950">Total Credit</p>
            <p class="mt-3 text-2xl font-bold text-gray-950">$0.00</p>
        </div>

        <div class="flex h-[92px] flex-col items-center justify-center rounded-md bg-green-100 text-center">
            <p class="text-sm font-medium text-gray-950">Trail Balance</p>
            <p class="mt-3 text-2xl font-bold text-green-600">Balanced</p>
        </div>
    </div>

    <div class="rounded-xl bg-white">
        <div class="mb-4">
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
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[5%]">
                    <col class="w-[25%]">
                    <col class="w-[20%]">
                    <col class="w-[18%]">
                    <col class="w-[18%]">
                    <col class="w-[11%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                        </th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Account Name</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Type</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Total Debit</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Total Credit</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Balance</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($ledgers as $ledger)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4">
                                <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                            </td>

                            <td class="px-2 py-4 font-medium text-gray-900">
                                {{ $ledger['account'] }}
                            </td>

                            <td class="px-2 py-4 text-gray-700">
                                {{ $ledger['type'] }}
                            </td>

                            <td class="px-2 py-4">
                                {{ $ledger['debit'] }}
                            </td>

                            <td class="px-2 py-4">
                                {{ $ledger['credit'] }}
                            </td>

                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] text-gray-700">
                                    {{ $ledger['balance'] }}
                                </span>
                            </td>

                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="7" class="h-[290px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'general-ledger-rows-per-page'])
            </div>
        </div>
    </div>
</div>
