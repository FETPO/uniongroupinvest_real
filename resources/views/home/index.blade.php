<!DOCTYPE html>
<html lang="en">

<head>

    <title>Zenith Group Invest Home</title>

    @include('includes.home1_css')
</head>

<body>

    <div class="preloader">
        <div class="preinnner">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
    </div>
    <div class="overlay"></div>

    <!-- Header Section Starts Here -->
    @include('includes.home_header1')
    <!-- Header Section Ends Here -->


    <!-- Search Form Starts Here -->
    <div class="search__form__wrapper">
        <div class="form__inner">
            <form class="search__form">
                <div class="form-group">
                    <input type="text" class="form-control form--control" placeholder="Search Here...">
                    <button type="submit" class="cmn--btn btn">Search</button>
                </div>
            </form>
            <button class="btn-close btn-close-white"></button>
        </div>
    </div>
    <!-- Search Form Ends Here -->


    <!-- Banner Section Starts Here -->
    <section class="banner-section banner-two overflow-hidden bg_img"
        style="background: url({{ url('assets/newassets/images/banner/banner-bg2.png') }}) center;">
        <div class="container">
            <div class="banner__content mx-100 text-center padding-top padding-bottom">
                <h1 class="title">We provide the best strategy to grow your business</h1>
                <p class="mx-auto text-white">We offer services ranging from forex, cryptocurrencies, real_estate,
                    escrow services, loans and stock</p>
                <a href="plan.html" class="cmn--btn">Discover more</a>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Plan Section Starts Here -->
    <section class="plan-section padding-bottom">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item style--two">
                        <div class="post__item-thumb">
                            <img src="{{ asset('assets/newassets/images/blog/item6.png') }}" alt="blog">
                        </div>
                        <div class="post__item-content">
                            <h3 class="title"><a href="{{ route('cryptocurrency') }}">Cryptocurrencies</a></h3>

                            <p>we help you manage your cryptocurrency portfolio and help you grow them exponentially</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item style--two">
                        <div class="post__item-thumb">
                            <img src="{{ asset('assets/newassets/images/blog/item4.png') }}" alt="blog">
                        </div>
                        <div class="post__item-content">
                            <h3 class="title"><a href="{{ route('forex') }}">Forex</a></h3>

                            <p>Our team of experience trader, trades you funds all the time thereby growing your funds
                                daily</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item style--two">
                        <div class="post__item-thumb">
                            <img src="{{ asset('assets/newassets/images/blog/item5.png') }}" alt="blog">
                        </div>
                        <div class="post__item-content">
                            <h3 class="title"><a href="{{ route('stocks') }}">Stocks</a></h3>

                            <p>team oF experts helps in the investments of highly-rated company stock, including
                                corporate and sovereign debt, equities, currencies, various derivatives and structured
                                product</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plan Section Ends Here -->

    <section class="profit-calculation padding-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="profit__calculation__content">
                        <div class="section__header">
                            <h2 class="section__header-title">
                                WE ARE ZENITH GROUP INVESTMENTS</h2>
                            <p>We believe that superior investment performance is achieved through a skillful balance of
                                three core attributes: knowledge, experience and adaptability.</p>
                            <p>There is only one way to be on the cutting edge – commitment to innovation. We do our
                                best to achieve a consistent increase in investment performance for our clients. We
                                appreciate our clients loyalty and value the relationships we build with each customer.
                                No matter what country you come from, our professional managers will help you to choose
                                the investment product that best fits your demands. Our managers are constantly working
                                on implementing unique trading methods with the most advanced and efficient trading
                                technology, competitive services, high-quality performance, genuine practices, excellent
                                customer support service and fund safety that allow us to work successfully on the
                                market in a highly profitable way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="section__thumb  ms-5">
                        <img src="{{ asset('assets/newassets/images/referral/thumb2.png') }}" alt="referral">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profit-calculation padding-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="section__thumb  ms-5">
                        <img src="{{ asset('assets/newassets/images/calculate-profit/thumb2.png') }}"
                            alt="profit-calculation">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="profit__calculation__content">
                        <div class="section__header">
                            <h2 class="section__header-title">
                                WHY ZENITH GROUP INVESTMENTS</h2>
                            <p>We believe in investment in Advancement of innovative technologies all over the world,
                                and the area of fintech in the financial industry, as well as the fields such as AI,
                                blockchain/DLT and IoT, which are now introduced in various industries, hold the
                                potential of creating a trend that the Group has never seen before. Through maximum
                                utilization of business resources and triggering social revolution by these
                                technologies, the Zenith Group Invest will realize the revitalization of regional
                                economies, which will ultimately contribute to regional revitalization, by providing
                                various initiatives that would improve the valuation of regional financial institutions,
                                as well as promoting efforts that would directly contribute to the revitalization of
                                local industries.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Feature Two Section Starts Here -->
    <section class="feature-section padding-bottom">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="section__header m-0">
                        <h2 class="section__header-title">These are the steps you have to take on our platform to get
                            you stated</h2>
                        <span class="d-block"> </span>
                        <a href="{{ route('user.register') }}" class="cmn--btn4 mt-4">Register</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gy-sm-5 gy-4 gx-xl-5 h-100 justify-content-between">

                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Register</h3>
                                    <p>Add your details and register an account on our platform</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Login</h3>
                                    <p>Login into your dashboard to perform transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Make a deposit</h3>
                                    <p>Deposit funds into your account</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Select your plan</h3>
                                    <p>Select a suitable plan the will give a larger returns</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Make an investment</h3>
                                    <p>Your investment starts growing as soon as you push the button</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Withdraw your profit</h3>
                                    <p>yu have successfully made a succesful investment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Two Section Ends Here -->



    <!-- Counter Section Starts Here -->
    <div class="counter-section padding-bottom section-bg-two">
        <div class="container">
            <div class="counter__wrapper row gy-4 gy-sm-5">
                <div class="col-6 col-sm-4">
                    <div class="counter__item style--two">
                        <div class="counter__item-header d-flex align-items-center">
                            <h2 class="title"><span class="odometer" data-odometer-final="39">0</span>M</h2>
                        </div>
                        <p class="info">Active Members</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="counter__item style--two">
                        <div class="counter__item-header d-flex align-items-center">
                            <h2 class="title"><span class="odometer" data-odometer-final="250">0</span>M</h2>
                        </div>
                        <p class="info">Our Total Deposit</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="counter__item style--two">
                        <div class="counter__item-header d-flex align-items-center">
                            <h2 class="title"><span class="odometer" data-odometer-final="40">0</span>M</h2>
                        </div>
                        <p class="info">Our Total Withdraw</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section Ends Here -->

    <section class="plan-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Pricing Plans</h2>
                        <p>OUR COMPANY IS MADE UP OF FOUR AMAZING INVESTMENT SECTORS. ENJOY FULL INSURANCE COVERAGE ON
                            ALL INVESTMENT PACKAGES IN OUR PLATFORM. CLICK ON CHOOSE PLAN TO REGISTER. </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Basic</h2>
                            <p class="plan-parcent-info">Duration 30days</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">200 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">4,999 USD</span>
                                </li>

                                <li>
                                    <span class="title">10% ROI</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Returns: Every 7days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn"
                            style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Standard</h2>
                            <p class="plan-parcent-info">Duration 30days</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">5,000 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">19,999 USD</span>
                                </li>

                                <li>
                                    <span class="title">15% ROI</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Returns: Every 15days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn"
                            style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Advance</h2>
                            <p class="plan-parcent-info">Duration 1days</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">20,000 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">99,999 USD</span>
                                </li>

                                <li>
                                    <span class="title">20% ROI</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Returns: Every 30days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn"
                            style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Life</h2>
                            <p class="plan-parcent-info">Duration 20days</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">100,000 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">unlimited</span>
                                </li>

                                <li>
                                    <span class="title">25% ROI</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Returns: Every 20days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn"
                            style="margin-top: 10px;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="plan-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Services</h2>
                        <p>We offer different services which is geared towards improving your finances, getting onboard
                            our platform will transform your finances</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-body">
                            <h5>
                                we help you manage your cryptocurrency portfolio and help you grow them exponentially
                            </h5>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Cryptocurrencies</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-body">
                            <h5>
                                We offer escrow services to our customers who needs to make exchanges between two
                                parties. with our escrow service you csn exchange cash, cryptocurrencies, stocks
                                options.
                            </h5>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Escrow</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-body">
                            <h5>
                                team oF experts helps in the investments of highly-rated company stock, including
                                corporate and sovereign debt, equities, currencies and various derivatives and
                                structured products
                            </h5>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info">Stocks</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-body">
                            <h5>
                                We also run real estate fund investments which has proven to give the highest returns in
                                recent times
                            </h5>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Real Estate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-body">
                            <h5>
                                Our team of experience trader, trades you funds all the time thereby growing your funds
                                daily
                            </h5>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOREVER</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <div class="plan__item-body">
                                <h5>
                                    Our company offers personal loans which can be used for a variety of things
                                </h5>
                            </div>
                            <div class="plan__item-footer">
                                <p class="footer-info"> loans</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>






    <!-- Faq Section Starts Here -->
    <section class="faq-section padding-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="section__header mb-0">
                        <h2 class="section__header-title">What Your Want to Know About Us ?</h2>
                        <div class="faq__wrapper">
                            <div class="faq__item style--two">
                                <div class="faq__item-title">
                                    <h4 class="title">Why You should become an Investor?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                        bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                        vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                        nonummy idmetus</p>
                                </div>
                            </div>
                            <div class="faq__item style--two">
                                <div class="faq__item-title">
                                    <h4 class="title">Why You Choose Us?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                        bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                        vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                        nonummy idmetus</p>
                                </div>
                            </div>
                            <div class="faq__item style--two open active">
                                <div class="faq__item-title">
                                    <h4 class="title">What is Hyip Investment?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                        bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                        vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                        nonummy idmetus</p>
                                </div>
                            </div>
                            <div class="faq__item style--two">
                                <div class="faq__item-title">
                                    <h4 class="title">How to do we work?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                        bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                        vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                        nonummy idmetus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="section__thumb ">
                        <img src="{{ asset('assets/newassets/images/faq/thumb.png') }}" alt="download">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section Ends Here -->

    <!-- Testimonial Section Starts Here -->
    <section class="testimonial-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Testimonial </h2>
                        <p>What our customer say about us.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial__slider__two">
                <div class="single-slide">
                    <div class="testimonial__item__two">
                        <div class="testimonial__item__two-header">
                            <div class="thumb">
                                <img src="{{ asset('assets/newassets/images/testimonial/thumb1.png') }}"
                                    alt="testimonial">
                            </div>
                            <div class="content">
                                <h4 class="name">Thomas Albert</h4>
                                <span class="designation">Ottawa</span>
                            </div>
                            <div class="icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial__item__two-content">
                            <p>I have been investing in ZenithGroupInvest since July 2021, They are truly amazing and
                                are a key to me being able to retire from my job! I love their professionalism and
                                responsiveness.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial__item__two">
                        <div class="testimonial__item__two-header">
                            <div class="thumb">
                                <img src="{{ asset('assets/newassets/images/testimonial/thumb2.png') }}"
                                    alt="testimonial">
                            </div>
                            <div class="content">
                                <h4 class="name">Arnest Ratherford</h4>
                                <span class="designation">Zurich</span>
                            </div>
                            <div class="icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial__item__two-content">
                            <p>i will recommend ZenithGroupInvest to anyone, its a goto place for financial freedom </p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial__item__two">
                        <div class="testimonial__item__two-header">
                            <div class="thumb">
                                <img src="{{ asset('assets/newassets/images/testimonial/thumb1.png') }}"
                                    alt="testimonial">
                            </div>
                            <div class="content">
                                <h4 class="name">Munna Ahmed</h4>
                                <span class="designation">Abu dhabi</span>
                            </div>
                            <div class="icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial__item__two-content">
                            <p>When i got introduced to this platform, i was skeptical but after my first invest returns
                                i have totally change my bank accout balnce </p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial__item__two">
                        <div class="testimonial__item__two-header">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimonial/thumb3.png') }}" alt="testimonial">
                            </div>
                            <div class="content">
                                <h4 class="name">Rafuj Raihan</h4>
                                <span class="designation">Minesota</span>
                            </div>
                            <div class="icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial__item__two-content">
                            <p>this platform has all it takes to fix up all your finanial problem, i will recommend it a
                                thousand times</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Ends Here -->




    <!-- Blog Section STartrs Here -->
    <section class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">See Our Latest Blog & Tips</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item style--two">
                        <div class="post__item-thumb">
                            <img src="{{ asset('assets/newassets/images/blog/item4.png') }}" alt="blog">
                        </div>
                        <div class="post__item-content">
                            <h3 class="title"><a href="#">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                            <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                <li>
                                    <i class="fas fa-user"></i>
                                    Thomas Addican
                                </li>
                                <li>
                                    <i class="fas fa-calendar"></i>
                                    15 Aug 2020
                                </li>
                            </ul>
                            <p>Curabitur ullamcorper ultricies nisiam eget dui. Etiam rhoncus. aecenempus tellus eget
                                condimentum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item style--two">
                        <div class="post__item-thumb">
                            <img src="{{ asset('assets/newassets/images/blog/item5.png') }}" alt="blog">
                        </div>
                        <div class="post__item-content">
                            <h3 class="title"><a href="#">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                            <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                <li>
                                    <i class="fas fa-user"></i>
                                    Thomas Addican
                                </li>
                                <li>
                                    <i class="fas fa-calendar"></i>
                                    15 Aug 2020
                                </li>
                            </ul>
                            <p>Curabitur ullamcorper ultricies nisiam eget dui. Etiam rhoncus. aecenempus tellus eget
                                condimentum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item style--two">
                        <div class="post__item-thumb">
                            <img src="{{ asset('assets/newassets/images/blog/item6.png') }}" alt="blog">
                        </div>
                        <div class="post__item-content">
                            <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a>
                            </h3>
                            <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                <li>
                                    <i class="fas fa-user"></i>
                                    Thomas Addican
                                </li>
                                <li>
                                    <i class="fas fa-calendar"></i>
                                    15 Aug 2020
                                </li>
                            </ul>
                            <p>Curabitur ullamcorper ultricies nisiam eget dui. Etiam rhoncus. aecenempus tellus eget
                                condimentum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Ends Here -->


    <!-- Footer Section Starts Here -->

    @include('includes.home_footer1')

    <!-- ***** Footer Start ***** -->
    {{-- @include('includes.home_footer') --}}

    @include('includes.home_script1')
    <!-- Footer Section Ends Here -->

</body>

<!-- Mirrored from template.viserlab.com/digihyip/demo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:12:47 GMT -->

</html>
