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

    <section class="mb-12 grid gap-7 xl:grid-cols-[1.55fr_1fr]">
        <article class="erp-card p-7">
            <h2 id="mainChartTitle" class="mb-8 font-semibold">Revenue Logistic VS ICT (6 Month)</h2>

            <div id="mainChartBars" class="bar-grid relative h-72 px-8 pb-12 pt-3">
                <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                    <div class="flex h-52 items-end justify-center gap-2">
                        <span class="w-5 rounded-t bg-blue-600" style="height: 62%"></span>
                        <span class="w-5 rounded-t bg-blue-200" style="height: 41%"></span>
                    </div>
                    <span class="text-center text-xs text-gray-500">Jan</span>
                </div>

                <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                    <div class="flex h-52 items-end justify-center gap-2">
                        <span class="w-5 rounded-t bg-blue-600" style="height: 52%"></span>
                        <span class="w-5 rounded-t bg-blue-200" style="height: 78%"></span>
                    </div>
                    <span class="text-center text-xs text-gray-500">Feb</span>
                </div>

                <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                    <div class="flex h-52 items-end justify-center gap-2">
                        <span class="w-5 rounded-t bg-blue-600" style="height: 36%"></span>
                        <span class="w-5 rounded-t bg-blue-200" style="height: 52%"></span>
                    </div>
                    <span class="text-center text-xs text-gray-500">Mar</span>
                </div>

                <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                    <div class="flex h-52 items-end justify-center gap-2">
                        <span class="w-5 rounded-t bg-blue-600" style="height: 36%"></span>
                        <span class="w-5 rounded-t bg-blue-200" style="height: 36%"></span>
                    </div>
                    <span class="text-center text-xs text-gray-500">Apr</span>
                </div>

                <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                    <div class="flex h-52 items-end justify-center gap-2">
                        <span class="w-5 rounded-t bg-blue-600" style="height: 68%"></span>
                        <span class="w-5 rounded-t bg-blue-200" style="height: 52%"></span>
                    </div>
                    <span class="text-center text-xs text-gray-500">May</span>
                </div>

                <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                    <div class="flex h-52 items-end justify-center gap-2">
                        <span class="w-5 rounded-t bg-blue-600" style="height: 31%"></span>
                        <span class="w-5 rounded-t bg-blue-200" style="height: 52%"></span>
                    </div>
                    <span class="text-center text-xs text-gray-500">Jun</span>
                </div>
            </div>

            <div class="mt-4 flex justify-center gap-5 text-sm text-gray-600">
                <label class="inline-flex cursor-pointer items-center gap-2">
                    <input type="checkbox" class="chart-series-toggle rounded border-gray-300" data-series="first" checked>
                    <i class="fa-solid fa-square text-blue-600"></i>
                    <span id="legendOneText">ICT</span>
                </label>
                <label class="inline-flex cursor-pointer items-center gap-2">
                    <input type="checkbox" class="chart-series-toggle rounded border-gray-300" data-series="second" checked>
                    <i class="fa-solid fa-square text-blue-200"></i>
                    <span id="legendTwoText">Logistic</span>
                </label>
            </div>
        </article>

        <article class="erp-card p-7">
            <h2 class="mb-10 font-semibold">Contract Status</h2>

            <div class="grid items-center gap-8 md:grid-cols-[180px_1fr]">
                <div class="relative mx-auto h-36 w-36 rounded-full"
                    style="background: conic-gradient(#64a166 0 52%, #2169b3 52% 75%, #d99569 75% 89%, #ef2626 89% 100%);">
                    <span class="absolute inset-8 rounded-full bg-[#f7f7f7]"></span>
                </div>

                <div class="space-y-5 text-sm">
                    <p class="flex justify-between gap-6"><span class="text-green-700">Official Rent</span><b>52.1%</b></p>
                    <p class="flex justify-between gap-6"><span class="text-red-600">Fuel</span><b>22.8%</b></p>
                    <p class="flex justify-between gap-6"><span class="text-blue-700">Internet</span><b>13.9%</b></p>
                    <p class="flex justify-between gap-6"><span class="text-orange-400">Urgent</span><b>11.2%</b></p>
                </div>
            </div>
        </article>
    </section>

    <section>
        <div class="mb-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <h2 class="rounded bg-gray-100 px-3 py-1 font-medium">Recent Contracts</h2>
                <span class="rounded border border-gray-200 bg-white px-3 py-1 text-sm shadow-sm">Today</span>
            </div>

            <a href="{{ route('admin.module', ['clients', 'clients']) }}" class="text-sm text-gray-600">More</a>
        </div>

        <div class="overflow-hidden rounded-lg border border-gray-200 bg-white">
            <div class="space-y-3 p-3 md:hidden">
                @foreach ($contractRows as $row)
                    @php
                        $statusClass = match ($row[1]) {
                            'Active' => 'bg-green-50 text-green-600 ring-green-200',
                            'Approved' => 'bg-blue-50 text-blue-600 ring-blue-200',
                            'Under Review' => 'bg-orange-50 text-orange-600 ring-orange-200',
                            default => 'bg-gray-50 text-gray-600 ring-gray-200',
                        };
                    @endphp
                    <article class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <label class="flex min-w-0 items-start gap-3">
                                <input type="checkbox" class="mt-1 rounded border-gray-300">
                                <span class="font-medium text-gray-950">{{ $row[0] }}</span>
                            </label>
                            <i class="fa-solid fa-ellipsis-vertical pt-1 text-gray-700"></i>
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

            <table class="hidden w-full text-left text-sm md:table">
                <thead class="bg-gray-50 text-gray-950">
                    <tr>
                        <th class="w-12 px-4 py-3">
                            <input type="checkbox" class="rounded border-gray-300">
                        </th>
                        <th class="px-4 py-3 font-medium">Contract</th>
                        <th class="px-4 py-3 font-medium">Status</th>
                        <th class="px-4 py-3 font-medium">Organization</th>
                        <th class="px-4 py-3 font-medium">Amount</th>
                        <th class="w-10 px-4 py-3"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contractRows as $row)
                        @php
                            $statusClass = match ($row[1]) {
                                'Active' => 'bg-green-50 text-green-600 ring-green-200',
                                'Approved' => 'bg-blue-50 text-blue-600 ring-blue-200',
                                'Under Review' => 'bg-orange-50 text-orange-500 ring-orange-200',
                                default => 'bg-gray-50 text-gray-600 ring-gray-200',
                            };
                        @endphp
                        <tr class="border-t border-gray-200">
                            <td class="px-4 py-4"><input type="checkbox" class="rounded border-gray-300"></td>
                            <td class="px-4 py-4 font-medium text-gray-950">{{ $row[0] }}</td>
                            <td class="px-4 py-4">
                                <span class="rounded-md px-2 py-1 text-xs ring-1 {{ $statusClass }}">{{ $row[1] }}</span>
                            </td>
                            <td class="px-4 py-4">{{ $row[2] }}</td>
                            <td class="px-4 py-4">{{ $row[3] }}</td>
                            <td class="px-4 py-4 text-right"><i class="fa-solid fa-ellipsis-vertical text-gray-700"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="flex flex-col gap-3 border-t border-gray-200 px-4 py-4 text-sm text-gray-600 md:flex-row md:items-center md:justify-between">
                <span>0 of 68 row(s) selected.</span>

                <div class="flex items-center gap-6">
                    <span>Rows per page</span>
                    <span class="rounded-md border border-gray-200 bg-white px-4 py-2 text-gray-950">10</span>
                    <span class="text-gray-950">Page 1 of 7</span>

                    <div class="flex items-center gap-2">
                        <button class="rounded-md border border-gray-200 px-3 py-2 text-gray-400">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="rounded-md border border-gray-200 px-3 py-2 text-gray-950">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    const dashboardCharts = {
        revenue: {
            title: "Revenue Logistic VS ICT (6 Month)",
            legendOne: "ICT",
            legendTwo: "Logistic",
            months: [["Jan", 62, 41], ["Feb", 52, 78], ["Mar", 36, 52], ["Apr", 36, 36], ["May", 68, 52], ["Jun", 31, 52]],
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
            toggle.checked = visibleSeries[toggle.dataset.series];
        });

        wrapper.innerHTML = chart.months.map(([month, first, second]) => `
            <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                <div class="flex h-52 items-end justify-center gap-2">
                    ${visibleSeries.first ? `<span class="w-5 rounded-t bg-blue-600 transition-all duration-300" title="${chart.legendOne}: ${first}%" style="height:${first}%"></span>` : ""}
                    ${visibleSeries.second ? `<span class="w-5 rounded-t bg-blue-200 transition-all duration-300" title="${chart.legendTwo}: ${second}%" style="height:${second}%"></span>` : ""}
                </div>
                <span class="text-center text-xs text-gray-500">${month}</span>
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
        toggle.addEventListener("change", () => {
            visibleSeries[toggle.dataset.series] = toggle.checked;

            if (!visibleSeries.first && !visibleSeries.second) {
                visibleSeries[toggle.dataset.series] = true;
            }

            renderDashboardChart(currentChartType);
        });
    });

    renderDashboardChart("revenue");
</script>
@endsection
