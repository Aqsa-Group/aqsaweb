@extends('LogisticAdminDashboard.layouts.app')

@section('title', 'AQSA SYSTEM | '.$module['title'])
@section('breadcrumb_parent', $module['section'])
@section('breadcrumb_current', $module['title'])

@section('content')
    @php
        $rows = [
            [($module['title'] ?? 'Logistic').' Q1', 'Active', 'UNHCR Afghanistan', '1200$'],
            [($module['title'] ?? 'Logistic').' Supply Chain', 'Under Review', 'WFP Afghanistan', '9000$'],
            [($module['title'] ?? 'Logistic').' Support', 'Approved', 'WHO Afghanistan', '88,000$'],
            [($module['title'] ?? 'Logistic').' Agreement', 'Active', 'IOM Afghanistan', '4,500$'],
        ];
    @endphp

    @if (($module['title'] ?? '') === 'Staff Profiles')
        @livewire('logistic-admin-dashboard.staff-profiles')

    @elseif (($module['title'] ?? '') === 'Attendance & Leave')
        @livewire('logistic-admin-dashboard.attendance-leave')

    @elseif (($module['title'] ?? '') === 'Clients')
    @livewire('logistic-admin-dashboard.clients-ngo-management')
    @elseif (($module['title'] ?? '') === 'Contacts')
    @livewire('logistic-admin-dashboard.contract-project-management')
    @elseif (($module['title'] ?? '') === 'Vendors')
    @livewire('logistic-admin-dashboard.vendor-management')
    @elseif (($module['title'] ?? '') === 'Sales Invoices')
    @livewire('logistic-admin-dashboard.sales-invoices')
    @elseif (($module['title'] ?? '') === 'Purchase Invoices')
    @livewire('logistic-admin-dashboard.purchase-invoices')
    @elseif (($module['title'] ?? '') === 'Expenses')
    @livewire('logistic-admin-dashboard.expense-management')
    @elseif (($module['title'] ?? '') === 'Payments')
    @livewire('logistic-admin-dashboard.payment-management')
    @elseif (in_array(($module['title'] ?? ''), ['Support Tickets', 'Tickets'], true))
    @livewire('logistic-admin-dashboard.support-tickets')
    @elseif (($module['title'] ?? '') === 'Journal Entries')
    @livewire('logistic-admin-dashboard.journal-entries')
    @elseif (($module['title'] ?? '') === 'General Ledger')
    @livewire('logistic-admin-dashboard.general-ledger')
    @elseif (($module['title'] ?? '') === 'Projects')
    @livewire('logistic-admin-dashboard.it-projects')
    @elseif (($module['title'] ?? '') === 'Time Tracking')
    @livewire('logistic-admin-dashboard.time-tracking')
    @elseif (in_array(($module['title'] ?? ''), ['Customer Interaction', 'Client Interaction'], true))
    @livewire('logistic-admin-dashboard.client-interactions')

    @elseif (($module['title'] ?? '') === 'Contracts')
    @livewire('logistic-admin-dashboard.contract-project-management')

    @elseif (($module['title'] ?? '') === 'Fuel')
    @livewire('logistic-admin-dashboard.expense-management')

    @elseif (($module['title'] ?? '') === 'Vehicles')
    @include('LogisticAdminDashboard.partials.table', ['rows' => $rows])

    @else
    @include('LogisticAdminDashboard.partials.table', ['rows' => $rows])


    @endif
@endsection
