@if ($paginator->hasPages())
    <nav class="flex justify-center items-center space-x-2 mt-8">
        @if ($paginator->onFirstPage())
            <div
                class="w-10 h-10 cursor-not-allowed bg-yellow-dark text-white flex items-center justify-center rounded-full transition duration-500">
                <span class="block -mt-1">«</span>
            </div>
        @else
            <div class="w-10 h-10 cursor-pointer text-blue-darker hover:text-white hover:bg-yellow-dark flex items-center justify-center rounded-full transition duration-500"
                wire:click="previousPage">
                <span class="block -mt-1">«</span>
            </div>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <span aria-hidden="true">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page"
                            class="w-10 h-10 bg-yellow-dark text-white inline-flex items-center justify-center text-sm font-medium rounded-full transition duration-500 cursor-pointer">
                            {{ $page }}
                        </span>
                    @else
                        <a class="w-10 h-10 text-blue-darker hover:text-white hover:bg-yellow-dark inline-flex items-center justify-center text-sm font-medium transition duration-500 rounded-full cursor-pointer"
                            wire:click="gotoPage({{ $page }})">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <div class="w-10 h-10 cursor-pointer text-blue-darker hover:text-white hover:bg-yellow-dark flex items-center justify-center rounded-full transition duration-500"
                wire:click="nextPage">
                <span class="block -mt-1">»</span>
            </div>
        @else
            <div
                class="w-10 h-10 cursor-not-allowed bg-yellow-dark text-white flex items-center justify-center rounded-full transition duration-500">
                <span class="block -mt-1">»</span>
            </div>
        @endif
    </nav>
@endif
