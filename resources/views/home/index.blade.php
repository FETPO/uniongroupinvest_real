<!DOCTYPE html>
<html lang="en">

<head>


    <title>Union Group Home</title>

    @include('includes.home_css')

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    @include('includes.home_header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>We provide the best <strong>strategy</strong><br>to grow up your <strong>business</strong>
                        </h1>
                        <p>We offer services ranging from forex, cryptocurrencies, real_estate, escrow services, loans
                            and stocks</p>
                        <a href="{{ route('services') }}" class="main-button-slider">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/featured-item-01.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Cryptocurrencies</h5>
                                <p>we help you manage your cryptocurrency
                                    portfolio and help you grow them exponentially</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/featured-item-01.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Forex</h5>
                                <p>Our team of experience trader, trades you
                                    funds all the time thereby growing your funds daily</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{ asset('assets/images/featured-item-01.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Stocks</h5>
                                <p>team oF experts helps in the investments
                                    of highly-rated company stock, including corporate and sovereign
                                    debt, equities, currencies, various derivatives and structured
                                    products</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('assets/images/left-image.png') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">WE ARE UNION GROUP INVESTMENTS</h2>
                    </div>
                    <div class="left-text">
                        <p>We believe that superior investment performance is achieved through a skillful balance of
                            three core attributes: knowledge, experience and adaptability.</p>
                        <p>There is only one way to be on the cutting edge – commitment to innovation. We do our best to
                            achieve a consistent increase in investment performance for our clients. We appreciate our
                            clients loyalty and value the relationships we build with each customer. No matter what
                            country you come from, our professional managers will help you to choose the investment
                            product that best fits your demands. Our managers are constantly working on implementing
                            unique trading methods with the most advanced and efficient trading technology, competitive
                            services, high-quality performance, genuine practices, excellent customer support service
                            and fund safety that allow us to work successfully on the market in a highly profitable way.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">WHY UNION GROUP INVESTMENTS</h2>
                    </div>
                    <div class="left-text">
                        <p>
                            We believe in investment in Advancement of innovative technologies all over the world, and the area of fintech in the financial industry, as well as the fields such as AI, blockchain/DLT and IoT, which are now introduced in various industries, hold the potential of creating a trend that the Group has never seen before. Through maximum utilization of business resources and triggering social revolution by these technologies, the Union Group Invest will realize the revitalization of regional economies, which will ultimately contribute to regional revitalization, by providing various initiatives that would improve the valuation of regional financial institutions, as well as promoting efforts that would directly contribute to the revitalization of local industries.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('assets/images/right-image.png') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Work Process</h1>
                            <p>This is are the steps you have to take on our platform to get you started</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/images/work-process-item-01.png') }}" alt=""></i>
                            <strong>Register</strong>
                            {{-- <span>Godard pabst prism fam cliche.</span> --}}
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/images/work-process-item-01.png') }}" alt=""></i>
                            <strong>Login</strong>
                            {{-- <span>Godard pabst prism fam cliche.</span> --}}
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/images/work-process-item-01.png') }}" alt=""></i>
                            <strong>Make a Deposit</strong>
                            {{-- <span>Godard pabst prism fam cliche.</span> --}}
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/images/work-process-item-01.png') }}" alt=""></i>
                            <strong>Select a plan</strong>
                            {{-- <span>Godard pabst prism fam cliche.</span> --}}
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/images/work-process-item-01.png') }}" alt=""></i>
                            <strong>Make an Invesment</strong>
                            {{-- <span>Godard pabst prism fam cliche.</span> --}}
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{ asset('assets/images/work-process-item-01.png') }}" alt=""></i>
                            {{-- <i><img src="{{ asset('assets/images/work-process-item-01.png') }} alt=""></i> --}}
                            <strong>Withdraw you profit</strong>
                            {{-- <span>Godard pabst </span> --}}
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="  section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">OUR SERVICES</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>when your people get up every day wanting to come to work,
                            success happens, we help you to ensure everyone makes the right investment
                        </p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>we help you manage your cryptocurrency
                                portfolio and help you grow them exponentially</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h2 class="user-name">Cryptocurrencies</h2>
                                {{-- <span>Managing Director</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>We offer escrow services to our customers who
                                needs to make exchanges between two parties </p>
                            {{-- <a href="{{ route('escrow') }}" class="default-button">Learn more</a> --}}
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h2 class="user-name">Escrow</h2>
                                {{-- <span>Digital Marketer</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="{{ asset('assets/images/testimonial-icon.png') }}" alt=""></i>
                            <p>team oF experts helps in the investments
                                of highly-rated company stock, including corporate and sovereign
                                debt, equities, currencies and various derivatives and structured
                                products</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h2 class="user-name">Stocks</h2>
                                {{-- <span>Website Manager</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>We also run real estate fund investments
                                which has proven to give the highest returns in recent times </p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h2 class="user-name">Real Estate</h2>
                                {{-- <span>Managing Director</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>Our team of experience trader, trades you
                                funds all the time thereby growing your funds daily </p>
                            {{-- <a href="{{ route('escrow') }}" class="default-button">Learn more</a> --}}
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h2 class="user-name">Forex</h2>
                                {{-- <span>Digital Marketer</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="{{ asset('assets/images/testimonial-icon.png') }}" alt=""></i>
                            <p>Our company offers personal loans which can be
                                used for a variety of things </p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h2 class="user-name">Loans</h2>
                                {{-- <span>Website Manager</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Pricing Plans</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>OUR COMPANY IS MADE UP OF FOUR AMAZING INVESTMENT SECTORS. ENJOY FULL INSURANCE COVERAGE ON
                            ALL INVESTMENT PACKAGES IN OUR PLATFORM. CLICK ON CHOOSE PLAN TO REGISTER.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">BASIC</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">200</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$200 Minimum Investment</li>
                                <li class="active">$4,999 Maximum Investment</li>
                                {{-- <li>Personal Account Manager</li> --}}
                                <li class="active">10% R.O.I</li>
                                <li class="active">Contract Duration 30 Days </li>
                                <li class="active">Returns: Every 7 Days</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{ route("user.register") }}" class="main-button">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title">STANDARD</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">5,000</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$5,000 Minimum Investment</li>
                                <li class="active">$19,999 Maximum Investment</li>
                                {{-- <li class="active">Personal Account Manager</li> --}}
                                <li class="active">15% R.O.I</li>
                                <li class="active">Contract Duration 30 Days </li>
                                <li class="active">Returns: Every 15 Days</li
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{ route("user.register") }}" class="main-button">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">ADVANCED</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">20,000</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$20,000 Minimum Investment</li>
                                <li class="active">$99,990 Maximum Investment</li>
                                <li class="active">25% R.O.I</li>
                                <li class="active">Contract Duration 30 Days </li>
                                <li class="active">Returns: Every 30 Days</li
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{ route("user.register") }}" class="main-button">Register Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">LIFE</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">100,000</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$100,000 Minimum Investment</li>
                                <li class="active">Unlimited</li>
                                <li class="active">35% R.O.I</li>
                                <li class="active">Contract Duration 60 Days </li>
                                <li class="active">Returns: Every 60 Days</li
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{ route("user.register") }}" class="main-button">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>1,231,506</strong>
                            <span>Trades completed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63,451</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>Awards Won</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>57</strong>
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->

    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Blog Entries</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>We bring you the latest news in the capital market and financial and cryptocurrency invesment ecosytem</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{ asset('assets/images/blog-item-01.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Dogecoin Spikes Briefly After Musk Says He Won't Sell His Crypto Holdings</a>
                            </h3>
                            <div class="text">
                                Dogecoin (DOGE) briefly jumped as much as 10% during Asian trading hours on Monday after Tesla CEO Elon Musk said in a tweet that he is not selling his crypto holdings, which includes DOGE.
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{ asset('assets/images/blog-item-02.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Crypto Tax Prep Business Booms as Trading Surges and IRS Tightens Screws</a>
                            </h3>
                            <div class="text">
                                Startups that help Americans calculate their crypto taxes have been raising hundreds of millions, hitting unicorn valuations. Even traditional tax-prep firms are rolling out crypto services. This piece is part of CoinDesk's Tax Week.
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{ asset('assets/images/blog-item-03.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Bitcoin Again Bounces Off 'Cloud' Support; Resistance at $42.6K</a>
                            </h3>
                            <div class="text">
                                A popular technical analysis study, the Ichimoku cloud showed weekly support for bitcoin (BTC) near $37,600, and the leading cryptocurrency overnight tumbled to right around that level before stabilizing. At last check bitcoin had bounced back to $39,000.
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Talk To Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>We are always available 24/7 to cater to your needs and serve you better</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>                                Send us a message for all your enquiries </p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->


    @include('includes.home_footer')

    <!-- ***** Footer Start ***** -->
    {{-- @include('includes.home_footer') --}}

    @include('includes.home_script')
    <!-- jQuery -->


</body>

</html>
