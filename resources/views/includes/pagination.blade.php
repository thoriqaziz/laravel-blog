@if($paginator->lastPage() > 1)
    @if($paginator->currentPage() == 1)
    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
    <a class="nav-link-next nav-item nav-link rounded" href="{{ $paginator->url($paginator->currentPage() + 1) }}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
    @elseif($paginator->currentPage() == $paginator->lastPage())
    <a class="nav-link-prev nav-item nav-link rounded" href="{{ $paginator->url($paginator->currentPage() - 1) }}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
    <a class="nav-link-next nav-item nav-link d-none rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
    @else
    <a class="nav-link-prev nav-item nav-link rounded-left" href="{{ $paginator->url($paginator->currentPage() - 1) }}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
    <a class="nav-link-next nav-item nav-link rounded-right" href="{{ $paginator->url($paginator->currentPage() + 1) }}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a> -->
    @endif
@endif