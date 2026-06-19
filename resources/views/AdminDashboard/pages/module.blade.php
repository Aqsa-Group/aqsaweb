@extends('AdminDashboard.layouts.app')

@section('title', 'AQSA SYSTEM | '.$module['title'])
@section('breadcrumb_parent', $module['section'])
@section('breadcrumb_current', $module['title'])

@section('content')
    <div class="mb-7 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-gray-500">{{ $module['section'] }}</p>
            <h1 class="text-2xl font-bold text-gray-950">{{ $module['title'] }}</h1>
        </div>
        <button class="inline-flex w-max items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm">
            <i class="fa-solid fa-plus"></i>
            New Record
        </button>
    </div>

    <section class="erp-card mb-7 p-5">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @for ($i = 0; $i < 4; $i++)
                <label>
                    <span class="mb-1 block text-xs font-medium text-gray-500">Filter {{ $i + 1 }}</span>
                    <select class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm">
                        @foreach ($module['filters'] as $filter)
                            <option>{{ $filter }}</option>
                        @endforeach
                    </select>
                </label>
            @endfor
        </div>
    </section>

    <section class="mb-7 grid gap-4 md:grid-cols-3">
        <article class="erp-card p-5">
            <i class="fa-solid {{ $module['icon'] }} mb-4 text-xl text-blue-600"></i>
            <p class="text-sm text-gray-500">Total Items</p>
            <p class="mt-1 text-2xl font-bold">68</p>
        </article>
        <article class="erp-card p-5">
            <i class="fa-solid fa-circle-check mb-4 text-xl text-green-600"></i>
            <p class="text-sm text-gray-500">Active</p>
            <p class="mt-1 text-2xl font-bold">42</p>
        </article>
        <article class="erp-card p-5">
            <i class="fa-solid fa-clock mb-4 text-xl text-orange-500"></i>
            <p class="text-sm text-gray-500">Pending</p>
            <p class="mt-1 text-2xl font-bold">12</p>
        </article>
    </section>

    @include('AdminDashboard.partials.table', ['rows' => $module['rows']])
@endsection
