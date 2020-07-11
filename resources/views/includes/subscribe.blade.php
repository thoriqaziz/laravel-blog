<div class="container text-center">
    <h2 class="heading">Newsletter</h2>
    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
    <form class="signup-form form-inline justify-content-center pt-3" action="{{ route('subscribe') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="semail">Your email</label>
            <input type="email" id="semail" name="email" class="form-control mr-md-1 semail" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div>
<!--//container-->