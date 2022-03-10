
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
                            <h1>ESCROW</h1>
                            <p>We offer escrow services to our customers who
                                needs to make exchanges between two parties </p>
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
                        <h2 class="section-title">ALL YOU NEED TO KNOW ABOUT REAL ESCROW SERVICES</h2>
                    </div>
                </div>
              
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Escrow is a legal concept describing a financial instrument whereby an asset or escrow money is
                        held by a third party on behalf of two other parties that are in the process of completing a
                        transaction. Escrow accounts might include escrow fees managed by agents who hold the funds or
                        assets until receiving appropriate instructions or until the fulfillment of predetermined
                        contractual obligations. Money, securities, funds, and other assets can all be held in escrow.
                        It is often suggested as a replacement for a certified or cashier's check.</p>

                        <br><br>
                        
                        Escrow is the use of a third party, which holds an asset or funds before they are transferred
                        from one party to another.</p>

                        <br><br>
                        The third-party holds the funds until both parties have fulfilled their contractual
                        requirements.</p>

                        <br><br>
                        Escrow is associated with real estate transactions, but it can apply to any situation where
                        funds will pass from one party to another.</p>

                        <br><br>
                        With real estate, escrow can be used when purchasing a home, but also for the life of a
                        mortgage.</p>

                        <br><br>
                        
                        Online escrow has been on the rise as a way to offer secure transactions for high-ticket items,
                        such as art or jewelry.</p>

                        <br><br>
                        
                        Escrow is a process used when two parties are in the process of completing a transaction, and
                        there is uncertainty over whether one party or another will be able to fulfill their
                        obligations. Contexts that use escrow include Internet transactions, banking, intellectual
                        property, real estate, mergers and acquisitions, and law, and many more. Consider a company that
                        is selling goods internationally. That company requires assurance that it will receive payment
                        when the goods reach their destination. The buyer, for their part, is prepared to pay for the
                        goods only if they arrive in good condition. The buyer can place the funds in escrow with an
                        agent with instructions to disburse them to the seller once the goods arrive in a suitable
                        state. This way, both parties are safe, and the transaction can proceed.
                        
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
