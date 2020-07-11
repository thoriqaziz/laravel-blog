@extends('layouts.frontend')

@section('content')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container">
        <header class="blog-post-header">
            <h2 class="title mb-2">{{ $post->title }}</h2>
            <div class="meta mb-3"><span class="date">Published {{ $post->created_at->toFormattedDateString() }}</span><span class="category"><a href="/category?id={{ $post->category->id }}">{{ $post->category->name }}</a></span></div>
        </header>

        <div class="blog-post-body">
            {!! $post->content !!}

            <br><br><br>
            <div class="meta mb-1">
                Tags:
                @foreach($post->tags as $tag)
                <span class="tag">{{ $tag->tag }}</span>
                @endforeach
            </div>
        </div>

        <nav class="blog-nav nav nav-justified my-5">
            @if($prev)
            <a class="nav-link-prev nav-item nav-link rounded-left" href="{{ route('post.single', ['slug' => $prev->slug ]) }}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            @endif

            @if($next)
            <a class="nav-link-next nav-item nav-link rounded-right" href="{{ route('post.single', ['slug' => $next->slug ]) }}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            @endif
        </nav>

        <div class="blog-comments-section">
            @include('includes.disqus')
        </div>
        <!--//blog-comments-section-->

    </div>
    <!--//container-->
</article>
@endsection