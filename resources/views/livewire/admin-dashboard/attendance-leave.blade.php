<div class="space-y-7">
    <div>
        <h2 class="text-[14px] font-semibold leading-none text-gray-950">Attendance & Leave</h2>
        <p class="mt-2 text-[11px] text-gray-400">Track staff attendance and leave requests</p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        @foreach ([['Present Today','120'], ['Pending Leaves','5'], ['Approved Leaves','4']] as $card)
            <div class="flex h-[92px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] px-5 text-center">
                <p class="text-[9px] font-medium leading-none text-gray-950">{{ $card[0] }}</p>
                <p class="mt-3 text-[22px] font-bold leading-none text-gray-950">{{ $card[1] }}</p>
            </div>
        @endforeach
    </div>

    @if ($showForm)
        <div class="rounded-xl border border-gray-200 bg-white p-5">
            <h3 class="mb-5 flex items-center gap-2 text-[15px] font-semibold text-gray-950">
                <i class="fa-regular fa-calendar-check text-blue-600"></i>
                Add Attendance / Leave Record
            </h3>
                @if ($formType === 'attendance')
                    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium">Full Name</label>
                            <input wire:model="fullName"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Check Out</label>
                            <input wire:model="checkOut" type="text" inputmode="text" placeholder="08:08 --"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Type</label>
                            <select wire:model.live="formType" wire:change="setFormType($event.target.value)"
    class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
    <option value="attendance">Attendance</option>
    <option value="leave">Leave</option>
</select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Check In</label>
                            <input wire:model="checkIn" type="text" inputmode="text" placeholder="05:56 --"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Date</label>
                            <input wire:model="date" type="date"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Status</label>
                            <select wire:model="status"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                                <option>Present</option>
                                <option>Absent</option>
                            </select>
                        </div>
                    </div>
                @else
                    <div class="grid gap-x-8 gap-y-4 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium">Full Name</label>
                            <input wire:model="fullName"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Days</label>
                            <select wire:model="days"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Type</label>
                            <input value="Leave" disabled
                                class="h-11 w-full rounded-md border border-gray-200 bg-gray-50 px-3 text-sm outline-none">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Leave Type</label>
                            <select wire:model="leaveType"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                                <option>Sick</option>
                                <option>Annual</option>
                                <option>Emergency</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Date</label>
                            <input wire:model="date" type="date"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium">Status</label>
                            <select wire:model="status"
                                class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                                <option>On Leave</option>
                                <option>Pending</option>
                                <option>Approved</option>
                            </select>
                        </div>
                    </div>
            @endif
            <div class="mt-5 flex justify-end gap-3">
                <button type="button" wire:click="cancelForm"
                    class="h-10 rounded-md border border-blue-700 px-7 text-sm font-medium text-blue-700">
                    Cancel
                </button>
                <button type="button" wire:click="save"
                    class="h-10 rounded-md bg-blue-700 px-8 text-sm font-medium text-white">
                    Save
                </button>
            </div>
        </div>
    @endif

<div class="rounded-xl bg-white">
    <div class="mb-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <label class="relative block w-full sm:w-[280px]">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-300">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6665 16.6666L18.3332 18.3333" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M5.62484 2.72573C6.78927 2.05214 8.1412 1.66663 9.58317 1.66663C13.9554 1.66663 17.4998 5.21104 17.4998 9.58329C17.4998 13.9555 13.9554 17.5 9.58317 17.5C5.21092 17.5 1.6665 13.9555 1.6665 9.58329C1.6665 8.14132 2.05202 6.7894 2.72561 5.62496" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </span>

                    <input
                        class="h-10 w-full rounded-md border border-gray-200 pl-9 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500"
                        placeholder="Search..."
                    >
                </label>

                <button type="button" class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.94149 9.97534C6.74786 9.78171 6.74786 9.4678 6.94149 9.27417C7.13515 9.08088 7.44914 9.08065 7.64266 9.27417L9.42098 11.0525L9.42098 1.74976C9.42112 1.47603 9.64332 1.25464 9.91708 1.25464C10.1906 1.25487 10.4121 1.47618 10.4122 1.74976L10.4122 11.0525L12.1915 9.27417C12.3852 9.08088 12.6991 9.08065 12.8927 9.27417C13.0861 9.4677 13.0859 9.78171 12.8927 9.97534L10.2677 12.6003C10.0741 12.794 9.76013 12.7939 9.56649 12.6003L6.94149 9.97534ZM1.10751 4.72534C0.914116 4.53169 0.913953 4.21772 1.10751 4.02417L3.73251 1.39917C3.92606 1.20563 4.24003 1.20578 4.43368 1.39917L7.05868 4.02417C7.25231 4.2178 7.2523 4.53171 7.05868 4.72534C6.86504 4.91898 6.55114 4.91898 6.35751 4.72534L4.57919 2.94702L4.57919 12.2498C4.57919 12.5236 4.35693 12.7458 4.08309 12.7458C3.80936 12.7457 3.58798 12.5235 3.58798 12.2498L3.58798 2.94702L1.80868 4.72534C1.61504 4.91898 1.30114 4.91898 1.10751 4.72534Z" fill="#71717A"/>
                    </svg>
                    Filter
                </button>
            </div>

            <button wire:click="toggleForm"
                class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
                <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                {{ $showForm ? 'Close' : 'Add Record' }}
            </button>
        </div>
    </div>

    <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
        <table class="w-full table-fixed text-left text-xs">
            <colgroup>
                <col class="w-[3%]">
                <col class="w-[20%]">
                <col class="w-[16%]">
                <col class="w-[12%]">
                <col class="w-[12%]">
                <col class="w-[20%]">
                <col class="w-[11%]">
                <col class="w-[6%]">
            </colgroup>

            <thead class="bg-gray-50">
                <tr>
                    <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                    <th class="px-2 py-3 font-semibold text-gray-950">Full Name</th>
                    <th class="px-2 py-3 font-semibold text-gray-950">Position</th>
                    <th class="px-2 py-3 font-semibold text-gray-950">Type</th>
                    <th class="px-2 py-3 font-semibold text-gray-950">Status</th>
                    <th class="px-2 py-3 font-semibold text-gray-950">Check in /Out or Leave</th>
                    <th class="px-2 py-3 font-semibold text-gray-950">Date</th>
                    <th class="px-2 py-3 text-right font-semibold text-gray-950">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($records as $item)
                    <tr class="border-t border-gray-100 align-middle">
                        <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>

                        <td class="px-2 py-4">
                            <div class="flex min-w-0 items-center">
                                <span class="min-w-0 break-words text-sm font-medium leading-5 text-gray-900">{{ $item['name'] }}</span>
                            </div>
                        </td>

                        <td class="px-2 py-4 text-sm font-medium text-gray-900">{{ $item['position'] }}</td>

                        <td class="px-2 py-4">
                            <span class="inline-flex rounded-md border border-blue-500 bg-blue-50 px-2 py-0.5 text-[11px] font-medium text-blue-700">
                                {{ $item['type'] }}
                            </span>
                        </td>

                        <td class="px-2 py-4">
                            <span class="inline-flex items-center gap-1.5 rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] font-medium text-green-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                {{ $item['status'] }}
                            </span>
                        </td>

                        <td class="px-2 py-4 text-sm text-gray-700">{{ $item['time'] }}</td>

                        <td class="px-2 py-4">
                            <span class="inline-flex rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] text-gray-700">
                                {{ $item['date'] }}
                            </span>
                        </td>

                        <td class="relative px-2 py-4 text-right">
                            @include('AdminDashboard.partials.staff-action-menu')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="space-y-4 lg:hidden">
        @foreach ($records as $item)
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                <div class="mb-3 flex items-center justify-between">
                    <div class="flex min-w-0 items-center">
                        <div class="min-w-0">
                            <p class="truncate font-medium text-gray-950">{{ $item['name'] }}</p>
                            <p class="truncate text-sm text-gray-500">{{ $item['position'] }}</p>
                        </div>
                    </div>

                    <div class="flex shrink-0 items-center gap-2">
                        <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]"><i class="fa-solid fa-print"></i></button>
                        <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]"><i class="fa-regular fa-trash-can"></i></button>
                    </div>
                </div>

                <div class="mb-3 flex flex-wrap gap-2">
                    <span class="rounded-md border border-blue-600 px-2 py-1 text-xs text-blue-600">{{ $item['type'] }}</span>
                    <span class="rounded-md border border-green-500 px-2 py-1 text-xs text-green-600">● {{ $item['status'] }}</span>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div>
                        <p class="text-gray-400">Check in /Out or Leave</p>
                        <p>{{ $item['time'] }}</p>
                    </div>
                    <div>
                        <p class="text-gray-400">Date</p>
                        <p>{{ $item['date'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
        <span>0 of 68 row(s) selected.</span>

        <div class="flex flex-wrap items-center gap-3">
            @include('AdminDashboard.partials.staff-pagination', [
                'id' => 'attendance-rows-per-page',
                'options' => ['10', '25', '50', '100'],
            ])
        </div>
    </div>
</div>
</div>
