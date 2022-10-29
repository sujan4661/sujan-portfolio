<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- css files --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <section class="left-box">
        <div class="side-nav">
            <div class="logo">
                <div class="container">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
            </div>
            <div class="search">
                <div class="container">
                    <div class="search-box">
                        <input type="text" placeholder="Search here.....">
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
            <div class="nav-title-box">
                <div class="container">
                    <span class="nav-title" style="background: url({{ asset('images/web (2).gif') }})">MAIN
                        NAVIGATION</span>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Comments</a></li>
                    <li><a href="#">Likes</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <footer>
            <h2>side footer</h2>
        </footer>
    </section>
    <section class="right-box">
        <nav class="top-nav">
            <div class="container">

            </div>
        </nav>
        @yield('small-box')
        @yield('main')
        <footer class="main-footer">
            <h2>right footer</h2>
        </footer>
    </section>
</body>

</html>
