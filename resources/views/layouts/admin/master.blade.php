<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Defood | Content Management System</title>
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/assets/styles/font-awesome/font-awesome.css" />
    <!-- Themify -->
    <link rel="stylesheet" href="/assets/styles/themify/themify.css" />
    @yield('style')
    @vite(['resources/js/app.js']);
</head>

<body class="overflow-hidden bg-gray-50">
    @include('components.preloader')
    <main>
        <div class="flex">
            <aside id="sidebar"
                class="lg:flex-shrink-0 w-[275px] shadow-cmsSidebar fixed top-0 z-30 bg-white lg:translate-x-0 -translate-x-full transition-all duration-500">
                <div class="flex items-center justify-between bg-white shadow-cmsLogo px-6 h-20">
                    <a href="{{ route('home') }}" class="block">
                        <img src="/assets/images/logo/logo-removebg.webp" alt="Logo Defood" class="w-32">
                    </a>
                </div>

                @php
                    $url = url()->current();
                    $path = parse_url($url, PHP_URL_PATH);
                    $pathSegments = explode('/', $path);
                    $editIndex = array_search('edit', $pathSegments);
                    $editText = $editIndex !== false ? 'edit' : '';
                @endphp

                <div
                    class="lg:bg-transparent bg-white pt-6 w-full h-screen overflow-hidden overflow-y-auto overflow-x-hidden">
                    <a href="{{ route('dashboard') }}" data-link="admin/login"
                        class="sidebar-link group relative py-3 px-4 w-full flex items-center gap-4 transition duration-300 after:absolute after:top-1/2 after:-translate-y-1/2 after:h-[70%] after:w-2 after:bg-yellow-dark after:rounded-full {{ $path == '/admin/dashboard' ? 'bg-yellow-dark/10 after:-right-1' : 'after:-right-4 hover:bg-yellow-dark/10' }}">
                        <i
                            class="icon-home text-blue-darker {{ $path == '/admin/dashboard' ? 'text-yellow-dark' : 'group-hover:text-yellow-dark transition duration-300' }}"></i>
                        <p
                            class="font-semibold text-blue-darker {{ $path == '/admin/dashboard' ? 'text-yellow-dark' : 'group-hover:text-yellow-dark transition duration-300' }}">
                            Dashboard
                        </p>
                    </a>
                    <div class="hs-accordion-group w-full">
                        <div id="accordion"
                            class="hs-accordion {{ $path == '/admin/management-menu/type' || $path == '/admin/management-menu/category' || $path == '/admin/management-menu/cuisine' ? 'active' : '' }}"
                            id="hs-management-menu">
                            <button
                                class="hs-accordion-toggle relative py-3 pl-4 pr-8 w-full inline-flex items-center justify-between font-semibold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300"
                                aria-controls="hs-basic-nested-collapse-one">
                                <div class="flex items-center gap-4">
                                    <i class="icon-package"></i>
                                    Management Menu
                                </div>
                                <i
                                    class="icon-angle-down text-[8px] hs-accordion-active:-rotate-180 rotate-0 transition-all duration-300"></i>
                            </button>
                            <div id="accordionContent"
                                class="hs-accordion-content relative w-full overflow-hidden {{ $path == '/admin/management-menu/type' || $path == '/admin/management-menu/category' || $path == '/admin/management-menu/cuisine' ? '' : 'hidden' }} transition-[height] duration-300"
                                aria-labelledby="hs-management-menu">
                                <div
                                    class="p-4 after:absolute after:left-6 after:-top-2 after:h-[100%] after:w-[1px] after:bg-blue-darker/50">
                                    <a href="{{ route('type-list') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/management-menu/type' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        Type
                                    </a>
                                    <a href="{{ route('category-list') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/management-menu/category' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        Category
                                    </a>
                                    <a href="{{ route('cuisine-list') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/management-menu/cuisine' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        Cuisine
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="accordion"
                            class="hs-accordion {{ $path == '/admin/menu/create' || $path == '/admin/menu/list' || $editText == 'edit' ? 'active' : '' }}"
                            id="hs-menus">
                            <button
                                class="hs-accordion-toggle relative py-3 pl-4 pr-8 w-full inline-flex items-center justify-between font-semibold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300"
                                aria-controls="hs-basic-nested-collapse-two">
                                <div class="flex items-center gap-4">
                                    <i class="fa fa-cube text-lg"></i>
                                    Menus
                                </div>
                                <i
                                    class="icon-angle-down text-[8px] hs-accordion-active:-rotate-180 rotate-0 transition-all duration-300"></i>
                            </button>
                            <div id="accordionContent"
                                class="hs-accordion-content relative w-full overflow-hidden  {{ $path == '/admin/menu/create' || $path == '/admin/menu/list' || $editText == 'edit' ? '' : 'hidden' }} transition-[height] duration-300"
                                aria-labelledby="hs-menus">
                                <div
                                    class="p-4 after:absolute after:left-6 after:-top-2 after:h-[100%] after:w-[1px] after:bg-blue-darker/50">
                                    <a href="{{ route('list-menu') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/menu/list' || $editText == 'edit' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        List Menu
                                    </a>
                                    <a href="{{ route('create-menu') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/menu/create' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        Create Menu
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="accordion"
                            class="hs-accordion {{ $path == '/admin/management-users/admin' || $path == '/admin/management-users/customer' ? 'active' : '' }}"
                            id="hs-management-users">
                            <button
                                class="hs-accordion-toggle relative py-3 pl-4 pr-8 w-full inline-flex items-center justify-between font-semibold hs-accordion-active:text-yellow-dark hs-accordion-active:bg-yellow-dark/10 hover:bg-yellow-dark/10 hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 overflow-hidden after:h-[70%] after:w-2 after:rounded-xl after:absolute after:-right-2 after:top-1/2 after:-translate-y-1/2 after:bg-yellow-dark hs-accordion-active:after:-right-1 after:transition-all after:duration-300"
                                aria-controls="hs-basic-nested-collapse-two">
                                <div class="flex items-center gap-4">
                                    <i data-feather="users" class="h-5 w-5"></i>
                                    Management Users
                                </div>
                                <i
                                    class="icon-angle-down text-[8px] hs-accordion-active:-rotate-180 rotate-0 transition-all duration-300"></i>
                            </button>
                            <div id="accordionContent"
                                class="hs-accordion-content relative w-full overflow-hidden  {{ $path == '/admin/management-users/admin' || $path == '/admin/management-users/customer' ? '' : 'hidden' }} transition-[height] duration-300"
                                aria-labelledby="hs-management-users">
                                <div
                                    class="p-4 after:absolute after:left-6 after:-top-2 after:h-[100%] after:w-[1px] after:bg-blue-darker/50">
                                    <a href="{{ route('management-users.admin') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/management-users/admin' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        Admin
                                    </a>
                                    <a href="{{ route('management-users.customer') }}"
                                        class="py-3 pl-8 w-full inline-flex items-center justify-between font-semibold hover:text-yellow-dark group gap-x-3 text-left text-blue-darker transition duration-300 relative before:absolute before:top-1/2 before:left-2 before:w-4 before:h-[1px] before:bg-blue-darker/50 before:-translate-y-1/2 after:absolute after:top-1/2 after:left-1 after:w-2 after:h-2 after:rounded-full after:bg-yellow-dark after:-translate-y-1/2 after:z-10 {{ $path == '/admin/management-users/customer' ? 'text-yellow-dark' : 'after:hidden' }}">
                                        Customer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="flex-1 overflow-hidden">
                <div
                    class="flex items-center gap-4 lg:justify-end justify-between bg-white shadow-cmsNavbar px-6 md:h-20 h-16 fixed top-0 w-full z-10">
                    <button id="openSidebar" class="lg:hidden block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-align-center status_toggle middle sidebar-toggle">
                            <line x1="18" y1="10" x2="6" y2="10"></line>
                            <line x1="21" y1="6" x2="3" y2="6"></line>
                            <line x1="21" y1="14" x2="3" y2="14"></line>
                            <line x1="18" y1="18" x2="6" y2="18"></line>
                        </svg>
                    </button>

                    <div class="flex gap-4 items-center cursor-pointer relative group md:h-20">
                        @php
                            $adminName = session('admin_name');
                            $words = explode(' ', $adminName);
                            $initials = '';
                            $maxWords = count($words) > 2 ? 3 : count($words);
                            for ($i = 0; $i < $maxWords; $i++) {
                                $initials .= strtoupper(substr($words[$i], 0, 1));
                            }
                        @endphp

                        <p
                            class="md:h-10 h-8 md:w-10 w-8 rounded-lg text-lg bg-yellow-dark text-white font-bold flex items-center justify-center">
                            {{ $initials }}
                        </p>
                        <div class="md:block hidden">
                            <p class="text-sm font-bold">{{ session('admin_name') }}</p>
                            <p class="text-sm text-gray-400 -mt-1 flex gap-1 items-center">
                                {{ session('admin_mail') }}
                                <i class="icon-angle-down text-[8px]"></i>
                            </p>
                        </div>

                        <div
                            class="absolute top-full right-0 rounded-lg bg-white shadow-cmsNavbar w-48 overflow-hidden group-hover:visible invisible translate-y-4 group-hover:translate-y-0 transition-all duration-150">
                            <a href="{{ route('logout') }}"
                                class=" px-4 text-blue-darker uppercase text-sm py-2 hover:bg-yellow-dark/10 hover:text-yellow-dark transition duration-300 flex gap-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                Log Out
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="py-2 bg-white px-6 flex justify-between items-center gap-10 md:mt-14 mt-10 lg:pl-[295px] overflow-x-auto">
                    <h1 class="text-2xl font-bold text-blue-darker">@yield('breadcrumb-title')</h1>

                    <div class="flex items-center gap-2 text-sm text-blue-darker whitespace-nowrap">
                        <a href="{{ route('dashboard') }}"
                            class="block text-blue-darker hover:text-yellow-dark transition duration-300">
                            <i class="icon-home"></i>
                        </a>
                        @yield('breadcrumb-items')
                    </div>
                </div>


                <div class="p-6 bg-gray-50 lg:pl-[295px]">
                    @if ($message = Session::get('success'))
                        <div id="successMessage" class="relative bg-green-500 w-full mb-6 text-white rounded-xl p-4">
                            {{ $message }}
                            <button id="closeMessage" class="text-white absolute top-4 right-4">
                                <i class="icon-close"></i>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div id="errorMessage" class="relative bg-red-500 w-full mb-6 text-white rounded-xl p-4">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul class="list-disc list-inside -mt-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                            <button id="closeMessage" class="text-white absolute top-4 right-4">
                                <i class="icon-close"></i>
                            </button>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
            <div id="bgSidebar"
                class="fixed top-0 left-0 w-[1100px] h-full bg-black/50 z-20 invisible opacity-0 transition-all duration-500">
            </div>
        </div>
    </main>
    <!-- Preline -->
    <script src="/assets/script/preline.min.js"></script>
    <!-- Feather Icon -->
    <script src="/assets/script/feather-icon.min.js"></script>
    <script>
        feather.replace();

        const errorMessage = document.getElementById("errorMessage")
        const successMessage = document.getElementById("successMessage")
        const closeMessage = document.getElementById("closeMessage")

        closeMessage.addEventListener("click", () => {
            errorMessage.classList.add("hidden");
            successMessage.classList.add("hidden");
        })

        // setTimeout(() => {
        //     errorMessage.classList.add("hidden");
        // }, 5000);
        setTimeout(() => {
            successMessage.classList.add("hidden");
        }, 5000);
    </script>
    @yield('script')
</body>

</html>
