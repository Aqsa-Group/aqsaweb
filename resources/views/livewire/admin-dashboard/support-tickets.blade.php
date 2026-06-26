<div class="space-y-8">
    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-lg font-semibold text-gray-950">New Support Ticket</h2>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Client Name *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Company</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Logistic</option>
                        <option>ICT</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Subject *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Priority</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Urgent</option>
                        <option>High</option>
                        <option>Normal</option>
                        <option>Low</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Assigned To</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Status</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Open</option>
                        <option>In Progress</option>
                        <option>Resolved</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Related Project</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <input type="date" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Description</label>
                    <textarea placeholder="Description..." class="h-24 w-full resize-none rounded-md border border-gray-200 px-3 py-2 text-sm outline-none focus:border-blue-600"></textarea>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Internal Notes</label>
                    <textarea placeholder="Not visible to client..." class="h-24 w-full resize-none rounded-md border border-gray-200 px-3 py-2 text-sm outline-none focus:border-blue-600"></textarea>
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

    <div>
        <h2 class="text-lg font-semibold text-gray-950">Support Tickets</h2>
        <p class="mt-1 text-sm text-gray-500">CRM ticketing and customer support</p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        @foreach ([['Open','7'], ['Urgent','5'], ['Resolved','20']] as $card)
            <div class="flex h-[76px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
                <p class="text-xs font-medium text-gray-950">{{ $card[0] }}</p>
                <p class="mt-2 text-xl font-bold text-gray-950">{{ $card[1] }}</p>
            </div>
        @endforeach
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

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'New Ticket' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[16%]">
                    <col class="w-[22%]">
                    <col class="w-[13%]">
                    <col class="w-[12%]">
                    <col class="w-[12%]">
                    <col class="w-[9%]">
                    <col class="w-[9%]">
                    <col class="w-[3%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-2 py-3 font-semibold text-gray-950">ID</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Subject</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Client</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Priority</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4">{{ $ticket['id'] }}</td>
                            <td class="px-2 py-4 font-medium text-gray-900">{{ $ticket['subject'] }}</td>
                            <td class="px-2 py-4 text-gray-700">{{ $ticket['client'] }}</td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] text-green-700">
                                    {{ $ticket['status'] }}
                                </span>
                            </td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-red-300 bg-red-50 px-2 py-0.5 text-[11px] text-red-600">
                                    {{ $ticket['priority'] }}
                                </span>
                            </td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $ticket['company'] }}</span>
                            </td>
                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">{{ $ticket['date'] }}</span>
                            </td>
                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="9" class="h-[70px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'support-tickets-rows-per-page'])
            </div>
        </div>
    </div>
</div>
