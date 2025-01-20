<div class="grid lg:grid-cols-2 grid-cols-1 gap-12">
    <div class="col-span-1">
        <img src="{{ Storage::url($menu->image) }}" alt="" class="w-full object-cover object-center rounded-lg">
    </div>

    <div class="col-span-1">
        <h1 class="text-blue-darker text-4xl font-bold">{{ $menu->name }}</h1>

        @php
            $discountedPrice = $menu->price - $menu->price * ($menu->discount / 100);
        @endphp
        <div class="flex items-center gap-4 mt-2">
            <h2
                class="text-2xl font-bold {{ $menu->discount != 0 ? 'line-through decoration-blue-darker text-gray-400' : 'text-blue-darker' }}">
                Rp.
                {{ number_format($menu->price) }}
            </h2>

            <h3 class="text-blue-darker text-lg font-bold {{ $menu->discount == 0 ? 'hidden' : '' }}">
                Rp. {{ number_format($discountedPrice) }}
            </h3>
        </div>

        <div class="mt-6 flex items-center gap-2 text-lg text-yellow-500">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>

        <h2 class="text-yellow-dark font-tangerine text-[38px] mt-6 leading-10">
            Lorem ipsum dolor, sit amet
            consectetur adipisicing elit. Excepturi inventore harum consequatur quod aut beatae voluptatem,
            consectetur non delectus cum?
        </h2>

        <div class="mt-4 space-y-6">
            <div class="flex items-center">
                <h3 class="flex-shrink-0 w-[150px] text-blue-darker font-semibold">Type</h3>

                <p
                    class="min-w-[100px] capitalize flex items-center justify-center py-1 px-4 border border-yellow-dark text-yellow-dark">
                    {{ $menu->type->name }}
                </p>
            </div>

            <div class="flex items-center">
                <h3 class="flex-shrink-0 w-[150px] text-blue-darker font-semibold">Category</h3>

                <p
                    class="min-w-[100px] capitalize flex items-center justify-center py-1 px-4 border border-yellow-dark text-yellow-dark">
                    {{ $menu->category->name }}
                </p>
            </div>

            <div class="flex items-center">
                <h3 class="flex-shrink-0 w-[150px] text-blue-darker font-semibold">Cuisine</h3>

                <p
                    class="min-w-[100px] capitalize flex items-center justify-center py-1 px-4 border border-yellow-dark text-yellow-dark">
                    {{ $menu->cuisine->name }}
                </p>
            </div>

            <div class="flex items-center">
                <h3 class="flex-shrink-0 w-[150px] text-blue-darker font-semibold">Sub total</h3>

                <p id="subtotal" class="flex items-center justify-center text-lg font-semibold text-blue-darker">
                    Rp.
                    {{ $menu->discount != 0 ? number_format($discountedPrice) : number_format($menu->price) }}
                </p>
            </div>
            @php
                $wishlist = App\Models\Wishlist::where('menu_id', $menu->id)
                    ->where('user_id', session('user_id'))
                    ->get();
            @endphp

            @if ($wishlist->isNotEmpty())
                <a href="{{ route('wishlist') }}" class="flex items-center gap-4 text-blue-darker">
                    <i class="fa fa-heart"></i>

                    <p>
                        View wishlist
                    </p>
                </a>
            @else
                <form action="{{ route('store.wishlist', ['id' => $menu->id]) }}" method="POST">
                    @csrf
                    <button class="flex items-center gap-4 text-blue-darker" type="submit">
                        <i class="icon-heart"></i>

                        <p>
                            Add to wishlist
                        </p>
                    </button>
                </form>
            @endif

            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1 grid grid-cols-3 border-2 border-blue-darker">
                    <button
                        class="col-span-1 w-full font-bold bg-white text-blue-darker py-1 text-xl hover:text-white hover:bg-blue-darker transition duration-150"
                        onclick="decreaseTotal()">
                        <i class="icon-minus"></i>
                    </button>
                    <input id="total" type="number" name="total" value="1"
                        class="w-full py-1 text-xl text-center  outline-offset-4 outline-blue-darker/50 z-10 text-blue-darker">
                    <button
                        class="col-span-1 w-full font-bold bg-white text-blue-darker py-1 text-xl hover:text-white hover:bg-blue-darker transition duration-150"
                        onclick="increaseTotal()">
                        <i class="icon-plus"></i>
                    </button>
                </div>

                <div class="btnOrder col-span-2 bg-yellow-dark w-full relative">
                    <button class="bg-transparent z-10 w-full relative px-4 py-1 text-white h-full">
                        Add To Cart
                    </button>
                </div>
                <div class="btnOrder col-span-3 bg-yellow-dark w-full relative">
                    <button class="bg-transparent z-10 w-full relative px-4 py-2.5 text-white">
                        Buy It Now
                    </button>
                </div>
            </div>
        </div>

        <div class="h-0.5 w-full my-10 bg-gray-300"></div>

        <div class="text-blue-darker space-y-6">
            <p class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="38.197" height="21.5" viewBox="0 0 38.197 21.5">
                    <g id="Group_25127" data-name="Group 25127" transform="translate(-1083.836 -1161.835)">
                        <path id="Path_54444" data-name="Path 54444"
                            d="M76.155,6.988H95.1a.132.132,0,0,1,.132.132V23.868"
                            transform="translate(1014.583 1155.597)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></path>
                        <line id="Line_317" data-name="Line 317" x1="4.357"
                            transform="translate(1090.739 1179.465)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_318" data-name="Line 318" x1="11.098"
                            transform="translate(1101.294 1179.465)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <path id="Path_54445" data-name="Path 54445"
                            d="M291.733,32.235h6.362a.4.4,0,0,1,.338.188l4.479,7.216a1.261,1.261,0,0,1,.19.665v5.1a1.46,1.46,0,0,1-1.46,1.46h-1.3"
                            transform="translate(818.182 1132.596)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></path>
                        <circle id="Ellipse_200" data-name="Ellipse 200" cx="3.068" cy="3.068" r="3.068"
                            transform="translate(1112.393 1176.449)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></circle>
                        <path id="Path_54446" data-name="Path 54446"
                            d="M131.987,165.909a3.068,3.068,0,1,1-3.068-3.068A3.068,3.068,0,0,1,131.987,165.909Z"
                            transform="translate(969.308 1013.608)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></path>
                        <path id="Path_54447" data-name="Path 54447"
                            d="M340,62.32h-3.635a.293.293,0,0,0-.289.346l.765,4.31a.415.415,0,0,0,.408.341h6.064"
                            transform="translate(777.784 1105.187)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></path>
                        <line id="Line_319" data-name="Line 319" x2="4.116"
                            transform="translate(1086.602 1165.636)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_320" data-name="Line 320" x2="4.389"
                            transform="translate(1088.04 1169.229)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_321" data-name="Line 321" x2="5.754"
                            transform="translate(1086.714 1176.415)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_322" data-name="Line 322" x2="5.88"
                            transform="translate(1084.586 1172.822)" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                    </g>
                </svg>
                <span class="font-bold">Estimated delivery:</span> 5-7 Days from order date.
            </p>

            <p class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="27.969" height="21.5" viewBox="0 0 27.969 21.5">
                    <g id="Group_25129" data-name="Group 25129" transform="translate(-1025.238 -1129.238)">
                        <rect id="Rectangle_8802" data-name="Rectangle 8802" width="26.469" height="20"
                            rx="3" transform="translate(1025.988 1129.988)" fill="none"
                            stroke="currentcolor" stroke-linecap="round" stroke-width="1.5"></rect>
                        <line id="Line_323" data-name="Line 323" x2="26.469"
                            transform="translate(1025.988 1134.55)" fill="none" stroke="currentcolor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_324" data-name="Line 324" x2="12.4"
                            transform="translate(1031.041 1138.374)" fill="none" stroke="currentcolor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_325" data-name="Line 325" x2="16.364"
                            transform="translate(1031.041 1142.115)" fill="none" stroke="currentcolor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                        <line id="Line_326" data-name="Line 326" x2="13.721"
                            transform="translate(1031.041 1145.855)" fill="none" stroke="currentcolor"
                            stroke-linecap="round" stroke-width="1.5"></line>
                    </g>
                </svg>
                <span class="font-bold">Free Shipping &amp; Returns:</span> On orders above $79
            </p>

            <ul class="flex flex-wrap items-center gap-6" role="list">
                <li>
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="44"
                        height="30" aria-labelledby="pi-visa">
                        <title id="pi-visa">Visa</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff"
                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path
                            d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                            fill="#142688"></path>
                    </svg>
                </li>
                <li>
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="44"
                        height="30" aria-labelledby="pi-master">
                        <title id="pi-master">Mastercard</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff"
                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                        <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                        <path fill="#FF5F00"
                            d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                        </path>
                    </svg>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="44"
                        height="30" aria-labelledby="pi-american_express">
                        <title id="pi-american_express">American Express</title>
                        <g fill="none">
                            <path fill="#000"
                                d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z"
                                opacity=".07"></path>
                            <path fill="#006FCF"
                                d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1">
                            </path>
                            <path fill="#FFF"
                                d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z">
                            </path>
                        </g>
                    </svg>

                </li>
                <li>
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="44" height="30"
                        role="img" aria-labelledby="pi-paypal">
                        <title id="pi-paypal">PayPal</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff"
                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path fill="#003087"
                            d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                        </path>
                        <path fill="#3086C8"
                            d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                        </path>
                        <path fill="#012169"
                            d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                        </path>
                    </svg>
                </li>
                <li>
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="44"
                        height="30" aria-labelledby="pi-diners_club">
                        <title id="pi-diners_club">Diners Club</title>
                        <path opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff"
                            d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path
                            d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z"
                            fill="#3086C8"></path>
                    </svg>
                </li>
                <li>
                    <svg viewBox="0 0 38 24" width="44" height="30" role="img"
                        aria-labelledby="pi-discover" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title id="pi-discover">Discover</title>
                        <path fill="#000" opacity=".07"
                            d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z"
                            fill="#fff"></path>
                        <path
                            d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z"
                            fill="#231F20"></path>
                        <path d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                            fill="url(#pi-paint0_linear)"></path>
                        <path opacity=".65" d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z"
                            fill="url(#pi-paint1_linear)"></path>
                        <path
                            d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z"
                            fill="#231F20"></path>
                        <path
                            d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z"
                            fill="#231F20"></path>
                        <path d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z"
                            fill="#F48120"></path>
                        <defs>
                            <linearGradient id="pi-paint0_linear" x1="21.657" y1="12.275" x2="19.632"
                                y2="9.104" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F89F20"></stop>
                                <stop offset=".25" stop-color="#F79A20"></stop>
                                <stop offset=".533" stop-color="#F68D20"></stop>
                                <stop offset=".62" stop-color="#F58720"></stop>
                                <stop offset=".723" stop-color="#F48120"></stop>
                                <stop offset="1" stop-color="#F37521"></stop>
                            </linearGradient>
                            <linearGradient id="pi-paint1_linear" x1="21.338" y1="12.232" x2="18.378"
                                y2="6.446" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F58720"></stop>
                                <stop offset=".359" stop-color="#E16F27"></stop>
                                <stop offset=".703" stop-color="#D4602C"></stop>
                                <stop offset=".982" stop-color="#D05B2E"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    var initialTotalValue = 1;

    function initializeTotalInput() {
        var totalInput = document.getElementById("total");
        totalInput.value = initialTotalValue;
        totalInput.addEventListener("input", updateSubtotal);
    }

    function decreaseTotal() {
        var totalInput = document.getElementById("total");
        var currentTotal = parseInt(totalInput.value);
        if (currentTotal > 1) {
            currentTotal--;
            totalInput.value = currentTotal;
            updateSubtotal();
        }
    }

    function increaseTotal() {
        var totalInput = document.getElementById("total");
        var currentTotal = parseInt(totalInput.value);
        currentTotal++;
        totalInput.value = currentTotal;
        updateSubtotal();
    }

    function formatPrice(price) {
        return price.toLocaleString("id-ID");
    }

    function updateSubtotal() {
        var totalInput = document.getElementById("total");
        var currentTotal = parseInt(totalInput.value);
        var price = parseFloat('{{ $menu->discount != 0 ? $discountedPrice : $menu->price }}');
        var subtotal = price * currentTotal;
        var formattedSubtotal = "Rp. " + formatPrice(subtotal);
        var subtotalElement = document.getElementById("subtotal");
        subtotalElement.textContent = formattedSubtotal;
    }

    initializeTotalInput();
</script>
