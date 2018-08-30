<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>MulaiBaca</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href={{ URL::asset('css/base.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/vendor.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/main.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>


    <!-- script
    ================================================== -->
    <script src="{{ URL::asset('js/modernizr.js') }}"></script>
    
    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>


<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                Home<!-- <img src={{ asset('images/logo.png') }} alt="Homepage"> -->
            </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <h3>Navigate to</h3>

            <div class="header-nav__content">
                
                <ul class="header-nav__list">
                    <li><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <li><a href="{{ route('login') }}" title="Login">Login</a></li>
                                <li><a href="{{ route('register') }}" title="Register">Register</a></li>
                            @endauth
                    @endif
                </ul>
    
    
    

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1>
                MulaiBaca
                </h1>

                <h3>
                Democratize book through technology
                </h3>

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn--primary btn--large">
                        About
                    </a>
                    <a href="#pricePlans" class="smoothscroll btn btn--large">
                        Pricing
                    </a>
                </div>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->


    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">About MulaiBaca</h3>
                <h1 class="display-1">
                
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">

            </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row bit-narrow">
                
            <div class="about-process process block-1-2 block-tab-full">

                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title">Define</h4>
                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title">Design</h4>
                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title">Build</h4>
                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title">Launch</h4>
                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>

            </div> <!-- end process -->

        </div> <!-- end row -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="pricePlans">


        <ul id="plans">
			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Plan 1</h2></li>
					<li class="price"><p>$10/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2 class="bestPlanTitle">Plan 2</h2></li>
					<li class="price"><p class="bestPlanPrice">$20/month</p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a class="bestPlanButton" href="#">Purchase</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Plan 3</h2></li>
					<li class="price"><p>$30/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>

			<li class="plan">
				<ul class="planContainer">
					<li class="title"><h2>Plan 4</h2></li>
					<li class="price"><p>$40/<span>month</span></p></li>
					<li>
						<ul class="options">
							<li>2x <span>option 1</span></li>
							<li>Free <span>option 2</span></li>
							<li>Unlimited <span>option 3</span></li>
							<li>Unlimited <span>option 4</span></li>
							<li>1x <span>option 5</span></li>
						</ul>
					</li>
					<li class="button"><a href="#">Purchase</a></li>
				</ul>
			</li>
		</ul> <!-- End ul#plans -->
        </section>


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full ss-copyright">
                <span>© Copyright MulaiBaca 2018</span> 
                <span>Design by <a href="https://www.styleshout.com/">Styleshout</a></span>
                <span>Re-Distributed by <a href="#">MKR</a></span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">Back to Top</a>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <link rel="stylesheet" href={{ URL::asset('css/base.css') }}>
    <script type="text/javascript" src={{ URL::asset('js/jquery-3.2.1.min.js') }}></script>
    <!-- {{ URL::asset('js/jquery.js') }} -->
    <script type="text/javascript" src={{ URL::asset('js/plugins.js') }}></script>
    <script type="text/javascript" src={{ URL::asset('js/main.js') }}></script>

</body>
</html>

