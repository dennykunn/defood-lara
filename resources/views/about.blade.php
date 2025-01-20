@extends('layouts.simple.master')
@section('title', 'About')
@section('style')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/assets/styles/swiper/swiper.min.css" />
@endsection
@section('content')
    <x-banner>
    @section('banner-title', 'About')
</x-banner>

<section id="history">
    <div class="overflow-x-hidden container mx-auto px-4 md:py-20 py-16">
        <div class="text-center max-w-5xl mx-auto">
            <h1 data-aos="fade-down" data-aos-once="true"
                class="md:text-5xl text-3xl text-blue-darker font-bold md:mb-6 mb-3">Our History</h1>
            <p data-aos="fade-right" data-aos-once="true" class="md:text-base text-sm">Lorem ipsum dolor, sit amet
                consectetur adipisicing elit. Iste pariatur
                ab repellendus sequi corrupti
                at
                repellat sunt magni libero doloremque nobis est, cumque non adipisci rerum esse accusantium labore
                veniam expedita saepe accusamus deleniti exercitationem explicabo. Deleniti cum maxime quidem amet
                mollitia animi eveniet commodi. Esse tenetur accusamus excepturi eligendi?</p>
            <h1 data-aos="fade-left" data-aos-once="true"
                class="md:mt-6 mt-3 text-blue-darker/70 font-bold md:text-2xl text-xl">- Denny Firmansyah</h1>
            <h3 data-aos="fade-left" data-aos-once="true" class="text-yellow-dark md:text-lg font-bold">Owner</h3>
        </div>

        <div class="mt-8 grid grid-cols-2 gap-8">
            <div data-aos="fade-right" data-aos-once="true" class="col-span-1 relative group group overflow-hidden">
                <img src="/assets/images/other/kitchen-restaurant.webp"
                    class="h-full w-full scale-110 group-hover:scale-100 transition duration-500"
                    alt="kitchen-restaurant.webp" />
                <div
                    class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-black/70 opacity-0 group-hover:opacity-100 transition-all duration-500">
                    <p
                        class="block font-tangerine font-bold text-white xl:text-5xl text-4xl tracking-[.4em] group-hover:tracking-normal transition-all duration-700 whitespace-nowrap">
                        Low-Price Guarantee</p>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-once="true" class="col-span-1 relative group group overflow-hidden">
                <img src="/assets/images/other/dining-out-2.webp"
                    class="h-full w-full scale-110 group-hover:scale-100 transition duration-500"
                    alt="dining-out-2.webp" />
                <div
                    class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center bg-black/70 opacity-0 group-hover:opacity-100 transition-all duration-500">
                    <p
                        class="block font-tangerine font-bold text-white xl:text-5xl text-4xl tracking-[.4em] group-hover:tracking-normal transition-all duration-700 whitespace-nowrap">
                        First Class Quality & Taste</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="discount-menu">
    <div class="overflow-x-hidden relative w-full md:bg-center bg-no-repeat bg-cover h-fit"
        style="background-image: url('/assets/images/other/discount-2.webp')">
        <div class="relative z-10 h-fit max-w-3xl mx-auto px-4 md:py-20 py-16 bg-transparent text-center text-white">
            <h1 data-aos="fade-down" data-aos-once='true' class="font-tangerine font-bold md:text-5xl text-3xl">Upto
                25%
                off
            </h1>
            <h1 data-aos="fade-right" data-aos-once='true' class="font-bold md:text-5xl text-3xl mt-2">On Italian,
                Mexican,
                And Indian Cuisine</h1>
            <p data-aos="fade-left" data-aos-once='true' class="text-sm font-semibold mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat blanditiis in nesciunt architecto
                rerum
                earum
                hic, facilis quam quod harum consequuntur repellat recusandae aliquid, optio placeat? Eveniet sunt
                assumenda
                nobis
                beatae ullam, asperiores vero aspernatur.
            </p>

            <div data-aos="fade-up" data-aos-once='true' class="btnOrder mt-10 bg-yellow-dark w-fit mx-auto relative">
                <button class="bg-transparent z-10 relative w-fit px-4 py-2 block mx-auto text-white">Grap Your
                    Offer</button>
            </div>
        </div>

        <div class="w-full h-full absolute inset-0 bg-black/70"></div>
    </div>
</section>

<section id="chef">
    <div class="container mx-auto px-4 md:py-20 py-16">
        <div data-aos="fade-down" data-aos-once="true" class="text-center">
            <h1 class="md:text-3xl text-2xl text-yellow-dark font-tangerine font-bold">Dedicated Team</h1>
            <h1 class="md:text-3xl text-2xl text-blue-darker font-bold mb-6">Award-Winning Chef's</h1>
        </div>

        <div data-aos="fade-up" data-aos-once="true" class="mt-8 grid md:grid-cols-3 grid-cols-1 gap-8">
            <div class="col-span-1 relative group">
                <div>
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/people/jane-smith.webp" class="h-full w-full transition duration-500"
                            alt="jane-smith.webp" />
                        <div
                            class="absolute top-0 left-0 w-full h-full flex items-end justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="flex items-center gap-6 pb-6">
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all duration-500">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all delay-150 duration-500">
                                    <i class="icon-twitter-alt"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all delay-300 duration-500">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-6 text-center">
                        <h1 class="uppercase sm:text-3xl text-2xl font-bold text-blue-darker">Jane Smith</h1>
                        <h1 class="text-2xl font-bold text-yellow-dark font-tangerine">Head Of Chef</h1>
                    </div>
                </div>
            </div>
            <div class="col-span-1 relative group">
                <div>
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/people/john-doe.webp" class="h-full w-full transition duration-500"
                            alt="john-doe.webp" />
                        <div
                            class="absolute top-0 left-0 w-full h-full flex items-end justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="flex items-center gap-6 pb-6">
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all duration-500">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all delay-150 duration-500">
                                    <i class="icon-twitter-alt"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all delay-300 duration-500">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-6 text-center">
                        <h1 class="uppercase sm:text-3xl text-2xl font-bold text-blue-darker">John Doe</h1>
                        <h1 class="text-2xl font-bold text-yellow-dark font-tangerine">Executive Chef</h1>
                    </div>
                </div>
            </div>
            <div class="col-span-1 relative group">
                <div>
                    <div class="relative overflow-hidden">
                        <img src="/assets/images/people/james-anderson.webp"
                            class="h-full w-full transition duration-500" alt="james-anderson.webp" />
                        <div
                            class="absolute top-0 left-0 w-full h-full flex items-end justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="flex items-center gap-6 pb-6">
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all duration-500">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all delay-150 duration-500">
                                    <i class="icon-twitter-alt"></i>
                                </a>
                                <a href="#" target="_blank"
                                    class="h-8 w-8 rounded-full bg-white flex items-center justify-center hover:bg-yellow-dark text-blue-darker hover:text-white translate-y-16 group-hover:translate-y-0 transition-all delay-300 duration-500">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-6 text-center">
                        <h1 class="uppercase sm:text-3xl text-2xl font-bold text-blue-darker">James Anderson</h1>
                        <h1 class="text-2xl font-bold text-yellow-dark font-tangerine">Decoration Chef
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="bg-blue-darker overflow-x-hidden">
        <div class="md:py-20 py-16">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full lg:w-[60%] md:px-10 px-4 text-center text-gray-200">
                        <h3 class="font-bold md:text-xl text-lg">Lorem ipsum, dolor sit amet consectetur
                            adipisicing
                            elit.
                            Molestias repellat obcaecati, tempore autem perspiciatis itaque exercitationem nemo
                            quo
                            ipsum corporis</h3>
                        <p class="font-semibold italic mt-4">Manager</p>
                        <p class="italic mt-1">Dasilva</p>
                        <div class="mt-4 flex items-center justify-center gap-1">
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                        </div>
                    </div>
                    <div class="swiper-slide w-full lg:w-[60%] md:px-10 px-4 text-center text-gray-200">
                        <h3 class="font-bold md:text-xl text-lg">Lorem ipsum, dolor sit amet consectetur
                            adipisicing
                            elit.
                            Molestias repellat obcaecati, tempore autem perspiciatis itaque exercitationem nemo
                            quo
                            ipsum corporis</h3>
                        <p class="font-semibold italic mt-4">Dancer</p>
                        <p class="italic mt-1">Nova Priest</p>
                        <div class="mt-4 flex items-center justify-center gap-1">
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                        </div>
                    </div>
                    <div class="swiper-slide w-full lg:w-[60%] md:px-10 px-4 text-center text-gray-200">
                        <h3 class="font-bold md:text-xl text-lg">Lorem ipsum, dolor sit amet consectetur
                            adipisicing
                            elit.
                            Molestias repellat obcaecati, tempore autem perspiciatis itaque exercitationem nemo
                            quo
                            ipsum corporis</h3>
                        <p class="font-semibold italic mt-4">Teacher</p>
                        <p class="italic mt-1">John</p>
                        <div class="mt-4 flex items-center justify-center gap-1">
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                        </div>
                    </div>
                    <div class="swiper-slide w-full lg:w-[60%] md:px-10 px-4 text-center text-gray-200">
                        <h3 class="font-bold md:text-xl text-lg">Lorem ipsum, dolor sit amet consectetur
                            adipisicing
                            elit.
                            Molestias repellat obcaecati, tempore autem perspiciatis itaque exercitationem nemo
                            quo
                            ipsum corporis</h3>
                        <p class="font-semibold italic mt-4">Lecturer</p>
                        <p class="italic mt-1">Pak Syahril</p>
                        <div class="mt-4 flex items-center justify-center gap-1">
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                            <i class="fa fa-star-o text-yellow-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="brand-partners">
    <div class="overflow-hidden">
        <div class="container mx-auto md:py-20 py-16 px-4">
            <div class="text-center">
                <h1 class="text-blue-darker md:text-4xl text-3xl font-bold">Brand Partners</h1>
            </div>

            <div class="swiper-2 mt-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/images/partners/high-class-restaurant.webp" class="mx-auto"
                            alt="high-class-restaurant.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/images/partners/mountgrill.webp" class="mx-auto" alt="mountgrill.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/images/partners/luxury-resto.webp" class="mx-auto" alt="luxury-resto.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/images/partners/steakhouse.webp" class="mx-auto" alt="steakhouse.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/images/partners/gent-chef.webp" class="mx-auto" alt="gent-chef.webp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<!-- Swiper JS -->
<script type="module">
    import Swiper from "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs";

    var swiper = new Swiper(".swiper", {
        loop: true,
        grabCursor: true,
        speed: 1000,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
    });
    var swiper2 = new Swiper(".swiper-2", {
        loop: true,
        grabCursor: true,
        speed: 500,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
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
    });
</script>
@endsection
