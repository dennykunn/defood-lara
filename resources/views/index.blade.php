@extends('layouts.simple.master')
@section('title', 'Home')
@section('style')
    @livewireStyles
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/assets/styles/swiper/swiper.min.css" />
@endsection
@section('content')
    <section id="banner">
        <div class="swiper relative overflow-x-hidden">
            <div class="swiper-wrapper w-full max-h-screen h-screen">
                <div class="swiper-slide relative bg-no-repeat bg-cover bg-center">
                    <img src="/assets/images/banner/banner-3.webp" alt="banner-3.webp"
                        class="w-full h-screen object-cover bg-right" />

                    <div class="absolute inset-0 lg:bg-transparent bg-black/70 z-10 w-full h-full flex items-center">
                        <div class="container mx-auto">
                            <div class="lg:max-w-2xl px-4 text-center">
                                <h1 class="font-tangerine font-bold sm:text-5xl text-4xl text-yellow-dark">50% On All
                                </h1>
                                <h1 class="sm:text-5xl text-3xl lg:whitespace-nowrap text-white font-bold">Hot & Spicy
                                    Chicken Varieties
                                </h1>
                                <p class="mt-4 font-semibold text-white lg:text-lg">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit. Voluptate labore doloribus sed quam laborum.</p>
                                <div class="block btnOrder mt-6 bg-yellow-dark w-fit mx-auto relative">
                                    <a href="{{ route('menu') }}"
                                        class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-sm text-white">
                                        Order Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative bg-no-repeat bg-cover bg-center">
                    <img src="/assets/images/banner/banner-2.webp" alt="banner-2.webp"
                        class="w-full h-screen object-cover bg-right" />

                    <div class="absolute inset-0 lg:bg-transparent bg-black/70 z-10 w-full h-full flex items-center">
                        <div class="container mx-auto">
                            <div class="lg:max-w-2xl mx-auto px-4 text-center">
                                <h1 class="font-tangerine font-bold sm:text-5xl text-4xl text-yellow-dark">Mega
                                    Discounts On</h1>
                                <h1 class="sm:text-5xl text-3xl lg:whitespace-nowrap text-white font-bold">Tasty Bites &
                                    Healthy Foods
                                </h1>
                                <p class="mt-4 font-semibold text-white lg:text-lg">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit. Voluptate labore doloribus sed quam laborum.</p>
                                <div class="btnOrder mt-6 bg-yellow-dark w-fit mx-auto relative">
                                    <a href="{{ route('menu') }}"
                                        class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-sm text-white">Order
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative bg-no-repeat bg-cover bg-center">
                    <img src="/assets/images/banner/banner-1.webp" alt="banner-1.webp"
                        class="w-full h-screen object-cover bg-right" />

                    <div class="absolute inset-0 lg:bg-transparent bg-black/70 z-10 w-full h-full flex items-center">
                        <div class="container mx-auto">
                            <div class="lg:max-w-2xl px-4 text-center">
                                <h1 class="font-tangerine font-bold sm:text-5xl text-4xl text-yellow-dark">Spicy Dinner
                                </h1>
                                <h1 class="sm:text-5xl text-3xl lg:whitespace-nowrap text-white font-bold">Healthy Hot &
                                    Spicy Thai
                                    Foods
                                </h1>
                                <p class="mt-4 font-semibold text-white md:text-lg">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit. Voluptate labore doloribus sed quam laborum.</p>
                                <div class="btnOrder mt-6 bg-yellow-dark w-fit mx-auto relative">
                                    <a href="{{ route('menu') }}"
                                        class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-sm text-white">Order
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="popular-dishes">
        <div class="overflow-x-hidden relative w-full bg-fixed bg-center bg-no-repeat bg-cover"
            style="background-image: url('/assets/images/other/parallax.webp')">
            <div class="h-full container mx-auto px-4 py-20">
                <div class="h-full flex items-center relative z-10">
                    <div class="flex md:flex-row flex-col xl:gap-16 lg:gap-12 md:gap-10 gap-8">
                        <div data-aos="fade-right" data-aos-once='true' class="flex-shrink-0">
                            <h1 class="text-3xl text-yellow-dark font-bold font-tangerine md:text-right">Popular Dishes
                                Of</h1>
                            <h1 class="text-3xl text-blue-darker font-bold">Our Restaurant</h1>
                        </div>
                        <div data-aos="fade-left" data-aos-once='true' class="text-blue-darker font-bold">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nulla, eaque dolorum est
                            doloribus
                            unde!
                            Magni ratione nemo, consequuntur alias doloribus reprehenderit a mollitia quibusdam animi
                            ipsam porro at
                            amet
                            voluptatibus quasi nesciunt eligendi fuga tempore!
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="mt-12 swiper-2 overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach ($categories as $category)
                                <div data-aos="fade-up" data-aos-duration="500" data-aos-once='true'
                                    class="relative group swiper-slide group overflow-hidden rounded-lg">
                                    <img src="{{ Storage::url($category->image) }}"
                                        class="h-full w-full max-h-[350px] object-cover object-center scale-110 group-hover:scale-100 transition duration-500"
                                        alt="{{ $category->slug }}" />
                                    <div
                                        class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-black/70 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                        <a href={{ route('menu') }}
                                            class="block font-tangerine font-bold text-white text-5xl tracking-[.4em] group-hover:tracking-normal hover:text-yellow-dark transition-all duration-700 whitespace-nowrap capitalize">{{ $category->name }}</a>
                                        <div class="btnOrder mt-2 bg-yellow-dark w-fit mx-auto relative">
                                            <a href={{ route('menu') }}
                                                class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-sm text-white">Order
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="absolute inset-0 w-full h-full bg-white/90"></div>
        </div>
    </section>

    <section id="chef-Iconic-menus">
        <div class="overflow-x-hidden container mx-auto px-4 py-20">
            <div class="text-center" data-aos="fade-down" data-aos-once='true'>
                <h3 class="font-tangerine text-yellow-dark text-3xl">Yummy & Delicious</h3>
                <h1 class="text-blue-darker font-bold text-4xl -mt-2">Chef's Iconic Menus</h1>
            </div>

            <livewire:home-menu />
        </div>
    </section>

    <section id="discount-menu">
        <div class="overflow-hidden relative w-full md:bg-center bg-no-repeat bg-cover md:h-fit h-[130vh] md:block flex items-end"
            style="background-image: url('/assets/images/other/discount.webp')">
            <div data-aos="fade-up" data-aos-once="true"
                class="relative z-10 md:h-full h-fit max-w-3xl mx-auto px-4 md:py-20 py-8 md:bg-transparent bg-blue-darker text-center text-white">
                <h1 class="font-tangerine font-bold md:text-5xl text-3xl">Upto 25% off
                </h1>
                <h1 class="font-bold md:text-5xl text-3xl mt-2">On Italian, Mexican,
                    And Indian Cuisine</h1>
                <p class="text-sm font-semibold mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat blanditiis in nesciunt architecto
                    rerum earum
                    hic, facilis quam quod harum consequuntur repellat recusandae aliquid, optio placeat? Eveniet sunt
                    assumenda
                    nobis
                    beatae ullam, asperiores vero aspernatur.
                </p>

                <div class="btnOrder mt-10 bg-yellow-dark w-fit mx-auto relative">
                    <a href="{{ route('menu') }}"
                        class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-white">Grap Your Offer</a>
                </div>
            </div>

            <div class="absolute inset-0 w-full h-full bg-black/70"></div>
        </div>
    </section>

    <section id="mouthwatering-seasonal-menus">
        <div class="bg-yellow-dark/10">
            <div class="xl:flex items-center">
                <div class="xl:flex-shrink-0 xl:w-[450px] w-full px-8 xl:py-0 py-12">
                    <h1 data-aos="fade-down" data-aos-once='true'
                        class="text-3xl font-bold text-yellow-dark font-tangerine">
                        Mouthwatering</h1>
                    <h1 data-aos="fade-right" data-aos-once='true' class="text-3xl font-bold text-blue-darker">
                        Seasonal Menus</h1>
                    <p data-aos="fade-right" data-aos-once='true' class="mt-6 font-semibold text-blue-darker">Sodales
                        Neque
                        Sodales Ut Etiam Sit Amet Nisl. Enim Sed Faucibus
                        Turpis In Eu Mi Bibendum Neque. Vitae Congue Mauris Rhoncus Aenean.</p>

                    <div data-aos="fade-up" data-aos-once='true' class="btnOrder mt-6 bg-yellow-dark w-fit relative">
                        <a href="{{ route('menu') }}"
                            class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-white">Shop Now</a>
                    </div>
                </div>

                <div class="xl:flex-1 grid md:grid-cols-3 xs:grid-cols-2 grid-cols-1">
                    @foreach ($seasonal_menus as $seasonal)
                        <div class="col-span-1 relative group group overflow-hidden">
                            <img src="{{ Storage::url($seasonal->image) }}"
                                class="h-full w-full scale-110 group-hover:scale-100 transition duration-500"
                                alt="{{ $seasonal->slug }}" />
                            <div
                                class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-black/70 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <a href="{{ route('menu') }}"
                                    class="block font-tangerine font-bold text-white xl:text-5xl text-4xl tracking-[.4em] group-hover:tracking-normal hover:text-yellow-dark transition-all duration-700 whitespace-nowrap">{{ $seasonal->name }}</a>
                                <div class="btnOrder mt-2 bg-yellow-dark w-fit mx-auto relative">
                                    <a href="{{ route('menu') }}"
                                        class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-sm text-white">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@section('script')
    @livewireScripts
    <!-- Swiper JS -->
    <script type="module">
        import Swiper from "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs";

        const swiper = new Swiper(".swiper", {
            // loop: true,
            effect: "fade",
            grabCursor: true,
            speed: 1000,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        const swiper2 = new Swiper(".swiper-2", {
            loop: true,
            grabCursor: true,
            speed: 500,
            spaceBetween: 30,
            breakpoints: {
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
@endsection
