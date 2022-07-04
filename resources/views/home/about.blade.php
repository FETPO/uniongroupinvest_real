<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.viserlab.com/digihyip/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:13:26 GMT -->
<head>
    <title>Zenith Group Invest About</title>

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
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">About Company</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="{{ route('app.home') }}">Home</a>//</li>
                    <li>About</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="{{ asset('assets/newassets/images/banner/inner-bg.png') }}" alt="banner" class="shape shape1">
            <img src="{{ asset('assets/newassets/images/banner/inner-thumb.png') }}" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Feature Section Starts Here -->
    <section class="feature-section padding-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">We are ZenithGroup Invest Your Complete Financial Solutions</h2>
                        <p>
                            ZenithGroup Invest was established in 2003 and it initially began trading stocks, shares and bonds, it got involved in forex in 2008 and was among the pioneer traders of Cryptocurrencies in the advent of Bitcoin in 2010. Zenith group invest is currently managed by a senior team which has extensive experience in the development and implementation of systematic investment strategies. The company emphasises strong corporate governance and the provision of first class investor service to a client base which includes many of the world’s leading institutional investors.

At ZenithGroup Invest, we deliver strategic advice and solutions, including capital raising, risk management, and trade finance services to corporations, institutions and individuals, We also offer-long term and short-term investment opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Ends Here -->

    <!-- Feature Two Section Starts Here -->
    <section class="feature-section padding-bottom">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="section__header m-0">
                        <h2 class="section__header-title">Let`s Go for Investment & Get Your Profit</h2>
                        <span class="d-block"> ZenithGroupInvest is set out to change the lanscape of investment of assets around the globe </span>
                        <a href="{{ route('app.home') }}" class="cmn--btn mt-4">Register</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gy-sm-5 gy-4 gx-xl-5 h-100 justify-content-between">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-coins"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Get More Profit</h3>
                                    <p>The higher the funds invested the higher thre returns on investmnt</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-headset"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">24/7 Support</h3>
                                    <p>We have support team that works round the clock and ill respond to you at anytome </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Strong Protection </h3>
                                    <p>We took security of our customers into considerations hen designing our system</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-user-check"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Relability</h3>
                                    <p>Zenithgroup invest is a platform you can rely on to change you finances</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Two Section Ends Here -->


    <!-- Plan Section Starts Here -->
    <section class="plan-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Investment Plans</h2>
                    </div>
                </div>
            </div>
            <div class="plan__slider">
                <div class="single-slide">
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
                        <a href="{{ route('user.register') }}" class="cmn--btn" style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="single-slide">
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
                        <a href="{{ route('user.register') }}" class="cmn--btn" style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Advance</h2>
                            <p class="plan-parcent-info">Duration 30days</p>
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
                                    <span class="title">25% ROI</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Returns: Every 30days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn" style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="plan__item style--two">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Life</h2>
                            <p class="plan-parcent-info">Duration 60days</p>
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
                                    <span class="title">35% ROI</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Returns: Every 60days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn" style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="single-slide">
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
                        <a href="{{ route('user.register') }}" class="cmn--btn" style="margin-top: 10px;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@include('includes.home_footer1')

<!-- ***** Footer Start ***** -->
{{-- @include('includes.home_footer') --}}

@include('includes.home_script1')
<!-- Footer Section Ends Here -->
</body>

<!-- Mirrored from template.viserlab.com/digihyip/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:13:26 GMT -->
</html>