@extends('layouts.admin.master')
@section('style')
    @livewireStyles
@endsection
@section('title', 'Customer')
@section('breadcrumb-title')
    <p>Customer</p>
@endsection
@section('breadcrumb-items')
    <p>/</p>
    <p>Management Users</p>
    <p>/</p>
    <a href="{{ route('management-users.customer') }}" class="block text-yellow-dark font-semibold">Customer</a>
@endsection

@section('content')
    <div class="p-6 rounded-xl bg-white shadow-cmsCard">
        <livewire:customer-table />
    </div>
@endsection

@section('script')
    @livewireScripts
@endsection
