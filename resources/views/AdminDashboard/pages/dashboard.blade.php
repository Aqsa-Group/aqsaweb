@extends('AdminDashboard.layouts.app')

@section('title', 'AQSA SYSTEM | Dashboard')
@section('breadcrumb_current', 'Default')

@section('content')
    @php
        $todayDate = now()->format('D, n/j/Y');
        $contractRows = [
            ['Logistic Support Services Q1', 'Active', 'UNHCR Afghanistan', '1200$'],
            ['Food Distribution Supply Chain', 'Active', 'WFP Afghanistan', '200$'],
            ['ICT Infrastructure Setup', 'Under Review', 'UNACF Afghanistan', '9000$'],
            ['Network Maintenance support', 'Approved', 'WHO Afghanistan', '88,000'],
            ['Vehicle Lease Agreement', 'Active', 'IOM Afghanistan', '4,500$'],
            ['Fuel Delivery Contract', 'Under Review', 'UNDP Afghanistan', '7,200$'],
            ['Internet Backup Line', 'Approved', 'UNICEF Afghanistan', '1,900$'],
            ['Warehouse Rent Contract', 'Active', 'IRC Afghanistan', '3,400$'],
            ['Server Room Maintenance', 'Active', 'WHO Afghanistan', '2,100$'],
            ['Fleet Tracking Setup', 'Under Review', 'WFP Afghanistan', '5,600$'],
            ['Office Equipment Support', 'Approved', 'UNHCR Afghanistan', '1,250$'],
            ['Emergency Logistics Support', 'Active', 'MSF Afghanistan', '8,300$'],
            ['Network Upgrade Phase 2', 'Under Review', 'ACF Afghanistan', '6,700$'],
            ['ICT Helpdesk Retainer', 'Active', 'UNDP Afghanistan', '2,800$'],
            ['Procurement Advisory', 'Approved', 'GIZ Afghanistan', '3,150$'],
            ['Transport Support Plan', 'Active', 'WFP Afghanistan', '4,900$'],
            ['Data Center Audit', 'Under Review', 'WHO Afghanistan', '9,100$'],
            ['Private Sector CRM Setup', 'Approved', 'Ariana Group', '5,450$'],
            ['Government Liaison Support', 'Active', 'MoPH Afghanistan', '6,250$'],
            ['Audit Documentation Package', 'Approved', 'UNICEF Afghanistan', '2,650$'],
        ];
    @endphp

    <div class="mb-7 flex gap-4 sm:flex-row sm:items-center justify-between">
        <h1 class="text-xl font-bold uppercase tracking-wide text-gray-950">Overview</h1>

        <button class="inline-flex w-max items-center gap-2 rounded-lg border border-gray-200 bg-[#DAD9D9] px-3 py-2 text-sm shadow-sm">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.6665 18.3334H8.33317C5.19047 18.3334 3.61913 18.3334 2.64281 17.3571C1.6665 16.3808 1.6665 14.8094 1.6665 11.6667V10C1.6665 6.85734 1.6665 5.286 2.64281 4.30968C3.61913 3.33337 5.19047 3.33337 8.33317 3.33337H11.6665C14.8092 3.33337 16.3805 3.33337 17.3569 4.30968C18.3332 5.286 18.3332 6.85734 18.3332 10V11.6667C18.3332 14.8094 18.3332 16.3808 17.3569 17.3571C16.8125 17.9014 16.0833 18.1422 14.9998 18.2488" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.8335 3.33337V2.08337" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1665 3.33337V2.08337" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.9165 7.5H13.854H8.95817M1.6665 7.5H4.89567" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
</svg>

            {{ $todayDate }}
        </button>
    </div>

    <section class="mb-12 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
        <article class="metric-card dashboard-stat-card bg-blue-600 text-white p-6 cursor-pointer" data-chart="revenue">
            <div class="mb-5 flex items-start justify-between">
                <p class="text-sm">Total Revenue</p>
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 1.66663V18.3333M14.1667 4.16663H7.91667C7.14312 4.16663 6.40125 4.47392 5.85427 5.0209C5.30729 5.56788 5 6.30974 5 7.08329C5 7.85684 5.30729 8.59871 5.85427 9.14569C6.40125 9.69267 7.14312 9.99996 7.91667 9.99996H12.0833C12.8569 9.99996 13.5987 10.3073 14.1457 10.8542C14.6927 11.4012 15 12.1431 15 12.9166C15 13.6902 14.6927 14.432 14.1457 14.979C13.5987 15.526 12.8569 15.8333 12.0833 15.8333H5" stroke="#A9D1FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            </div>
            <p class="text-2xl ">$45,231.89</p>
            <p class="mt-1 text-xs opacity-70">+20.1% from last month</p>
        </article>

        <article class="metric-card dashboard-stat-card bg-blue-200 text-gray-950 p-6 cursor-pointer" data-chart="contacts">
            <div class="mb-5 flex items-start justify-between">
                <p class="text-sm">Active Contacts</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.3332 10H14.9998L12.4998 17.5L7.49984 2.5L4.99984 10H1.6665" stroke="#2265C3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            </div>
            <p class="text-2xl ">+573</p>
            <p class="mt-1 text-xs opacity-70">+201 since last hour</p>
        </article>

        <article class="metric-card dashboard-stat-card bg-blue-200 text-gray-950 p-6 cursor-pointer" data-chart="expenses">
            <div class="mb-5 flex items-start justify-between">
                <p class="text-sm">Total Expenses</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.3335 5.00004C2.87326 5.00004 2.50016 5.37314 2.50016 5.83337V7.50004H17.5002V5.83337C17.5002 5.37314 17.1271 5.00004 16.6668 5.00004H3.3335ZM19.1668 5.83337C19.1668 4.45266 18.0475 3.33337 16.6668 3.33337H3.3335C1.95278 3.33337 0.833496 4.45266 0.833496 5.83337V14.1667C0.833496 15.5474 1.95278 16.6667 3.3335 16.6667H16.6668C18.0475 16.6667 19.1668 15.5474 19.1668 14.1667V5.83337ZM17.5002 9.16671H2.50016V14.1667C2.50016 14.6269 2.87326 15 3.3335 15H16.6668C17.1271 15 17.5002 14.6269 17.5002 14.1667V9.16671Z" fill="#2265C3"/>
</svg>

            </div>
            <p class="text-2xl ">$45,231.89</p>
            <p class="mt-1 text-xs opacity-70">+19% from last month</p>
        </article>

        <article class="metric-card dashboard-stat-card bg-blue-200 text-gray-950 p-6 cursor-pointer" data-chart="tickets">
            <div class="mb-5 flex items-start justify-between">
                <p class="text-sm">Open Tickets</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1098_5132)">
<path d="M10 5.83337V10.8334" stroke="#2265C3" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="9.99984" cy="13.3333" r="0.833333" fill="#2265C3"/>
<path d="M5.83317 2.78148C7.05889 2.07244 8.48197 1.66663 9.99984 1.66663C14.6022 1.66663 18.3332 5.39759 18.3332 9.99996C18.3332 14.6023 14.6022 18.3333 9.99984 18.3333C5.39746 18.3333 1.6665 14.6023 1.6665 9.99996C1.6665 8.4821 2.07231 7.05901 2.78136 5.83329" stroke="#2265C3" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1098_5132">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

            </div>
            <p class="text-2xl ">12</p>
            <p class="mt-1 text-xs opacity-70">+19% from last month</p>
        </article>
    </section>

    <section class="mb-12 grid items-stretch gap-7 xl:grid-cols-[1.55fr_1fr]">
        <article class="erp-card flex h-full flex-col p-6">
            <h2 id="mainChartTitle" class="mb-5 font-semibold">Revenue Logistic VS ICT (6 Month)</h2>

           <div id="mainChartBars" class="bar-grid relative h-64 overflow-x-auto overflow-y-hidden px-3 pb-9 pt-3 sm:px-6"></div>

            <div class="mt-4 flex flex-wrap justify-center gap-3 text-sm text-gray-600">
                <button type="button" class="chart-series-toggle inline-flex h-9 items-center gap-2 rounded-lg border border-gray-200 bg-white px-3 font-medium shadow-sm hover:bg-gray-50" data-series="first" aria-pressed="true">
                    <span class="chart-series-check inline-flex h-4 w-4 items-center justify-center rounded bg-blue-600 text-[10px] text-white">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="h-3 w-3 rounded-sm bg-blue-600"></span>
                    <span id="legendOneText">ICT</span>
                </button>
                <button type="button" class="chart-series-toggle inline-flex h-9 items-center gap-2 rounded-lg border border-gray-200 bg-white px-3 font-medium shadow-sm hover:bg-gray-50" data-series="second" aria-pressed="true">
                    <span class="chart-series-check inline-flex h-4 w-4 items-center justify-center rounded bg-blue-600 text-[10px] text-white">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="h-3 w-3 rounded-sm bg-blue-200"></span>
                    <span id="legendTwoText">Logistic</span>
                </button>
            </div>
        </article>

        <article class="erp-card flex h-full flex-col p-6">
            <h2 class="mb-5 font-semibold">Contract Status</h2>

            <div class="grid flex-1 items-center justify-center gap-8 md:grid-cols-[180px_minmax(0,220px)]">
                <div class="relative mx-auto h-36 w-36 rounded-full"
                    style="background: conic-gradient(#64a166 0 52%, #2169b3 52% 75%, #d99569 75% 89%, #ef2626 89% 100%);">
                    <span class="absolute inset-8 rounded-full bg-[#f7f7f7]"></span>
                </div>

                <div class="w-full space-y-5 text-sm">
                    <p class="flex items-center justify-between gap-5"><span class="text-green-700">Official Rent</span><b>52.1%</b></p>
                    <p class="flex items-center justify-between gap-5"><span class="text-red-600">Fuel</span><b>22.8%</b></p>
                    <p class="flex items-center justify-between gap-5"><span class="text-blue-700">Internet</span><b>13.9%</b></p>
                    <p class="flex items-center justify-between gap-5"><span class="text-orange-400">Urgent</span><b>11.2%</b></p>
                </div>
            </div>
        </article>
    </section>

    <section>
        <div class="mb-4 flex items-center justify-between">
    <div class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-[#F5F5F5] px-3 py-2 shadow-sm">
        <h2 class="text-md font-medium text-gray-950">Recent Contracts</h2>
        <span class="rounded-md border border-gray-200 bg-white px-3 py-1 text-sm shadow-sm">Today</span>
    </div>

    <a href="{{ route('admin.module', ['clients', 'clients']) }}" class="text-sm text-gray-600">More</a>
</div>

        <div class="overflow-visible rounded-lg border border-gray-200 bg-white">
            <div id="contractsCardList" class="space-y-3 p-3 md:hidden">
                @foreach ($contractRows as $index => $row)
                    @php
                        $statusClass = match ($row[1]) {
                            'Active' => 'bg-green-50 text-green-600 ring-green-200',
                            'Approved' => 'bg-blue-50 text-blue-600 ring-blue-200',
                            'Under Review' => 'bg-orange-50 text-orange-600 ring-orange-200',
                            default => 'bg-gray-50 text-gray-600 ring-gray-200',
                        };
                    @endphp
                    <article class="contract-record rounded-lg border border-gray-200 bg-white p-4 shadow-sm" data-index="{{ $index }}">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <label class="flex min-w-0 items-start gap-3">
                                <input type="checkbox" class="mt-1 rounded border-gray-300">
                                <span class="font-medium text-gray-950">{{ $row[0] }}</span>
                            </label>
                            <div class="flex shrink-0 items-center gap-2">
    <button type="button" class="rounded-md border border-gray-200 p-2 text-blue-700">
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
    <button type="button" class="rounded-md border border-gray-200 p-2 text-gray-700">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33313)">
<path d="M11.967 3.39884L12.7394 2.62644C14.0192 1.34669 16.0941 1.34669 17.3738 2.62644C18.6536 3.90619 18.6536 5.98109 17.3738 7.26084L16.6014 8.03324M11.967 3.39884C11.967 3.39884 12.0636 5.04019 13.5118 6.48844C14.9601 7.93669 16.6014 8.03324 16.6014 8.03324M11.967 3.39884L10.0003 5.36556M7.08366 8.28223L4.86601 10.4999C4.38504 10.9808 4.14456 11.2213 3.93774 11.4865C3.69377 11.7993 3.4846 12.1377 3.31394 12.4958C3.16927 12.7994 3.06172 13.122 2.84663 13.7673L1.93517 16.5017L1.71237 17.1701C1.60652 17.4876 1.68916 17.8377 1.92585 18.0744C2.16254 18.3111 2.51264 18.3938 2.83019 18.2879L3.49859 18.0651L6.23297 17.1537C6.87826 16.9386 7.20091 16.831 7.50447 16.6863C7.86257 16.5157 8.20101 16.3065 8.5138 16.0625C8.77896 15.8557 9.01944 15.6152 9.50041 15.1343L9.63472 15L12.2176 12.4171L16.6014 8.03324M3.49859 18.0651L1.93517 16.5017" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1202_33313">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

    </button>
    <button type="button" class="rounded-md border border-gray-200 p-2 text-red-600">
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
                        <div class="grid gap-2 text-sm text-gray-600">
                            <p class="flex items-center justify-between gap-4">
                                <span>Status</span>
                                <span class="rounded-md px-2 py-1 text-xs ring-1 {{ $statusClass }}">{{ $row[1] }}</span>
                            </p>
                            <p class="flex items-center justify-between gap-4">
                                <span>Organization</span>
                                <b class="text-right font-medium text-gray-950">{{ $row[2] }}</b>
                            </p>
                            <p class="flex items-center justify-between gap-4">
                                <span>Amount</span>
                                <b class="font-medium text-gray-950">{{ $row[3] }}</b>
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>

            <table class="hidden w-full table-fixed text-left text-xs md:table">
                <colgroup>
                    <col class="w-[4%]">
                    <col class="w-[34%]">
                    <col class="w-[15%]">
                    <col class="w-[25%]">
                    <col class="w-[14%]">
                    <col class="w-[8%]">
                </colgroup>
                <thead class="bg-gray-50 text-gray-950">
                    <tr>
                        <th class="px-3 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-gray-300">
                        </th>
                        <th class="whitespace-nowrap px-3 py-3 font-semibold">Contract</th>
                        <th class="whitespace-nowrap px-3 py-3 font-semibold">Status</th>
                        <th class="whitespace-nowrap px-3 py-3 font-semibold">Organization</th>
                        <th class="whitespace-nowrap px-3 py-3 font-semibold">Amount</th>
                        <th class="whitespace-nowrap px-3 py-3 text-right font-semibold">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contractRows as $index => $row)
                        @php
                            $statusClass = match ($row[1]) {
                                'Active' => 'bg-green-50 text-green-600 ring-green-200',
                                'Approved' => 'bg-blue-50 text-blue-600 ring-blue-200',
                                'Under Review' => 'bg-orange-50 text-orange-500 ring-orange-200',
                                default => 'bg-gray-50 text-gray-600 ring-gray-200',
                            };
                        @endphp
                        <tr class="contract-record border-t border-gray-100 align-middle" data-index="{{ $index }}">
                            <td class="px-3 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-3 py-4">
                                <span class="block min-w-0 break-words text-sm font-medium leading-5 text-gray-950">{{ $row[0] }}</span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="inline-flex max-w-full items-center gap-1.5 rounded-md px-2 py-0.5 text-[11px] font-medium leading-5 ring-1 {{ $statusClass }}">
                                    <span class="h-1.5 w-1.5 shrink-0 rounded-full {{ $row[1] === 'Active' ? 'bg-green-500' : ($row[1] === 'Approved' ? 'bg-blue-500' : 'bg-orange-500') }}"></span>
                                    <span class="truncate">{{ $row[1] }}</span>
                                </span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="block min-w-0 truncate text-sm text-gray-700">{{ $row[2] }}</span>
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm font-medium text-gray-700">{{ $row[3] }}</td>
                            <td class="relative px-3 py-4 text-right">
    <button type="button" class="contract-action-toggle rounded-md p-2 text-gray-700 hover:bg-gray-100">
        <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>

    <div class="contract-action-menu absolute right-3 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
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
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33313)">
<path d="M11.967 3.39884L12.7394 2.62644C14.0192 1.34669 16.0941 1.34669 17.3738 2.62644C18.6536 3.90619 18.6536 5.98109 17.3738 7.26084L16.6014 8.03324M11.967 3.39884C11.967 3.39884 12.0636 5.04019 13.5118 6.48844C14.9601 7.93669 16.6014 8.03324 16.6014 8.03324M11.967 3.39884L10.0003 5.36556M7.08366 8.28223L4.86601 10.4999C4.38504 10.9808 4.14456 11.2213 3.93774 11.4865C3.69377 11.7993 3.4846 12.1377 3.31394 12.4958C3.16927 12.7994 3.06172 13.122 2.84663 13.7673L1.93517 16.5017L1.71237 17.1701C1.60652 17.4876 1.68916 17.8377 1.92585 18.0744C2.16254 18.3111 2.51264 18.3938 2.83019 18.2879L3.49859 18.0651L6.23297 17.1537C6.87826 16.9386 7.20091 16.831 7.50447 16.6863C7.86257 16.5157 8.20101 16.3065 8.5138 16.0625C8.77896 15.8557 9.01944 15.6152 9.50041 15.1343L9.63472 15L12.2176 12.4171L16.6014 8.03324M3.49859 18.0651L1.93517 16.5017" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1202_33313">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
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

            <div class="flex flex-col gap-3 border-t border-gray-200 px-4 py-4 text-sm text-gray-500 md:flex-row md:items-center md:justify-between">
                <span>0 of 68 row(s) selected.</span>

                <div class="flex flex-wrap items-center gap-3">
                    @include('AdminDashboard.partials.staff-pagination', [
                        'id' => 'dashboard-contract-rows-per-page',
                        'pages' => 'Page 1 of 2',
                        'options' => ['5', '10', '15', '20'],
                    ])
                </div>
            </div>
        </div>
    </section>
    <script>
    const dashboardCharts = {
        revenue: {
    title: "Revenue Logistic VS ICT (12 Month)",
    legendOne: "ICT",
    legendTwo: "Logistic",
    months: [
        ["Jan", 62, 41], ["Feb", 52, 78], ["Mar", 36, 52],
        ["Apr", 36, 36], ["May", 68, 52], ["Jun", 31, 52],
        ["Jul", 58, 46], ["Aug", 72, 61], ["Sep", 44, 55],
        ["Oct", 63, 48], ["Nov", 70, 66], ["Dec", 56, 73],
    ],
},
        contacts: {
            title: "Active Contacts VS New Contacts (6 Month)",
            legendOne: "Active",
            legendTwo: "New",
            months: [["Jan", 50, 30], ["Feb", 65, 42], ["Mar", 55, 35], ["Apr", 75, 55], ["May", 68, 45], ["Jun", 82, 60]],
        },
        expenses: {
            title: "Expenses VS Payments (6 Month)",
            legendOne: "Expenses",
            legendTwo: "Payments",
            months: [["Jan", 45, 30], ["Feb", 70, 48], ["Mar", 58, 36], ["Apr", 40, 52], ["May", 76, 60], ["Jun", 50, 44]],
        },
        tickets: {
            title: "Open Tickets VS Closed Tickets (6 Month)",
            legendOne: "Open",
            legendTwo: "Closed",
            months: [["Jan", 25, 40], ["Feb", 30, 55], ["Mar", 45, 65], ["Apr", 35, 70], ["May", 28, 58], ["Jun", 22, 75]],
        },
    };

    let currentChartType = "revenue";
    const visibleSeries = {
        first: true,
        second: true,
    };

    function renderDashboardChart(type) {
        currentChartType = type;
        const chart = dashboardCharts[type] || dashboardCharts.revenue;
        const wrapper = document.getElementById("mainChartBars");

        document.getElementById("mainChartTitle").textContent = chart.title;
        document.getElementById("legendOneText").textContent = chart.legendOne;
        document.getElementById("legendTwoText").textContent = chart.legendTwo;
        document.querySelectorAll(".chart-series-toggle").forEach((toggle) => {
            const isVisible = visibleSeries[toggle.dataset.series];
            toggle.setAttribute("aria-pressed", isVisible ? "true" : "false");
            toggle.classList.toggle("opacity-50", !isVisible);
            toggle.querySelector(".chart-series-check")?.classList.toggle("invisible", !isVisible);
        });

        wrapper.innerHTML = chart.months.map(([month, first, second]) => `
            <div class="group relative inline-flex h-full min-w-[74px] flex-col justify-end gap-3 align-bottom">
                <div class="flex h-44 items-end justify-center gap-2">
                    ${visibleSeries.first ? `<span class="w-5 rounded-t bg-blue-600 transition-all duration-300" style="height:${first}%"></span>` : ""}
                    ${visibleSeries.second ? `<span class="w-5 rounded-t bg-blue-200 transition-all duration-300" style="height:${second}%"></span>` : ""}
                </div>
                <span class="text-center text-xs text-gray-500">${month}</span>
                <span class="pointer-events-none absolute left-1/2 top-12 z-20 hidden w-max max-w-[220px] -translate-x-1/2 rounded bg-white px-5 py-4 text-left shadow-xl ring-1 ring-gray-100 group-hover:block">
                    <b class="mb-2 block text-lg text-gray-950">${month}</b>
                    ${visibleSeries.first ? `<span class="block whitespace-nowrap text-sm font-semibold text-gray-950">${chart.legendOne}: ${(first * 100000).toLocaleString()} AF</span>` : ""}
                    ${visibleSeries.second ? `<span class="block whitespace-nowrap text-sm font-semibold text-gray-950">${chart.legendTwo}: ${(second * 100000).toLocaleString()} AF</span>` : ""}
                </span>
            </div>
        `).join("");
    }

    document.querySelectorAll(".dashboard-stat-card").forEach((card) => {
        card.addEventListener("click", () => {
            document.querySelectorAll(".dashboard-stat-card").forEach((item) => {
                item.classList.remove("ring-2", "ring-blue-600");
            });

            card.classList.add("ring-2", "ring-blue-600");
            renderDashboardChart(card.dataset.chart);
        });
    });

    document.querySelectorAll(".chart-series-toggle").forEach((toggle) => {
        toggle.addEventListener("click", () => {
            visibleSeries[toggle.dataset.series] = !visibleSeries[toggle.dataset.series];

            if (!visibleSeries.first && !visibleSeries.second) {
                visibleSeries[toggle.dataset.series] = true;
            }

            renderDashboardChart(currentChartType);
        });
    });

    function updateVisibleContracts() {
        const rowsPerPage = Number(document.querySelector(".contract-rows-value")?.textContent || 10);
        const records = document.querySelectorAll(".contract-record");
        const total = records.length / 2;

        records.forEach((record) => {
            const index = Number(record.dataset.index);
            record.classList.toggle("hidden", index >= rowsPerPage);
        });

        const pageCount = Math.max(1, Math.ceil(total / rowsPerPage));
        document.getElementById("pageCountText").textContent = `Page 1 of ${pageCount}`;
    }

document.querySelectorAll("[data-contract-rows-option]").forEach((button) => {
    button.addEventListener("click", (event) => {
        event.stopPropagation();

        const select = button.closest(".contract-rows-select");
        const value = select?.querySelector(".contract-rows-value");

        if (value) {
            value.textContent = button.dataset.contractRowsOption;
        }

        select?.removeAttribute("open");
        updateVisibleContracts();
    });
});

document.addEventListener("click", (event) => {
    document.querySelectorAll(".contract-rows-select[open]").forEach((select) => {
        if (!select.contains(event.target)) {
            select.removeAttribute("open");
        }
    });
});
document.querySelectorAll(".contract-action-toggle").forEach((button) => {
    button.addEventListener("click", (event) => {
        event.stopPropagation();

        const menu = button.parentElement.querySelector(".contract-action-menu");

        document.querySelectorAll(".contract-action-menu").forEach((item) => {
            if (item !== menu) {
                item.classList.add("hidden");
            }
        });

        menu.classList.toggle("hidden");
    });
});

document.addEventListener("click", () => {
    document.querySelectorAll(".contract-action-menu").forEach((menu) => {
        menu.classList.add("hidden");
    });
});
    renderDashboardChart("revenue");
    updateVisibleContracts();
</script>
@endsection
