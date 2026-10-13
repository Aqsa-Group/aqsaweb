<div class="space-y-8">
    @include('livewire.logistic-admin-dashboard._shared-ui')

    @if ($showForm)
        <section class="rounded-xl bg-white">
            <h2 class="mb-5 text-xl font-semibold text-gray-950">Add New Ticket</h2>

            <div class="space-y-5">
                {{-- 1. Ticket Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">1. Ticket Information</h3>

                    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Client <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="client_name"
                                placeholder="Enter client name"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Subject <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="subject"
                                placeholder="Enter the subject"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Priority <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Medium</span>

                                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Urgent', 'High', 'Medium', 'Low'] as $priority)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $priority }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $priority }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Company</label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Logistic</span>

                                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Logistic', 'ICT'] as $company)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $company }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $company }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                {{-- 2. Setting --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">2. Setting</h3>

                    <div class="grid gap-4 md:grid-cols-3">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Channel <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Portal</span>

                                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Portal', 'Email', 'Phone', 'WhatsApp'] as $channel)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $channel }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $channel }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Assigned To <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600">
                                    <span class="staff-select-value">Unassigned</span>

                                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </summary>

                                <div class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                    @foreach (['Unassigned', 'Support Team', 'Logistic Team', 'ICT Team'] as $assignee)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $assignee }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            {{ $assignee }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Related Project</label>

                            <input
                                type="text"
                                name="related_project"
                                placeholder="Optional"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>
                    </div>
                </div>

                {{-- 3. Contact Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-5 text-sm font-semibold text-gray-950">3. Contact Information</h3>

                    <div>
                        <label class="mb-2 block text-xs font-medium text-gray-900">Description</label>

                        <textarea
                            name="description"
                            rows="4"
                            placeholder="Description..."
                            class="min-h-[86px] w-full resize-none rounded-md border border-gray-200 bg-white px-3 py-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                        ></textarea>
                    </div>

                    <div class="mt-4">
                        <label class="mb-2 block text-xs font-medium text-gray-900">Attachments</label>

                        <label
                            id="ticketAttachmentDropZone"
                            class="flex min-h-[108px] cursor-pointer flex-col items-center justify-center rounded-md border border-dashed border-blue-400 bg-white px-4 py-5 text-center transition hover:bg-blue-50/40"
                        >
                            <i class="fa-solid fa-cloud-arrow-up text-lg text-blue-600"></i>

                            <span class="mt-2 text-xs font-medium text-gray-800">
                                Drag &amp; Drop files here
                            </span>

                            <span class="mt-1 text-xs text-gray-500">
                                or <span class="font-medium text-blue-600">click to browse</span>
                            </span>

                            <span
                                id="ticketAttachmentFileName"
                                class="mt-2 hidden max-w-full truncate text-xs font-medium text-emerald-600"
                            ></span>

                            <input
                                id="ticketAttachmentInput"
                                type="file"
                                name="attachments[]"
                                accept=".pdf,.jpg,.jpeg,.png,.bmp,.tif,.tiff"
                                multiple
                                class="hidden"
                            >
                        </label>

                        <p class="mt-2 text-[11px] text-gray-400">
                            Accepted files: PDF, JPG, PNG, BMP, TIFF
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-end gap-3">
                <button
                    wire:click="cancelForm"
                    type="button"
                    class="inline-flex h-10 items-center justify-center rounded-md border border-blue-600 bg-white px-6 text-xs font-medium text-blue-600 transition hover:bg-blue-50"
                >
                    Cancel
                </button>

                <button
                    type="button"
                    class="inline-flex h-10 items-center justify-center rounded-md bg-[#2059D4] px-6 text-xs font-medium text-white transition hover:bg-blue-800"
                >
                    Save Ticket
                </button>
            </div>
        </section>
    @else
        <section class="rounded-xl bg-white">
            <div class="mb-5">
                <h2 class="text-xl font-semibold text-gray-950">Tickets</h2>
                <p class="mt-1 text-sm text-gray-400">Manage your customer support requests</p>
            </div>

            <div class="mb-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label class="relative block w-full sm:w-[280px]">
                        <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6666 16.6666L18.3333 18.3333" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M5.62496 2.72573C6.7894 2.05214 8.14132 1.66663 9.58329 1.66663C13.9555 1.66663 17.5 5.21104 17.5 9.58329C17.5 13.9555 13.9555 17.5 9.58329 17.5C5.21104 17.5 1.66663 13.9555 1.66663 9.58329C1.66663 8.14132 2.05214 6.7894 2.72573 5.62496" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>

                        <input
                            class="h-10 w-full rounded-md border border-gray-200 pl-10 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500"
                            placeholder="Search..."
                        >
                    </label>

                    <button
                        type="button"
                        class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm transition hover:bg-gray-50"
                    >
                        <i class="fa-solid fa-arrow-up-arrow-down text-xs text-gray-500"></i>
                        Filter
                    </button>
                </div>

                <button
                    wire:click="toggleForm"
                    type="button"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm transition hover:bg-blue-800"
                >
                    <i class="fa-solid fa-plus text-xs"></i>
                    Add Ticket
                </button>
            </div>

            <div class="hidden min-h-[365px] overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
                <table class="w-full table-fixed text-left text-xs">
                    <colgroup>
                        <col class="w-[4%]">
                        <col class="w-[4%]">
                        <col class="w-[12%]">
                        <col class="w-[25%]">
                        <col class="w-[18%]">
                        <col class="w-[10%]">
                        <col class="w-[9%]">
                        <col class="w-[9%]">
                        <col class="w-[6%]">
                        <col class="w-[3%]">
                    </colgroup>

                    <thead class="bg-gray-50 text-gray-950">
                        <tr>
                            <th class="px-2 py-3"></th>

                            <th class="px-2 py-3">
                                <input
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300"
                                    aria-label="Select all tickets"
                                >
                            </th>

                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Ticket ID</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Subject</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Client</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Status</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Priority</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Assigned To</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Company</th>
                            <th class="whitespace-nowrap px-2 py-3 text-center font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($tickets as $ticket)
                            @php
                                $ticketStatus = $ticket['status'] ?? 'Active';
                                $ticketPriority = $ticket['priority'] ?? 'Medium';
                                $assignedTo = $ticket['assigned_to'] ?? '—';

                                $statusClasses = $ticketStatus === 'Resolved'
                                    ? 'border-emerald-400 bg-emerald-50 text-emerald-600'
                                    : ($ticketStatus === 'In Progress'
                                        ? 'border-orange-400 bg-orange-50 text-orange-500'
                                        : 'border-green-400 bg-green-50 text-green-600');

                                $priorityClasses = $ticketPriority === 'Urgent'
                                    ? 'border-red-300 bg-red-50 text-red-500'
                                    : ($ticketPriority === 'Medium'
                                        ? 'border-blue-300 bg-blue-50 text-blue-500'
                                        : 'border-gray-300 bg-gray-50 text-gray-500');
                            @endphp

                            <tr class="border-t border-gray-100 align-middle">
                                <td class="px-2 py-4 text-center text-gray-400">
                                    <i class="fa-solid fa-grip-vertical text-[10px]"></i>
                                </td>

                                <td class="px-2 py-4">
                                    <input
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300"
                                        aria-label="Select {{ $ticket['id'] }}"
                                    >
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">
                                    {{ $ticket['id'] }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">
                                    {{ $ticket['subject'] }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                    {{ $ticket['client'] }}
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border px-2 py-0.5 text-[11px] font-medium {{ $statusClasses }}">
                                        {{ $ticketStatus }}
                                    </span>
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border px-2 py-0.5 text-[11px] font-medium {{ $priorityClasses }}">
                                        {{ $ticketPriority }}
                                    </span>
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-500">
                                    {{ $assignedTo }}
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px] text-gray-500">
                                        {{ $ticket['company'] }}
                                    </span>
                                </td>

                                <td class="relative px-2 py-4 text-center">
                                    <button
                                        type="button"
                                        class="staff-action-toggle rounded-md p-2 text-gray-700 transition hover:bg-gray-100"
                                        aria-label="Actions"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                                        <button
                                            type="button"
                                            class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            <i class="fa-solid fa-print w-4 text-center text-xs"></i>
                                            <span>Print</span>
                                        </button>

                                        <button
                                            type="button"
                                            class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            <i class="fa-solid fa-pen w-4 text-center text-xs"></i>
                                            <span>Edit</span>
                                        </button>

                                        <button
                                            type="button"
                                            class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                            <i class="fa-solid fa-trash w-4 text-center text-xs"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="10" class="h-[155px]"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="space-y-4 lg:hidden">
                @foreach ($tickets as $ticket)
                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-gray-950">
                                    {{ $ticket['id'] }}
                                </p>

                                <p class="mt-1 line-clamp-2 text-sm text-gray-500">
                                    {{ $ticket['subject'] }}
                                </p>
                            </div>

                            <button
                                type="button"
                                class="rounded-md border border-gray-200 p-2 text-[#1C274C]"
                                aria-label="Ticket actions"
                            >
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                        </div>

                        <div class="mb-3 flex flex-wrap gap-2">
                            <span class="rounded-md border border-green-400 bg-green-50 px-2 py-1 text-xs text-green-600">
                                {{ $ticket['status'] }}
                            </span>

                            <span class="rounded-md border border-red-300 bg-red-50 px-2 py-1 text-xs text-red-500">
                                {{ $ticket['priority'] }}
                            </span>

                            <span class="rounded-md border border-gray-200 px-2 py-1 text-xs text-gray-600">
                                {{ $ticket['company'] }}
                            </span>
                        </div>

                        <div class="grid grid-cols-2 gap-3 text-sm">
                            <div>
                                <p class="text-gray-400">Client</p>
                                <p class="truncate font-medium text-gray-900">{{ $ticket['client'] }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Assigned To</p>
                                <p class="truncate font-medium text-gray-900">{{ $ticket['assigned_to'] ?? '—' }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
                <span>0 of 68 row(s) selected.</span>

                <div class="flex flex-wrap items-center gap-3">
                    @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'support-tickets-rows-per-page'])
                </div>
            </div>
        </section>
    @endif
</div>

@once
    <script>
        document.addEventListener('change', function (event) {
            if (event.target?.id !== 'ticketAttachmentInput') {
                return;
            }

            const files = Array.from(event.target.files || []);
            const fileName = document.getElementById('ticketAttachmentFileName');

            if (!fileName) {
                return;
            }

            if (files.length === 0) {
                fileName.textContent = '';
                fileName.classList.add('hidden');
                return;
            }

            fileName.textContent = files.length === 1
                ? files[0].name
                : `${files.length} files selected`;

            fileName.classList.remove('hidden');
        });

        document.addEventListener('dragover', function (event) {
            const dropZone = event.target.closest?.('#ticketAttachmentDropZone');

            if (!dropZone) {
                return;
            }

            event.preventDefault();
            dropZone.classList.add('border-blue-600', 'bg-blue-50');
        });

        document.addEventListener('dragleave', function (event) {
            const dropZone = event.target.closest?.('#ticketAttachmentDropZone');

            if (!dropZone) {
                return;
            }

            dropZone.classList.remove('border-blue-600', 'bg-blue-50');
        });

        document.addEventListener('drop', function (event) {
            const dropZone = event.target.closest?.('#ticketAttachmentDropZone');

            if (!dropZone) {
                return;
            }

            event.preventDefault();
            dropZone.classList.remove('border-blue-600', 'bg-blue-50');

            const input = document.getElementById('ticketAttachmentInput');
            const fileName = document.getElementById('ticketAttachmentFileName');
            const files = event.dataTransfer?.files;

            if (!input || !files?.length) {
                return;
            }

            input.files = files;

            if (fileName) {
                fileName.textContent = files.length === 1
                    ? files[0].name
                    : `${files.length} files selected`;

                fileName.classList.remove('hidden');
            }
        });
    </script>
@endonce
