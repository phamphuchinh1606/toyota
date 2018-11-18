<div class="pagination not-filter">
    <div id="pagination-" class="text-center clear-left">
        <div class="pagination-custom">
            <!-- Previous Page Link -->
            @if (!$paginator->onFirstPage())
                <span class="prevePage">
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <svg class="svg-inline--fa fa-angle-double-left fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="angle-double-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"></path>
                        </svg>
                    </a>
                </span>
            @endif
            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                <!-- "Three Dots" Separator -->
                @if (is_string($element))
                    <span class="page page-node current">{{ $element }}</span>
                @endif

                <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page page-node current">{{ $page }}</span>
                        @else
                            <span class="page">
                                <a class="page-node" href="{{ $url }}">{{ $page }}</a>
                            </span>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <span class="nextPage">
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <svg class="svg-inline--fa fa-angle-double-right fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"></path>
                        </svg>
                    </a>
                </span>
            @endif
        </div>
    </div>
</div>



{{--<ul class="pagination">--}}
    {{--<!-- Previous Page Link -->--}}
    {{--@if ($paginator->onFirstPage())--}}
        {{--<li class="disabled"><span>Trước</span></li>--}}
    {{--@else--}}
        {{--<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Trước</a></li>--}}
    {{--@endif--}}

    {{--<!-- Pagination Elements -->--}}
    {{--@foreach ($elements as $element)--}}
    {{--<!-- "Three Dots" Separator -->--}}
        {{--@if (is_string($element))--}}
            {{--<li class="disabled"><span>{{ $element }}</span></li>--}}
        {{--@endif--}}

    {{--<!-- Array Of Links -->--}}
        {{--@if (is_array($element))--}}
            {{--@foreach ($element as $page => $url)--}}
                {{--@if ($page == $paginator->currentPage())--}}
                    {{--<li class="active"><span>{{ $page }}</span></li>--}}
                {{--@else--}}
                    {{--<li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                {{--@endif--}}
            {{--@endforeach--}}
        {{--@endif--}}
    {{--@endforeach--}}

    {{--<!-- Next Page Link -->--}}
    {{--@if ($paginator->hasMorePages())--}}
        {{--<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Sau</a></li>--}}
    {{--@else--}}
        {{--<li class="disabled"><span>Sau</span></li>--}}
    {{--@endif--}}
{{--</ul>--}}
