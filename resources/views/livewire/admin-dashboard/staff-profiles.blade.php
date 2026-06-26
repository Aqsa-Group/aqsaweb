<div class="space-y-8">


    @if ($showForm)
        <div class="space-y-6">
            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="9.99984" cy="4.99996" r="3.33333" stroke="#165DAE" stroke-width="1.5"/>
<path d="M12.4998 17.1793C11.7421 17.3849 10.8945 17.5 9.99984 17.5C6.77818 17.5 4.1665 16.0077 4.1665 14.1667C4.1665 12.3258 6.77818 10.8334 9.99984 10.8334C13.2215 10.8334 15.8332 12.3258 15.8332 14.1667C15.8332 14.4545 15.7694 14.7337 15.6494 15" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                    1. Personal Information
                </h2>

                <div class="grid gap-5 lg:grid-cols-[120px_1fr_1fr]">
                    <div class="text-center">
                        <button type="button" onclick="document.getElementById('staff-photo-input')?.click()" class="group relative mx-auto block rounded-full outline-none focus:ring-2 focus:ring-gray-200">
                            <img id="staff-photo-preview" class="h-24 w-24 rounded-full object-cover transition group-hover:opacity-80"
                                src="https://ui-avatars.com/api/?name=Staff&background=e5e7eb&color=111827"
                                alt="Staff">
                            <span class="absolute bottom-0 right-0 inline-flex h-9 w-9 items-center justify-center rounded-xl border-2 border-white bg-blue-700 text-white shadow-sm transition group-hover:bg-blue-800">
                               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="10" cy="10.8334" r="2.5" stroke="white" stroke-width="1.5"/>
<path d="M1.6665 11.1364C1.6665 8.5828 1.6665 7.30601 2.29069 6.38884C2.56091 5.99178 2.90813 5.65087 3.31254 5.38557C3.9128 4.99178 4.66428 4.85102 5.81483 4.80071C6.36388 4.80071 6.8366 4.39223 6.94428 3.86364C7.1058 3.07074 7.81488 2.5 8.63845 2.5H11.3612C12.1848 2.5 12.8939 3.07074 13.0554 3.86364C13.1631 4.39223 13.6358 4.80071 14.1848 4.80071C15.3354 4.85102 16.0869 4.99178 16.6871 5.38557C17.0915 5.65087 17.4388 5.99178 17.709 6.38884C18.3332 7.30601 18.3332 8.5828 18.3332 11.1364C18.3332 13.6899 18.3332 14.9667 17.709 15.8839C17.4388 16.2809 17.0915 16.6219 16.6871 16.8872C15.753 17.5 14.4525 17.5 11.8517 17.5H8.14799C5.54713 17.5 4.2467 17.5 3.31254 16.8872C2.90813 16.6219 2.56091 16.2809 2.29069 15.8839C2.11439 15.6248 1.98789 15.3371 1.89711 15" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8333 8.33337H15" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                            </span>
                        </button>
                        <input id="staff-photo-input" class="hidden" type="file" accept="image/png,image/jpeg,image/jpg">
                        <p class="text-xs text-gray-400">PNG,JPG,Max(2MB)</p>
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-medium">Full Name *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="Farzana Mohammadi">

                        <label class="block text-sm font-medium">Email *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="Farzana.909@gmail.com">
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-medium">Employee ID *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="EMP-2024-135">

                        <label class="block text-sm font-medium">Phone *</label>
                        <input class="w-full rounded-md border border-gray-200 px-3 py-2" value="0785342345">
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="7.50016" cy="7.50004" r="1.66667" stroke="#165DAE" stroke-width="1.5"/>
<path d="M10.8332 12.5C10.8332 13.4205 10.8332 14.1667 7.49984 14.1667C4.1665 14.1667 4.1665 13.4205 4.1665 12.5C4.1665 11.5796 5.65889 10.8334 7.49984 10.8334C9.34079 10.8334 10.8332 11.5796 10.8332 12.5Z" stroke="#165DAE" stroke-width="1.5"/>
<path d="M18.3332 10C18.3332 13.1427 18.3332 14.7141 17.3569 15.6904C16.3805 16.6667 14.8092 16.6667 11.6665 16.6667H8.33317C5.19047 16.6667 3.61913 16.6667 2.64281 15.6904C1.6665 14.7141 1.6665 13.1427 1.6665 10C1.6665 6.85734 1.6665 5.286 2.64281 4.30968C3.61913 3.33337 5.19047 3.33337 8.33317 3.33337H11.6665C14.8092 3.33337 16.3805 3.33337 17.3569 4.30968C17.7482 4.70102 17.9827 5.18796 18.1232 5.83337" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8335 10H12.5002" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8335 7.5H11.6668" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8335 12.5H13.3335" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                    2. Employment Details
                </h2>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                    <div>
                        <label class="mb-2 block text-sm font-medium">Position *</label>
                        <details class="staff-select relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-select-value">Logistic Manager</span>
                                <i class="fa-solid fa-chevron-down text-[11px] text-gray-500"></i>
                            </summary>
                            <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                <button type="button" data-staff-select-option="Logistic Manager" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Logistic Manager</button>
                                <button type="button" data-staff-select-option="HR Manager" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">HR Manager</button>
                                <button type="button" data-staff-select-option="Finance Officer" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Finance Officer</button>
                            </div>
                        </details>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Contract Type *</label>
                        <details class="staff-select relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-select-value">Full Time</span>
                                <i class="fa-solid fa-chevron-down text-[11px] text-gray-500"></i>
                            </summary>
                            <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                <button type="button" data-staff-select-option="Full Time" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Full Time</button>
                                <button type="button" data-staff-select-option="Part Time" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Part Time</button>
                                <button type="button" data-staff-select-option="Contract" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Contract</button>
                            </div>
                        </details>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Company *</label>
                        <details class="staff-select relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-select-value">Logistic</span>
                                <i class="fa-solid fa-chevron-down text-[11px] text-gray-500"></i>
                            </summary>
                            <div class="staff-select-menu absolute left-0 right-0 top-12 z-40 rounded-xl border border-gray-200 bg-white p-1.5 shadow-xl shadow-gray-200/70">
                                <button type="button" data-staff-select-option="Logistic" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Logistic</button>
                                <button type="button" data-staff-select-option="ICT" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">ICT</button>
                                <button type="button" data-staff-select-option="Both" class="flex w-full items-center rounded-lg px-3 py-2 text-left text-sm font-medium text-gray-800 hover:bg-gray-50">Both</button>
                            </div>
                        </details>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium">Hire Date *</label>
                        <details class="staff-date-picker relative">
                            <summary class="flex h-11 cursor-pointer list-none items-center justify-between rounded-xl border border-gray-200 bg-white px-3 text-sm font-medium text-gray-800 shadow-sm outline-none hover:bg-gray-50">
                                <span class="staff-date-value text-gray-500">mm/dd/yyyy</span>
                               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.667 18.3334H8.33366C5.19096 18.3334 3.61961 18.3334 2.6433 17.3571C1.66699 16.3808 1.66699 14.8094 1.66699 11.6667V10C1.66699 6.85734 1.66699 5.286 2.6433 4.30968C3.61961 3.33337 5.19096 3.33337 8.33366 3.33337H11.667C14.8097 3.33337 16.381 3.33337 17.3573 4.30968C18.3337 5.286 18.3337 6.85734 18.3337 10V11.6667C18.3337 14.8094 18.3337 16.3808 17.3573 17.3571C16.813 17.9014 16.0838 18.1422 15.0003 18.2488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.83301 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.167 3.33337V2.08337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.917 7.5H13.8545H8.95866M1.66699 7.5H4.89616" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9997 14.1667C14.9997 14.6269 14.6266 15 14.1663 15C13.7061 15 13.333 14.6269 13.333 14.1667C13.333 13.7064 13.7061 13.3333 14.1663 13.3333C14.6266 13.3333 14.9997 13.7064 14.9997 14.1667Z" fill="#1C274C"/>
<path d="M14.9997 10.8333C14.9997 11.2936 14.6266 11.6667 14.1663 11.6667C13.7061 11.6667 13.333 11.2936 13.333 10.8333C13.333 10.3731 13.7061 10 14.1663 10C14.6266 10 14.9997 10.3731 14.9997 10.8333Z" fill="#1C274C"/>
<path d="M10.8337 14.1667C10.8337 14.6269 10.4606 15 10.0003 15C9.54009 15 9.16699 14.6269 9.16699 14.1667C9.16699 13.7064 9.54009 13.3333 10.0003 13.3333C10.4606 13.3333 10.8337 13.7064 10.8337 14.1667Z" fill="#1C274C"/>
<path d="M10.8337 10.8333C10.8337 11.2936 10.4606 11.6667 10.0003 11.6667C9.54009 11.6667 9.16699 11.2936 9.16699 10.8333C9.16699 10.3731 9.54009 10 10.0003 10C10.4606 10 10.8337 10.3731 10.8337 10.8333Z" fill="#1C274C"/>
<path d="M6.66667 14.1667C6.66667 14.6269 6.29357 15 5.83333 15C5.3731 15 5 14.6269 5 14.1667C5 13.7064 5.3731 13.3333 5.83333 13.3333C6.29357 13.3333 6.66667 13.7064 6.66667 14.1667Z" fill="#1C274C"/>
<path d="M6.66667 10.8333C6.66667 11.2936 6.29357 11.6667 5.83333 11.6667C5.3731 11.6667 5 11.2936 5 10.8333C5 10.3731 5.3731 10 5.83333 10C6.29357 10 6.66667 10.3731 6.66667 10.8333Z" fill="#1C274C"/>
</svg>

                            </summary>
                            <div class="absolute right-0 top-12 z-50 w-[292px] rounded-xl border border-gray-200 bg-white p-3 text-gray-800 shadow-xl shadow-gray-200/70">
                                <div class="mb-3 flex items-center justify-between">
                                    <button type="button" class="rounded-lg px-2 py-1 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">June 2026</button>
                                    <div class="flex items-center gap-1 text-gray-500">
                                        <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Previous month">
                                            <i class="fa-solid fa-chevron-left text-[11px]"></i>
                                        </button>
                                        <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-gray-50" aria-label="Next month">
                                            <i class="fa-solid fa-chevron-right text-[11px]"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-medium text-gray-500">
                                    <span>Su</span>
                                    <span>Mo</span>
                                    <span>Tu</span>
                                    <span>We</span>
                                    <span>Th</span>
                                    <span>Fr</span>
                                    <span>Sa</span>
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
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 12.0834H11.6667" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5 15H9.58333" stroke="#165DAE" stroke-width="1.5" stroke-linecap="round"/>
<path d="M10.8335 2.08337V4.16671C10.8335 6.13089 10.8335 7.11299 11.4437 7.72318C12.0539 8.33337 13.036 8.33337 15.0002 8.33337H18.3335" stroke="#165DAE" stroke-width="1.5"/>
<path d="M2.4165 8.33329C2.4165 7.91908 2.08072 7.58329 1.6665 7.58329C1.25229 7.58329 0.916504 7.91908 0.916504 8.33329H1.6665H2.4165ZM17.5832 11.6666C17.5832 12.0808 17.919 12.4166 18.3332 12.4166C18.7474 12.4166 19.0832 12.0808 19.0832 11.6666H18.3332H17.5832ZM12.8273 3.378L12.3256 3.93547V3.93547L12.8273 3.378ZM16.1263 6.34708L15.6245 6.90455V6.90455L16.1263 6.34708ZM18.0448 8.46171L17.3597 8.76683L17.3597 8.76684L18.0448 8.46171ZM2.64281 17.357L3.17314 16.8267H3.17314L2.64281 17.357ZM17.3569 17.357L16.8265 16.8267L16.8265 16.8267L17.3569 17.357ZM1.00468 4.92654C0.964136 5.33877 1.26544 5.70581 1.67766 5.74636C2.08989 5.7869 2.45693 5.4856 2.49748 5.07338L1.75108 4.99996L1.00468 4.92654ZM18.995 15.0734C19.0355 14.6612 18.7342 14.2941 18.322 14.2536C17.9098 14.213 17.5427 14.5143 17.5022 14.9265L18.2486 15L18.995 15.0734ZM11.6665 18.3333V17.5833H8.33317V18.3333V19.0833H11.6665V18.3333ZM1.6665 11.6666H2.4165V8.33329H1.6665H0.916504V11.6666H1.6665ZM18.3332 11.3024H17.5832V11.6666H18.3332H19.0832V11.3024H18.3332ZM12.8273 3.378L12.3256 3.93547L15.6245 6.90455L16.1263 6.34708L16.628 5.78961L13.329 2.82053L12.8273 3.378ZM18.3332 11.3024H19.0832C19.0832 9.90645 19.0983 8.98365 18.73 8.15658L18.0448 8.46171L17.3597 8.76684C17.568 9.23458 17.5832 9.77396 17.5832 11.3024H18.3332ZM16.1263 6.34708L15.6245 6.90455C16.7606 7.92701 17.1514 8.29908 17.3597 8.76683L18.0448 8.46171L18.73 8.15658C18.3616 7.3295 17.6656 6.72343 16.628 5.78961L16.1263 6.34708ZM8.358 1.66663V2.41663C9.68562 2.41663 10.1555 2.4282 10.5722 2.58811L10.8409 1.88789L11.1096 1.18768C10.373 0.905047 9.57204 0.916626 8.358 0.916626V1.66663ZM12.8273 3.378L13.329 2.82053C12.431 2.01231 11.846 1.47026 11.1096 1.18768L10.8409 1.88789L10.5722 2.58811C10.989 2.74805 11.3438 3.0519 12.3256 3.93547L12.8273 3.378ZM8.33317 18.3333V17.5833C6.74062 17.5833 5.62166 17.5817 4.77553 17.4679C3.95099 17.3571 3.49872 17.1522 3.17314 16.8267L2.64281 17.357L2.11248 17.8873C2.76322 18.538 3.58478 18.8213 4.57566 18.9546C5.54497 19.0849 6.78302 19.0833 8.33317 19.0833V18.3333ZM1.6665 11.6666H0.916504C0.916504 13.2168 0.914911 14.4548 1.04523 15.4241C1.17845 16.415 1.46175 17.2366 2.11248 17.8873L2.64281 17.357L3.17314 16.8267C2.84757 16.5011 2.64271 16.0488 2.53185 15.2243C2.4181 14.3781 2.4165 13.2592 2.4165 11.6666H1.6665ZM11.6665 18.3333V19.0833C13.2167 19.0833 14.4547 19.0849 15.424 18.9546C16.4149 18.8213 17.2365 18.538 17.8872 17.8873L17.3569 17.357L16.8265 16.8267C16.5009 17.1522 16.0487 17.3571 15.2241 17.4679C14.378 17.5817 13.2591 17.5833 11.6665 17.5833V18.3333ZM8.358 1.66663V0.916626C6.79951 0.916626 5.55549 0.915047 4.58231 1.04529C3.58813 1.17835 2.7638 1.46129 2.11248 2.11261L2.64281 2.64294L3.17314 3.17327C3.49814 2.84827 3.95178 2.64306 4.78129 2.53204C5.63182 2.41821 6.75724 2.41663 8.358 2.41663V1.66663ZM1.75108 4.99996L2.49748 5.07338C2.59758 4.0557 2.81056 3.53585 3.17314 3.17327L2.64281 2.64294L2.11248 2.11261C1.38644 2.83866 1.11772 3.77737 1.00468 4.92654L1.75108 4.99996ZM18.2486 15L17.5022 14.9265C17.4021 15.9442 17.1891 16.4641 16.8265 16.8267L17.3569 17.357L17.8872 17.8873C18.6132 17.1613 18.882 16.2226 18.995 15.0734L18.2486 15Z" fill="#165DAE"/>
</svg>

                    3. Company Assignment
                </h2>

                <div class="grid gap-5 lg:grid-cols-[180px_1fr]">
                    <div class="space-y-3">
                        <p class="font-medium">Assigned To *</p>
                        <label class="block"><input type="radio" name="assigned"> Logistic</label>
                        <label class="block"><input type="radio" name="assigned"> ICT</label>
                        <label class="block"><input type="radio" name="assigned" checked> Both (with % split)</label>
                    </div>

                    <div class="overflow-hidden rounded-lg border border-gray-200">
                        <table class="w-full table-fixed text-sm">
                            <colgroup>
                                <col class="w-[34%]">
                                <col class="w-[44%]">
                                <col class="w-[22%]">
                            </colgroup>
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left">Company</th>
                                    <th class="px-4 py-3 text-left">Allocation Percentage</th>
                                    <th class="px-4 py-3 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-3">AQSA LOGISTIC</td>
                                    <td class="px-4 py-3">70 %</td>
                                    <td class="px-4 py-3 text-right"><button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-md text-[#1C274C] hover:bg-gray-50" aria-label="Delete allocation"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0837 5H2.91699" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91699 9.16675L8.33366 13.3334" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0837 9.16675L11.667 13.3334" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41699 5C5.46356 5 5.48684 5 5.50795 4.99947C6.19415 4.98208 6.79951 4.54576 7.03301 3.90027C7.04019 3.88041 7.04755 3.85832 7.06228 3.81415L7.14318 3.57143C7.21225 3.36423 7.24678 3.26063 7.29259 3.17267C7.47533 2.82173 7.81345 2.57803 8.20417 2.51564C8.3021 2.5 8.4113 2.5 8.62971 2.5H11.3709C11.5893 2.5 11.6986 2.5 11.7965 2.51564C12.1872 2.57803 12.5253 2.82173 12.7081 3.17267C12.7539 3.26063 12.7884 3.36423 12.8575 3.57143L12.9384 3.81415C12.9531 3.85826 12.9605 3.88042 12.9676 3.90027C13.2011 4.54576 13.8065 4.98208 14.4927 4.99947C14.5138 5 14.5371 5 14.5837 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8325C15.1638 15.0449 15.09 16.1512 14.3692 16.8255C13.6483 17.4999 12.5397 17.4999 10.3223 17.4999H9.67787C7.46054 17.4999 6.35187 17.4999 5.63103 16.8255C4.91019 16.1512 4.83644 15.0449 4.68895 12.8325L4.30566 7.08325M15.6946 7.08325L15.5279 9.58325" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg></button>
</td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-3">AQSA ICT</td>
                                    <td class="px-4 py-3">30 %</td>
                                    <td class="px-4 py-3 text-right"><button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-md text-[#1C274C] hover:bg-gray-50" aria-label="Delete allocation"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0837 5H2.91699" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91699 9.16675L8.33366 13.3334" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0837 9.16675L11.667 13.3334" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41699 5C5.46356 5 5.48684 5 5.50795 4.99947C6.19415 4.98208 6.79951 4.54576 7.03301 3.90027C7.04019 3.88041 7.04755 3.85832 7.06228 3.81415L7.14318 3.57143C7.21225 3.36423 7.24678 3.26063 7.29259 3.17267C7.47533 2.82173 7.81345 2.57803 8.20417 2.51564C8.3021 2.5 8.4113 2.5 8.62971 2.5H11.3709C11.5893 2.5 11.6986 2.5 11.7965 2.51564C12.1872 2.57803 12.5253 2.82173 12.7081 3.17267C12.7539 3.26063 12.7884 3.36423 12.8575 3.57143L12.9384 3.81415C12.9531 3.85826 12.9605 3.88042 12.9676 3.90027C13.2011 4.54576 13.8065 4.98208 14.4927 4.99947C14.5138 5 14.5371 5 14.5837 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8325C15.1638 15.0449 15.09 16.1512 14.3692 16.8255C13.6483 17.4999 12.5397 17.4999 10.3223 17.4999H9.67787C7.46054 17.4999 6.35187 17.4999 5.63103 16.8255C4.91019 16.1512 4.83644 15.0449 4.68895 12.8325L4.30566 7.08325M15.6946 7.08325L15.5279 9.58325" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg></button>
</td>
                                </tr>
                                <tr class="bg-green-100 text-green-700">
                                    <td class="px-4 py-3 font-medium">Total Allocation</td>
                                    <td colspan="2" class="px-4 py-3 text-right">100 %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="mb-5 flex items-center gap-2 font-semibold">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.8332 4.16675C13.1902 4.16675 14.3687 4.16675 15.1009 4.89898C15.8332 5.63121 15.8332 6.80973 15.8332 9.16675C15.8332 11.5238 15.8332 12.7023 15.1009 13.4345C14.3687 14.1667 13.1902 14.1667 10.8332 14.1667H6.6665C4.30948 14.1667 3.13097 14.1667 2.39874 13.4345C1.6665 12.7023 1.6665 11.5238 1.6665 9.16675C1.6665 6.80973 1.6665 5.63121 2.39874 4.89898C3.13097 4.16675 4.30948 4.16675 6.6665 4.16675H7.49984" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M13.3337 16.6668H9.16704C6.81002 16.6668 5.63151 16.6668 4.89927 15.9346C4.49103 15.5263 4.31039 14.9793 4.23047 14.1667M17.6015 15.9346C18.3337 15.2023 18.3337 14.0238 18.3337 11.6668C18.3337 9.30977 18.3337 8.13126 17.6015 7.39902C17.1932 6.99079 16.6463 6.81015 15.8337 6.73022" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M10.8332 9.16659C10.8332 10.3172 9.90043 11.2499 8.74984 11.2499C7.59924 11.2499 6.6665 10.3172 6.6665 9.16659C6.6665 8.01599 7.59924 7.08325 8.74984 7.08325C9.90043 7.08325 10.8332 8.01599 10.8332 9.16659Z" stroke="#1C274C" stroke-width="1.5"/>
<path d="M13.3335 10.8333L13.3335 7.49992" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M4.1665 10.8333L4.1665 7.49992" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                    4. Payment Information
                </h2>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                    @foreach (['Base Salary', 'Allowances', 'Deductions', 'Net Salary'] as $paymentField)
                        <label class="block">
                            <span class="mb-2 block text-sm font-medium">{{ $paymentField }}</span>
                            <div class="flex h-11 rounded-md border border-gray-200 bg-white">
                                <input class="min-w-0 flex-1 rounded-l-md border-0 px-3 text-sm outline-none placeholder:text-gray-400 focus:ring-0" placeholder="200">
                                <details class="staff-select relative shrink-0">
                                    <summary class="flex h-full min-w-[76px] cursor-pointer list-none items-center justify-between gap-2 border-l border-gray-200 px-3 text-xs font-medium text-gray-800 outline-none hover:bg-gray-50">
                                        <span class="staff-select-value">USD</span>
                                        <i class="fa-solid fa-chevron-down text-[10px] text-gray-500"></i>
                                    </summary>
                                    <div class="staff-select-menu absolute right-0 top-12 z-40 w-24 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                                        <button type="button" data-staff-select-option="USD" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">USD</button>
                                        <button type="button" data-staff-select-option="AFN" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">AFN</button>
                                        <button type="button" data-staff-select-option="EUR" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">EUR</button>
                                    </div>
                                </details>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button wire:click="cancelForm" class="rounded-md border border-blue-700 px-6 py-2 text-blue-700">
                    Cancel
                </button>
                <button class="rounded-md bg-blue-700 px-6 py-2 text-white">
                    Save Staff
                </button>
            </div>
        </div>
    @endif

   <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="mb-5">
                <h2 class="text-lg font-semibold text-gray-950">Staff Profiles</h2>
                <p class="mt-1 text-sm text-gray-500">HR management for all staff</p>
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label class="relative block w-full sm:w-[280px]">
                        <span class=" absolute left-3 top-1/2 -translate-y-1/2 text-gray-300">
                         <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.6665 16.6666L18.3332 18.3333" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.62484 2.72573C6.78927 2.05214 8.1412 1.66663 9.58317 1.66663C13.9554 1.66663 17.4998 5.21104 17.4998 9.58329C17.4998 13.9555 13.9554 17.5 9.58317 17.5C5.21092 17.5 1.6665 13.9555 1.6665 9.58329C1.6665 8.14132 2.05202 6.7894 2.72561 5.62496" stroke="#B9B9B9" stroke-width="1.5" stroke-linecap="round"/>
</svg></span>


                        <input
                            class="h-10 w-full rounded-md border border-gray-200 pl-9 pr-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500"
                            placeholder="Find Staff..."
                        >
                    </label>

                    <button class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium text-gray-950 shadow-sm hover:bg-gray-50">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.94149 9.97534C6.74786 9.78171 6.74786 9.4678 6.94149 9.27417C7.13515 9.08088 7.44914 9.08065 7.64266 9.27417L9.42098 11.0525L9.42098 1.74976C9.42112 1.47603 9.64332 1.25464 9.91708 1.25464C10.1906 1.25487 10.4121 1.47618 10.4122 1.74976L10.4122 11.0525L12.1915 9.27417C12.3852 9.08088 12.6991 9.08065 12.8927 9.27417C13.0861 9.4677 13.0859 9.78171 12.8927 9.97534L10.2677 12.6003C10.0741 12.794 9.76013 12.7939 9.56649 12.6003L6.94149 9.97534ZM1.10751 4.72534C0.914116 4.53169 0.913953 4.21772 1.10751 4.02417L3.73251 1.39917C3.92606 1.20563 4.24003 1.20578 4.43368 1.39917L7.05868 4.02417C7.25231 4.2178 7.2523 4.53171 7.05868 4.72534C6.86504 4.91898 6.55114 4.91898 6.35751 4.72534L4.57919 2.94702L4.57919 12.2498C4.57919 12.5236 4.35693 12.7458 4.08309 12.7458C3.80936 12.7457 3.58798 12.5235 3.58798 12.2498L3.58798 2.94702L1.80868 4.72534C1.61504 4.91898 1.30114 4.91898 1.10751 4.72534Z" fill="#71717A"/>
</svg>

                        Filter
                    </button>
                </div>

                <button wire:click="toggleForm"
                    class="inline-flex h-10 items-center justify-center gap-2 rounded-md px-4 text-sm font-medium text-white shadow-sm {{ $showForm ? 'bg-[#2059D4]' : 'bg-[#2059D4] hover:bg-blue-800' }}">
                    <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }}"></i>
                    {{ $showForm ? 'Close' : 'Add Staff' }}
                </button>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <colgroup>
                    <col class="w-[3%]">
                    <col class="w-[19%]">
                    <col class="w-[13%]">
                    <col class="w-[17%]">
                    <col class="w-[9%]">
                    <col class="w-[10%]">
                    <col class="w-[9%]">
                    <col class="w-[13%]">
                    <col class="w-[7%]">
                </colgroup>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Full Name</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Position</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Company</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Status</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Base Salary</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Net Salary</th>
                        <th class="whitespace-nowrap px-2 py-3 font-semibold text-gray-950">Date</th>
                        <th class="whitespace-nowrap px-2 py-3 text-right font-semibold text-gray-950">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $item)
                        <tr class="border-t border-gray-100 align-middle">
                            <td class="px-2 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-2 py-4">
                                <div class="flex min-w-0 items-center gap-3">
                                    <img class="h-9 w-9 shrink-0 rounded-full object-cover" src="https://ui-avatars.com/api/?name={{ urlencode($item['name']) }}">
                                    <span class="min-w-0 break-words text-sm font-medium leading-5 text-gray-900">{{ $item['name'] }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-4 text-sm font-medium leading-5 text-gray-900">{{ $item['position'] }}</td>
                            <td class="px-2 py-4">
                                <div class="flex max-w-full flex-wrap gap-1.5">
                                    @foreach ($item['company'] as $company)
                                        <span class="inline-flex max-w-full items-center rounded-md border border-blue-500 bg-blue-50 px-2 py-0.5 text-[11px] font-medium leading-5 text-blue-700">
                                            <span class="truncate">{{ $company }}</span>
                                        </span>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-2 py-4">
                                <span class="inline-flex items-center gap-1.5 whitespace-nowrap rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] font-medium leading-5 text-green-700">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                    {{ $item['status'] }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-700">{{ $item['base_salary'] }}</td>
                            <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-700">{{ $item['net_salary'] }}</td>
                            <td class="px-2 py-4">
                                <span class="inline-flex whitespace-nowrap rounded-md border border-gray-200 bg-white px-2 py-0.5 text-[11px] leading-5 text-gray-700">
                                    {{ $item['date'] }}
                                </span>
                            </td>
                            <td class="relative px-2 py-4 text-right">
    <button type="button" class="staff-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100">
        <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>

    <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3337 10C18.3337 12.357 18.3337 13.5355 17.6014 14.2678C17.067 14.8022 16.2949 14.9466 15.0003 14.9856M5.00033 14.9856C3.70579 14.9466 2.93364 14.8022 2.39923 14.2678C1.66699 13.5355 1.66699 12.357 1.66699 10C1.66699 7.64298 1.66699 6.46447 2.39923 5.73223C3.13146 5 4.30997 5 6.66699 5H13.3337C15.6907 5 16.8692 5 17.6014 5.73223C17.8513 5.98206 18.0158 6.28385 18.1243 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.33337H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.833 12.5L4.16634 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99996C14.9466 3.70542 14.8022 2.93328 14.2678 2.39886C13.5355 1.66663 12.357 1.66663 10 1.66663C7.64298 1.66663 6.46447 1.66663 5.73223 2.39886C5.19781 2.93328 5.05344 3.70542 5.01444 4.99996M15 12.5V13.3333C15 15.6903 15 16.8688 14.2678 17.6011C13.7334 18.1355 12.9612 18.2799 11.6667 18.3189M5 12.5V13.3333C5 15.6903 5 16.8688 5.73223 17.6011C6.26665 18.1355 7.03879 18.2799 8.33333 18.3189" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1663" cy="8.33333" r="0.833333" fill="#1C274C"/>
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
<path d="M17.0837 5H2.91699" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91699 9.16663L8.33366 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0837 9.16663L11.667 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41699 5C5.46356 5 5.48684 5 5.50795 4.99947C6.19415 4.98208 6.79951 4.54576 7.03301 3.90027C7.04019 3.88041 7.04755 3.85832 7.06228 3.81415L7.14318 3.57143C7.21225 3.36423 7.24678 3.26063 7.29259 3.17267C7.47533 2.82173 7.81345 2.57803 8.20417 2.51564C8.3021 2.5 8.4113 2.5 8.62971 2.5H11.3709C11.5893 2.5 11.6986 2.5 11.7965 2.51564C12.1872 2.57803 12.5253 2.82173 12.7081 3.17267C12.7539 3.26063 12.7884 3.36423 12.8575 3.57143L12.9384 3.81415C12.9531 3.85826 12.9605 3.88042 12.9676 3.90027C13.2011 4.54576 13.8065 4.98208 14.4927 4.99947C14.5138 5 14.5371 5 14.5837 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8326C15.1638 15.0451 15.09 16.1513 14.3692 16.8257C13.6483 17.5 12.5397 17.5 10.3223 17.5H9.67787C7.46054 17.5 6.35187 17.5 5.63103 16.8257C4.91019 16.1513 4.83644 15.0451 4.68895 12.8326L4.30566 7.08337M15.6946 7.08337L15.5279 9.58337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
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
            @foreach ($staff as $item)
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($item['name']) }}">
                            <div>
                                <p class="font-medium">{{ $item['name'] }}</p>
                                <p class="text-sm text-gray-500">{{ $item['position'] }}</p>
                            </div>
                        </div>
                        <div class="flex shrink-0 items-center gap-2">
    <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3337 10C18.3337 12.357 18.3337 13.5355 17.6014 14.2678C17.067 14.8022 16.2949 14.9466 15.0003 14.9856M5.00033 14.9856C3.70579 14.9466 2.93364 14.8022 2.39923 14.2678C1.66699 13.5355 1.66699 12.357 1.66699 10C1.66699 7.64298 1.66699 6.46447 2.39923 5.73223C3.13146 5 4.30997 5 6.66699 5H13.3337C15.6907 5 16.8692 5 17.6014 5.73223C17.8513 5.98206 18.0158 6.28385 18.1243 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.33337H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.833 12.5L4.16634 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99996C14.9466 3.70542 14.8022 2.93328 14.2678 2.39886C13.5355 1.66663 12.357 1.66663 10 1.66663C7.64298 1.66663 6.46447 1.66663 5.73223 2.39886C5.19781 2.93328 5.05344 3.70542 5.01444 4.99996M15 12.5V13.3333C15 15.6903 15 16.8688 14.2678 17.6011C13.7334 18.1355 12.9612 18.2799 11.6667 18.3189M5 12.5V13.3333C5 15.6903 5 16.8688 5.73223 17.6011C6.26665 18.1355 7.03879 18.2799 8.33333 18.3189" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1663" cy="8.33333" r="0.833333" fill="#1C274C"/>
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
<path d="M17.0837 5H2.91699" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91699 9.16663L8.33366 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0837 9.16663L11.667 13.3333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41699 5C5.46356 5 5.48684 5 5.50795 4.99947C6.19415 4.98208 6.79951 4.54576 7.03301 3.90027C7.04019 3.88041 7.04755 3.85832 7.06228 3.81415L7.14318 3.57143C7.21225 3.36423 7.24678 3.26063 7.29259 3.17267C7.47533 2.82173 7.81345 2.57803 8.20417 2.51564C8.3021 2.5 8.4113 2.5 8.62971 2.5H11.3709C11.5893 2.5 11.6986 2.5 11.7965 2.51564C12.1872 2.57803 12.5253 2.82173 12.7081 3.17267C12.7539 3.26063 12.7884 3.36423 12.8575 3.57143L12.9384 3.81415C12.9531 3.85826 12.9605 3.88042 12.9676 3.90027C13.2011 4.54576 13.8065 4.98208 14.4927 4.99947C14.5138 5 14.5371 5 14.5837 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8326C15.1638 15.0451 15.09 16.1513 14.3692 16.8257C13.6483 17.5 12.5397 17.5 10.3223 17.5H9.67787C7.46054 17.5 6.35187 17.5 5.63103 16.8257C4.91019 16.1513 4.83644 15.0451 4.68895 12.8326L4.30566 7.08337M15.6946 7.08337L15.5279 9.58337" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
    </button>
</div>
                    </div>

                    <div class="mb-3 flex flex-wrap gap-2">
                        @foreach ($item['company'] as $company)
                            <span class="rounded-md border border-blue-600 px-2 py-1 text-xs text-blue-600">{{ $company }}</span>
                        @endforeach
                        <span class="rounded-md border border-green-500 px-2 py-1 text-xs text-green-600">● {{ $item['status'] }}</span>
                    </div>

                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div>
                            <p class="text-gray-400">Base Salary</p>
                            <p>{{ $item['base_salary'] }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Net Salary</p>
                            <p>{{ $item['net_salary'] }}</p>
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
                    'id' => 'staff-rows-per-page',
                    'options' => ['10', '25', '50', '100'],
                ])
            </div>
        </div>
    </div>
<script>
document.addEventListener("click", function (event) {
    const dateOption = event.target.closest("[data-staff-date]");
    const dateClear = event.target.closest("[data-staff-date-clear]");

    document.querySelectorAll(".staff-date-picker[open]").forEach((picker) => {
        if (!picker.contains(event.target)) {
            picker.removeAttribute("open");
        }
    });

    if (dateOption || dateClear) {
        event.stopPropagation();
        const picker = event.target.closest(".staff-date-picker");
        const value = picker?.querySelector(".staff-date-value");
        const selectedDate = dateOption?.dataset.staffDate;

        if (value) {
            value.textContent = dateClear ? "mm/dd/yyyy" : selectedDate || value.textContent;
            value.classList.toggle("text-gray-500", Boolean(dateClear));
            value.classList.toggle("text-gray-800", !dateClear);
        }

        if (selectedDate || dateClear) {
            picker?.removeAttribute("open");
        }

        return;
    }
});

document.addEventListener("change", function (event) {
    if (event.target.id !== "staff-photo-input") {
        return;
    }

    const file = event.target.files?.[0];
    const preview = document.getElementById("staff-photo-preview");

    if (!file || !preview) {
        return;
    }

    preview.src = URL.createObjectURL(file);
});
</script>
</div>
