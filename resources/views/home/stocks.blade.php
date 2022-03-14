{{-- <p class="timeline-text"></p> --}}


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
                            <h1>STOCKS</h1>
                            <p>team oF experts helps in the investments
                                of highly-rated company stock, including corporate and sovereign
                                debt, equities, currencies and various derivatives and structured
                                products</p>
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
                        <h2 class="section-title">ALL YOU NEED TO KNOW ABOUT STOCKS</h2>
                    </div>
                </div>
              
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>A stock (also known as equity) is a security that represents
                        the ownership of a fraction of a corporation. This entitles the owner of the stock
                        to a proportion of the corporation's assets and profits equal to how much stock they
                        own. Units of stock are called "shares." Stocks are bought and sold predominantly on
                        stock exchanges, though there can be private sales as well, and are the foundation
                        of many individual investors' portfolios. These transactions have to conform to
                        government regulations which are meant to protect investors from fraudulent
                        practices. Historically, they have outperformed most other investments over the long
                        run. These investments can be purchased from most online stock brokers.</p>
                    
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
