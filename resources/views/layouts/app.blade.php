<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.tag_head')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>


<body>

    @include('partials.header')
    <!-- /#site_header -->

    @include('partials.jumbo')

    <main id="site_main">
        @yield('content')
    </main>
    <!-- /#site_main -->

    @include('partials.footer')
    <!-- /#site_footer -->

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
