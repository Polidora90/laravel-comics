<header>
        {{-- banner blu --}}
    <div class="nav-banner">
        <div class="container flex">
            <a href="#">DC POWER VISA <i class="far fa-registered"></i></a>
            <a href="#">ADDITIONAL DC SITES <i class="fas fa-sort-down"></i></a>
        </div>
    </div>
    {{-- navbar --}}
    <nav>
        <div class="container flex">
            <div class="logo-container">
                <img class="responsive-img" src="{{ asset('img/dc-logo.png')}}" alt="">
            </div>

            @php
                function setLinkClass($pageName) {
                    $routeName = Request::route()->getName();

                    return $routeName == $pageName ? 'active' : '';
                }
            @endphp

            <ul class="flex">
                <li><a href="#">CHARACTERS</a></li>
                <li><a class="{{ setLinkClass('comics') }}" href="{{ route('comics') }}">COMICS</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTEBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">SHOP <span><i class="fas fa-sort-down"></i></span></a></li>
            </ul>
            <input type="text" placeholder="Search">
        </div>
    </nav>

    <section class="jumbotron">

    </section>
</header>
