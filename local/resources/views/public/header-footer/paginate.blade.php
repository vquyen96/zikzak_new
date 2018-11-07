@if ($paginator->hasPages())
    <ul class="paginationCourseAll">
        {{-- Previous Page Link --}}

        @if ($paginator->onFirstPage())
            <li class="disabled">
                <a class="pageLink" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>
        @else
            <li class="">
                <a class="pageLink" href="{{ $paginator->previousPageUrl() }}">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}

                @if (is_string($element))
                    <li class=" disabled"><a class="pageLink">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if($paginator->currentPage() < 4)
                            @if($page < 6)
                                @if ($page == $paginator->currentPage())
                                    <li class="active"><a class="pageLink">{{ $page }}</a></li>
                                @else
                                    <li class=""><a class="pageLink" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endif
                        @elseif($paginator->currentPage() <= $paginator->lastPage() - 2)
                            @if($page >= $paginator->currentPage() - 2 && $page <= $paginator->currentPage() + 2)
                                @if ($page == $paginator->currentPage())
                                    <li class="active"><a class="pageLink">{{ $page }}</a></li>
                                @else
                                    <li class=""><a class="pageLink" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endif

                        @else
                            @if($page > $paginator->lastPage() - 5)
                                @if ($page == $paginator->currentPage())
                                    <li class="active"><a class="pageLink">{{ $page }}</a></li>
                                @else
                                    <li class=""><a class="pageLink" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endif
                        @endif

                    @endforeach
                @endif

        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="">
                <a class="pageLink" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
        @else
            <li class=" disabled">
                <a class="pageLink">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
