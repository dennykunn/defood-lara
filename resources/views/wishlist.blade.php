@extends('layouts.simple.master')
@section('title', 'Wishlist')
@section('content')
    <x-banner>
    @section('banner-title', 'Wishlist')
</x-banner>

<section id="wishlist">
    <div class="container mx-auto md:py-16 py-10 px-4">
        @if (count($wishlists) != 0)
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-yellow-dark/10">
                                    <tr>
                                        <th scope="col" class="py-3.5 uppercase font-bold text-center text-xl ">
                                            Image
                                        </th>

                                        <th scope="col" class="py-3.5 uppercase font-bold text-center text-xl ">
                                            PRODUCT
                                        </th>

                                        <th scope="col" class="py-3.5 uppercase font-bold text-center text-xl ">
                                            PRICE
                                        </th>

                                        <th scope="col" class="py-3.5 uppercase font-bold text-center text-xl ">
                                            PURCHASE
                                        </th>
                                        <th scope="col" class="py-3.5 uppercase font-bold text-center text-xl ">
                                            REMOVE
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        <tr class="border-b border-yellow-dark/10">
                                            <td class="py-4 text-sm whitespace-nowrap">
                                                <img src="{{ Storage::url($wishlist->menu->image) }}"
                                                    alt="{{ $wishlist->menu->name }}"
                                                    class="w-32 h-32 object-cover object-center mx-auto">
                                            </td>
                                            <td class="py-4 whitespace-nowrap text-center font-semibold">
                                                {{ $wishlist->menu->name }}
                                            </td>
                                            <td class="py-4 whitespace-nowrap text-center">
                                                Rp. {{ $wishlist->menu->price }}
                                            </td>
                                            <td class="py-4 whitespace-nowrap text-center">
                                                <div class="btnOrder bg-yellow-dark w-fit mx-auto relative">
                                                    <a href="{{ route('menu_product', ['slug' => $wishlist->menu->slug]) }}"
                                                        class="bg-transparent z-10 relative w-fit px-6 py-2 block mx-auto text-sm text-white">
                                                        Select Option
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="py-4 whitespace-nowrap text-center font-semibold">
                                                <form action="{{ route('delete.wishlist', ['id' => $wishlist->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <i class="icon-trash text-2xl hover:text-yellow-dark"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="flex flex-col gap-y-6 items-center">
                <h1 class="md:text-3xl text-2xl font-bold text-center">Nothing found in wishlist!</h1>
                <img src="{{ asset('/assets/images/other/empty-cart.png') }}" alt="empty-cart"
                    class="md:w-[150px] w-[100px]">
                <div class="block btnOrder mt-6 bg-yellow-dark w-fit mx-auto relative">
                    <a href="{{ route('menu') }}"
                        class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-sm text-white">
                        Continue Shopping
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
