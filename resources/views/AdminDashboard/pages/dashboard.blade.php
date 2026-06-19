@extends('AdminDashboard.layouts.app')

@section('title', 'AQSA SYSTEM | Dashboard')
@section('breadcrumb_current', 'Default')

@section('content')
    <div class="mb-7 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <h1 class="text-xl font-bold uppercase tracking-wide text-gray-950">Overview</h1>
        <button class="inline-flex w-max items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm shadow-sm">
            <i class="fa-regular fa-calendar"></i>
            Mon, 4/23/2026
        </button>
    </div>

    <section class="mb-12 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ([
            ['Total Revenue', '$45,231.89', '+20.1% from last month', 'fa-dollar-sign', 'bg-blue-600 text-white'],
            ['Active Contacts', '+573', '+201 since last hour', 'fa-wave-square', 'bg-blue-200 text-gray-950'],
            ['Total Expenses', '$45,231.89', '+19% from last month', 'fa-credit-card', 'bg-blue-200 text-gray-950'],
            ['Open Tickets', '12', '+19% from last month', 'fa-clock', 'bg-blue-200 text-gray-950'],
        ] as $card)
            <article class="metric-card {{ $card[4] }} p-6">
                <div class="mb-5 flex items-start justify-between">
                    <p class="text-sm">{{ $card[0] }}</p>
                    <i class="fa-solid {{ $card[3] }} opacity-75"></i>
                </div>
                <p class="text-2xl font-bold">{{ $card[1] }}</p>
                <p class="mt-1 text-xs opacity-70">{{ $card[2] }}</p>
            </article>
        @endforeach
    </section>

    <section class="mb-12 grid gap-7 xl:grid-cols-[1.55fr_1fr]">
        <article class="erp-card p-7">
            <h2 class="mb-8 font-semibold">Revenue Logistic VS ICT (6 Month)</h2>
            <div class="bar-grid relative h-72 px-8 pb-12 pt-3">
                @foreach ([['Jan', 62, 41], ['Feb', 52, 78], ['Mar', 36, 52], ['Apr', 36, 36], ['May', 68, 52], ['Jun', 31, 52]] as $month)
                    <div class="inline-flex h-full w-[15%] flex-col justify-end gap-3 align-bottom">
                        <div class="flex h-52 items-end justify-center gap-2">
                            <span class="w-5 rounded-t bg-blue-600" style="height: {{ $month[1] }}%"></span>
                            <span class="w-5 rounded-t bg-blue-200" style="height: {{ $month[2] }}%"></span>
                        </div>
                        <span class="text-center text-xs text-gray-500">{{ $month[0] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 flex justify-center gap-5 text-sm text-gray-600">
                <span><i class="fa-solid fa-square mr-1 text-blue-600"></i> ICT</span>
                <span><i class="fa-solid fa-square mr-1 text-blue-200"></i> Logistic</span>
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

        @include('AdminDashboard.partials.table', ['rows' => [
            ['Logistic Support Services Q1', 'Active', 'UNHCR Afghanistan', '1200$'],
            ['Food Distribution Supply Chain', 'Active', 'WFP Afghanistan', '200$'],
            ['ICT Infrastructure Setup', 'Under Review', 'UNACF Afghanistan', '9000$'],
            ['Network Maintenance support', 'Approved', 'WHO Afghanistan', '88,000'],
        ]])
    </section>
@endsection
