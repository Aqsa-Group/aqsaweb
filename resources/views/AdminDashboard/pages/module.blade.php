@extends('AdminDashboard.layouts.app')

@section('title', 'AQSA SYSTEM | '.$module['title'])
@section('breadcrumb_parent', $module['section'])
@section('breadcrumb_current', $module['title'])

@section('content')
    @if (($module['title'] ?? '') === 'Staff Profiles')
        @livewire('admin-dashboard.staff-profiles')
    @elseif (($module['title'] ?? '') === 'Attendance & Leave')
        @livewire('admin-dashboard.attendance-leave')
    @endif
@endsection
