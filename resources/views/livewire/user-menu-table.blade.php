<div class="container mx-auto lg:py-20 md:py-16 py-10 px-4 flex lg:flex-row flex-col gap-8">
    <div class="lg:flex-shrink-0 flex flex-col">
        <div
            class="bg-white w-full lg:shadow-cmsNavbar rounded-md overflow-hidden overflow-y-auto overflow-x-hidden lg:border-none border-2 border-yellow-dark">
            <input wire:model.live.debounce.300ms="search" type="search" name="search"
                class="lg:text-lg w-full lg:py-2.5 py-2 px-4 outline-offset-1 outline-yellow-dark rounded-md text-yellow-dark"
                placeholder="Search...">
        </div>

        <div id="category-filter"
            class="lg:relative fixed top-0 left-0 lg:z-auto z-[60] lg:h-fit lg:w-fit w-screen lg:bg-transparent bg-black/70 lg:block lg:visible invisible lg:mt-4 lg:opacity-100 opacity-0 transition-all duration-500">
            <div id="category-filter-item"
                class="bg-white lg:max-w-fit max-w-sm w-full lg:h-fit h-screen lg:shadow-cmsNavbar lg:rounded-md lg:overflow-hidden overflow-y-auto overflow-x-hidden lg:translate-x-0 -translate-x-full transition-all duration-500">
                <div
                    class="fixed top-0 left-0 max-w-sm w-full bg-white flex justify-between lg:hidden py-2 px-4 border-b border-gray-300 z-50">
                    <div class="">
                        <h4 class="text-blue-darker">Category & Filter</h4>
                        <p class="text-gray-400 text-sm">{{ $menusCount }} Products</p>
                    </div>
                    <button id="close-category-filter" class="text-blue-darker w-fit">
                        <i class="icon-close text-xl"></i>
                    </button>
                </div>

                <div class="hs-accordion-group lg:w-[400px] lg:mt-0 mt-16">
                    <div class="hs-accordion" id="hs-type">
                        <button
                            class="hs-accordion-toggle relative py-3 px-4 w-full inline-flex items-center justify-between text-xl font-bold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300 capitalize"
                            aria-controls="hs-basic-type">
                            Type
                            <i
                                class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                        </button>
                        <div id="hs-basic-type"
                            class="hs-accordion-content relative pl-8 overflow-hidden hidden transition-[height] duration-300 after:absolute after:left-6 after:top-0 after:h-[100%] after:w-[1px] after:bg-blue-darker/50"
                            aria-labelledby="hs-type">
                            <div class="flex flex-col gap-2">
                                <button onclick="document.body.style.overflow = 'unset'"
                                    class="py-3 pl-4 w-full inline-flex items-center justify-between font-semibold {{ $setTypeId == 0 ? 'text-yellow-dark after:block' : 'hover:text-yellow-dark after:hidden' }} group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:-left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:-left-3 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10"
                                    wire:click="setTypeBy(0)">
                                    All
                                </button>

                                @foreach ($types as $type)
                                    <button onclick="document.body.style.overflow = 'unset'" type="button"
                                        class="py-3 pl-4 w-full inline-flex capitalize items-center justify-between font-semibold {{ $setTypeId == $type->id ? 'text-yellow-dark after:block' : 'hover:text-yellow-dark after:hidden' }} group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:-left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:-left-3 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10"
                                        wire:click="setTypeBy({{ $type->id }})">
                                        {{ $type->name }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-nested-heading-one">
                        <button
                            class="hs-accordion-toggle relative py-3 px-4 w-full inline-flex items-center justify-between text-xl font-bold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300"
                            aria-controls="hs-basic-nested-collapse-one">
                            Category
                            <i
                                class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                        </button>
                        <div id="hs-basic-nested-collapse-one"
                            class="parent-accordian hs-accordion-content relative w-full overflow-hidden hidden transition-[height] duration-300"
                            aria-labelledby="hs-basic-nested-heading-one">
                            <div
                                class="hs-accordion-group p-4 after:absolute after:left-6 after:top-0 after:h-[100%] after:w-[1px] after:bg-blue-darker/50">
                                <button onclick="document.body.style.overflow = 'unset'"
                                    class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold {{ $setCategoryId == 0 ? 'text-yellow-dark after:block' : 'hover:text-yellow-dark after:hidden' }} group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10"
                                    wire:click="setCategoryBy(0)">
                                    All
                                </button>

                                <div class="hs-accordion" id="hs-basic-heading-one">
                                    <button
                                        class="hs-accordion-toggle py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark hs-accordion-active:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 after:hidden hs-accordion-active:after:block"
                                        aria-controls="hs-basic-collapse-one">
                                        Foods
                                        <i
                                            class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                                    </button>
                                    <div id="hs-basic-collapse-one"
                                        class="hs-accordion-content pl-8 overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-one">
                                        <div class="flex flex-col gap-2">
                                            @foreach ($foodsCategory as $food)
                                                <button onclick="document.body.style.overflow = 'unset'" type="button"
                                                    class="block capitalize {{ $setCategoryId == $food->id ? 'text-yellow-dark' : 'text-blue-darker hover:text-yellow-dark transition duration-150' }} text-left"
                                                    wire:click="setCategoryBy({{ $food->id }})">
                                                    {{ $food->name }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="hs-accordion" id="hs-basic-heading-two">
                                    <button
                                        class="hs-accordion-toggle py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark hs-accordion-active:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 after:hidden hs-accordion-active:after:block"
                                        aria-controls="hs-basic-collapse-one">
                                        Drinks
                                        <i
                                            class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                                    </button>
                                    <div id="hs-basic-collapse-two"
                                        class="hs-accordion-content pl-8 overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-two">
                                        <div class="flex flex-col gap-2">
                                            @foreach ($drinksCategory as $drink)
                                                <button onclick="document.body.style.overflow = 'unset'" type="button"
                                                    class="block capitalize {{ $setCategoryId == $drink->id ? 'text-yellow-dark' : 'text-blue-darker hover:text-yellow-dark transition duration-150' }} text-left"
                                                    wire:click="setCategoryBy({{ $drink->id }})">
                                                    {{ $drink->name }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="hs-accordion" id="hs-basic-heading-three">
                                    <button
                                        class="btn-accordian-last hs-accordion-toggle py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark hs-accordion-active:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 after:hidden hs-accordion-active:after:block"
                                        aria-controls="hs-basic-collapse-one">
                                        Desserts
                                        <i
                                            class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                                    </button>
                                    <div id="hs-basic-collapse-three"
                                        class="hs-accordion-content pl-8 overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-three">
                                        <div class="flex flex-col gap-2">
                                            @foreach ($dessertsCategory as $dessert)
                                                <button onclick="document.body.style.overflow = 'unset'" type="button"
                                                    class="block capitalize {{ $setCategoryId == $dessert->id ? 'text-yellow-dark' : 'text-blue-darker hover:text-yellow-dark transition duration-150' }} text-left"
                                                    wire:click="setCategoryBy({{ $dessert->id }})">
                                                    {{ $dessert->name }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-cuisine">
                        <button
                            class="hs-accordion-toggle relative py-3 px-4 w-full inline-flex items-center justify-between text-xl font-bold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300 capitalize"
                            aria-controls="hs-basic-cuisine">
                            cuisine
                            <i
                                class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                        </button>
                        <div id="hs-basic-cuisine"
                            class="hs-accordion-content relative pl-8 overflow-hidden hidden transition-[height] duration-300 after:absolute after:left-6 after:top-0 after:h-[100%] after:w-[1px] after:bg-blue-darker/50"
                            aria-labelledby="hs-cuisine">
                            <div class="flex flex-col gap-2">
                                <button
                                    class="py-3 pl-4 w-full inline-flex items-center justify-between font-semibold {{ $setCuisineId == 0 ? 'text-yellow-dark after:block' : 'hover:text-yellow-dark after:hidden' }} group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:-left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:-left-3 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10"
                                    wire:click="setCuisineBy(0)">
                                    All
                                </button>

                                @foreach ($cuisines as $cuisine)
                                    <button onclick="document.body.style.overflow = 'unset'" type="button"
                                        class="py-3 pl-4 w-full inline-flex capitalize items-center justify-between font-semibold {{ $setCuisineId == $cuisine->id ? 'text-yellow-dark after:block' : 'hover:text-yellow-dark after:hidden' }} group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:-left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:-left-3 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10"
                                        wire:click="setCuisineBy({{ $cuisine->id }})">
                                        {{ $cuisine->name }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-nested-heading-two">
                        <button
                            class="hs-accordion-toggle relative py-3 px-4 w-full inline-flex items-center justify-between text-xl font-bold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300"
                            aria-controls="hs-basic-nested-collapse-two">
                            Filter
                            <i
                                class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                        </button>
                        <div id="hs-basic-nested-collapse-two"
                            class="parent-accordian hs-accordion-content relative w-full overflow-hidden hidden transition-[height] duration-300"
                            aria-labelledby="hs-basic-nested-heading-two">
                            <div
                                class="hs-accordion-group p-4 after:absolute after:left-6 after:top-0 after:h-[100%] after:w-[1px] after:bg-blue-darker/50">
                                <div class="hs-accordion" id="hs-basic-heading-two">
                                    <button
                                        class="hs-accordion-toggle py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark hs-accordion-active:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 after:hidden hs-accordion-active:after:block"
                                        aria-controls="hs-basic-collapse-one">
                                        Prize
                                        <i
                                            class="icon-angle-right text-[10px] hs-accordion-active:rotate-90 transition duration-300"></i>
                                    </button>
                                    <div id="hs-basic-collapse-two"
                                        class="hs-accordion-content pl-8 overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="hs-basic-heading-two">
                                        <div class="flex flex-col gap-2">
                                            <p class="text-blue-darker">The highest price is Rp. 150.000</p>
                                            <div class="flex items-center gap-2 mt-2">
                                                <p class="flex-shrink-0">
                                                    Rp.
                                                </p>
                                                <input type="text"
                                                    class="flex-1 w-full p-2 border border-blue-darker outline-yellow-dark"
                                                    placeholder="0" wire:model.debounce.1000ms="prizeMin"
                                                    onchange="setTimeout(() => {
                                                        document.body.style.overflow = 'unset'
                                                    }, 1000);">
                                                <input type="text"
                                                    class="flex-1 w-full p-2 border border-blue-darker outline-yellow-dark"
                                                    placeholder="150.000" wire:model.debounce.1000ms="prizeMax"
                                                    onchange="setTimeout(() => {
                                                        document.body.style.overflow = 'unset'
                                                    }, 1000);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-1">
        <div class="lg:hidden flex items-center justify-between">
            <button id="open-category-filter" class="flex items-center gap-4">
                <svg class="icon icon-filter flex-shrink-0 text-blue-darker w-6 h-6" aria-hidden="true"
                    focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="none">
                    <path fill-rule="evenodd"
                        d="M4.833 6.5a1.667 1.667 0 1 1 3.334 0 1.667 1.667 0 0 1-3.334 0ZM4.05 7H2.5a.5.5 0 0 1 0-1h1.55a2.5 2.5 0 0 1 4.9 0h8.55a.5.5 0 0 1 0 1H8.95a2.5 2.5 0 0 1-4.9 0Zm11.117 6.5a1.667 1.667 0 1 0-3.334 0 1.667 1.667 0 0 0 3.334 0ZM13.5 11a2.5 2.5 0 0 1 2.45 2h1.55a.5.5 0 0 1 0 1h-1.55a2.5 2.5 0 0 1-4.9 0H2.5a.5.5 0 0 1 0-1h8.55a2.5 2.5 0 0 1 2.45-2Z"
                        fill="currentColor"></path>
                </svg>

                <span class="text-blue-darker font-semibold">Category & Filter</span>
            </button>

            <p class="text-blue-darker">{{ $menusCount }} Products</p>
        </div>

        <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 lg:mt-0 md:mt-12 sm:mt-10 mt-8">
            @foreach ($menus as $menu)
                <div class="group col-span-1 flex flex-col">
                    <div class="flex-shrink-0 relative rounded-lg overflow-hidden">
                        <img src="{{ Storage::url($menu->image) }}" alt="fried-chicken"
                            class="w-full max-h-[250px] rounded-lg object-cover object-center group-hover:scale-110 transition duration-500" />

                        <div
                            class="{{ $menu->discount == 0 ? 'hidden' : '' }} absolute top-2 left-2 py-1 px-2 text-xs text-white bg-blue-darker">
                            OFF {{ $menu->discount }}%
                        </div>

                        <div
                            class="absolute top-1/2 -translate-y-1/2 group-hover:right-4 -right-10 flex flex-col gap-2 transition-all duration-500 z-10">
                            @include('livewire.includes.cart', [
                                'statusCart' => $statusCart,
                                'menu_id' => $menu->id,
                            ])

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

        {{ $menus->links('livewire.includes.custom-pagination') }}
    </div>

    @include('livewire.includes.cart-side', [
        'statusCart' => $statusCart,
    ])
</div>
