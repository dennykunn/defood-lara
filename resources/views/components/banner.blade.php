<section id="banner">
    <div class="relative">
        <div class="w-full">
            <div class="relative bg-no-repeat bg-cover bg-center">
                <img src="/assets/images/banner/contact.webp" alt="contact.webp"
                    class="w-full h-[50vh] object-cover bg-no-repeat bg-right" />

                <div class="w-full h-full absolute inset-0 bg-black/80 flex items-center justify-center">
                    <div class="mx-auto max-w-2xl px-4 text-center">
                        <h1 class="text-3xl lg:whitespace-nowrap text-white font-bold">@yield('banner-title')</h1>
                        <div class="flex items-center gap-4 mt-4">
                            <a href="/"
                                class="block text-xl lg:whitespace-nowrap text-white hover:text-yellow-dark transition duration-300">Home</a>
                            <i class="icon-angle-right text-[10px] text-white"></i>
                            <h3 class="text-xl lg:whitespace-nowrap text-white">@yield('banner-title')</h3>
                            <i
                                class="icon-angle-right text-[10px] text-white @if (empty(trim($__env->yieldContent('banner-subtitle')))) hidden @endif"></i>
                            <h3 class="text-xl lg:whitespace-nowrap text-white">@yield('banner-subtitle')</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
