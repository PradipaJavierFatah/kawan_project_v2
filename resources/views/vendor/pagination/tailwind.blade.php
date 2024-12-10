@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 mx-1 bg-gray-200 text-blue-500 rounded cursor-default ">
                &laquo;
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 mx-1 bg-white border rounded hover:bg-gray-100 text-blue-500">
                &laquo;
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-3 py-2 mx-1x">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-2 mx-1 bg-blue-500 text-white-500 font-bold rounded">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-2 mx-1 bg-white border rounded hover:bg-gray-100 text-blue-500">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 mx-1 bg-white border rounded hover:bg-gray-100 text-blue-500 ">
                &raquo;
            </a>
        @else
            <span class="px-3 py-2 mx-1 bg-gray-200 text-blue-500 rounded cursor-default">
                &raquo;
            </span>
        @endif
    </nav>
@endif