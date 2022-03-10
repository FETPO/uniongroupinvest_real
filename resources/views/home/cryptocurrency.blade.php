

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
                            <h1>CRYPTOCURRENCIES</h1>
                            <p>we help you manage your cryptocurrency
                                portfolio and help you grow them exponentially</p>
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
                        <h2 class="section-title">CRYPTOCURRENCIES</h2>
                    </div>
                </div>

            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Cryptocurrency is a form of payment that can be exchanged online for goods and services.
                        Many companies have issued their own currencies, often called tokens, and 
                        These can be traded specifically for the good or service that the company provides. 
                        Think of them as you would arcade tokens or casino chips. 
                        You’ll need to exchange real currency for the cryptocurrency to access the good or service. 
                        Cryptocurrencies work using a technology called blockchain. 
                        Blockchain is a decentralized technology spread across many computers that manages and records transactions. 
                        Part of the appeal of this technology is its security. </P>
                        <P>Cryptocurrencies are sets of software protocols for generating digital tokens and 
                        for tracking transactions in a way that makes it hard to counterfeit or re-use tokens. 
                        which is why at Uniongroup invest we pride ourselves in ensuring you choose the right investment plan for you. 
                        More than 10,000 different cryptocurrencies are traded publicly, according to CoinMarketCap.com, 
                        a market research website. And cryptocurrencies continue to proliferate, raising money through initial coin offerings
                        , or ICOs. The total value of all cryptocurrencies on Aug. 18, 2021, was more than 
                        $1.9 trillion — down from April high of $2.2 trillion, according to CoinMarketCap. 
                        The total value of all bitcoins, the most popular digital currency, was pegged at about $849 billion, 
                        regaining some ground from recent price lows. Still, 
                        the market value of bitcoin is down from April high of $1.2 trillion with our 24/7 support staffs present, 
                        we work round the clock to ensure smooth user experience.</p>
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
