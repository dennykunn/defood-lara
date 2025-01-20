<div class="grid lg:grid-cols-4 md:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-8 mt-10">
    @foreach ($menus as $menu)
        <div data-aos="fade-top" data-aos-once='true' class="group col-span-1 flex flex-col">
            <div class="flex-shrink-0 relative rounded-lg overflow-hidden">
                <img src="{{ Storage::url($menu->image) }}" alt="fried-chicken"
                    class="w-full max-h-[250px] rounded-lg object-cover object-center group-hover:scale-110 transition duration-500" />

                <div
                    class="{{ $menu->discount == 0 ? 'hidden' : '' }} absolute top-2 left-2 py-1 px-2 text-xs text-white bg-blue-darker">
                    OFF {{ $menu->discount }}%
                </div>

                <div
                    class="absolute top-1/2 -translate-y-1/2 group-hover:right-4 -right-10 flex flex-col gap-2 transition-all duration-500 z-10">
                    <div
                        class="bg-yellow-dark hover:bg-white h-10 w-10 flex items-center justify-center rounded-full text-white hover:text-blue-darker transition duration-200 relative group/child text-lg">
                        <i class="icon-shopping-cart"></i>
                        <span
                            class="absolute top-1/2 -translate-y-1/2 right-11 w-fit px-1 text-white rounded bg-blue-darker text-[10px] hidden group-hover/child:block whitespace-nowrap">
                            Add to cart
                        </span>
                    </div>

                    @include('livewire.includes.wishlist', [
                        'menu_id' => $menu->id,
                    ])
                </div>
            </div>

            <a href="{{ route('menu_product', ['slug' => $menu->slug]) }}"
                class="flex-1 mt-4 text-center text-blue-darker flex flex-col justify-between items-center">
                <h3 class="font-bold md:text-2xl text-xl group-hover:text-yellow-dark transition duration-300">
                    {{ $menu->name }}
                </h3>

                <div class="flex items-center gap-2">
                    @php
                        $discountedPrice = $menu->price - $menu->price * ($menu->discount / 100);
                    @endphp
                    <p class="font-semibold {{ $menu->discount == 0 ? 'hidden' : '' }}">
                        Rp. {{ number_format($discountedPrice) }}
                    </p>

                    <p
                        class="font-semibold {{ $menu->discount != 0 ? 'line-through decoration-blue-darker text-gray-400' : '' }}">
                        Rp.
                        {{ number_format($menu->price) }}
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
