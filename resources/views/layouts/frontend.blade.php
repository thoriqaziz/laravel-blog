<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('DevBlog/assets/css/theme-1.css') }}">

    @toastr_css

</head>

<body>

    @include('includes.header')

    <div class="main-wrapper">
        @yield('content')

        @include('includes.footer')

    </div>
    <!--//main-wrapper-->

    <!-- Javascript -->
    <script src="{{ asset('DevBlog/assets/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('DevBlog/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('DevBlog/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ asset('DevBlog/assets/js/demo/style-switcher.js') }}"></script>

</body>
@toastr_js
@toastr_render
</html>