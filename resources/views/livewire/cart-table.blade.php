@if (count($carts) != 0)
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

                                    <th scope="col" class="pb-3.5 w-fit uppercase font-bold text-xl text-left">
                                        QUANTITY
                                    </th>

                                    <th scope="col" class="pb-3.5 w-fit uppercase font-bold text-xl text-right">
                                        TOTAL
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($carts as $cart)
                                    @php
                                        $discountedPrice = $cart->menu->price - $cart->menu->price * ($cart->menu->discount / 100);
                                    @endphp
                                    <tr class="border-b border-gray-200">
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
                                        <td class="py-6 w-fit whitespace-nowrap text-left font-semibold">
                                            <div class="flex items-center gap-6">
                                                <div class="flex border-2 border-blue-darker w-fit mt-2">
                                                    <button
                                                        class="font-bold bg-white text-blue-darker h-10 w-10 flex items-center justify-center hover:text-white hover:bg-blue-darker transition duration-150"
                                                        wire:click="decreaseCart({{ $cart->id }})">
                                                        <i class="icon-minus"></i>
                                                    </button>
                                                    <p
                                                        class="h-10 w-10 flex items-center justify-center text-center z-10 text-blue-darker">
                                                        {{ $cart->quantity }}
                                                    </p>
                                                    <button
                                                        class="font-bold bg-white text-blue-darker h-10 w-10 flex items-center justify-center hover:text-white hover:bg-blue-darker transition duration-150"
                                                        wire:click="increaseCart({{ $cart->id }})">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                                <button type="button" class="-mb-2"
                                                    wire:click="removeFromCart({{ $cart->id }})">
                                                    <i class="icon-trash text-lg hover:text-yellow-dark"></i>
                                                </button>
                                            </div>
                                        </td>

                                        <td class="py-6 w-fit whitespace-nowrap text-right font-bold">
                                            Rp.
                                            {{ $cart->menu->discount != 0 ? number_format($discountedPrice * $cart->quantity) : number_format($cart->menu->price * $cart->quantity) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
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

        <div class="flex md:flex-row flex-col justify-between gap-8 mt-8">
            <div>
                <div class="flex items center gap-2">
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

                    Add note
                </div>
                <textarea name="note" id="note" cols="30" rows="3"
                    class="mt-4 min-h-[120px] w-full border border-blue-darker outline-blue-darker p-4 placeholder-blue-darker text-blue-darker"
                    placeholder="Enter the text here..."></textarea>
            </div>

            <div class="flex flex-col md:items-end items-center gap-4">
                <p class="font-bold">
                    Subtotal Rp.
                    <span class="inline-block ml-2">
                        {{ number_format($totalPrice) }}
                    </span>
                </p>

                <p>Taxes and shipping calculated at checkout</p>

                <div class="block btnOrder bg-yellow-dark md:w-[350px] w-full text-center relative">
                    <a href="{{ route('checkout') }}"
                        class="bg-transparent z-10 relative w-full px-8 py-2 block text-white">
                        Check Out
                    </a>
                </div>

                <div class="flex items-center gap-2 w-full">
                    <input name="discount" id="discount"
                        class="flex-1 border border-blue-darker outline-blue-darker px-4 py-2 placeholder-blue-darker text-blue-darker"
                        placeholder="Discount code...">
                    <button class="flex-shrink-0 block btnOrder bg-yellow-dark w-fit relative">
                        <div class="bg-transparent z-10 relative w-fit px-4 py-2 block text-white text-center">
                            Apply
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="flex flex-col gap-y-6 items-center">
        <h1 class="md:text-3xl text-2xl font-bold text-center">Nothing found in cart!</h1>
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
