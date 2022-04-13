<!DOCTYPE html>
<html lang="en">

<head>


    <title>Services</title>

    @include('includes.home_css')

</head>

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
 
    @include('includes.home_header')

    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>OUR SERVICES</h1>
                            <p>At Uniongroup invest , we deliver strategic
                                advice and solutions, including capital raising, risk management,
                                and trade finance services to corporations, institutions and
                                individuals, We also offer-long term and short-term investment
                                opportunities.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
  
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
                            <i><img src="{{ asset('assets/images/testimonial-icon.png') }}"
                                    alt=""></i>
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
                            <i><img src="{{ asset('assets/images/testimonial-icon.png') }}"
                                    alt=""></i>
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

    {{-- <div class="breadcrumbs-area bg-overlay-dark bg-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-text text-left">
                        <h2>SERVICES</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="{{ route('app.home') }}">HOME</a></li>
                                <li>SERVICES</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="service-main-area pt-100 pb-105 bg-rotate">
        <div class="service-banner">
            <div class="container">
                <div class="service-banner-left">
                    <img src="{{ asset('assets/img/banner/2.png') }}" alt="">
                </div>
                <div class="service-banner-right">
                    <div class="information-text">
                        <h3><span>We Provide the</span></h3>
                        <h2>Best Financial Services </h2>
                        <p>At Uniongroup invest , we deliver strategic
                            advice and solutions, including capital raising, risk management,
                            and trade finance services to corporations, institutions and
                            individuals, We also offer-long term and short-term investment
                            opportunities.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="service-area pt-120 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title text-center mb-55">
                            <h2>OUR SERVICES</h2>
                            <p>when your people get up every day wanting to come to work,
                                success happens, we help you to ensure everyone makes the right investment
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="{{ asset('assets/img/icons/plan.png') }}" alt="">
                            </span>
                            <div class="service-text">
                                <h4>CRYPTOCURRENCY</h4>
                                <p> we help you manage your cryptocurrency
                                    portfolio and help you grow them exponentially </p>
                                <a href="{{ route('cryptocurrency') }}" class="default-button">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="{{ asset('assets/img/icons/cash.png') }}" alt="">
                            </span>
                            <div class="service-text">
                                <h4>ESCROW SERVICES</h4>
                                <p>We offer escrow services to our customers who
                                    needs to make exchanges between two parties </p>
                                <a href="{{ route('escrow') }}" class="default-button">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="{{ asset('assets/img/icons/brif.png') }}" alt="">
                            </span>
                            <div class="service-text">
                                <h4>STOCKS</h4>
                                <p>team oF experts helps in the investments
                                    of highly-rated company stock, including corporate and sovereign
                                    debt, equities, currencies and various derivatives and structured
                                    products</p>
                                <a href="{{ route('stocks') }}" class="default-button">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="{{ asset('assets/img/icons/hand.png') }}" alt="">
                            </span>
                            <div class="service-text">
                                <h4>REAL ESTATE</h4>
                                <p>We also run real estate fund investments
                                    which has proven to give the highest returns in recent times </p>
                                <a href="{{ route('real_estate') }}" class="default-button">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="{{ asset('assets/img/icons/commo.png') }}" alt="">
                            </span>
                            <div class="service-text">
                                <h4>FOREX</h4>
                                <p>Our team of experience trader, trades you
                                    funds all the time thereby growing your funds daily </p>
                                <a href="{{ route('forex') }}" class="default-button">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="{{ asset('assets/img/icons/reti.png') }}" alt="">
                            </span>
                            <div class="service-text">
                                <h4>LOANS</h4>
                                <p>Our company offers personal loans which can be
                                    used for a variety of things </p>
                                <a href="{{ route('loans') }}" class="default-button">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- End of Footer area -->
        @include('includes.home_footer')
        <!-- All js here -->

</body>
@include('includes.home_script')
<!-- Mirrored from template.hasthemes.com/financo/financo/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 14:51:11 GMT -->

</html>
