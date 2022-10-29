<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SujanRoy</title>
    {{-- owl carosoul link --}}
    <link rel="stylesheet" href="{{ asset('plagins/owl-carosol/owl.carousel.min.css') }}">

    {{-- animate.css --}}
    <link rel="stylesheet" href="{{ asset('plagins/animate/animate.css') }}">

    {{-- aos plagin --}}

    <link rel="stylesheet" href="{{ asset('plagins/aos/aos.css') }}">

    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="brand">
                <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="toggle">
                <i class="fa-solid fa-bars toggle-icon">
                </i>
                <i class="fa-solid fa-xmark toggle-cross"></i>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a class="active" href="#">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#experience">experiences</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#portfolio">portfolios</a></li>
                    <li><a href="#clint">clints</a></li>
                    <li><a href="#my-blogs">my blogs</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('layout')

    <section class="footer">
        <p>Copyright &copy; @php echo date("Y"); @endphp | All rights reserved to <a href="#">Sujan Roy</a></p>
    </section>

    {{-- js scripts************************************************** --}}

    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- wow.js --}}
    <script src="{{ asset('plagins/wow/wow.js') }}"></script>
    {{-- typed js --}}
    <script src="{{ asset('plagins/typed.js-master/typed.min.js') }}"></script>
    {{-- owl carosoul --}}
    <script src="{{ asset('plagins/owl-carosol/owl.carousel.min.js') }}"></script>
    {{-- mixitup --}}
    <script src="{{ asset('plagins/mixitup/mixitup.min.js') }}"></script>

    {{-- aos plagin --}}
    <script src="{{ asset('plagins/aos/aos.js') }}"></script>



    {{-- main js --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/plagin.js') }}"></script>

    {{-- fontawesome js --}}
    <script src="https://kit.fontawesome.com/a3474b28ae.js" crossorigin="anonymous"></script>
</body>

</html>
