
@extends('Management.layouts.sidebar')
@section('page_title', 'Dashboard Overview')
@section('page_subtitle', 'Welcome back, '.Auth::guard('management')->user()->name)

@section('content')
@livewire('management.dashboard')
@endsection
