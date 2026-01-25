
@extends('Management.layouts.sidebar')

@section('page_title', 'Users Management')
@section('page_subtitle', 'Manage system users')


@section('content')
@livewire('management.user')
@endsection
