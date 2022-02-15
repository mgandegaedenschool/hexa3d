@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <i class="fas fa-chevron-left"></i>
            </li>
        @else
            <li class="prev">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></a>
            </li>
        @endif

        @foreach ($elements as $element)
            @foreach ($element as $page => $url)
                @if ($paginator->currentPage() > 4 && $page === 2)
                    <li class="disabled"><span>...</span></li>
                @endif

                @if ($page == $paginator->currentPage())
                    <li class="active">{{ $page }}</li>
                @elseif ($page === 1 || $page === $paginator->lastPage())
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() + 2  || $page === $paginator->currentPage() - 2)
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif

                @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                    <li class="disabled"><span>...</span></li>
                @endif
            @endforeach
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
            </li>
        @else
            <li class="disabled next" aria-disabled="true" aria-label="@lang('pagination.next')">
                <i class="fas fa-chevron-right"></i>
            </li>
        @endif
    </ul>
@endif
