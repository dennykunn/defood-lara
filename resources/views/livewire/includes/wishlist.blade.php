@if (Auth::check())
    @php
        $wishlist = App\Models\Wishlist::where('menu_id', $menu_id)->where('user_id', session('user_id'))->get();
    @endphp

    @if ($wishlist->isNotEmpty())
        <a href="{{ route('wishlist') }}"
            class="bg-yellow-dark hover:bg-white h-10 w-10 flex items-center justify-center rounded-full text-white hover:text-blue-darker transition duration-200 relative group/child">
            <i class="fa fa-heart"></i>
            <span
                class="absolute top-1/2 -translate-y-1/2 right-11 w-fit p-1 text-white rounded bg-blue-darker text-[10px] hidden group-hover/child:block whitespace-nowrap">
                View wishlist
            </span>
        </a>
    @else
        <button type="button"
            class="bg-yellow-dark hover:bg-white h-10 w-10 flex items-center justify-center rounded-full text-white hover:text-blue-darker transition duration-200 relative group/child"
            wire:click="addToWishlist({{ $menu_id }}, {{ session('user_id') ?? 0 }})">
            <i class="icon-heart"></i>
            <span
                class="absolute top-1/2 -translate-y-1/2 right-11 w-fit p-1 text-white rounded bg-blue-darker text-[10px] hidden group-hover/child:block whitespace-nowrap">
                Add to wishlist
            </span>
        </button>
    @endif
@else
    <form action="{{ route('customer_login') }}" method="GET">
        <button type="submit"
            class="bg-yellow-dark hover:bg-white h-10 w-10 flex items-center justify-center rounded-full text-white hover:text-blue-darker transition duration-200 relative group/child">
            <i class="icon-heart"></i>
            <span
                class="absolute top-1/2 -translate-y-1/2 right-11 w-fit p-1 text-white rounded bg-blue-darker text-[10px] hidden group-hover/child:block whitespace-nowrap">
                Add to wishlist
            </span>
        </button>
    </form>
@endif
