@if ($paginator->hasPages())
<br><br>
<div class="container text-center align-middle">
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-dark" aria-label="@lang('pagination.previous')">
                        <i class="bi bi-caret-left-fill"></i>
                        Kembali
                    </a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-dark mx-auto" aria-label="@lang('pagination.next')">
                        Lanjut
                        <i class="bi bi-caret-right-fill"></i>
                    </a>
                </li>
            @else
               
            @endif
        </ul>
    </nav>
</div>
@endif
