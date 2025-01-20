@extends('layouts.admin.master')
@section('style')
    @livewireStyles
@endsection
@section('title', 'Administrator')
@section('breadcrumb-title')
    <p>Administrator</p>
@endsection
@section('breadcrumb-items')
    <p>/</p>
    <p>Management Users</p>
    <p>/</p>
    <a href="{{ route('management-users.admin') }}" class="block text-yellow-dark font-semibold">Administrator</a>
@endsection

@section('content')
    <div class="p-6 rounded-xl bg-white shadow-cmsCard">
        <livewire:admin-table />
    </div>
@endsection

@section('script')
    @livewireScripts
@endsection
