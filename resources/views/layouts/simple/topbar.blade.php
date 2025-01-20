<section id="topbar">
    <div class=" bg-yellow-dark">
        <div class="container mx-auto px-4 py-2">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 text-white">
                    <i class="fa fa-clock-o"></i>
                    <span class="md:text-sm text-xs">Opening Hours: 8:00 AM - 8:00 PM</span>
                </div>

                <div class="flex gap-6 items-center text-white">
                    <a href="{{ route('notification') }}" class="flex items-center">
                        <i class="icon-bell"></i>
                    </a>
                    <a href="{{ route('wishlist') }}" class="flex items-center">
                        <i class="icon-heart"></i>
                    </a>
                    <a href="{{ route('cart') }}" class="flex items-center text-lg">
                        <i class="icon-shopping-cart"></i>
                    </a>
                    <a href="{{ route('history') }}" class="flex items-center text-lg">
                        <i class="icon-archive"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
