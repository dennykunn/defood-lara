<section id="navbar"
    class="sticky -top-20 z-30 bg-white/80 backdrop-blur-md transition-all duration-300 shadow-cmsNavbar">
    <div class="container mx-auto px-4">
        <div class="w-full h-16 md:h-[72px] lg:h-auto flex items-center">
            <div class="flex items-center justify-between w-full">
                <ul class="w-[40%] hidden lg:flex items-center gap-8 font-semibold">
                    <li class="relative cursor-pointer text-blue-darker hover:text-yellow-dark transition duration-300">
                        <a class="block nav-link-desktop py-7" href="{{ route('home') }}" data-link="/">Home</a>
                    </li>
                    <li class="relative cursor-pointer text-blue-darker hover:text-yellow-dark transition duration-300">
                        <a class="block nav-link-desktop py-7" href="{{ route('menu') }}" data-link="menu">Menu</a>
                    </li>
                    <li class="relative cursor-pointer text-blue-darker hover:text-yellow-dark transition duration-300">
                        <a class="block nav-link-desktop py-7" href="{{ route('about') }}" data-link="about">About</a>
                    </li>
                    <li class="relative cursor-pointer text-blue-darker hover:text-yellow-dark transition duration-300">
                        <a class="block nav-link-desktop py-7" href="{{ route('contact') }}"
                            data-link="contact">Contact</a>
                    </li>
                    <li class="relative cursor-pointer text-blue-darker hover:text-yellow-dark transition duration-300">
                        <a class="block nav-link-desktop py-7" href="{{ route('blog') }}" data-link="blog">Blog</a>
                    </li>
                </ul>

                <button id="openMenu" class="lg:hidden flex items-center">
                    <i class="icon-menu" style="font-size: 24px"></i>
                </button>

                <a href="/">
                    <img src="/assets/images/logo/logo-removebg.webp" alt="Logo Defood" class="md:w-36 w-24" />
                </a>

                <div class="flex items-center justify-end lg:w-[40%]">
                    <button class="relative bg-yellow-dark h-8 w-8 rounded-full group flex items-center justify-center">
                        @php
                            $userName = session('user_name');
                            $words = explode(' ', $userName);
                            $initials = '';
                            $maxWords = count($words) > 2 ? 3 : count($words);
                            for ($i = 0; $i < $maxWords; $i++) {
                                $initials .= strtoupper(substr($words[$i], 0, 1));
                            }
                        @endphp
                        @if (Auth::check())
                            <p class="text-white text-sm">{{ $initials }}</p>
                        @else
                            <i class="fa fa-user text-white"></i>
                        @endif
                        <div
                            class="absolute top-16 right-0 z-10 bg-white divide-y divide-gray-100 border-2 border-yellow-dark rounded shadow w-40 invisible group-hover:top-12 group-hover:visible transition-all duration-300">
                            <ul class="text-sm text-blue-darker text-left">
                                @if (Auth::check())
                                    <li>
                                        <a href="{{ route('customer_logout') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('customer_login') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('customer_register') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Register</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MobileMenu -->
<div
    class="z-50 menuMobile -translate-x-full w-full fixed left-0 top-0 h-screen lg:hidden bg-dark-900/80 transition-all duration-200">
    <div
        class="menuMobileItem max-w-sm -translate-x-full h-full flex flex-col bg-yellow-dark transition-all duration-300 delay-300">
        <button id="closeMenu" class="py-6 px-6 text-white text-right">
            <i class="icon-close"></i>
        </button>

        <ul class="font-semibold text-white">
            <li>
                <a class="nav-link px-6 py-4 w-full hover:bg-white hover:text-yellow-dark transition duration-200 block"
                    href="/" data-link="/">Home</a>
            </li>
            <li>
                <a class="nav-link px-6 py-4 w-full hover:bg-white hover:text-yellow-dark transition duration-200 block"
                    href="/menu" data-link="menu">Menu</a>
            </li>
            <li>
                <a class="nav-link px-6 py-4 w-full hover:bg-white hover:text-yellow-dark transition duration-200 block"
                    href="/about" data-link="about">About</a>
            </li>
            <li>
                <a class="nav-link px-6 py-4 w-full hover:bg-white hover:text-yellow-dark transition duration-200 block"
                    href="/contact" data-link="contact">Contact</a>
            </li>
            <li>
                <a class="nav-link px-6 py-4 w-full hover:bg-white hover:text-yellow-dark transition duration-200 block"
                    href="/blog" data-link="blog">Blog</a>
            </li>
        </ul>
    </div>
</div>
