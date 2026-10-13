<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    <div class="flex items-start justify-between gap-4">
        <div>
            <h2 class="text-lg font-semibold text-gray-950">Client Interactions</h2>
            <p class="mt-1 text-sm text-gray-500">Centralized communication history per client</p>
        </div>

        <button wire:click="toggleForm" type="button"
            class="hidden h-9 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800 sm:inline-flex">
            <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }} text-xs"></i>
            {{ $showForm ? 'Close' : 'Log Interaction' }}
        </button>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
    <div class="flex h-[76px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z" stroke="#222222" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#222222" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


        <p class="mt-2 text-xs font-semibold text-gray-950">Email</p>
    </div>

    <div class="flex h-[76px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#222222" stroke-width="1.5" stroke-miterlimit="10"/>
<path d="M18.5 9C18.5 8.4 18.03 7.48 17.33 6.73C16.69 6.04 15.84 5.5 15 5.5" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 9C22 5.13 18.87 2 15 2" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


        <p class="mt-2 text-xs font-semibold text-gray-950">Call</p>
    </div>

    <div class="flex h-[76px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.53 20.4201H6.21C3.05 20.4201 2 18.3201 2 16.2101V7.79008C2 4.63008 3.05 3.58008 6.21 3.58008H12.53C15.69 3.58008 16.74 4.63008 16.74 7.79008V16.2101C16.74 19.3701 15.68 20.4201 12.53 20.4201Z" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.5183 17.0999L16.7383 15.1499V8.83989L19.5183 6.88989C20.8783 5.93989 21.9983 6.51989 21.9983 8.18989V15.8099C21.9983 17.4799 20.8783 18.0599 19.5183 17.0999Z" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.5 11C12.3284 11 13 10.3284 13 9.5C13 8.67157 12.3284 8 11.5 8C10.6716 8 10 8.67157 10 9.5C10 10.3284 10.6716 11 11.5 11Z" stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


        <p class="mt-2 text-xs font-semibold text-gray-950">Meeting</p>
    </div>

    <div class="flex h-[76px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.9 20.6C8.4 21.5 10.2 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 13.8 2.5 15.5 3.3 17L2.44044 20.306C2.24572 21.0549 2.93892 21.7317 3.68299 21.5191L6.9 20.6Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.5 14.8485C16.5 15.0105 16.4639 15.177 16.3873 15.339C16.3107 15.501 16.2116 15.654 16.0809 15.798C15.86 16.041 15.6167 16.2165 15.3418 16.329C15.0714 16.4415 14.7784 16.5 14.4629 16.5C14.0033 16.5 13.512 16.392 12.9937 16.1715C12.4755 15.951 11.9572 15.654 11.4434 15.2805C10.9251 14.9025 10.4339 14.484 9.9652 14.0205C9.501 13.5525 9.08187 13.062 8.70781 12.549C8.33826 12.036 8.04081 11.523 7.82449 11.0145C7.60816 10.5015 7.5 10.011 7.5 9.543C7.5 9.237 7.55408 8.9445 7.66224 8.6745C7.77041 8.4 7.94166 8.148 8.18052 7.923C8.46895 7.6395 8.78443 7.5 9.11793 7.5C9.24412 7.5 9.37031 7.527 9.48297 7.581C9.60015 7.635 9.70381 7.716 9.78493 7.833L10.8305 9.3045C10.9116 9.417 10.9702 9.5205 11.0108 9.6195C11.0513 9.714 11.0739 9.8085 11.0739 9.894C11.0739 10.002 11.0423 10.11 10.9792 10.2135C10.9206 10.317 10.835 10.425 10.7268 10.533L10.3843 10.8885C10.3348 10.938 10.3122 10.9965 10.3122 11.0685C10.3122 11.1045 10.3167 11.136 10.3257 11.172C10.3393 11.208 10.3528 11.235 10.3618 11.262C10.4429 11.4105 10.5826 11.604 10.7809 11.838C10.9837 12.072 11.2 12.3105 11.4344 12.549C11.6778 12.7875 11.9121 13.008 12.151 13.2105C12.3853 13.4085 12.5791 13.5435 12.7323 13.6245C12.7549 13.6335 12.7819 13.647 12.8135 13.6605C12.8495 13.674 12.8856 13.6785 12.9261 13.6785C13.0028 13.6785 13.0613 13.6515 13.1109 13.602L13.4534 13.2645C13.5661 13.152 13.6743 13.0665 13.7779 13.0125C13.8816 12.9495 13.9852 12.918 14.0979 12.918C14.1835 12.918 14.2737 12.936 14.3728 12.9765C14.472 13.017 14.5756 13.0755 14.6883 13.152L16.18 14.2095C16.2972 14.2905 16.3783 14.385 16.4279 14.4975C16.473 14.61 16.5 14.7225 16.5 14.8485Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10"/>
</svg>


        <p class="mt-2 text-xs font-semibold text-gray-950">WhatsApp</p>
    </div>
</div>

    @if ($showForm)
        <div class="space-y-5">
            <h3 class="text-sm font-semibold text-gray-950">Log Interaction</h3>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Client Name *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Subject</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Company</label>
                    <details class="staff-select relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-select-value">Logistic</span>
                            <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                        </summary>
                        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                            <button type="button" data-staff-select-option="Logistic" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Logistic</button>
                            <button type="button" data-staff-select-option="ICT" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">ICT</button>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <details class="staff-date-picker relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.6666 18.3334H8.33329C5.1906 18.3334 3.61925 18.3334 2.64294 17.3571C1.66663 16.3808 1.66663 14.8094 1.66663 11.6667V10C1.66663 6.85734 1.66663 5.286 2.64294 4.30968C3.61925 3.33337 5.1906 3.33337 8.33329 3.33337H11.6666C14.8093 3.33337 16.3807 3.33337 17.357 4.30968C18.3333 5.286 18.3333 6.85734 18.3333 10V11.6667C18.3333 14.8094 18.3333 16.3808 17.357 17.3571C16.8127 17.9014 16.0834 18.1422 15 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.83337 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1666 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.9166 7.5H13.8541H8.95829M1.66663 7.5H4.89579" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15 14.1667C15 14.6269 14.6269 15 14.1667 15C13.7065 15 13.3334 14.6269 13.3334 14.1667C13.3334 13.7064 13.7065 13.3333 14.1667 13.3333C14.6269 13.3333 15 13.7064 15 14.1667Z" fill="#1C274C"/>
<path d="M15 10.8333C15 11.2936 14.6269 11.6667 14.1667 11.6667C13.7065 11.6667 13.3334 11.2936 13.3334 10.8333C13.3334 10.3731 13.7065 10 14.1667 10C14.6269 10 15 10.3731 15 10.8333Z" fill="#1C274C"/>
<path d="M10.8333 14.1667C10.8333 14.6269 10.4602 15 9.99996 15C9.53972 15 9.16663 14.6269 9.16663 14.1667C9.16663 13.7064 9.53972 13.3333 9.99996 13.3333C10.4602 13.3333 10.8333 13.7064 10.8333 14.1667Z" fill="#1C274C"/>
<path d="M10.8333 10.8333C10.8333 11.2936 10.4602 11.6667 9.99996 11.6667C9.53972 11.6667 9.16663 11.2936 9.16663 10.8333C9.16663 10.3731 9.53972 10 9.99996 10C10.4602 10 10.8333 10.3731 10.8333 10.8333Z" fill="#1C274C"/>
<path d="M6.66667 14.1667C6.66667 14.6269 6.29357 15 5.83333 15C5.3731 15 5 14.6269 5 14.1667C5 13.7064 5.3731 13.3333 5.83333 13.3333C6.29357 13.3333 6.66667 13.7064 6.66667 14.1667Z" fill="#1C274C"/>
<path d="M6.66667 10.8333C6.66667 11.2936 6.29357 11.6667 5.83333 11.6667C5.3731 11.6667 5 11.2936 5 10.8333C5 10.3731 5.3731 10 5.83333 10C6.29357 10 6.66667 10.3731 6.66667 10.8333Z" fill="#1C274C"/>
</svg>

                        </summary>
                        <div class="absolute left-0 top-12 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                            <div class="mb-3 flex items-center justify-between">
                                <button type="button" data-date-month-label class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">June 2026</button>
                                <div class="flex items-center gap-1 text-gray-500">
                                    <button type="button" data-date-prev class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Previous month">
                                        <i class="fa-solid fa-chevron-left text-[11px]"></i>
                                    </button>
                                    <button type="button" data-date-next class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Next month">
                                        <i class="fa-solid fa-chevron-right text-[11px]"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                                <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                            </div>
                            <div data-date-grid class="mt-2 grid grid-cols-7 gap-1 text-center text-sm"></div>
                            <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3 text-sm font-medium">
                                <button type="button" data-staff-date-clear class="rounded-lg px-2 py-1 text-gray-600 hover:bg-gray-50">Clear</button>
                                <button type="button" data-date-today class="rounded-lg px-2 py-1 text-gray-900 hover:bg-gray-50">Today</button>
                            </div>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Channel</label>
                    <details class="staff-select relative">
                        <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                            <span class="staff-select-value">Email</span>
                            <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4167 0.75L6.58333 5.75L5.125 4.5M0.75 0.749999L2.69444 2.41667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                        </summary>
                        <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                            <button type="button" data-staff-select-option="Email" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Email</button>
                            <button type="button" data-staff-select-option="Call" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Call</button>
                            <button type="button" data-staff-select-option="Meeting" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Meeting</button>
                            <button type="button" data-staff-select-option="WhatsApp" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">WhatsApp</button>
                        </div>
                    </details>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Related Projects</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div class="md:col-span-2">
                    <label class="mb-2 block text-sm font-medium">Notes</label>
                    <textarea placeholder="Notes..."
                        class="h-24 w-full resize-none rounded-md border border-gray-200 px-3 py-2 text-sm outline-none focus:border-blue-600"></textarea>
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
                    <button type="button"
                        class="inline-flex h-10 items-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium hover:bg-gray-50">
                          <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97823 8.72119C5.78466 8.52755 5.78462 8.21363 5.97823 8.02002C6.17186 7.82661 6.48583 7.82651 6.67941 8.02002L8.45773 9.79834L8.45773 0.495605C8.45787 0.221884 8.68007 0.000488281 8.95382 0.000488281C9.22751 0.000564575 9.44977 0.221931 9.44991 0.495605L9.44991 9.79834L11.2282 8.02002C11.4219 7.82661 11.7358 7.82651 11.9294 8.02002C12.123 8.21359 12.1228 8.52754 11.9294 8.72119L9.30441 11.3462C9.11077 11.5398 8.79687 11.5398 8.60323 11.3462L5.97823 8.72119ZM0.145226 3.47119C-0.0484087 3.27756 -0.0484087 2.96365 0.145226 2.77002L2.77023 0.14502C2.96389 -0.0482531 3.27788 -0.0484953 3.4714 0.14502L6.0964 2.77002C6.28981 2.96354 6.28964 3.27756 6.0964 3.47119C5.9028 3.66479 5.58887 3.66472 5.39523 3.47119L3.61593 1.69287L3.61593 10.9956C3.61593 11.2693 3.39444 11.4914 3.12081 11.4917C2.84697 11.4917 2.62472 11.2694 2.62472 10.9956L2.62472 1.69287L0.846398 3.47119C0.652797 3.66479 0.33887 3.66472 0.145226 3.47119Z" fill="#71717A"/>
</svg>
                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm" type="button"
                    class="inline-flex h-10 w-full items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800 sm:hidden">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }} text-xs"></i>
                    {{ $showForm ? 'Close' : 'Log Interaction' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Client</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Subject</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Company</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Channel</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Project</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Date</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($interactions as $interaction)
                        <tr class="border-t border-gray-100">
                            <td class="px-3 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-3 py-4 font-medium text-gray-900">{{ $interaction['client'] }}</td>
                            <td class="px-3 py-4">{{ $interaction['subject'] }}</td>
                            <td class="px-3 py-4">{{ $interaction['company'] }}</td>
                            <td class="px-3 py-4">
                                <span class="rounded-md border border-blue-500 bg-blue-50 px-2 py-0.5 text-[11px] text-blue-700">
                                    {{ $interaction['channel'] }}
                                </span>
                            </td>
                            <td class="px-3 py-4">{{ $interaction['project'] }}</td>
                            <td class="px-3 py-4">
                                <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">
                                    {{ $interaction['date'] }}
                                </span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] text-green-700">
                                    {{ $interaction['status'] }}
                                </span>
                            </td>
                            <td class="relative px-3 py-4 text-right">
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

                    <tr>
                        <td colspan="9" class="h-[180px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div class="space-y-4 lg:hidden">
    @foreach ($interactions as $interaction)
        <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">

            <div class="mb-3 flex items-start justify-between gap-3">

                <div class="min-w-0">
                    <h3 class="truncate text-sm font-semibold text-gray-900">
                        {{ $interaction['client'] }}
                    </h3>

                    <p class="mt-1 truncate text-sm text-gray-500">
                        {{ $interaction['subject'] }}
                    </p>
                </div>

                <div class="flex shrink-0 items-center gap-2">
                    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
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
                    </button>

                    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                         <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0501 2.48221L11.8225 1.70982C13.1022 0.430062 15.1771 0.430062 16.4569 1.70982C17.7366 2.98957 17.7366 5.06446 16.4569 6.34421L15.6845 7.11661M11.0501 2.48221C11.0501 2.48221 11.1466 4.12356 12.5949 5.57181C14.0431 7.02006 15.6845 7.11661 15.6845 7.11661M11.0501 2.48221L9.08333 4.44894M6.16667 7.3656L3.94902 9.58325C3.46805 10.0642 3.22757 10.3047 3.02075 10.5699C2.77678 10.8827 2.56761 11.2211 2.39695 11.5792C2.25228 11.8828 2.14473 12.2054 1.92963 12.8507L1.01817 15.5851L0.795374 16.2535C0.689523 16.571 0.772171 16.9211 1.00886 17.1578C1.24555 17.3945 1.59565 17.4771 1.9132 17.3713L2.5816 17.1485L5.31598 16.237C5.96127 16.0219 6.28391 15.9144 6.58748 15.7697C6.94558 15.5991 7.28401 15.3899 7.5968 15.1459C7.86196 14.9391 8.10245 14.6986 8.58342 14.2176L8.71773 14.0833L11.3006 11.5005L15.6845 7.11661M2.5816 17.1485L1.01817 15.5851" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                    </button>

                    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                <span class="rounded-md border border-gray-200 px-2 py-1 text-xs text-gray-700">
                    {{ $interaction['company'] }}
                </span>

                <span class="rounded-md border border-blue-500 bg-blue-50 px-2 py-1 text-xs text-blue-700">
                    {{ $interaction['channel'] }}
                </span>

                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-1 text-xs text-green-700">
                    {{ $interaction['status'] }}
                </span>

            </div>

            <div class="grid grid-cols-2 gap-3 text-sm">

                <div>
                    <p class="text-gray-400">Project</p>
                    <p class="font-medium text-gray-900">
                        {{ $interaction['project'] }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-400">Date</p>
                    <p class="whitespace-nowrap font-medium text-gray-900">
                        {{ $interaction['date'] }}
                    </p>
                </div>

            </div>

        </div>
    @endforeach
</div>
<div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'client-interactions-rows-per-page'])
            </div>
        </div>
</div>
