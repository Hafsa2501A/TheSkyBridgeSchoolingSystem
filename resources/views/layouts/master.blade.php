<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flex-slider.css') }}">
</head>

<body>

    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="/">
              <!-- Logo Image -->
              <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Sky Bridge Logo" style="height: 45px; width: auto; vertical-align: middle; margin-top: -5px;">

              <!-- Sky Bridge Brand Name -->
              <span style="text-transform: uppercase;"><em>The Sky Bridge</em></span

            </a>
          </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="#section1">Home</a></li>
                <li class="has-submenu"><a href="#section2">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="#section2">Who we are?</a></li>
                        <li><a href="#section3">What we do?</a></li>
                        <li><a href="#section3">How it works?</a></li>
                    </ul>
                </li>
                <li><a href="#section4">Courses</a></li>
                <li><a href="#section6">Contact</a></li>
                @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="external">Dashboard</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="external">
                            Logout
                        </a>
                    </li>
                @else
                    <li class="auth-buttons">
                        <a href="{{ route('login') }}" class="btn-login external">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="auth-buttons" style="margin-left: 0;">
                            <a href="{{ route('register') }}" class="btn-signup external">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
            </ul>
        </nav>
    </header>
    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School | Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/video.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    <script>
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({ scrollTop: reqSectionPos }, 800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }
        };

        var checkSection = function checkSection() {
            $('.section').each(function () {
                var $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
            if($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
    </script>


</body>
</html>
