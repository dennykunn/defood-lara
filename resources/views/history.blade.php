@extends('layouts.simple.master')
@section('title', 'History')
@section('style')
    @livewireStyles
@endsection
@section('content')
    <x-banner>
    @section('banner-title', 'History')
</x-banner>

<section id="History">
    <div class="container mx-auto md:py-16 py-10 px-4">
        @if (count($orders) != 0)
            <div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-[800px] w-full align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="border-b border-gray-200">
                                        <tr>
                                            <th scope="col" class="pb-3.5 w-fit uppercase font-bold text-xl text-left">
                                                Product
                                            </th>

                                            <th scope="col"
                                                class="pb-3.5 w-fit uppercase font-bold text-xl text-center">
                                                QUANTITY
                                            </th>

                                            <th scope="col"
                                                class="pb-3.5 w-fit uppercase font-bold text-xl text-right">
                                                TOTAL
                                            </th>
                                        </tr>
                                    </thead>
                                    @foreach ($orders as $order)
                                        <tbody class="border-b border-gray-200">
                                            @foreach (json_decode($order->cart) as $cartId)
                                                @php
                                                    $cart = App\Models\Cart::find($cartId);
                                                    $discountedPrice = $cart->menu->price - $cart->menu->price * ($cart->menu->discount / 100);
                                                @endphp

                                                @if ($cart)
                                                    <tr>
                                                        <td class="py-6 w-fit whitespace-nowrap">
                                                            <div class="flex gap-10 capitalize">
                                                                <img src="{{ Storage::url($cart->menu->image) }}"
                                                                    alt="{{ $cart->menu->name }}"
                                                                    class="w-28 h-28 object-cover object-center rounded-lg">

                                                                <div class="">
                                                                    <p>{{ $cart->menu->name }}</p>
                                                                    <p>Rp.
                                                                        {{ $cart->menu->discount != 0 ? number_format($discountedPrice) : number_format($cart->menu->price) }}
                                                                    </p>
                                                                    <p>Type: {{ $cart->menu->type->name }}</p>
                                                                    <p>Category: {{ $cart->menu->category->name }}</p>
                                                                    <p>Cuisine: {{ $cart->menu->cuisine->name }}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-6 w-fit whitespace-nowrap text-center font-bold">
                                                            {{ $cart->quantity }}
                                                        </td>

                                                        <td class="py-6 w-fit whitespace-nowrap text-right font-bold">
                                                            Rp.
                                                            {{ $cart->menu->discount != 0 ? number_format($discountedPrice * $cart->quantity) : number_format($cart->menu->price * $cart->quantity) }}
                                                        </td>
                                                    </tr>
                                                @else
                                                    <p>Cart with ID {{ $cartId }} not found.</p>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="block btnOrder mt-6 bg-yellow-dark w-fit ml-auto relative">
                        <a href="{{ route('menu') }}"
                            class="bg-transparent z-10 relative w-fit px-8 py-2 block ml-auto text-white">
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="flex flex-col gap-y-6 items-center">
                <h1 class="md:text-3xl text-2xl font-bold text-center">Nothing found in history!</h1>
                <img src="{{ asset('/assets/images/other/empty-cart.png') }}" alt="empty-cart"
                    class="md:w-[150px] w-[100px]">
                <div class="block btnOrder mt-6 bg-yellow-dark w-fit mx-auto relative">
                    <a href="{{ route('menu') }}"
                        class="bg-transparent z-10 relative w-fit px-6 py-2 block mx-auto text-white">
                        Continue Shopping
                    </a>
                </div>
            </div>
        @endif

    </div>
</section>
@endsection
@section('script')
@livewireScripts
@endsection
