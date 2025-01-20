@extends('layouts.simple.master')
@section('style')
    @livewireStyles
@endsection
@section('title', 'Menu')
@section('content')
    <x-banner>
    @section('banner-title', 'Menu')
</x-banner>

<section id="menu">
    <livewire:user-menu-table />
</section>
@endsection

@section('script')
@livewireScripts
@endsection
