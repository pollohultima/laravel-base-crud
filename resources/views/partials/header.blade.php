<header id="site_header">
    <div class="stripe">
        <div class="container d-flex justify-content-end align-items-center">
            <a href="#" class="pe-5">DC POWER™ VISA®</a>
            <a href="#">ADDITIONAL DC SITES<i class="fas fa-chevron-down ps-2"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="head cont d-flex justify-content-between align-items-center">
            <a href="{{ route('/') }}">
                <img src="{{ asset('img/dc-logo.png') }}" alt="" class="logo" />
            </a>

            <nav class="menu d-flex align-items-middle ">
                <a href="">CHARACTERS</a>
                <a href="{{ route('comics') }}"
                    class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">COMICS<span
                        class=""></span></a>
                <a href="">MOVIES</a>
                <a href="">TV</a>
                <a href="">GAMES</a>
                <a href="">COLLECTIBLES</a>
                <a href="">VIDEOS</a>
                <a href="">FANS</a>
                <a href="">NEWS</a>
                <a href="">SHOP</a>


            </nav>
        </div>
    </div>

</header>
<!-- /#site_header -->
