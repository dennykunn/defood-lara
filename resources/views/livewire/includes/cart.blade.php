@if (Auth::check())
    <div wire:click="addToCart({{ $menu_id }}, {{ session('user_id') }})"
        onclick="document.body.style.overflow = 'hidden'"
        class="bg-yellow-dark hover:bg-white h-10 w-10 flex items-center justify-center rounded-full text-white hover:text-blue-darker transition duration-200 relative group/child text-lg cursor-pointer">
        <i class="icon-shopping-cart"></i>
        <span
            class="absolute top-1/2 -translate-y-1/2 right-11 w-fit px-1 text-white rounded bg-blue-darker text-[10px] hidden group-hover/child:block whitespace-nowrap">
            Add to cart
        </span>
    </div>
@else
    <form action="{{ route('customer_login') }}" method="GET">
        <button type="submit"
            class="bg-yellow-dark hover:bg-white h-10 w-10 flex items-center justify-center rounded-full text-white hover:text-blue-darker transition duration-200 relative group/child text-lg cursor-pointer">
            <i class="icon-shopping-cart"></i>
            <span
                class="absolute top-1/2 -translate-y-1/2 right-11 w-fit px-1 text-white rounded bg-blue-darker text-[10px] hidden group-hover/child:block whitespace-nowrap">
                Add to cart
            </span>
        </button>
    </form>
@endif
