<div wire:click="closeCartSide()" onclick="document.body.style.overflow = 'unset'"
    class="{{ $statusCart == false ? 'invisible opacity-0 delay-150' : ' visible opacity-1000' }} transition-all duration-300 fixed bg-black/50 z-30 top-0 left-0 w-full h-screen">
</div>

<div
    class="{{ $statusCart == false ? 'invisible opacity-0 translate-x-full' : 'delay-150 visible opacity-1000 translate-x-0' }} transition-all duration-300 fixed top-0 right-0 max-w-sm w-full bg-white h-screen z-30 flex flex-col">
    @if (count($wishlists) != 0 || count($carts) != 0)
        <div
            class="flex-shrink-0 fixed top-0 max-w-sm w-full flex items-center gap-4 justify-between px-8 sm:py-6 py-4 shadow-cartHead">
            <h3 class="text-2xl">Shopping cart</h3>

            <button wire:click="closeCartSide()" onclick="document.body.style.overflow = 'unset'">
                <i class="icon-close text-xl font-bold"></i>
            </button>
        </div>

        <div class="flex-1 mt-[88px] mb-[305px] overflow-auto">
            <div>
                @foreach ($wishlists as $wishlist)
                    <div
                        class="flex justify-between px-8 sm:py-8 py-6 {{ count($carts) == 0 ? 'last:border-b-0' : '' }} border-b border-gray-200">
                        <div class="flex gap-4">
                            <img src="{{ Storage::url($wishlist->menu->image) }}" alt="{{ $wishlist->menu->slug }}"
                                class="w-[100px] h-[100px] object-cover object-center rounded-md">

                            <div class="">
                                <p>{{ $wishlist->menu->name }}</p>
                                @php
                                    $discountedPrice = $wishlist->menu->price - $wishlist->menu->price * ($wishlist->menu->discount / 100);
                                    $totalPrice += $wishlist->menu->discount != 0 ? $discountedPrice * $wishlist->quantity : $wishlist->menu->price * $wishlist->quantity;
                                @endphp

                                <p class="text-sm">
                                    Rp.
                                    {{ $wishlist->menu->discount != 0 ? number_format($discountedPrice * $wishlist->quantity) : number_format($wishlist->menu->price * $wishlist->quantity) }}
                                </p>

                                <div class="flex border-2 border-blue-darker w-fit mt-2">
                                    <button
                                        class="font-bold bg-white text-blue-darker h-8 w-8 text-sm flex items-center justify-center hover:text-white hover:bg-blue-darker transition duration-150"
                                        wire:click="decreaseWishlist({{ $wishlist->id }})">
                                        <i class="icon-minus"></i>
                                    </button>
                                    <p
                                        class="h-8 w-8 text-sm flex items-center justify-center text-center z-10 text-blue-darker">
                                        {{ $wishlist->quantity }}
                                    </p>
                                    <button
                                        class="font-bold bg-white text-blue-darker h-8 w-8 text-sm flex items-center justify-center hover:text-white hover:bg-blue-darker transition duration-150"
                                        wire:click="increaseWishlist({{ $wishlist->id }})">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button wire:click="removeFromWishlist({{ $wishlist->id }})"
                            class="h-6 w-6 rounded-full shadow-cartClose flex items-center justify-center hover:bg-blue-darker hover:text-white">
                            <i class="icon-close text-[8px]"></i>
                        </button>
                    </div>
                @endforeach

                @foreach ($carts as $cart)
                    <div class="flex justify-between px-8 sm:py-8 py-6 last:border-b-0 border-b border-gray-200">
                        <div class="flex gap-4">
                            <img src="{{ Storage::url($cart->menu->image) }}" alt="{{ $cart->menu->slug }}"
                                class="w-[100px] h-[100px] object-cover object-center rounded-md">

                            <div>
                                <p>{{ $cart->menu->name }}</p>
                                @php
                                    $discountedPrice = $cart->menu->price - $cart->menu->price * ($cart->menu->discount / 100);
                                    $totalPrice += $cart->menu->discount != 0 ? $discountedPrice * $cart->quantity : $cart->menu->price * $cart->quantity;
                                @endphp

                                <p class="text-sm">
                                    Rp.
                                    {{ $cart->menu->discount != 0 ? number_format($discountedPrice * $cart->quantity) : number_format($cart->menu->price * $cart->quantity) }}
                                </p>

                                <div class="flex border-2 border-blue-darker w-fit mt-2">
                                    <button
                                        class="font-bold bg-white text-blue-darker h-8 w-8 text-sm flex items-center justify-center hover:text-white hover:bg-blue-darker transition duration-150"
                                        wire:click="decreaseCart({{ $cart->id }})">
                                        <i class="icon-minus"></i>
                                    </button>
                                    <p
                                        class="h-8 w-8 text-sm flex items-center justify-center text-center z-10 text-blue-darker">
                                        {{ $cart->quantity }}
                                    </p>
                                    <button
                                        class="font-bold bg-white text-blue-darker h-8 w-8 text-sm flex items-center justify-center hover:text-white hover:bg-blue-darker transition duration-150"
                                        wire:click="increaseCart({{ $cart->id }})">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button wire:click="removeFromCart({{ $cart->id }})"
                            class="h-6 w-6 rounded-full shadow-cartClose flex items-center justify-center hover:bg-blue-darker hover:text-white">
                            <i class="icon-close text-[8px]"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex-shrink-0 fixed bottom-0 max-w-sm w-full bg-white">
            <div class="px-8 sm:py-6 py-4 shadow-cartHead">
                <div class="flex items-center justify-between w-full">
                    <button id="btnNote"
                        class="text-xs hover:text-yellow-dark hover:fill-yellow-dark transition duration-150 flex flex-col items-center gap-1 w-fit">
                        <svg id="Component_60_1" data-name="Component 60 – 1" xmlns="http://www.w3.org/2000/svg"
                            width="23.159" height="21.5" viewBox="0 0 23.159 21.5" class="icon icon-free-shipping">
                            <path id="Line_352" data-name="Line 352"
                                d="M6.47.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H6.47A.75.75,0,0,1,7.22,0,.75.75,0,0,1,6.47.75Z"
                                transform="translate(7.496 5.637)" fill="current-color"></path>
                            <path id="Path_54601" data-name="Path 54601"
                                d="M19.659,25.363H5.678a1.817,1.817,0,0,1-1.815-1.815V5.678A1.817,1.817,0,0,1,5.678,3.863H19.544a1.817,1.817,0,0,1,1.815,1.815V10.84a.75.75,0,0,1-1.5,0V5.678a.315.315,0,0,0-.315-.315H5.678a.316.316,0,0,0-.315.315v17.87a.315.315,0,0,0,.315.315H19.659a.315.315,0,0,0,.315-.315V20.936a.75.75,0,0,1,1.5,0v2.612A1.817,1.817,0,0,1,19.659,25.363Z"
                                transform="translate(-3.863 -3.863)" fill="current-color"></path>
                            <path id="Path_54602" data-name="Path 54602"
                                d="M186.027,111.452h0a1.15,1.15,0,0,1-1.062-1.582l1.485-3.653a.75.75,0,0,1,.164-.248l6.21-6.215a2.1,2.1,0,0,1,2.965,0l.784.784a2.1,2.1,0,0,1,0,2.965l-6.21,6.215a.75.75,0,0,1-.248.165l-3.653,1.485A1.149,1.149,0,0,1,186.027,111.452Zm1.755-4.531-1.114,2.742,2.742-1.114,6.1-6.108a.6.6,0,0,0,0-.844l-.784-.784a.6.6,0,0,0-.844,0Z"
                                transform="translate(-174.027 -93.427)" fill="current-color"></path>
                            <path id="Line_353" data-name="Line 353"
                                d="M2.688,3.438a.748.748,0,0,1-.53-.22L-.53.53A.75.75,0,0,1-.53-.53.75.75,0,0,1,.53-.53L3.219,2.158a.75.75,0,0,1-.53,1.28Z"
                                transform="translate(18.539 7.649)" fill="current-color"></path>
                            <path id="Path_54603" data-name="Path 54603"
                                d="M213.588,213.576a.748.748,0,0,1-.53-.22l-2.688-2.688a.75.75,0,0,1,1.061-1.061l2.688,2.688a.75.75,0,0,1-.53,1.28Z"
                                transform="translate(-197.783 -197.067)" fill="current-color"></path>
                            <path id="Line_354" data-name="Line 354"
                                d="M0,3.931a.748.748,0,0,1-.53-.22.75.75,0,0,1,0-1.061L2.651-.53a.75.75,0,0,1,1.061,0,.75.75,0,0,1,0,1.061L.53,3.711A.748.748,0,0,1,0,3.931Z"
                                transform="translate(15.567 10.13)" fill="current-color"></path>
                            <path id="Path_54604" data-name="Path 54604"
                                d="M47.82,71.078a.75.75,0,0,1-.57-.263l-.963-1.128a.75.75,0,1,1,1.14-.974l.354.415.958-1.28a.75.75,0,0,1,1.2.9l-1.52,2.031a.75.75,0,0,1-.576.3Z"
                                transform="translate(-43.574 -63.729)" fill="current-color"></path>
                            <path id="Line_355" data-name="Line 355"
                                d="M5.126.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H5.126a.75.75,0,0,1,.75.75A.75.75,0,0,1,5.126.75Z"
                                transform="translate(7.496 10.734)" fill="current-color"></path>
                            <path id="Path_54605" data-name="Path 54605"
                                d="M47.82,156.094a.75.75,0,0,1-.57-.263l-.963-1.128a.75.75,0,0,1,1.14-.974l.354.415.958-1.28a.75.75,0,1,1,1.2.9l-1.52,2.031a.75.75,0,0,1-.576.3Z"
                                transform="translate(-43.574 -143.648)" fill="current-color"></path>
                            <path id="Line_356" data-name="Line 356"
                                d="M2.427.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H2.427a.75.75,0,0,1,.75.75A.75.75,0,0,1,2.427.75Z"
                                transform="translate(7.496 15.831)" fill="current-color"></path>
                            <path id="Path_54606" data-name="Path 54606"
                                d="M47.82,241.109a.75.75,0,0,1-.57-.263l-.963-1.128a.75.75,0,1,1,1.141-.974l.354.415.958-1.28a.75.75,0,1,1,1.2.9l-1.52,2.031a.75.75,0,0,1-.576.3Z"
                                transform="translate(-43.574 -223.567)" fill="current-color"></path>
                        </svg>
                        Add Note
                    </button>
                    <button id="btnShipping"
                        class="text-xs hover:text-yellow-dark transition duration-150 flex flex-col items-center gap-1 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38.197" height="21.5"
                            viewBox="0 0 38.197 21.5" class="icon icon-free-shipping">
                            <g id="Group_25127" data-name="Group 25127" transform="translate(-1083.836 -1161.835)">
                                <path id="Path_54444" data-name="Path 54444"
                                    d="M76.155,6.988H95.1a.132.132,0,0,1,.132.132V23.868"
                                    transform="translate(1014.583 1155.597)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></path>
                                <line id="Line_317" data-name="Line 317" x1="4.357"
                                    transform="translate(1090.739 1179.465)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></line>
                                <line id="Line_318" data-name="Line 318" x1="11.098"
                                    transform="translate(1101.294 1179.465)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></line>
                                <path id="Path_54445" data-name="Path 54445"
                                    d="M291.733,32.235h6.362a.4.4,0,0,1,.338.188l4.479,7.216a1.261,1.261,0,0,1,.19.665v5.1a1.46,1.46,0,0,1-1.46,1.46h-1.3"
                                    transform="translate(818.182 1132.596)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></path>
                                <circle id="Ellipse_200" data-name="Ellipse 200" cx="3.068" cy="3.068"
                                    r="3.068" transform="translate(1112.393 1176.449)" fill="none"
                                    stroke="currentcolor" stroke-linecap="round" stroke-width="1.5"></circle>
                                <path id="Path_54446" data-name="Path 54446"
                                    d="M131.987,165.909a3.068,3.068,0,1,1-3.068-3.068A3.068,3.068,0,0,1,131.987,165.909Z"
                                    transform="translate(969.308 1013.608)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></path>
                                <path id="Path_54447" data-name="Path 54447"
                                    d="M340,62.32h-3.635a.293.293,0,0,0-.289.346l.765,4.31a.415.415,0,0,0,.408.341h6.064"
                                    transform="translate(777.784 1105.187)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></path>
                                <line id="Line_319" data-name="Line 319" x2="4.116"
                                    transform="translate(1086.602 1165.636)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></line>
                                <line id="Line_320" data-name="Line 320" x2="4.389"
                                    transform="translate(1088.04 1169.229)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></line>
                                <line id="Line_321" data-name="Line 321" x2="5.754"
                                    transform="translate(1086.714 1176.415)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></line>
                                <line id="Line_322" data-name="Line 322" x2="5.88"
                                    transform="translate(1084.586 1172.822)" fill="none" stroke="currentcolor"
                                    stroke-linecap="round" stroke-width="1.5"></line>
                            </g>
                        </svg>
                        Shipping
                    </button>
                    <button id="btnDiscount"
                        class="text-xs hover:text-yellow-dark transition duration-150 flex flex-col items-center gap-1 w-fit">
                        <svg id="Component_63_1" data-name="Component 63 – 1" xmlns="http://www.w3.org/2000/svg"
                            width="29.339" height="21.5" viewBox="0 0 29.339 21.5" class="icon icon-free-shipping">
                            <path id="Rectangle_8832" data-name="Rectangle 8832"
                                d="M3-.75H24.839A3.754,3.754,0,0,1,28.589,3V17a3.754,3.754,0,0,1-3.75,3.75H3A3.754,3.754,0,0,1-.75,17V3A3.754,3.754,0,0,1,3-.75Zm21.839,20A2.253,2.253,0,0,0,27.089,17V3A2.253,2.253,0,0,0,24.839.75H3A2.253,2.253,0,0,0,.75,3V17A2.253,2.253,0,0,0,3,19.25Z"
                                transform="translate(0.75 0.75)" fill="currentcolor"></path>
                            <path id="Line_339" data-name="Line 339"
                                d="M2.524.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H2.524a.75.75,0,0,1,.75.75A.75.75,0,0,1,2.524.75Z"
                                transform="translate(0.75 10.75)" fill="currentcolor"></path>
                            <path id="Line_340" data-name="Line 340"
                                d="M10.22.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H10.22a.75.75,0,0,1,.75.75A.75.75,0,0,1,10.22.75Z"
                                transform="translate(18.369 10.75)" fill="currentcolor"></path>
                            <path id="Line_341" data-name="Line 341"
                                d="M0,6.822a.75.75,0,0,1-.75-.75V0A.75.75,0,0,1,0-.75.75.75,0,0,1,.75,0V6.072A.75.75,0,0,1,0,6.822Z"
                                transform="translate(10.566 14.677)" fill="currentcolor"></path>
                            <path id="Line_342" data-name="Line 342"
                                d="M0,6.229a.75.75,0,0,1-.75-.75V0A.75.75,0,0,1,0-.75.75.75,0,0,1,.75,0V5.479A.75.75,0,0,1,0,6.229Z"
                                transform="translate(10.566 0.75)" fill="currentcolor"></path>
                            <path id="Path_54586" data-name="Path 54586"
                                d="M127.382,79.8c-.186,0-.349,0-.492,0l-.259,0a.75.75,0,0,1-.73-.923c.033-.137.818-3.382,2.535-4.762a3.52,3.52,0,0,1,2.209-.823,2.955,2.955,0,0,1,2.223,1,2.719,2.719,0,0,1,.672,2.046,3.036,3.036,0,0,1-1.091,2.108A7.811,7.811,0,0,1,127.382,79.8Zm3.263-5.015a2.041,2.041,0,0,0-1.269.492,7.134,7.134,0,0,0-1.745,3.021,6.2,6.2,0,0,0,3.866-1.019,1.529,1.529,0,0,0,.547-1.063,1.234,1.234,0,0,0-.293-.931A1.454,1.454,0,0,0,130.645,74.79Z"
                                transform="translate(-116.064 -67.705)" fill="currentcolor"></path>
                            <path id="Path_54587" data-name="Path 54587"
                                d="M55.374,79.8a7.812,7.812,0,0,1-5.067-1.362,3.036,3.036,0,0,1-1.091-2.108,2.719,2.719,0,0,1,.672-2.046,2.955,2.955,0,0,1,2.223-1,3.52,3.52,0,0,1,2.208.822c1.717,1.38,2.5,4.625,2.535,4.762a.75.75,0,0,1-.73.923l-.259,0C55.722,79.8,55.56,79.8,55.374,79.8ZM52.111,74.79a1.454,1.454,0,0,0-1.107.5,1.234,1.234,0,0,0-.293.931,1.529,1.529,0,0,0,.547,1.063A6.2,6.2,0,0,0,55.123,78.3a7.155,7.155,0,0,0-1.744-3.021A2.041,2.041,0,0,0,52.111,74.79Z"
                                transform="translate(-45.559 -67.705)" fill="currentcolor"></path>
                            <path id="Line_343" data-name="Line 343"
                                d="M3.206,3.956a.748.748,0,0,1-.53-.22L-.53.53A.75.75,0,0,1-.53-.53.75.75,0,0,1,.53-.53L3.736,2.675a.75.75,0,0,1-.53,1.28Z"
                                transform="translate(10.566 11.353)" fill="currentcolor"></path>
                            <path id="Line_344" data-name="Line 344"
                                d="M0,3.956a.748.748,0,0,1-.53-.22.75.75,0,0,1,0-1.061L2.675-.53a.75.75,0,0,1,1.061,0,.75.75,0,0,1,0,1.061L.53,3.736A.748.748,0,0,1,0,3.956Z"
                                transform="translate(7.359 11.353)" fill="currentcolor"></path>
                            <path id="Line_345" data-name="Line 345"
                                d="M5.515.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H5.515a.75.75,0,0,1,.75.75A.75.75,0,0,1,5.515.75Z"
                                transform="translate(19.479 15.268)" fill="currentcolor"></path>
                            <path id="Line_346" data-name="Line 346"
                                d="M2.757.75H0A.75.75,0,0,1-.75,0,.75.75,0,0,1,0-.75H2.757a.75.75,0,0,1,.75.75A.75.75,0,0,1,2.757.75Z"
                                transform="translate(19.479 17.776)" fill="currentcolor"></path>
                        </svg>
                        Discount
                    </button>
                </div>
                <span class="block w-full h-[1px] bg-gray-200 my-4"></span>

                <div>
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl">Subtotal</h1>
                        <h1 class="text-xl">Rp. {{ number_format($totalPrice) }}</h1>
                    </div>
                    <p>Taxes and shipping calculated at checkout</p>

                    <div class="flex flex-col gap-2 mt-6">
                        <div class="flex-1 block btnOrder text-center bg-yellow-dark w-full mx-auto relative">
                            <a href="{{ route('checkout') }}"
                                class="bg-transparent z-10 relative w-full px-6 py-3 block mx-auto text-white">
                                Check Out
                            </a>
                        </div>
                        <div class="flex-1 block btnOrder text-center bg-yellow-dark w-full mx-auto relative">
                            <a href="{{ route('cart') }}"
                                class="bg-transparent z-10 relative w-full px-6 py-3 block mx-auto text-white">
                                View Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="noteContent" class="invisible fixed bottom-0 max-w-sm w-full bg-white">
            <div class="px-8 sm:py-6 py-4 shadow-cartHead">
                <textarea name="note" id="note" cols="30" rows="3"
                    class="min-h-[120px] w-full border border-blue-darker outline-blue-darker p-4 placeholder-blue-darker text-blue-darker"
                    placeholder="Enter the text here..."></textarea>
            </div>
        </div>

        <div id="shippingContent" class="invisible fixed bottom-0 max-w-sm w-full bg-white">
            <div class="px-8 sm:py-6 py-4 shadow-cartHead">
                <div class="flex justify-end">
                    <button id="btnCloseShipping">
                        <i class="icon-close text-[10px]"></i>
                    </button>
                </div>

                <div class="mt-4">
                    <label class="text-blue-darker" for="country">Country</label>
                    <select name="country" id="country"
                        class="w-full border border-blue-darker outline-blue-darker px-4 py-2 placeholder-blue-darker text-blue-darker mt-2">
                        <option value="america">America</option>
                        <option value="germany">Germany</option>
                        <option value="indonesia">Indonesia</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label class="text-blue-darker" for="zip">Zip/Postal Code</label>
                    <input type="number" name="zip" id="zip"
                        class="w-full border border-blue-darker outline-blue-darker px-4 py-2 placeholder-blue-darker text-blue-darker mt-2"
                        placeholder="Enter zip/postal code...">
                </div>
                <button class="block btnOrder mt-4 bg-yellow-dark w-full relative">
                    <div class="bg-transparent z-10 relative w-full px-4 py-2 block text-white text-center">
                        Calculate Shipping
                    </div>
                </button>
            </div>
        </div>

        <div id="discountContent" class="invisible fixed bottom-0 max-w-sm w-full bg-white">
            <div class="px-8 sm:py-6 py-4 shadow-cartHead">
                <input name="discount" id="discount"
                    class="w-full border border-blue-darker outline-blue-darker px-4 py-2 placeholder-blue-darker text-blue-darker"
                    placeholder="Enter discount code...">
                <button class="block btnOrder mt-2 bg-yellow-dark w-fit relative">
                    <div class="bg-transparent z-10 relative w-fit px-4 py-2 block text-white text-center">
                        Save
                    </div>
                </button>
            </div>
        </div>
    @else
        <button class="fixed top-4 right-4" wire:click="closeCartSide()"
            onclick="document.body.style.overflow = 'unset'">
            <i class="icon-close text-xl font-bold text-blue-darker"></i>
        </button>

        <div class="h-full w-full flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold text-blue-darker">
                Your cart is empty
            </h1>

            <a href="{{ route('menu') }}" class="block btnOrder mt-4 bg-yellow-dark w-fit mx-auto relative">
                <div class="bg-transparent z-10 relative w-fit mx-auto px-8 py-3 block text-white text-center">
                    Continue Shopping
                </div>
            </a>
        </div>
    @endif
</div>

<script>
    const btnNote = document.querySelector('#btnNote');
    const btnShipping = document.querySelector('#btnShipping');
    const btnCloseShipping = document.querySelector('#btnCloseShipping');
    const btnDiscount = document.querySelector('#btnDiscount');
    const noteContent = document.querySelector('#noteContent');
    const shippingContent = document.querySelector('#shippingContent');
    const discountContent = document.querySelector('#discountContent');

    btnNote.addEventListener("click", () => {
        noteContent.classList.toggle("invisible");
        shippingContent.classList.add("invisible");
        discountContent.classList.add("invisible");
    })

    btnDiscount.addEventListener("click", () => {
        discountContent.classList.toggle("invisible");
        noteContent.classList.add("invisible");
        shippingContent.classList.add("invisible");
    })

    btnShipping.addEventListener("click", () => {
        shippingContent.classList.toggle("invisible");
        noteContent.classList.add("invisible");
        discountContent.classList.add("invisible");
    })
    btnCloseShipping.addEventListener("click", () => {
        shippingContent.classList.add("invisible");
    })
</script>
