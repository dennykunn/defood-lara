<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout - Defood | Restauran & Food Delivery</title>
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/assets/styles/font-awesome/font-awesome.css" />
    <!-- Themify -->
    <link rel="stylesheet" href="/assets/styles/themify/themify.css" />
    <!-- AOS -->
    <link href="/assets/styles/aos/aos.css" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body class="overflow-x-hidden body-checkout">
    <section id="navbar" class="border-b border-yellow-dark py-3">
        <div class="px-8">
            <div class="w-full h-16 md:h-[72px] lg:h-auto flex items-center">
                <div class="flex items-center justify-between w-full">
                    <a href="/">
                        <h1 class="text-4xl font-black text-blue-darker">Defood</h1>
                    </a>

                    <div>
                        <a href="{{ route('cart') }}" class="flex items-center text-yellow-dark">
                            <i class="icon-shopping-cart text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main>
        <div>
            <form class="flex lg:flex-row flex-col-reverse h-fit" method="POST" action="{{ route('payment') }}">
                @csrf
                <div class="flex-1">
                    <div class="p-8 space-y-8 h-fit">
                        <div>
                            <h3 class="text-xl font-bold text-blue-darker">Delivery</h3>

                            <div class="mt-4">
                                <label for="name" class="mb-2 block">Name</label>
                                <input id="name" name="name" type="text"
                                    class="border border-yellow-dark outline-yellow-dark w-full p-2 rounded-md bg-transparent placeholder-blue-darker text-blue-darker"
                                    placeholder="Your name..">
                            </div>
                            <div class="mt-4">
                                <label for="address" class="mb-2 block">Address</label>
                                <textarea name="address" id="address" cols="30" rows="4"
                                    class="border border-yellow-dark outline-yellow-dark w-full p-2 rounded-md bg-transparent placeholder-blue-darker text-blue-darker"
                                    placeholder="Your address.."></textarea>
                            </div>
                            <div class="flex md:flex-row flex-col gap-4 mt-4">
                                <div class="flex-1">
                                    <label for="city" class="mb-2 block">City</label>
                                    <input id="city" type="text" name="city"
                                        class="border border-yellow-dark outline-yellow-dark w-full p-2 rounded-md bg-transparent placeholder-blue-darker text-blue-darker"
                                        placeholder="Your city..">
                                </div>
                                <div class="flex-1">
                                    <label for="zip_code" class="mb-2 block">Zip Code</label>
                                    <input id="zip_code" type="number" name="zip_code"
                                        class="border border-yellow-dark outline-yellow-dark w-full p-2 rounded-md bg-transparent placeholder-blue-darker text-blue-darker"
                                        placeholder="Your city zip code..">
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-blue-darker">Shipping Method</h3>

                            <ul class="flex flex-col sm:flex-row mt-4">
                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-1" name="shipping"
                                                type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark" checked
                                                value="maxim">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-1"
                                            class="ms-3 block w-full text-sm text-blue-darker">
                                            Maxim
                                        </label>
                                    </div>
                                </li>

                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-2" name="shipping"
                                                type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark"
                                                value="gojek">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-2"
                                            class="ms-3 block w-full text-sm text-blue-darker">
                                            GoJek
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-blue-darker">Payment</h3>

                            <ul class="flex flex-col sm:flex-row mt-4">
                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="cod" name="payment" type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark" checked
                                                value="cod">
                                        </div>
                                        <label for="cod" class="ms-3 block w-full text-sm text-blue-darker">
                                            COD
                                        </label>
                                    </div>
                                </li>

                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="bsi" name="payment" type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark" disabled
                                                value="bsi">
                                        </div>
                                        <label for="bsi" class="ms-3 block w-full text-sm text-gray-400">
                                            BSI
                                        </label>
                                    </div>
                                </li>
                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="bca" name="payment" type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark" disabled
                                                value="bca">
                                        </div>
                                        <label for="bca" class="ms-3 block w-full text-sm text-gray-400">
                                            BCA
                                        </label>
                                    </div>
                                </li>
                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="bni" name="payment" type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark" disabled
                                                value="bni">
                                        </div>
                                        <label for="bni" class="ms-3 block w-full text-sm text-gray-400">
                                            BNI
                                        </label>
                                    </div>
                                </li>
                                <li
                                    class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-transparent border border-yellow-dark text-blue-darker -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg">
                                    <div class="relative flex items-center w-full">
                                        <div class="flex items-center h-5">
                                            <input id="brk" name="payment" type="radio"
                                                class="border-yellow-dark rounded-full accent-yellow-dark" disabled
                                                value="brk">
                                        </div>
                                        <label for="brk" class="ms-3 block w-full text-sm text-gray-400">
                                            BRK
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="block btnOrder bg-yellow-dark w-full text-center relative rounded-md overflow-hidden">
                            <button type="submit"
                                class="bg-transparent z-10 relative w-full px-8 py-2.5 block text-white text-lg font-bold">
                                Pay Now
                            </button>
                        </div>
                    </div>

                    <div class="text-center py-4 border-t border-yellow-dark text-blue-darker px-8">
                        All rights reserved Defood | Restaurant & Food Delivery
                    </div>
                </div>

                <div
                    class="flex-shrink-0 lg:w-[400px] flex flex-col gap-4 p-8 bg-gray-100/60 lg:border-l border-gray-300">
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach ($carts as $cart)
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <input type="hidden" name="cart[]" value="{{ $cart->id }}">

                                    <img src="{{ Storage::url($cart->menu->image) }}" alt="{{ $cart->menu->name }}"
                                        class="w-16 h-16 object-cover object-center rounded">

                                    <span
                                        class="absolute -top-2.5 -right-2.5 bg-gray-700 h-[22px] w-[22px] rounded-full text-white text-sm flex items-center justify-center">{{ $cart->quantity }}</span>
                                </div>

                                <div class="text-sm ">
                                    <p class="capitalize">{{ $cart->menu->name }}</p>
                                    <p class="capitalize text-gray-500">{{ $cart->menu->category->name }} /
                                        {{ $cart->menu->cuisine->name }}</p>
                                </div>
                            </div>

                            @php
                                $discountedPrice = $cart->menu->price - $cart->menu->price * ($cart->menu->discount / 100);
                                $totalPrice += $cart->menu->discount != 0 ? $discountedPrice * $cart->quantity : $cart->menu->price * $cart->quantity;
                            @endphp
                            <p class="text-sm">
                                Rp.
                                {{ $cart->menu->discount != 0 ? number_format($discountedPrice * $cart->quantity) : number_format($cart->menu->price * $cart->quantity) }}
                            </p>
                        </div>
                    @endforeach

                    <div class="mt-8 space-y-1">
                        <div class="flex justify-between items-center">
                            <p class="text-sm">Subtotal</p>
                            <p class="text-sm font-bold">Rp. {{ number_format($totalPrice) }}</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm">Shipping</p>
                            <p class="text-sm font-bold">Rp. {{ number_format(50000) }}</p>
                        </div>
                        <div class="flex justify-between items-center font-bold">
                            <p>Total</p>
                            <p>Rp. {{ number_format($totalPrice + 50000) }}</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- AOS -->
    <script src="/assets/script/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
