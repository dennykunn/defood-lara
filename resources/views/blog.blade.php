@extends('layouts.simple.master')
@section('title', 'Blog')
@section('content')
    <x-banner>
    @section('banner-title', 'Blog')
</x-banner>

<section id="blog">
    <div class="container mx-auto md:py-20 py-16 px-4 flex lg:flex-row flex-col gap-8">
        <div id="category-filter" data-aos="fade-up" data-aos-once='true'
            class="lg:sticky lg:top-24 fixed top-0 left-0 lg:flex-shrink-0 lg:z-auto z-[60] lg:h-fit lg:w-fit w-screen lg:bg-transparent bg-black/70 lg:block hidden">
            <div
                class="bg-white lg:max-w-fit max-w-sm w-full lg:h-fit h-screen lg:shadow-xl lg:rounded-xl lg:overflow-hidden overflow-y-auto overflow-x-hidden">
                <div
                    class="fixed top-0 left-0 max-w-sm w-full bg-white flex justify-between lg:hidden py-2 px-4 border-b border-gray-300 z-50">
                    <div class="">
                        <h4 class="text-blue-darker">Category</h4>
                    </div>
                    <button id="close-category-filter" class="text-blue-darker w-fit">
                        <i class="icon-close text-xl"></i>
                    </button>
                </div>

                <div class="hs-accordion-group lg:w-[400px] lg:mt-0 mt-16">
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
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Burger
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                French Fries
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Fried Chiken
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Grilled Chicken Wings
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Hot Spicy Egg Noodles
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Italian Fried Calamari
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Naan With Garlic Sesoning
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Noodles
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Pizza With Salami Cheese
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Spice Meals
                                            </a>
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
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Juice
                                            </a>
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Margarita
                                            </a>
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
                                            <a href="#"
                                                class="block text-blue-darker hover:text-yellow-dark transition duration-150">
                                                Ice Cream
                                            </a>
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
            </div>

            <div class="grid grid-cols-1 md:gap-16 gap-10 lg:mt-0 md:mt-12 sm:mt-10 mt-8">
                <div data-aos="fade-up" data-aos-once="true" class="col-span-1 group">
                    <div class="overflow-hidden relative rounded-xl">
                        <img src="/assets/images/blog/1.jpg" alt="blog/1.jpg"
                            class="w-full bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-0 left-0 h-full w-full flex items-center justify-center">
                            <div
                                class="btnOrder bg-yellow-dark w-fit mx-auto relative opacity-0 group-hover:opacity-100 transition duration-500">
                                <button
                                    class="bg-transparent z-10 relative w-fit px-8 py-2 block mx-auto text-white">Read
                                    More</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-2">
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-calendar text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Jun 30
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-user text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Pak Syahril
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-comment-alt text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Comment 1
                            </p>
                        </div>
                    </div>

                    <a href="#"
                        class="mt-3 text-2xl font-bold text-blue-darker hover:text-yellow-dark transition duration-500 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ut!
                    </a>
                    <h1 class="mt-2 text-blue-darker line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nulla natus corporis
                        temporibus ipsum iure dignissimos earum neque qui expedita quis, rem quam doloremque ex
                        numquam labore. Inventore quisquam odio consequuntur adipisci nemo deserunt, quasi
                        doloremque libero, eius ipsa harum itaque cum quibusdam omnis corporis! Nemo similique
                        architecto quis saepe?
                    </h1>
                </div>

                <div data-aos="fade-up" data-aos-once="true" class="col-span-1 group">
                    <div class="overflow-hidden relative rounded-xl">
                        <img src="/assets/images/blog/2.jpg" alt="blog/2.jpg"
                            class="w-full bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-0 left-0 h-full w-full flex items-center justify-center">
                            <div
                                class="btnOrder bg-yellow-dark w-fit mx-auto relative opacity-0 group-hover:opacity-100 transition duration-500">
                                <button
                                    class="bg-transparent z-10 relative w-fit px-8 py-2 block mx-auto text-white">Read
                                    More</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-2">
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-calendar text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Jun 30
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-user text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Pak Syahril
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-comment-alt text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Comment 1
                            </p>
                        </div>
                    </div>

                    <a href="#"
                        class="mt-3 text-2xl font-bold text-blue-darker hover:text-yellow-dark transition duration-500 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ut!
                    </a>
                    <h1 class="mt-2 text-blue-darker line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nulla natus corporis
                        temporibus ipsum iure dignissimos earum neque qui expedita quis, rem quam doloremque ex
                        numquam labore. Inventore quisquam odio consequuntur adipisci nemo deserunt, quasi
                        doloremque libero, eius ipsa harum itaque cum quibusdam omnis corporis! Nemo similique
                        architecto quis saepe?
                    </h1>
                </div>

                <div data-aos="fade-up" data-aos-once="true" class="col-span-1 group">
                    <div class="overflow-hidden relative rounded-xl">
                        <img src="/assets/images/blog/3.jpg" alt="blog/3.jpg"
                            class="w-full bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-0 left-0 h-full w-full flex items-center justify-center">
                            <div
                                class="btnOrder bg-yellow-dark w-fit mx-auto relative opacity-0 group-hover:opacity-100 transition duration-500">
                                <button
                                    class="bg-transparent z-10 relative w-fit px-8 py-2 block mx-auto text-white">Read
                                    More</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-2">
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-calendar text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Jun 30
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-user text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Pak Syahril
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-comment-alt text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Comment 1
                            </p>
                        </div>
                    </div>

                    <a href="#"
                        class="mt-3 text-2xl font-bold text-blue-darker hover:text-yellow-dark transition duration-500 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ut!
                    </a>
                    <h1 class="mt-2 text-blue-darker line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nulla natus corporis
                        temporibus ipsum iure dignissimos earum neque qui expedita quis, rem quam doloremque ex
                        numquam labore. Inventore quisquam odio consequuntur adipisci nemo deserunt, quasi
                        doloremque libero, eius ipsa harum itaque cum quibusdam omnis corporis! Nemo similique
                        architecto quis saepe?
                    </h1>
                </div>

                <div data-aos="fade-up" data-aos-once="true" class="col-span-1 group">
                    <div class="overflow-hidden relative rounded-xl">
                        <img src="/assets/images/blog/4.jpg" alt="blog/4.jpg"
                            class="w-full bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-0 left-0 h-full w-full flex items-center justify-center">
                            <div
                                class="btnOrder bg-yellow-dark w-fit mx-auto relative opacity-0 group-hover:opacity-100 transition duration-500">
                                <button
                                    class="bg-transparent z-10 relative w-fit px-8 py-2 block mx-auto text-white">Read
                                    More</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-2">
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-calendar text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Jun 30
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-user text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Pak Syahril
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex-shrink-0">
                                <i class="icon-comment-alt text-blue-darker"></i>
                            </div>
                            <p class="text-yellow-dark text-sm">
                                Comment 1
                            </p>
                        </div>
                    </div>

                    <a href="#"
                        class="mt-3 text-2xl font-bold text-blue-darker hover:text-yellow-dark transition duration-500 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ut!
                    </a>
                    <h1 class="mt-2 text-blue-darker line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nulla natus corporis
                        temporibus ipsum iure dignissimos earum neque qui expedita quis, rem quam doloremque ex
                        numquam labore. Inventore quisquam odio consequuntur adipisci nemo deserunt, quasi
                        doloremque libero, eius ipsa harum itaque cum quibusdam omnis corporis! Nemo similique
                        architecto quis saepe?
                    </h1>
                </div>
            </div>

            <nav data-aos="fade-up" data-aos-once="true" class="flex justify-center items-center space-x-2 mt-8">
                <a class="w-10 h-10 text-blue-darker hover:text-white hover:bg-yellow-dark inline-flex items-center justify-center gap-2 rounded-full transition duration-500"
                    href="#">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="w-10 h-10 bg-yellow-dark text-white inline-flex items-center justify-center text-sm font-medium rounded-full transition duration-500"
                    href="#" aria-current="page">1</a>
                <a class="w-10 h-10 text-blue-darker hover:text-white hover:bg-yellow-dark inline-flex items-center justify-center text-sm font-medium transition duration-500 rounded-full"
                    href="#">2</a>
                <a class="w-10 h-10 text-blue-darker hover:text-white hover:bg-yellow-dark inline-flex items-center justify-center text-sm font-medium transition duration-500 rounded-full"
                    href="#">3</a>
                <a class="w-10 h-10 text-blue-darker hover:text-white hover:bg-yellow-dark inline-flex items-center justify-center gap-2 rounded-full transition duration-500"
                    href="#">
                    <span class="sr-only">Next</span>
                    <span aria-hidden="true">»</span>
                </a>
            </nav>
        </div>
    </div>
</section>

@endsection
