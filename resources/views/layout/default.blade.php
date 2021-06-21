<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/010b527a19.js" crossorigin="anonymous"></script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
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

                <ul class="flex">
                    <li><a href="#">CHARACTERS</a></li>
                    <li><a href="#">COMICS</a></li>
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

    <main>
        @yield('content') 
    </main>

    <footer>
        <section class="contacts">
            <div class="container">
                <div class="row flex">
                    <div class="col-2">
                        <ul>
                            <li>DC COMICS</li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>

                        <ul>
                            <li>SHOP</li>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <ul>
                            <li>DC</li>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy (News)</a></li>
                            <li><a href="#">Ad Choice</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <ul>
                            <li>SITES</li>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="socials">
        </section>
    </footer>
</body>
</html>