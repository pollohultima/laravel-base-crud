<!DOCTYPE html>
<html lang="en">
@include('partials.tag_head')


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
