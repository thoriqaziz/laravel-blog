@extends('layouts.frontend')

@section('content')
<article class="about-section py-5">
    <div class="container">
        <h2 class="title mb-3">About Me</h2>

        {!! $user->profile->about !!}
    </div>
</article>
<!--//about-section-->

<section class="cta-section theme-bg-light py-5">
    @include('includes.subscribe')
</section>
@endsection