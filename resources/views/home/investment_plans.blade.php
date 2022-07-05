<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.viserlab.com/digihyip/demo/plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:13:26 GMT -->
<head>
    <title>Zenith Group Invest Investment Plans</title>

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
                <h2 class="title">Investment Plan</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="index.html">Home</a>//</li>
                    <li>Investment Plan</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="{{ asset('assets/newassets/images/banner/inner-bg.png') }}" alt="banner" class="shape shape1">
            <img src="{{ asset('assets/newassets/images/banner/inner-thumb.png') }}" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


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
                            <p class="plan-parcent-info">Duration 15days</p>
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
                            <p class="footer-info"> Returns: Every 15days</p>
                        </div>
                        <a href="{{ route('user.register') }}" class="cmn--btn" style="margin-top: 10px;">Register</a>
                    </div>
                </div>
                <div class="single-slide">
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
    <!-- Plan Section Ends Here -->


    <!-- Referral Section Starts Here -->
    <section class="referral-section  padding-bottom section-bg-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 align-self-end d-none d-lg-block">
                    <div class="section__thumb rtl me-5">
                        <img src="{{ asset('assets/newassets/images/referral/thumb.png') }}" alt="referral">
                        <div class="shapes">
                            <img src="{{ asset('assets/newassets/images/referral/clock.png') }}" alt="referral" class="shape shape1">
                            <img src="{{ asset('assets/newassets/images/referral/man.png') }}" alt="referral" class="shape shape2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__header">
                        <h2 class="section__header-title">Up to 35% Referral Commission</h2>
                        <p>Our investment plans can give you a return of 10% if your refer someone that can benefit from our platform</p>
                    </div>
                    <a href="sign-up.html" class="cmn--btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Referral Section Ends Here -->
    @include('includes.home_footer1')

    <!-- ***** Footer Start ***** -->
    {{-- @include('includes.home_footer') --}}

    @include('includes.home_script1')
    <!-- Footer Section Ends Here -->
</body>

<!-- Mirrored from template.viserlab.com/digihyip/demo/plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:13:26 GMT -->
</html>