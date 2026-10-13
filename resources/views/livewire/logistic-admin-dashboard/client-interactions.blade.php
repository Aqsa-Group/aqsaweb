<div class="space-y-8">
    @include('livewire.logistic-admin-dashboard._shared-ui')

    @php

        $clientRows = $clients ?? $interactions ?? [];
    @endphp

    @if ($showForm)
        <section class="rounded-xl bg-white">
            <h2 class="mb-6 text-xl font-semibold text-gray-950">Add New Client</h2>

            <div class="space-y-6">
                {{-- 1. Organization Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-6 text-sm font-semibold text-gray-950">
                        1. Organization Information
                    </h3>

                    <div class="grid gap-5 md:grid-cols-3">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Organization Name <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="organization_name"
                                placeholder="Enter organization name"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Type <span class="text-red-500">*</span>
                            </label>

                            <details class="staff-select relative">
                                <summary
                                    class="flex h-10 cursor-pointer list-none items-center justify-between rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-700 outline-none transition hover:border-gray-300 focus:border-blue-600"
                                >
                                    <span class="staff-select-value">NGO</span>

                                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667"
                                            stroke="#1C274C"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </summary>

                                <input type="hidden" name="type" value="NGO" class="staff-select-input">

                                <div
                                    class="staff-select-menu absolute left-0 right-0 top-11 z-50 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70"
                                >
                                    @foreach (['NGO', 'INGO', 'Government', 'Private', 'Individual'] as $type)
                                        <button
                                            type="button"
                                            data-staff-select-option="{{ $type }}"
                                            class="flex w-full items-center rounded-lg px-3 py-2 text-left text-xs font-medium text-gray-800 transition hover:bg-gray-50"
                                        >
                                            {{ $type }}
                                        </button>
                                    @endforeach
                                </div>
                            </details>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Status</label>

                            <input
                                type="text"
                                name="status"
                                value="Active"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>
                    </div>
                </div>

                {{-- 2. Contact Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-6 text-sm font-semibold text-gray-950">
                        2. Contact Information
                    </h3>

                    <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Contact Person <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="contact_person"
                                placeholder="Enter contact person"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">
                                Phone <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="tel"
                                name="phone"
                                placeholder="Enter Phone number"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Email</label>

                            <input
                                type="email"
                                name="email"
                                placeholder="Enter email address"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-medium text-gray-900">Address</label>

                            <input
                                type="text"
                                name="address"
                                placeholder="Enter address"
                                class="h-10 w-full rounded-md border border-gray-200 bg-white px-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                            >
                        </div>
                    </div>
                </div>

                {{-- 3. Additional Information --}}
                <div class="rounded-xl border border-gray-200 bg-white p-4 sm:p-5">
                    <h3 class="mb-6 text-sm font-semibold text-gray-950">
                        3. Additional Information
                    </h3>

                    <div>
                        <label class="mb-2 block text-xs font-medium text-gray-900">Note</label>

                        <textarea
                            name="notes"
                            rows="4"
                            placeholder="Notes..."
                            class="min-h-[86px] w-full resize-none rounded-md border border-gray-200 bg-white px-3 py-3 text-xs text-gray-900 outline-none transition placeholder:text-gray-400 hover:border-gray-300 focus:border-blue-600"
                        ></textarea>
                    </div>
                </div>
            </div>

            <div class="mt-5 flex justify-end gap-3">
                <button
                    wire:click="cancelForm"
                    type="button"
                    class="inline-flex h-10 items-center justify-center rounded-md border border-blue-600 bg-white px-7 text-xs font-medium text-blue-600 transition hover:bg-blue-50"
                >
                    Cancel
                </button>

                <button
                    type="button"
                    class="inline-flex h-10 items-center justify-center rounded-md bg-[#2059D4] px-7 text-xs font-medium text-white transition hover:bg-blue-800"
                >
                    Save Client
                </button>
            </div>
        </section>
    @else
        <section class="rounded-xl bg-white">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-950">Clients</h2>
                <p class="mt-1 text-sm text-gray-400">Manage your clients</p>
            </div>

            <div class="mb-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label class="relative block w-full sm:w-[310px]">
                        <span class="pointer-events-none absolute left-3 top-1/2 -translate-y-1/2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6666 16.6666L18.3333 18.3333"
                                    stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
                                <path
                                    d="M5.62496 2.72573C6.7894 2.05214 8.14132 1.66663 9.58329 1.66663C13.9555 1.66663 17.5 5.21104 17.5 9.58329C17.5 13.9555 13.9555 17.5 9.58329 17.5C5.21104 17.5 1.66663 13.9555 1.66663 9.58329C1.66663 8.14132 2.05214 6.7894 2.72573 5.62496"
                                    stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
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
                    Add Client
                </button>
            </div>

            <div class="hidden min-h-[420px] overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
                <table class="w-full table-fixed text-left text-xs">
                    <colgroup>
                        <col class="w-[4%]">
                        <col class="w-[4%]">
                        <col class="w-[27%]">
                        <col class="w-[10%]">
                        <col class="w-[10%]">
                        <col class="w-[17%]">
                        <col class="w-[12%]">
                        <col class="w-[13%]">
                        <col class="w-[3%]">
                    </colgroup>

                    <thead class="bg-gray-50 text-gray-950">
                        <tr>
                            <th class="px-2 py-3"></th>

                            <th class="px-2 py-3">
                                <input
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300"
                                    aria-label="Select all clients"
                                >
                            </th>

                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Organization Name</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Company</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Status</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Contact Person</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Phone</th>
                            <th class="whitespace-nowrap px-2 py-3 font-semibold">Email</th>
                            <th class="whitespace-nowrap px-2 py-3 text-center font-semibold"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($clientRows as $client)
                            @php
                                $organizationName = $client['organization_name']
                                    ?? $client['name']
                                    ?? $client['client']
                                    ?? 'Ministry of Communication';

                                $company = $client['company'] ?? 'Logistic';
                                $status = $client['status'] ?? 'Active';
                                $contactPerson = $client['contact_person']
                                    ?? $client['contact']
                                    ?? 'Ahmad Norzaii';

                                $phone = $client['phone'] ?? '0876345321';
                                $email = $client['email'] ?? 'projects@mcit.gov.af';
                            @endphp

                            <tr class="border-t border-gray-100 align-middle">
                                <td class="px-2 py-4 text-center text-gray-400">
                                    <i class="fa-solid fa-grip-vertical text-[10px]"></i>
                                </td>

                                <td class="px-2 py-4">
                                    <input
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300"
                                        aria-label="Select {{ $organizationName }}"
                                    >
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">
                                    {{ $organizationName }}
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border border-gray-400 bg-white px-2 py-0.5 text-[11px] text-gray-500">
                                        {{ $company }}
                                    </span>
                                </td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border border-emerald-400 bg-emerald-50 px-2 py-0.5 text-[11px] font-medium text-emerald-600">
                                        {{ $status }}
                                    </span>
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                    {{ $contactPerson }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                    {{ $phone }}
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                    {{ $email }}
                                </td>

                                <td class="relative px-2 py-4 text-center">
                                    <button
                                        type="button"
                                        class="staff-action-toggle rounded-md p-2 text-gray-700 transition hover:bg-gray-100"
                                        aria-label="Actions"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div
                                        class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70"
                                    >
                                        <button
                                            type="button"
                                            class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                        >
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

                                        <button
                                            type="button"
                                            class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                        >
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33313)">
<path d="M11.9667 3.39872L12.7391 2.62632C14.0188 1.34657 16.0937 1.34657 17.3735 2.62632C18.6532 3.90607 18.6532 5.98096 17.3735 7.26072L16.6011 8.03312M11.9667 3.39872C11.9667 3.39872 12.0632 5.04007 13.5115 6.48832C14.9597 7.93657 16.6011 8.03312 16.6011 8.03312M11.9667 3.39872L9.99996 5.36544M7.08329 8.28211L4.86565 10.4998C4.38468 10.9807 4.14419 11.2212 3.93737 11.4864C3.6934 11.7992 3.48424 12.1376 3.31358 12.4957C3.1689 12.7993 3.06136 13.1219 2.84626 13.7672L1.9348 16.5016L1.712 17.17C1.60615 17.4875 1.6888 17.8376 1.92549 18.0743C2.16217 18.311 2.51228 18.3936 2.82983 18.2878L3.49823 18.065L6.23261 17.1535C6.87789 16.9384 7.20054 16.8309 7.50411 16.6862C7.8622 16.5156 8.20064 16.3064 8.51343 16.0624C8.77859 15.8556 9.01907 15.6151 9.50004 15.1341L9.63436 14.9998L12.2172 12.417L16.6011 8.03312M3.49823 18.065L1.9348 16.5016" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1202_33313">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                                            <span>Edit</span>
                                        </button>

                                        <button
                                            type="button"
                                            class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50"
                                        >
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
                        @empty
                            @foreach ([
                                ['company' => 'Logistic'],
                                ['company' => 'ICT'],
                                ['company' => 'ICT'],
                                ['company' => 'Logistic'],
                            ] as $sampleClient)
                                <tr class="border-t border-gray-100 align-middle">
                                    <td class="px-2 py-4 text-center text-gray-400">
                                        <i class="fa-solid fa-grip-vertical text-[10px]"></i>
                                    </td>

                                    <td class="px-2 py-4">
                                        <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                                    </td>

                                    <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">
                                        Ministry of Communication
                                    </td>

                                    <td class="px-2 py-4">
                                        <span class="inline-flex whitespace-nowrap rounded-md border border-gray-400 bg-white px-2 py-0.5 text-[11px] text-gray-500">
                                            {{ $sampleClient['company'] }}
                                        </span>
                                    </td>

                                    <td class="px-2 py-4">
                                        <span class="inline-flex whitespace-nowrap rounded-md border border-emerald-400 bg-emerald-50 px-2 py-0.5 text-[11px] font-medium text-emerald-600">
                                            Active
                                        </span>
                                    </td>

                                    <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                        Ahmad Norzaii
                                    </td>

                                    <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                        0876345321
                                    </td>

                                    <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">
                                        projects@mcit.gov.af
                                    </td>

                                    <td class="relative px-2 py-4 text-center">
                                        <button
                                            type="button"
                                            class="staff-action-toggle rounded-md p-2 text-gray-700 transition hover:bg-gray-100"
                                            aria-label="Actions"
                                        >
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </button>

                                        <div
                                            class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70"
                                        >
                                            <button type="button"
                                                class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                                <i class="fa-solid fa-print w-4 text-center text-xs"></i>
                                                <span>Print</span>
                                            </button>

                                            <button type="button"
                                                class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                                <i class="fa-solid fa-pen w-4 text-center text-xs"></i>
                                                <span>Edit</span>
                                            </button>

                                            <button type="button"
                                                class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                                <i class="fa-solid fa-trash w-4 text-center text-xs"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endforelse

                        <tr>
                            <td colspan="9" class="h-[150px]"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="space-y-4 lg:hidden">
                @forelse ($clientRows as $client)
                    @php
                        $organizationName = $client['organization_name']
                            ?? $client['name']
                            ?? $client['client']
                            ?? 'Client';

                        $company = $client['company'] ?? 'Logistic';
                        $status = $client['status'] ?? 'Active';
                        $contactPerson = $client['contact_person']
                            ?? $client['contact']
                            ?? '—';

                        $phone = $client['phone'] ?? '—';
                        $email = $client['email'] ?? '—';
                    @endphp

                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-gray-950">
                                    {{ $organizationName }}
                                </p>

                                <p class="mt-1 truncate text-sm text-gray-500">
                                    {{ $contactPerson }}
                                </p>
                            </div>

                            <button
                                type="button"
                                class="rounded-md border border-gray-200 p-2 text-[#1C274C]"
                                aria-label="Client actions"
                            >
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                        </div>

                        <div class="mb-3 flex flex-wrap gap-2">
                            <span class="rounded-md border border-gray-300 px-2 py-1 text-xs text-gray-600">
                                {{ $company }}
                            </span>

                            <span class="rounded-md border border-emerald-400 bg-emerald-50 px-2 py-1 text-xs text-emerald-600">
                                {{ $status }}
                            </span>
                        </div>

                        <div class="grid grid-cols-2 gap-3 text-sm">
                            <div>
                                <p class="text-gray-400">Phone</p>
                                <p class="truncate text-gray-900">{{ $phone }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Email</p>
                                <p class="truncate text-gray-900">{{ $email }}</p>
                            </div>
                        </div>
                    </article>
                @empty
                    <article class="rounded-xl border border-gray-200 bg-white p-4 text-center text-sm text-gray-500">
                        No clients found.
                    </article>
                @endforelse
            </div>

            <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
                <span>0 of 68 row(s) selected.</span>

                <div class="flex flex-wrap items-center gap-3">
                    @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'simple-clients-rows-per-page'])
                </div>
            </div>
        </section>
    @endif
</div>

@once
    <script>
        document.addEventListener('click', function (event) {
            const option = event.target.closest('[data-staff-select-option]');

            if (!option) {
                return;
            }

            const dropdown = option.closest('.staff-select');
            const selectedValue = dropdown?.querySelector('.staff-select-value');
            const hiddenInput = dropdown?.querySelector('.staff-select-input');
            const value = option.dataset.staffSelectOption || option.textContent.trim();

            if (selectedValue) {
                selectedValue.textContent = value;
                selectedValue.classList.remove('text-gray-500');
            }

            if (hiddenInput) {
                hiddenInput.value = value;
            }

            dropdown?.removeAttribute('open');
        });
    </script>
@endonce
