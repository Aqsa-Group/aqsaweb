<div class="space-y-7">
    @include('livewire.admin-dashboard._shared-ui')
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

    <div class="relative">
        <input wire:model="checkOut" type="text" inputmode="text" placeholder="08:08 --"
            class="h-11 w-full rounded-md border border-gray-200 px-3 pr-10 text-sm outline-none focus:border-blue-600">

        <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
            <i class="fa-regular fa-clock text-[18px] text-[#1C274C]"></i>
        </span>
    </div>
</div>

             <div>
    <label class="mb-2 block text-sm font-medium">Type</label>

    <details class="staff-select relative">
        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
            <span class="staff-select-value">Attendance</span>
           <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </summary>

        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
            <button type="button" wire:click="setFormType('attendance')" data-staff-select-option="Attendance"
                class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">
                Attendance
            </button>

            <button type="button" wire:click="setFormType('leave')" data-staff-select-option="Leave"
                class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">
                Leave
            </button>
        </div>
    </details>
</div>

                        <div>
    <label class="mb-2 block text-sm font-medium">Check In</label>

    <div class="relative">
        <input wire:model="checkIn" type="text" inputmode="text" placeholder="05:56 --"
            class="h-11 w-full rounded-md border border-gray-200 px-3 pr-10 text-sm outline-none focus:border-blue-600">

        <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
            <i class="fa-regular fa-clock text-[18px] text-[#1C274C]"></i>
        </span>
    </div>
</div>

                       <div>
    <label class="mb-2 block text-sm font-medium">Date</label>

    <details class="staff-date-picker relative">
        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
            <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M11.667 18.3334H8.33366C5.19096 18.3334 3.61961 18.3334 2.6433 17.3571C1.66699 16.3808 1.66699 14.8094 1.66699 11.6667V10C1.66699 6.85734 1.66699 5.286 2.6433 4.30968C3.61961 3.33337 5.19096 3.33337 8.33366 3.33337H11.667C14.8097 3.33337 16.381 3.33337 17.3573 4.30968C18.3337 5.286 18.3337 6.85734 18.3337 10V11.6667C18.3337 14.8094 18.3337 16.3808 17.3573 17.3571C16.813 17.9014 16.0838 18.1422 15.0003 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M5.83301 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M14.167 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M17.917 7.5H13.8545H8.95866M1.66699 7.5H4.89616" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </summary>

        <div class="absolute left-0 top-12 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
            <div class="mb-3 flex items-center justify-between">
                <button type="button" class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">
                    June 2026
                </button>

                <div class="flex items-center gap-1 text-gray-500">
                    <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50">
                        <i class="fa-solid fa-chevron-left text-[11px]"></i>
                    </button>
                    <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50">
                        <i class="fa-solid fa-chevron-right text-[11px]"></i>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
            </div>

            <div class="mt-2 grid grid-cols-7 gap-1 text-center text-sm">
                @foreach (['31', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '1', '2', '3', '4'] as $dayIndex => $day)
                    <button type="button"
                        data-staff-date="{{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? '' : '06/' . str_pad($day, 2, '0', STR_PAD_LEFT) . '/2026' }}"
                        class="inline-flex h-8 items-center justify-center rounded-lg {{ in_array($dayIndex, [0, 31, 32, 33, 34], true) ? 'text-gray-300 hover:bg-gray-50' : ($day === '23' ? 'bg-gray-900 text-white hover:bg-gray-800' : 'text-gray-800 hover:bg-gray-50') }}">
                        {{ $day }}
                    </button>
                @endforeach
            </div>

            <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3 text-sm font-medium">
                <button type="button" data-staff-date-clear class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50">Clear</button>
                <button type="button" data-staff-date="06/23/2026" class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50">Today</button>
            </div>
        </div>
    </details>
</div>
<div>
    <label class="mb-2 block text-sm font-medium">Status</label>

    <details class="staff-select relative">
        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
            <span class="staff-select-value">Present</span>
            <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </summary>

        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
            <button type="button" wire:click="$set('status', 'Present')" data-staff-select-option="Present"
                class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">
                Present
            </button>

            <button type="button" wire:click="$set('status', 'Absent')" data-staff-select-option="Absent"
                class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">
                Absent
            </button>
        </div>
    </details>
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
                         <button type="button" class="staff-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100" aria-label="Actions">
    <i class="fa-solid fa-ellipsis-vertical"></i>
</button>

<div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3333 10C18.3333 12.357 18.3333 13.5355 17.6011 14.2678C17.0666 14.8022 16.2945 14.9466 15 14.9856M4.99996 14.9856C3.70542 14.9466 2.93328 14.8022 2.39886 14.2678C1.66663 13.5355 1.66663 12.357 1.66663 10C1.66663 7.64298 1.66663 6.46447 2.39886 5.73223C3.13109 5 4.3096 5 6.66663 5H13.3333C15.6903 5 16.8688 5 17.6011 5.73223C17.8509 5.98206 18.0155 6.28385 18.1239 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.3335H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8334 12.5L4.16671 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99984C14.9466 3.7053 14.8022 2.93316 14.2678 2.39874C13.5355 1.6665 12.357 1.6665 10 1.6665C7.64298 1.6665 6.46447 1.6665 5.73223 2.39874C5.19781 2.93316 5.05344 3.7053 5.01444 4.99984M15 12.4998V13.3332C15 15.6902 15 16.8687 14.2678 17.6009C13.7334 18.1354 12.9612 18.2797 11.6667 18.3187M5 12.4998V13.3332C5 15.6902 5 16.8687 5.73223 17.6009C6.26665 18.1354 7.03879 18.2797 8.33333 18.3187" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1667" cy="8.33333" r="0.833333" fill="#1C274C"/>
</g>
<defs>
<clipPath id="clip0_1202_33320">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

        <span>Print</span>
    </button>
    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0501 2.48221L11.8225 1.70982C13.1022 0.430062 15.1771 0.430062 16.4569 1.70982C17.7366 2.98957 17.7366 5.06446 16.4569 6.34421L15.6845 7.11661M11.0501 2.48221C11.0501 2.48221 11.1466 4.12356 12.5949 5.57181C14.0431 7.02006 15.6845 7.11661 15.6845 7.11661M11.0501 2.48221L9.08333 4.44894M6.16667 7.3656L3.94902 9.58325C3.46805 10.0642 3.22757 10.3047 3.02075 10.5699C2.77678 10.8827 2.56761 11.2211 2.39695 11.5792C2.25228 11.8828 2.14473 12.2054 1.92963 12.8507L1.01817 15.5851L0.795374 16.2535C0.689523 16.571 0.772171 16.9211 1.00886 17.1578C1.24555 17.3945 1.59565 17.4771 1.9132 17.3713L2.5816 17.1485L5.31598 16.237C5.96127 16.0219 6.28391 15.9144 6.58748 15.7697C6.94558 15.5991 7.28401 15.3899 7.5968 15.1459C7.86196 14.9391 8.10245 14.6986 8.58342 14.2176L8.71773 14.0833L11.3006 11.5005L15.6845 7.11661M2.5816 17.1485L1.01817 15.5851" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        <span>Edit</span>
    </button>
    <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0834 5H2.91663" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91663 9.1665L8.33329 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0833 9.1665L11.6666 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41663 5C5.46319 5 5.48648 5 5.50758 4.99947C6.19379 4.98208 6.79915 4.54576 7.03264 3.90027C7.03982 3.88041 7.04719 3.85832 7.06191 3.81415L7.14282 3.57143C7.21188 3.36423 7.24642 3.26063 7.29222 3.17267C7.47497 2.82173 7.81308 2.57803 8.2038 2.51564C8.30173 2.5 8.41094 2.5 8.62934 2.5H11.3706C11.589 2.5 11.6982 2.5 11.7961 2.51564C12.1868 2.57803 12.525 2.82173 12.7077 3.17267C12.7535 3.26063 12.788 3.36423 12.8571 3.57143L12.938 3.81415C12.9527 3.85826 12.9601 3.88042 12.9673 3.90027C13.2008 4.54576 13.8061 4.98208 14.4923 4.99947C14.5134 5 14.5367 5 14.5833 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8328C15.1638 15.0452 15.09 16.1514 14.3692 16.8258C13.6483 17.5002 12.5397 17.5002 10.3223 17.5002H9.67787C7.46054 17.5002 6.35187 17.5002 5.63103 16.8258C4.91019 16.1514 4.83644 15.0452 4.68895 12.8328L4.30566 7.0835M15.6946 7.0835L15.5279 9.5835" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        <span>Delete</span>
    </button>
</div>
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
                        <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3333 10C18.3333 12.357 18.3333 13.5355 17.6011 14.2678C17.0666 14.8022 16.2945 14.9466 15 14.9856M4.99996 14.9856C3.70542 14.9466 2.93328 14.8022 2.39886 14.2678C1.66663 13.5355 1.66663 12.357 1.66663 10C1.66663 7.64298 1.66663 6.46447 2.39886 5.73223C3.13109 5 4.3096 5 6.66663 5H13.3333C15.6903 5 16.8688 5 17.6011 5.73223C17.8509 5.98206 18.0155 6.28385 18.1239 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.3335H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8334 12.5L4.16671 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99984C14.9466 3.7053 14.8022 2.93316 14.2678 2.39874C13.5355 1.6665 12.357 1.6665 10 1.6665C7.64298 1.6665 6.46447 1.6665 5.73223 2.39874C5.19781 2.93316 5.05344 3.7053 5.01444 4.99984M15 12.4998V13.3332C15 15.6902 15 16.8687 14.2678 17.6009C13.7334 18.1354 12.9612 18.2797 11.6667 18.3187M5 12.4998V13.3332C5 15.6902 5 16.8687 5.73223 17.6009C6.26665 18.1354 7.03879 18.2797 8.33333 18.3187" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1667" cy="8.33333" r="0.833333" fill="#1C274C"/>
</g>
<defs>
<clipPath id="clip0_1202_33320">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
</button>
                        <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0501 2.48221L11.8225 1.70982C13.1022 0.430062 15.1771 0.430062 16.4569 1.70982C17.7366 2.98957 17.7366 5.06446 16.4569 6.34421L15.6845 7.11661M11.0501 2.48221C11.0501 2.48221 11.1466 4.12356 12.5949 5.57181C14.0431 7.02006 15.6845 7.11661 15.6845 7.11661M11.0501 2.48221L9.08333 4.44894M6.16667 7.3656L3.94902 9.58325C3.46805 10.0642 3.22757 10.3047 3.02075 10.5699C2.77678 10.8827 2.56761 11.2211 2.39695 11.5792C2.25228 11.8828 2.14473 12.2054 1.92963 12.8507L1.01817 15.5851L0.795374 16.2535C0.689523 16.571 0.772171 16.9211 1.00886 17.1578C1.24555 17.3945 1.59565 17.4771 1.9132 17.3713L2.5816 17.1485L5.31598 16.237C5.96127 16.0219 6.28391 15.9144 6.58748 15.7697C6.94558 15.5991 7.28401 15.3899 7.5968 15.1459C7.86196 14.9391 8.10245 14.6986 8.58342 14.2176L8.71773 14.0833L11.3006 11.5005L15.6845 7.11661M2.5816 17.1485L1.01817 15.5851" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
</button>
                        <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0834 5H2.91663" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91663 9.1665L8.33329 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0833 9.1665L11.6666 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41663 5C5.46319 5 5.48648 5 5.50758 4.99947C6.19379 4.98208 6.79915 4.54576 7.03264 3.90027C7.03982 3.88041 7.04719 3.85832 7.06191 3.81415L7.14282 3.57143C7.21188 3.36423 7.24642 3.26063 7.29222 3.17267C7.47497 2.82173 7.81308 2.57803 8.2038 2.51564C8.30173 2.5 8.41094 2.5 8.62934 2.5H11.3706C11.589 2.5 11.6982 2.5 11.7961 2.51564C12.1868 2.57803 12.525 2.82173 12.7077 3.17267C12.7535 3.26063 12.788 3.36423 12.8571 3.57143L12.938 3.81415C12.9527 3.85826 12.9601 3.88042 12.9673 3.90027C13.2008 4.54576 13.8061 4.98208 14.4923 4.99947C14.5134 5 14.5367 5 14.5833 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8328C15.1638 15.0452 15.09 16.1514 14.3692 16.8258C13.6483 17.5002 12.5397 17.5002 10.3223 17.5002H9.67787C7.46054 17.5002 6.35187 17.5002 5.63103 16.8258C4.91019 16.1514 4.83644 15.0452 4.68895 12.8328L4.30566 7.0835M15.6946 7.0835L15.5279 9.5835" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
</button>
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
