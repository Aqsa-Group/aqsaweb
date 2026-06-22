<div class="space-y-8">
    <div>
        <h2 class="text-[15px] font-semibold text-gray-950">Attendance & Leave</h2>
        <p class="mt-1 text-[12px] text-gray-400">Track staff attendance and leave requests</p>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        @foreach ([['Present Today','120'], ['Pending Leaves','5'], ['Approved Leaves','4']] as $card)
            <div class="h-[78px] rounded-md bg-[#A8D1FF] px-5 py-4 text-center">
                <p class="text-[10px] font-medium text-gray-950">{{ $card[0] }}</p>
                <p class="mt-2 text-[24px] font-bold leading-none text-gray-950">{{ $card[1] }}</p>
            </div>
        @endforeach
    </div>

    @if ($showForm)
        <div class="pt-2">
            <h3 class="mb-5 text-[15px] font-semibold text-gray-950">Add Attendance / Leave Record</h3>

            @if ($formType === 'attendance')
                <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Full Name</label>
                        <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Check Out</label>
                        <input type="time" class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Type</label>
                        <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                            <option>Attendance</option>
                            <option>Leave</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Check In</label>
                        <input type="time" class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Date</label>
                        <input type="date" class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Status</label>
                        <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                            <option>Present</option>
                            <option>Absent</option>
                        </select>
                    </div>
                </div>
            @else
                <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Full Name</label>
                        <input class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Days</label>
                        <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Type</label>
                        <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                            <option>Leave</option>
                            <option>Attendance</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Leave Type</label>
                        <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                            <option>Sick</option>
                            <option>Annual</option>
                            <option>Emergency</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Date</label>
                        <input type="date" class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="mb-2 block text-[11px] font-medium">Status</label>
                        <select class="h-9 w-full rounded-md border border-gray-200 px-3 text-xs outline-none focus:border-blue-600">
                            <option>On Leave</option>
                            <option>Pending</option>
                            <option>Approved</option>
                        </select>
                    </div>
                </div>
            @endif

            <div class="mt-5 flex justify-end gap-3">
                <button wire:click="cancelForm" class="h-9 rounded-md border border-blue-700 px-6 text-xs font-medium text-blue-700">
                    Cancel
                </button>
                <button class="h-9 rounded-md bg-blue-700 px-7 text-xs font-medium text-white">
                    Save
                </button>
            </div>
        </div>
    @endif

    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div class="flex gap-2">
            <input class="h-8 w-[230px] rounded-md border border-gray-200 px-3 text-[11px] outline-none placeholder:text-gray-400 focus:border-blue-600" placeholder="Search...">
            <button class="inline-flex h-8 items-center gap-1 rounded-md border border-gray-200 bg-white px-3 text-[11px] font-medium">
                <i class="fa-solid fa-arrow-up-wide-short text-[10px]"></i>
                Filter
            </button>
        </div>

        <button wire:click="toggleForm"
            class="inline-flex h-8 items-center gap-2 rounded-md px-4 text-[11px] font-medium text-white {{ $showForm ? 'bg-red-600' : 'bg-blue-700' }}">
            <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
            {{ $showForm ? 'Close' : 'Add Record' }}
        </button>
    </div>

    <div class="hidden overflow-hidden rounded-md border border-gray-200 bg-white lg:block">
        <table class="w-full table-fixed text-left text-[11px]">
            <colgroup>
                <col class="w-[5%]"><col class="w-[24%]"><col class="w-[18%]"><col class="w-[13%]">
                <col class="w-[13%]"><col class="w-[20%]"><col class="w-[10%]"><col class="w-[4%]">
            </colgroup>
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                    <th class="px-3 py-3 font-semibold">Full Name</th>
                    <th class="px-3 py-3 font-semibold">Position</th>
                    <th class="px-3 py-3 font-semibold">Type</th>
                    <th class="px-3 py-3 font-semibold">Status</th>
                    <th class="px-3 py-3 font-semibold">Check in /Out or Leave</th>
                    <th class="px-3 py-3 font-semibold">Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $item)
                    <tr class="border-t border-gray-100">
                        <td class="px-3 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                        <td class="px-3 py-4 font-medium">{{ $item['name'] }}</td>
                        <td class="px-3 py-4 font-medium">{{ $item['position'] }}</td>
                        <td class="px-3 py-4">{{ $item['type'] }}</td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[10px] text-green-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                {{ $item['status'] }}
                            </span>
                        </td>
                        <td class="px-3 py-4 text-gray-500">{{ $item['time'] }}</td>
                        <td class="px-3 py-4">
                            <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[10px] text-gray-600">{{ $item['date'] }}</span>
                        </td>
                        <td class="px-3 py-4 text-right">
                            <i class="fa-solid fa-ellipsis-vertical text-gray-700"></i>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="8" class="h-[86px]"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-5 flex flex-col gap-3 text-[11px] text-gray-500 lg:flex-row lg:items-center lg:justify-between">
        <span>0 of 68 row(s) selected.</span>
        <div class="flex flex-wrap items-center gap-3">
            <span class="font-medium text-gray-700">Rows per page</span>
            <select class="h-9 rounded-md border border-gray-200 bg-white px-3 text-[11px]">
                <option>10</option>
                <option>25</option>
                <option>50</option>
            </select>
            <span class="font-medium text-gray-700">Page 1 of 7</span>
            <div class="flex gap-1">
                <button class="h-8 w-8 rounded-md border border-gray-200 text-gray-300">‹</button>
                <button class="h-8 w-8 rounded-md border border-gray-200 text-gray-300">«</button>
                <button class="h-8 w-8 rounded-md border border-gray-200">›</button>
                <button class="h-8 w-8 rounded-md border border-gray-200">»</button>
            </div>
        </div>
    </div>
</div>
