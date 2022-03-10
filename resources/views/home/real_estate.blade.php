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
                            <h1>REAL ESTATE</h1>
                            <p>Uniongroup Real Estate finance is a good investment plan we offer to you to buy or build
                                your dream home anywhere in the world</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
  
    <section class="  section" id="testimonials">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">ALL YOU NEED TO KNOW ABOUT REAL ESTATE FINANCING</h2>
                    </div>
                </div>
              
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>CitiGroup invest is a different way to invest
                        online. We help you lay a foundation for you to accumulate and build
                        wealth. Earning money from long-term multi-million dollar real estate
                        assets can set your family up for a better future. In order to build
                        true wealth, you have to invest. You don’t build generational wealth by
                        putting everything in the stock market or into a savings account, you do
                        it by diversifying your portfolio into alternatives here at CitiGroup invest
                        .</p>
                    
                </div>
                <!-- ***** Testimonials Item End ***** -->

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
                        <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit
                            semper.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                            <br>auctor non lorem
                        </p>
                        <p>You are NOT allowed to re-distribute Softy Pinko template on any template collection
                            websites. Thank you.</p>
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
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your Message" required=""></textarea>
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
