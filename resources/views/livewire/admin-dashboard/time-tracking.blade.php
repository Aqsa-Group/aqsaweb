<div class="space-y-8">
    <div class="grid gap-6 md:grid-cols-2">
        <div class="flex h-[92px] flex-col justify-center rounded-md bg-[#A8D1FF] px-5">
            <p class="text-xs font-medium text-gray-950">Billable Hours</p>
            <p class="mt-2 text-2xl font-bold text-gray-950">15.0h</p>
        </div>

        <div class="flex h-[92px] flex-col justify-center rounded-md bg-[#A8D1FF] px-5">
            <p class="text-xs font-medium text-gray-950">Non-Billable Hours</p>
            <p class="mt-2 text-2xl font-bold text-gray-950">0.0h</p>
        </div>
    </div>

    @if ($showForm)
        <div class="space-y-5">
            <h2 class="text-lg font-semibold text-gray-950">Log Time</h2>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Staff Name</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Hours</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Project Name</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Hourly Rate ($)</label>
                    <input value="0" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Task Description</label>
                    <input placeholder="Description..." class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Billable</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Non-Billable</option>
                        <option>Billable</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <input type="date" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Status</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Submitted</option>
                        <option>Draft</option>
                        <option>Approved</option>
                    </select>
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
                <h2 class="text-lg font-semibold text-gray-950">Timesheets</h2>
                <p class="mt-1 text-sm text-gray-500">Time tracking for ICT projects</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <input
                        class="h-10 w-full rounded-md border border-gray-200 px-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500 sm:w-[280px]"
                        placeholder="Search..."
                    >

                    <button type="button"
                        class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-wide-short text-xs"></i>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'Log Time' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[18%]">
                    <col class="w-[18%]">
                    <col class="w-[13%]">
                    <col class="w-[10%]">
                    <col class="w-[10%]">
                    <col class="w-[10%]">
                    <col class="w-[10%]">
                    <col class="w-[5%]">
                    <col class="w-[2%]">
                </colgroup>

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                        </th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Staff</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Project</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Hours</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Billable</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Rate</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="px-2 py-3 font-semibold text-gray-950">Cost</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($timesheets as $item)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4">
                                <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                            </td>

                            <td class="px-2 py-4 font-medium text-gray-900">{{ $item['staff'] }}</td>

                            <td class="px-2 py-4">
                                <div class="font-medium text-gray-900">Aqsa</div>
                                <div class="text-xs text-gray-400">Web System</div>
                            </td>

                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">
                                    {{ $item['date'] }}
                                </span>
                            </td>

                            <td class="px-2 py-4">{{ $item['hours'] }}</td>

                            <td class="px-2 py-4">
                                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] text-green-700">
                                    {{ $item['billable'] }}
                                </span>
                            </td>

                            <td class="px-2 py-4">{{ $item['rate'] }}</td>

                            <td class="px-2 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">
                                    {{ $item['status'] }}
                                </span>
                            </td>

                            <td class="px-2 py-4">{{ $item['cost'] }}</td>

                            <td class="relative px-2 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="10" class="h-[170px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'time-tracking-rows-per-page'])
            </div>
        </div>
    </div>
</div>
