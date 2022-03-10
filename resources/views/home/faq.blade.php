{{-- <!doctype html>
<html class="no-js" lang="en">
    @include('includes.home_css')
<!-- Mirrored from template.hasthemes.com/financo/financo/app.home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 14:23:51 GMT -->

<head>
    
    
</head>
@include('includes.home_header')
<body>
    <div class="breadcrumbs-area bg-overlay-dark bg-6">	
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-text text-left">
                        <h2>FAQ</h2>
                        <div class="breadcrumbs-bar">
                            <ul class="breadcrumbs">
                                <li><a href="{{route('app.home')}}">HOME</a></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="asked-area pt-120 pb-85 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sub_title">
                        <h3>Reqeust a Call Back</h3>
                        <p>send us a call and email us at </p>

                    </div>
                    <form id="contact-form" action="https://template.hasthemes.com/financo/financo/call-back-mail.php"
                        method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-box">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button type="submit" class="default-button submit-btn">Submit Now</button>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="default-panel">
                        <div class="sub_title">
                            <h3>Frequently Ask Question</h3>
                            <p>These are solutionsto the possible Questions you might have </p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h4 class="card-title">
                                        <a role="button" data-toggle="collapse" aria-expanded="true" href="#one"
                                            aria-controls="one">
                                            <span></span> WHAT IS THE WITHDRAWAL PROCEDURE??
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>You may make withdrawal requests at any time. Withdrawing funds is safe and
                                            simple with Master Trade.
                                            You can request for a withdrawal either from your account or by contacting
                                            your account manager. You will be required to submit proper documents in
                                            order to begin the process. Our accounting department will process the
                                            requests once you request for withdrawal of Funds </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" aria-expanded="false"
                                            href="#two" aria-controls="two">
                                            <span></span> HOW DO I DEPOSIT FUNDS??
                                        </a>
                                    </h4>
                                </div>
                                <div id="two" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Funding your Citigroup Invest account is simple and secure. You can fund your
                                            account through multiple payment methods including MoneyGram, WesternUnion,
                                            Bitcoin and Perfectmoney </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" aria-expanded="false"
                                            href="#three" aria-controls="three">
                                            <span></span> HOW LONG DOES IT TAKE TO CLOSE MY ACCOUNT AND GET A REFUND?
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>30 days - 90 days. Depending on the amount invested. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFour">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" aria-expanded="false"
                                            href="#four" aria-controls="four">
                                            <span></span> WHAT IS THE BEST INVESTMENT PLAN FOR YOU
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>here we have different investment packages that suits any class of citizens
                                            ..so we always advice you chose a plan you can afford to and can always
                                            increase your investment at any poin </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFive">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" aria-expanded="false"
                                            href="#five" aria-controls="five">
                                            <span></span> ARE THERE ANY HIDDEN CHARGES OR FEES?
                                        </a>
                                    </h4>
                                </div>
                                <div id="five" class="collapse" role="tabpanel" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. There are absolutely no hidden fees or extra charges. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFive">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" aria-expanded="false"
                                            href="#five" aria-controls="five">
                                            <span></span> HOW DO I GET STARTED?
                                        </a>
                                    </h4>
                                </div>
                                <div id="five" class="collapse" role="tabpanel" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>The steps involved in this process are really simple. All you need to do is:
                                            Investors in Master Trade must be at least 18 years of age. We guarantee the
                                            safety of personal data of users. The administration is not responsible for
                                            the transfer of your personal data to third parties. If you loose your
                                            password, click “forgot password” to your email address you will receive an
                                            activation email.Citigroup invest  prohibits the creation of numerous accounts
                                            without notifying the admin. You must understand the possible risks
                                            associated with investing, so don’t invest a higher amount than you can
                                            afford to loose. Invest from your heart. Any other related questions,
                                            enquires and suggestions arising during the services, you can put in a
                                            letter/ mail by contacting customer support. We will investigate the issue
                                            and you will receive a response as quickly as possible. Citigroup invest
                                            will help you gain your financial freedom so do not worry and always be
                                            positive as we WIN. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.home_footer')
    
</body>
@include('includes.home_script')

</html> --}}

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
                            <h1>FREQUENTLY ASKED QUESTIONS</h1>
                            <p>Below are the the most frequent questions</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <main style="margin-bottom: 50px">
        <div class="container">
            <h2 class="faq-heading">Frequently asked questions</h2>

            <details class="faq-card">
                <summary>WHAT IS THE WITHDRAWAL PROCEDURE?? <span class="faq-open-icon">+</span>
                </summary>
                <span class="faq-card-spoiler">You may make withdrawal requests at any time. Withdrawing funds is safe
                    and
                    simple with Master Trade.
                    You can request for a withdrawal either from your account or by contacting
                    your account manager. You will be required to submit proper documents in
                    order to begin the process. Our accounting department will process the
                    requests once you request for withdrawal of Funds </span>
            </details>
            <details class="faq-card">
                <summary>HOW DO I DEPOSIT FUNDS?? <span class="faq-open-icon">+</span></summary>
                <span class="faq-card-spoiler">Funding your Citigroup Invest account is simple and secure. You can fund
                    your
                    account through multiple payment methods including MoneyGram, WesternUnion,
                    Bitcoin and Perfectmoney </span>
            </details>
            <details class="faq-card">
                <summary>HOW LONG DOES IT TAKE TO CLOSE MY ACCOUNT AND GET A REFUND? <span
                        class="faq-open-icon">+</span></summary>
                <span class="faq-card-spoiler">30 days - 90 days. Depending on the amount invested. </span>
            </details>
            <details class="faq-card">
                <summary>WHAT IS THE BEST INVESTMENT PLAN FOR YOU <span class="faq-open-icon">+</span></summary>
                <span class="faq-card-spoiler">here we have different investment packages that suits any class of
                    citizens
                    ..so we always advice you chose a plan you can afford to and can always
                    increase your investment at any poin </span>
            </details>
            <details class="faq-card">
                <summary>ARE THERE ANY HIDDEN CHARGES OR FEES? <span class="faq-open-icon">+</span></summary>
                <span class="faq-card-spoiler">No. There are absolutely no hidden fees or extra charges.</span>
            </details>
            <details class="faq-card">
                <summary>HOW DO I GET STARTED? <span class="faq-open-icon">+</span></summary>
                <span class="faq-card-spoiler">
                    <p>The steps involved in this process are really simple. All you need to do is:
                        Investors in Master Trade must be at least 18 years of age. We guarantee the
                        safety of personal data of users. The administration is not responsible for
                        the transfer of your personal data to third parties. If you loose your
                        password, click “forgot password” to your email address you will receive an
                        activation email.Citigroup invest prohibits the creation of numerous accounts
                        without notifying the admin. You must understand the possible risks
                        associated with investing, so don’t invest a higher amount than you can
                        afford to loose. Invest from your heart. Any other related questions,
                        enquires and suggestions arising during the services, you can put in a
                        letter/ mail by contacting customer support. We will investigate the issue
                        and you will receive a response as quickly as possible. Citigroup invest
                        will help you gain your financial freedom so do not worry and always be
                        positive as we WIN. </p>
                </span>
            </details>

            <h2 class="faq-heading">Still have questions?</h2>
            <p class="faq-aftertext">If you cannot find answer to your question in our FAQ, you can always<br>
                contact us. We will answer shortly!
            </p>
        </div>
    </main>

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
