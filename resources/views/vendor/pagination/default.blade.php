@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><span class="button disabled"><span>Préc.</span></span></li>
        @else
            <li><a class="button" href="{{ $paginator->previousPageUrl() }}" rel="prev">Préc.</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><a class="page"><span>{{ $element }}</span></a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="page active"><span>{{ $page }}</span></a></li>
                    @else
                        <li><a class="page" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="button" href="{{ $paginator->nextPageUrl() }}" rel="next">Suiv.</a></li>
        @else
            <li><a class="button disabled"><span>Suiv.</span></a></li>
        @endif
    </ul>
@endif
