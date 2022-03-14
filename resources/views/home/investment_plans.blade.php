<!DOCTYPE html>
<html lang="en">

<head>


    <title>Softy Pinko - Bootstrap 4.0 Theme</title>

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
                            <h1>Investment Plans</h1>
                            <p>With this plans you can turn your finances around</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

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
                            <h3 class="pricing-title">STARTER</h3>
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
                                <li>Personal Account Manager</li>
                                <li class="active">3.0% Daily R.O.I</li>
                                <li class="active">5% Referral Bonus</li>
                                <li class="active">60 Days Contract</li>
                                <li class="active">3 Days Cash Out </li>
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
                            <h3 class="pricing-title">MAGNATE</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">5,000</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$5,000 Minimum Investment</li>
                                <li class="active">$9,999 Maximum Investment</li>
                                <li class="active">Personal Account Manager</li>
                                <li class="active">4.0% Daily R.O.I</li>
                                <li class="active">5% Referral Bonus</li>
                                <li class="active">60 Days Contract</li>
                                <li class="active">7 Days Cash Out </li>
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
                            <h3 class="pricing-title">GOLD</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">10,000</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$10,000 Minimum Investment</li>
                                <li class="active">$49,990 Maximum Investment</li>
                                <li class="active">Personal Account Manager</li>
                                <li class="active">4.5% Daily R.O.I</li>
                                <li class="active">5% Referral Bonus</li>
                                <li class="active">60 Days Contract</li>
                                <li class="active">10 Days Cash Out </li>
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
                            <h3 class="pricing-title">DIAMOND</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">50,000</span>
                                <span class="period">minimum</span>
                            </div>
                            <ul class="list">
                                <li class="active">$50,000 Minimum Investment</li>
                                <li class="active">Unlimited</li>
                                <li class="active">Personal Account Manager</li>
                                <li class="active">5.0% Daily R.O.I</li>
                                <li class="active">5% Referral Bonus</li>
                                <li class="active">60 Days Contract</li>
                                <li class="active">15 Days Cash Out </li>
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



    @include('includes.home_footer')

    <!-- ***** Footer Start ***** -->
    {{-- @include('includes.home_footer') --}}

    @include('includes.home_script')
    <!-- jQuery -->


</body>

</html>
