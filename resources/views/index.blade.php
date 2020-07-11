@extends('layouts.frontend')

@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
        <h2 class="heading">Welcome to {{ $user->name }}'s blog</h2>
        <div class="intro">Search article what you want here.</div>
        <form class="signup-form form-inline justify-content-center pt-3" method="GET" action="/results">
            <div class="form-group">
                <label class="sr-only" for="semail">Type here</label>
                <input type="text" id="search" name="query" class="form-control mr-md-1" placeholder="Type here">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!--//container-->
</section>
<section class="blog-list px-3 py-5 p-md-5">
    <div class="container">
        @foreach($posts as $post)
        <div class="item mb-5">
            <div class="media">
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ $post->featured }}" alt="{{ $post->title }}">
                <div class="media-body">
                    <h3 class="title mb-1"><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a></h3>
                    <div class="meta mb-1"><span class="date">Published {{ $post->created_at->toFormattedDateString() }}</span><span class="category"><a href="/category?id={{ $post->category->id }}">{{ $post->category->name }}</a></span></div>
                    <div class="intro">{!! substr($post->content, 0, 200) !!}...</div>
                    <a class="more-link" href="{{ route('post.single', ['slug' => $post->slug ]) }}">Read more &rarr;</a>
                </div>
                <!--//media-body-->
            </div>
            <!--//media-->
        </div>
        <!--//item-->
        @endforeach

        <nav class="blog-nav nav nav-justified my-5">
        <!-- {!! $posts->appends(Request::except('page'))->render() !!} -->
            @include('includes.pagination', ['paginator' => $posts->appends(Request::except('page'))])
        </nav>

    </div>
</section>
@endsection