<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.tag_head')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>


<body>

    @include('partials.header')
    <!-- /#site_header -->

    <main id="site_main d-flex ">
        <div class=" sideb d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Admin</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.comics.index') }}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Comics
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.index') }}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Posts
                    </a>
                </li>

            </ul>
            <hr>
        </div>
        @yield('content')
    </main>
    <!-- /#site_main -->

    @include('partials.footer')
    <!-- /#site_footer -->

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
