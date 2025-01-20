@extends('layouts.simple.master')
@section('title', 'Cart')
@section('style')
    @livewireStyles
@endsection
@section('content')
    <x-banner>
    @section('banner-title', 'Cart')
</x-banner>

<section id="Cart">
    <div class="container mx-auto md:py-16 py-10 px-4">
        <livewire:cart-table />
    </div>
</section>
@endsection
@section('script')
@livewireScripts
@endsection
