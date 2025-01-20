@extends('layouts.admin.master')
@section('style')
    @livewireStyles
@endsection
@section('title', 'List Menu')
@section('breadcrumb-title')
    <p>List Menu</p>
@endsection
@section('breadcrumb-items')
    <p>/</p>
    <p>Menu</p>
    <p>/</p>
    <a href="{{ route('list-menu') }}" class="block text-yellow-dark font-semibold">List</a>
@endsection

@section('content')
    <div class="p-6 rounded-xl bg-white shadow-cmsCard">
        <livewire:menu-table />
    </div>
@endsection

@section('script')
    @livewireScripts
@endsection
