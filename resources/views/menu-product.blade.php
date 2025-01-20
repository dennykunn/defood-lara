@extends('layouts.simple.master')
@section('style')
    @livewireStyles
@endsection
@section('title', $menu->name)
@section('content')
    <x-banner>
    @section('banner-title', 'Menu')
    @section('banner-subtitle', $menu->name)
</x-banner>

<section id="product">
    <div class="container mx-auto px-4 md:py-16 py-10">
        <livewire:product-menu />
    </div>
</section>
@endsection

@section('script')
@livewireScripts
@endsection
