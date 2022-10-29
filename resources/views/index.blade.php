@extends('layouts.layout')
@section('layout')
    {{-- home section start here --}}

    <section class="banner" id="home">
        <div class="container">
            <div class="glass">
                <div class="my-intro">
                    <p>My name is</p>
                    <h1>Sujan Roy</h1>
                    <p class="typed">I am <span class="element"></span></p>
                    <br>
                    <div class="intro-btn">
                        <a href="#about" class="glass-btn">About me </a>
                        <a href="#contact" class="glass-btn">Contact me </a>
                    </div>
                </div>
                <div class="graphics">
                    <div class="first">
                        <img src="{{ asset('images/web (2).gif') }}" alt="">
                        <div class="last">
                            <img src="{{ asset('images/myimg.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- home section end here --}}

    {{-- about section start here --}}

    <section id="about">
        <div class="container">
            <h1 class="title wow slideInDown">About Me</h1>
            <p class="sub-title">I am a full stack developer, design and develop both mobile, web & desktop applications</p>
            <div class="body">
                <img src="{{ asset('images/about.png') }}" data-aos-duration="1000" data-aos-easing="ease-in-out"
                    data-aos-once="false" data-aos="fade-up">
                <div class="about-text">
                    <p>I had fallen in love with computer while I was a secondary school boy and decided to study on
                        Computer Science. That's why I have admitted myself in a 4 years Diploma Course named Diploma in
                        Computer Science & Engineering just after completing my Secondary School Certificate (SSC). Later I
                        have completed B.Sc. in Computer Science & Engineering also.</p>
                    <p>My first complete project was a full functional calculator using Visual Basic. I started learning
                        more about coding while I was blogging with Google's Blogspot. My first web application was a Online
                        News Portal using PHP.</p>
                    <p>Now I like to introduce myself as a full stack developer.</p>
                </div>
            </div>
            <div class="about-buttom">
                <div class=""></div>
                <div class="about-buttons">
                    <a href="#contact" class="btn about-btn">Contact Me</a>
                    <a href="#" class="btn about-btn">Hire Me</a>
                </div>
            </div>
        </div>
    </section>

    {{-- about section end here --}}

    {{-- experience section start here --}}

    <section id="experience">
        <div class="container">
            <h1 class="title wow slideInDown">
                I am experienced with
            </h1>
            <p class="sub-title">
                I have worked with the following tools in my journey.
            </p>
            <div class="body">
                <div class="owl-carousel experiences">
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-html5"></i>
                            <p>Html 5</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-css3-alt"></i>
                            <p>Css 3</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-sass"></i>
                            <p>Sass</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-js"></i>
                            <p>JS Scripts</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-react"></i>
                            <p>ReactJs</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-vuejs"></i>
                            <p>VueJs</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-node"></i>
                            <p>NodeJs</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-php"></i>
                            <p>PHP</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-laravel"></i>
                            <p>Laravel</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-solid fa-database"></i>
                            <p>MySql</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-react"></i>
                            <p>ReactJs</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="fa-brands fa-java"></i>
                            <p>Java</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- experience section end here --}}

    {{-- services section start here --}}

    <section id="services">
        <div class="container">
            <h1 class="title wow slideInDown">
                My Services
            </h1>
            <p class="sub-title">
                I am working in this arena since 2011, some of the key services are given below
            </p>
            <div class="body">
                <div class="my-service">
                    <div class="service-top">
                        <i class="fa-solid fa-pencil"></i>
                        <h2>UI/UX Designing</h2>
                    </div>
                    <p>Mostly I use PHP (Laravel) and JavaScript (NodeJS, ReactJS, VueJS, NuxtJS) to develop both frontend
                        and backend. I can develop any kind of web application you need.</p>
                </div>
                <div class="my-service">
                    <div class="service-top">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <h2>Web Development</h2>
                    </div>
                    <p>Mostly I use PHP (Laravel) and JavaScript (NodeJS, ReactJS, VueJS, NuxtJS) to develop both frontend
                        and backend. I can develop any kind of web application you need.</p>
                </div>
                <div class="my-service">
                    <div class="service-top">
                        <i class="fa-solid fa-building"></i>
                        <h2>Apps Development</h2>
                    </div>
                    <p>Mostly I use PHP (Laravel) and JavaScript (NodeJS, ReactJS, VueJS, NuxtJS) to develop both frontend
                        and backend. I can develop any kind of web application you need.</p>
                </div>
                <div class="my-service">
                    <div class="service-top">
                        <i class="fa-solid fa-rocket"></i>
                        <h2>Domain Registration</h2>
                    </div>
                    <p>Mostly I use PHP (Laravel) and JavaScript (NodeJS, ReactJS, VueJS, NuxtJS) to develop both frontend
                        and backend. I can develop any kind of web application you need.</p>
                </div>
                <div class="my-service">
                    <div class="service-top">
                        <i class="fa-solid fa-envelope-circle-check"></i>
                        <h2>Custom Email</h2>
                    </div>
                    <p>Mostly I use PHP (Laravel) and JavaScript (NodeJS, ReactJS, VueJS, NuxtJS) to develop both frontend
                        and backend. I can develop any kind of web application you need.</p>
                </div>
                <div class="my-service">
                    <div class="service-top">
                        <i class="fa-solid fa-house-chimney-medical"></i>
                        <h2>Hosting</h2>
                    </div>
                    <p>Mostly I use PHP (Laravel) and JavaScript (NodeJS, ReactJS, VueJS, NuxtJS) to develop both frontend
                        and backend. I can develop any kind of web application you need.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- services section end here --}}

    {{-- protfolio section start here --}}

    <section id="portfolio">
        <h1 class="title wow slideInDown">My Portfolios</h1>
        <p class="sub-title">Some of my works are here</p>
        <div class="body">
            <div class="container">
                <div class="protfolio-filter">
                    <button class="mixitup-control-active" type="button" data-filter='all'>All</button>
                    <button type="button" data-filter='.web'>Web</button>
                    <button type="button" data-filter='.apps'>Apps</button>
                    <button type="button" data-filter='.icons'>Icons</button>
                </div>
            </div>
            <div class="container filter">
                <div class="span_1_of_2 col box mix web">
                    <img src="{{ asset('images/portfolio1.png') }}" alt="">
                </div>
                <div class="span_1_of_2 col box mix web apps">
                    <img src="{{ asset('images/portfolio2.png') }}" alt="">
                </div>
                <div class="span_1_of_2 col box mix apps icons">
                    <img src="{{ asset('images/portfolio3.png') }}" alt="">
                </div>
                <div class="span_1_of_2 col box mix icons">
                    <img src="{{ asset('images/portfolio4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- protfolio section end here --}}

    {{-- clint section start here --}}

    <section id="clint">
        <h1 class="title wow slideInDown">Some of My Clints
        </h1>
        <p class="sub-title">Some of my clints are here</p>
        <div class="body">
            <div class="details owl-carousel">
                <div class="item">
                    <div class="item-info">
                        <img src="{{ asset('images/clint1.jpg') }}">
                        <h2>Channel Iman</h2>
                        <p>CEO of Pinterest </p>
                    </div>
                    <p>“Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl
                        scelerisque.”</p>
                </div>
                <div class="item">
                    <div class="item-info">
                        <img src="{{ asset('images/clint4.jpg') }}">
                        <h2>Adriana Lima</h2>
                        <p>Founder of Instagram</p>
                    </div>
                    <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                </div>
                <div class="item">
                    <div class="item-info">
                        <img src="{{ asset('images/clint2.jpg') }}">
                        <h2>Anne Hathaway</h2>
                        <p>Lead Designer at Behance</p>
                    </div>
                    <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                </div>
                <div class="item">
                    <div class="item-info">
                        <img src="{{ asset('images/clint6.jpg') }}">
                        <h2>Emma Stone</h2>
                        <p>Co-Founder of Shazam</p>
                    </div>
                    <p>“Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem
                        cursus neque.”</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- clint section end here --}}

    {{-- blog section start here --}}
    <section id="my-blogs">
        <div class="container">
            <h1 class="title wow slideInDown">My Blogs</h1>
            <p class="sub-title">I have shared my knowledge here through my personal blog.
            </p>
            <div class="body">
                <div class="items">
                    <div class="img-box">
                        <img src="{{ asset('images/b1.jpg') }}" alt="" class="blog-image">
                    </div>
                    <div class="blog-texts">
                        <h2>Update NodeJS using command line</h2>
                        <span>1 year ago, 685 Views , 0 comment </span>
                        <button>Show More</button>
                    </div>
                </div>
                <div class="items">
                    <div class="img-box">
                        <img src="{{ asset('images/b2.jpg') }}" alt="" class="blog-image">
                    </div>
                    <div class="blog-texts">
                        <h2>Update NodeJS using command line</h2>
                        <span>1 year ago, 685 Views , 0 comment </span>
                        <button>Show More</button>
                    </div>
                </div>
                <div class="items">
                    <div class="img-box">
                        <img src="{{ asset('images/b3.jpg') }}" alt="" class="blog-image">
                    </div>
                    <div class="blog-texts">
                        <h2>Update NodeJS using command line</h2>
                        <span>1 year ago, 685 Views , 0 comment </span>
                        <button>Show More</button>
                    </div>
                </div>
            </div>
            <div class="explore-btn">
                <a href="{{ route('moreBlogs') }}">
                    <button class="btn">Explore More</button>
                </a>
            </div>
        </div>
    </section>
    {{-- X- blog section end here -X --}}

    {{-- contact section start here --}}

    <section id="contact">
        <div class="container">
            <h1 class="title wow slideInDown">Contact With Me
            </h1>
            <p class="sub-title">I am available in most of the common social medias and you can text me direct using the
                form
            </p>
            <div class="body">
                <div class="social-box">
                    <div class="social">
                        <div class="item">
                            <div class="icon wow slideInLeft" data-wow-duration="500ms" data-wow-delay="1000ms"><a
                                    href="#"><i class="fa-brands fa-facebook"></i></a>
                            </div>
                            <div class="url wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1000ms">skype
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon wow slideInLeft" data-wow-duration="500ms" data-wow-delay="2000ms"><a
                                    href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="url wow fadeInUp" data-wow-duration="500ms" data-wow-delay="2000ms">skype
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon wow slideInLeft" data-wow-duration="500ms" data-wow-delay="3000ms"><a
                                    href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <div class="url wow fadeInUp" data-wow-duration="500ms" data-wow-delay="3000ms">skype
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon wow slideInLeft" data-wow-duration="500ms" data-wow-delay="4000ms"><a
                                    href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                            <div class="url wow fadeInUp" data-wow-duration="500ms" data-wow-delay="4000ms">skype
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon wow slideInLeft" data-wow-duration="500ms" data-wow-delay="5000ms"><a
                                    href="#"><i class="fa-brands fa-skype"></i></a>
                            </div>
                            <div class="url wow fadeInUp" data-wow-duration="500ms" data-wow-delay="5000ms">skype
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon wow slideInLeft" data-wow-duration="500ms" data-wow-delay="6000ms"><a
                                    href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                            <div class="url wow fadeInUp" data-wow-duration="500ms" data-wow-delay="6000ms">skype
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-box">
                    <form action="">
                        <div class="input-items">
                            <input class="item" type="text" placeholder="Your Name">
                            <input class="item" type="email" placeholder="Email Address">
                            <input class="item" type="number" placeholder="Contact Number">
                        </div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Type your message here....."></textarea>
                        <button class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- clint section end here --}}
@endsection
