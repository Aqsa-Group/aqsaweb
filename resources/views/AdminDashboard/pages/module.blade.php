@extends('AdminDashboard.layouts.app')

@section('title', 'AQSA SYSTEM | '.$module['title'])
@section('breadcrumb_parent', $module['section'])
@section('breadcrumb_current', $module['title'])

@section('content')
    @if (($module['title'] ?? '') === 'Staff Profiles')
        @livewire('admin-dashboard.staff-profiles')

    @elseif (($module['title'] ?? '') === 'Attendance & Leave')
        @livewire('admin-dashboard.attendance-leave')

    @elseif (($module['title'] ?? '') === 'Clients')
    @livewire('admin-dashboard.clients-ngo-management')
    @elseif (($module['title'] ?? '') === 'Contacts')
    @livewire('admin-dashboard.contract-project-management')
    @elseif (($module['title'] ?? '') === 'Vendors')
    @livewire('admin-dashboard.vendor-management')
    @elseif (($module['title'] ?? '') === 'Sales Invoices')
    @livewire('admin-dashboard.sales-invoices')
    @elseif (($module['title'] ?? '') === 'Purchase Invoices')
    @livewire('admin-dashboard.purchase-invoices')
    @elseif (($module['title'] ?? '') === 'Expenses')
    @livewire('admin-dashboard.expense-management')
    @elseif (($module['title'] ?? '') === 'Payments')
    @livewire('admin-dashboard.payment-management')
    @elseif (($module['title'] ?? '') === 'Support Tickets')
    @livewire('admin-dashboard.support-tickets')
    @elseif (($module['title'] ?? '') === 'Journal Entries')
    @livewire('admin-dashboard.journal-entries')
    @elseif (($module['title'] ?? '') === 'General Ledger')
    @livewire('admin-dashboard.general-ledger')
    @elseif (($module['title'] ?? '') === 'Projects')
    @livewire('admin-dashboard.it-projects')
    @elseif (($module['title'] ?? '') === 'Time Tracking')
    @livewire('admin-dashboard.time-tracking')
    @elseif (($module['title'] ?? '') === 'Customer Interaction')
    @livewire('admin-dashboard.client-interactions')




    @endif
@endsection
