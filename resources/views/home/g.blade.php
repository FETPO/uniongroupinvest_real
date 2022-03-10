<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from template.hasthemes.com/financo/financo/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 14:23:51 GMT -->

<head>
    @include('includes.home_css')

</head>
@include('includes.home_header')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- Header Area End -->
    <!-- Background Area Start -->
    <div class="slider-four-area">
        <div class="slider-wrapper">
            <div class="single-slide" style="background-image: url('{{ asset('assets/img/slider/4.jpg') }}');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h3 class="title1 pt-65">WE PROVIDE BEST FINANCIAL SOLUTIONS</h3>
                                        <h1 class="title2">FOR YOUR FINANCIAL PLAN</h1>
                                        <p>We have over 25 year’s of experience in Finance and Business management so we
                                            can make your business more successful you can trust us</p>
                                        <div class="banner-readmore">
                                            <a class="button banner-btn" href="{{ route('services') }}">VIEW
                                                SERVICES</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image: url('{{ asset('assets/img/slider/4.jpg') }}');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="text-content-wrapper slide-two">
                                    <div class="text-content text-center">
                                        <h3 class="title1 pt-65">WE PROVIDE BEST FINANCIAL SOLUTIONS</h3>
                                        <h1 class="title2">FOR YOUR FINANCIAL PLAN</h1>
                                        <p>We have over 25 year’s of experience in Finance and Business management so we
                                            can make your business more successful you can trust us</p>
                                        <div class="banner-readmore">
                                            <a class="button banner-btn" href="{{ route('services') }}">VIEW
                                                SERVICES</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background Area End -->
    <!-- Services Area Start -->
    {{-- {{asset('assets/')}} --}}
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
                                funds all the time thereby growing you funds daily </p>
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
    </div>
    <!-- Services Area End -->
    {{-- {{asset('assets/')}} --}}
    <!-- Information Area Start -->
    <div class="information-four-area bg-light fix">
        <div class="information-chart">
            <div id="chartContainer2" style="height: 345px; width: 100%;"></div>
        </div>
        <div class="information-text">
            <h3><span>We Provide Best</span></h3>
            <h2>Financial Plan for You</h2>
            <p> Citigroup invest was established in 2013
                and it initially began trading stocks, shares and bonds, it got
                involved in forex in 2015 and was among the pioneer traders of
                Cryptocurrencies in the advent of Bitcoin in 2014. Citigroup invest
                is currently managed by a senior team which has extensive
                experience in the development and implementation of systematic
                investment strategies. The company emphasises strong corporate
                governance and the provision of first class investor service to a
                client base which includes many of the world’s leading institutional
                investors.
            </p>
            <p> At Citigroup invest , we deliver strategic
                advice and solutions, including capital raising, risk management,
                and trade finance services to corporations, institutions and
                individuals, We also offer-long term and short-term investment
                opportunities. </p>
            <a href="{{ route('investment_plans') }}" class="default-button">Learn more</a>
        </div>
    </div>
    <!-- Information Area End -->
    <!-- About Area Start -->
    <div class="about-four-area bg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-text">
                        <h3>We are <span>Citigroup invest</span></h3>
                        <h2>Your Complete Financial Solutions </h2>
                        <h4>Time is money, So lets start with proper financial plan</h4>
                        <p>We will go ahead that extra mile to ensure our
                            clients welfare, our working hours convenient to our Client's needs from our
                            first contact.</p>
                        <p>We have the most famous experts in reputable
                            company providing great advice on Wills, Lasting Power of Attorney and Debt
                            Solution</p>
                    </div>
                    <div class="about-text-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-content">
                                    <h4 class="single-title">Financial Service</h4>
                                    <p>our advisors and anaylsts are avaible at all hours of the day We have the most
                                        famous experts in reputable
                                        company providing great advice on Wills, Lasting Power of Attorney and Debt
                                        Solution<< /p>
                                </div>
                                <div class="single-content">
                                    <h4 class="single-title">Business Analysis</h4>
                                    <p>We don’t believe in the sales culture, but instead
                                        we believe in the service culture. Yes, time is precious, but we make the
                                        right decision</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-content">
                                    <h4 class="single-title">Best Consutancy</h4>
                                    <p>our adminstrator is available 24hrs .We will go ahead that extra mile to ensure
                                        our
                                        clients welfare, our working hours convenient to our Client's needs from our
                                        first contact</p>
                                </div>
                                <div class="single-content">
                                    <h4 class="single-title">Detailed Report</h4>
                                    <p>Our experts are always available over the phone
                                        and online. Web chat is available 24/7 or you can give us a call
                                        for free.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!-- Features Area Start -->
    <div class="features-area bg-light fix">
        <div class="feature-left-column">
            <img src="{{ asset('assets/img/banner/2.jpg') }}" alt="">
        </div>
        <div class="feature-right-column">
            <div class="coustom-col-10">
                <div class="feature-text">
                    <h3><span>Why You</span></h3>
                    <h2>Choose Citigroup Invest</h2>
                    <p>At Citigroup invest , we deliver strategic
                        advice and solutions, including capital raising, risk management,
                        and trade finance services to corporations, institutions and
                        individuals, We also offer-long term and short-term investment
                        opportunities.</p>
                </div>
            </div>
            <div class="custom-row">
                <div class="coustom-col-5">
                    <div class="single-item">
                        <span class="service-image">
                            <img src="{{ asset('assets/img/icons/rocket.png') }}" alt="">
                        </span>
                        <div class="service-text">
                            <h4>Fast Loan Approval</h4>
                            <p>we give guaranteed fast loans to our clients with low interest rate </p>
                        </div>
                    </div>
                </div>
                <div class="coustom-col-5">
                    <div class="single-item">
                        <span class="service-image">
                            <img src="{{ asset('assets/img/icons/team.png') }}" alt="">
                        </span>
                        <div class="service-text">
                            <h4>Dedicated Team</h4>
                            <p> Our experts are always available over the phone
                                and online. Web chat is available 24/7 or you can give us a call
                                for free</p>
                        </div>
                    </div>
                </div>
                <div class="coustom-col-5">
                    <div class="single-item">
                        <span class="service-image">
                            <img src="{{ asset('assets/img/icons/doc.png') }}" alt="">
                        </span>
                        <div class="service-text">
                            <h4>Free Documentation</h4>
                            <p>we give fully detailed Report to our clients on the progress of their investments</p>
                        </div>
                    </div>
                </div>
                <div class="coustom-col-5">
                    <div class="single-item">
                        <span class="service-image">
                            <img src="{{ asset('assets/img/icons/refi.png') }}" alt="">
                        </span>
                        <div class="service-text">
                            <h4>Refinancing</h4>
                            <p>Here you can invest or top up of your investments at any point</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Area End -->
    {{-- {{asset('assets/')}} --}}
    <!-- Advertise Area Start -->
    <div class="advertise-area bg-2 overlay-green">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="advertise-text text-white text-center">
                        <h2>We Provide Best Financial Advsory for our investors</h2>
                        <p>We have over 25 year’s of experience in Finance and Business management so we can make your
                            business more successful you can trust us and we care about it</p>
                        <a href="{{ route('user.register') }}" class="default-button btn-white">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advertise Area End -->
    <!-- Projects Area Start -->
    <div class="projects-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title text-center mb-55">
                        <h2>Our Projects</h2>
                        <p>when your people get up every day wanting to come to work,
                            success happens, we help you to ensure everyone makes the right investment
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row custom-row grid fix">
                <div class="col-lg-4 col-md-6 col-12 grid-item">
                    <div class="project-style">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/13.jpg') }}" alt="" />
                        </div>
                        <div class="project-hover">
                            <a class="project-icon image-popup-no-margins"
                                href="{{ asset('assets/img/project/13.jpg') }}"><img
                                    src="{{ asset('assets/img/icons/src.png') }}" alt=""></a>
                            <div class="project-text">
                                <h4><a href="project.html">Financial Planning</a></h4>
                                <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item">
                    <div class="project-style">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/14.jpg') }}" alt="" />
                        </div>
                        <div class="project-hover">
                            <a class="project-icon image-popup-no-margins"
                                href="{{ asset('assets/img/project/14.jpg') }}"><img
                                    src="{{ asset('assets/img/icons/src.png') }}" alt=""></a>
                            <div class="project-text">
                                <h4><a href="project.html">Financial Planning</a></h4>
                                <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item">
                    <div class="project-style">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/15.jpg') }}" alt="" />
                        </div>
                        <div class="project-hover">
                            <a class="project-icon image-popup-no-margins"
                                href="{{ asset('assets/img/project/15.jpg') }}"><img
                                    src="{{ asset('assets/img/icons/src.png') }}" alt=""></a>
                            <div class="project-text">
                                <h4><a href="project.html">Financial Planning</a></h4>
                                <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item">
                    <div class="project-style">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/16.jpg') }}" alt="" />
                        </div>
                        <div class="project-hover">
                            <a class="project-icon image-popup-no-margins"
                                href="{{ asset('assets/img/project/16.jpg') }}"><img
                                    src="{{ asset('assets/img/icons/src.png') }}" alt=""></a>
                            <div class="project-text">
                                <h4><a href="project.html">Financial Planning</a></h4>
                                <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item">
                    <div class="project-style">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/17.jpg') }}" alt="" />
                        </div>
                        <div class="project-hover">
                            <a class="project-icon image-popup-no-margins"
                                href="{{ asset('assets/img/project/17.jpg') }}"><img
                                    src="{{ asset('assets/img/icons/src.png') }}" alt=""></a>
                            <div class="project-text">
                                <h4><a href="project.html">Financial Planning</a></h4>
                                <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item">
                    <div class="project-style">
                        <div class="project-image">
                            <img src="{{ asset('assets/img/project/18.jpg') }}" alt="" />
                        </div>
                        <div class="project-hover">
                            <a class="project-icon image-popup-no-margins"
                                href="{{ asset('assets/img/project/18.jpg') }}"><img
                                    src="{{ asset('assets/img/icons/src.png') }}" alt=""></a>
                            <div class="project-text">
                                <h4><a href="project.html">Financial Planning</a></h4>
                                <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects Area End -->
    {{-- {{asset('assets/')}} --}}
    <!-- Asked Area Start -->
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

                            {{-- <div class="card">
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
                        </div> --}}
                        </div>

                    </div>
                    <a href="{{ route('user.faq') }}" class="default-button">Learn more</a>
                </div>
            </div>
        </div>
        <!-- Asked Area End -->

        <!-- Fun Factor Start -->
        <div class="fun-factor-area bg-3 overlay-green pt-100 fix pb-95">
            <div class="container">
                <div class="fun-custom-row">
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="{{ asset('assets/img/icons/cup.png') }}" alt="" class="mr-15">
                                <h2><span class="counter">2500</span></h2>
                            </div>
                            <h4>individual investors</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="{{ asset('assets/img/icons/check.png') }}" alt="" class="mr-15">
                                <h2><span class="counter">2280</span></h2>
                            </div>
                            <h4>brokage accounts</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="{{ asset('assets/img/icons/face.png') }}" alt="" class="mr-15">
                                <h2><span class="counter">4764</span></h2>
                            </div>
                            <h4>commisionable assets</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="{{ asset('assets/img/icons/teams.png') }}" alt="" class="mr-15">
                                <h2><span class="counter">569</span></h2>
                            </div>
                            <h4>Team Members</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="{{ asset('assets/img/icons/trophy.png') }}" alt="" class="mr-15">
                                <h2><span class="counter">5100</span></h2>
                            </div>
                            <h4>Customers assets</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fun Factor End -->
        {{-- {{asset('assets/')}} --}}
        <!-- Team Area Start -->
        <div class="team-area fix pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title text-center mb-95">
                            <h2>Our Team</h2>
                            <p>our team are Dedicatedin working together with our clients towards achieving their goals
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="single-team-member">
                            <div class="member-image">
                                <a href="#" class="block">
                                    <img src="{{ asset('assets/img/team/1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="member-text">
                                <h3><a href="#">Robert Williams</a></h3>
                                <span>Chef Executive Officer</span>
                                <p> </p>
                                <div class="link-effect">
                                    <ul>
                                        {{-- <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/mg/icons/facebook-hover.png') }}i" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}" alt=""></a>
                                    </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="single-team-member">
                            <div class="member-image">
                                <a href="#" class="block">
                                    <img src="{{ asset('assets/img/team/2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="member-text">
                                <h3><a href="#">Jasmin Jaquline</a></h3>
                                <span>Financial Advisor</span>
                                <p> </p>
                                <div class="link-effect">
                                    {{-- <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}" alt=""></a>
                                    </li>
                                </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="single-team-member mt-sm-30">
                            <div class="member-image">
                                <a href="#" class="block">
                                    <img src="{{ asset('assets/img/team/3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="member-text">
                                <h3><a href="#">Sharlok Homes</a></h3>
                                <span>Chef Executive Officer</span>
                                <p> </p>
                                <div class="link-effect">
                                    <ul>
                                        {{-- <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}" alt=""></a>
                                    </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="single-team-member mt-md-30 mt-sm-30">
                            <div class="member-image">
                                <a href="#" class="block">
                                    <img src="{{ asset('assets/img/team/4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="member-text">
                                <h3><a href="#">Rose Smith</a></h3>
                                <span>Financial Consultant</span>
                                <p></p>
                                <div class="link-effect">
                                    {{-- <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}" alt=""></a>
                                    </li>
                                </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Area End -->
        {{-- {{asset('assets/')}} --}}
        <!-- testimonial Carousel Start -->
        {{-- <div class="testmonial-carousel bg-light ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="testmonial-wrapper text-center">
                        <div class="single-testi">
                            <div class="testi-img">
                                <img src="{{ asset('assets/img/testi/1.jpg') }}" alt="">
                            </div>
                            <div class="testi-text">
                                <p>Financo amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequatuis aute irure</p>
                                <h5><a href="#">Andrew Williams</a></h5>
                                <span>CEO &amp; Founder</span>
                            </div>
                        </div>
                        <div class="single-testi">
                            <div class="testi-img">
                                <img src="{{ asset('assets/img/testi/1.jpg') }}" alt="">
                            </div>
                            <div class="testi-text">
                                <p>Financo amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequatuis aute irure</p>
                                <h5><a href="#">Andrew Williams</a></h5>
                                <span>CEO &amp; Founder</span>
                            </div>
                        </div>
                        <div class="single-testi">
                            <div class="testi-img">
                                <img src="{{ asset('assets/img/testi/1.jpg') }}" alt="">
                            </div>
                            <div class="testi-text">
                                <p>Financo amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequatuis aute irure</p>
                                <h5><a href="#">Andrew Williams</a></h5>
                                <span>CEO &amp; Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial Carousel End -->
    {{-- {{asset('assets/')}} --}}
        <!-- Blog Area Start -->
        {{-- <div class="blog-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title text-center mb-55">
                        <h2>From Blog</h2>
                        <p>Financo amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="col-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/1.jpg') }}" alt=""></a>
                            <span>10 January, 2017</span>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Financial Meeting</a></h4>
                            <p>Financo consectetur adipiscing elited do eiusmod tempor incididnt mint </p>
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/2.jpg') }}" alt=""></a>
                            <span>08 January, 2017</span>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Financial Planning</a></h4>
                            <p>Financo consectetur adipiscing elited do eiusmod tempor incididnt mint </p>
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/3.jpg') }}" alt=""></a>
                            <span>06 January, 2017</span>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Financial Tips and Tricks</a></h4>
                            <p>Financo consectetur adipiscing elited do eiusmod tempor incididnt mint </p>
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/4.jpg') }}" alt=""></a>
                            <span>04 January, 2017</span>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Financial Investment</a></h4>
                            <p>Financo consectetur adipiscing elited do eiusmod tempor incididnt mint </p>
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        <!-- Blog Area End -->
        {{-- {{asset('assets/')}} --}}
        <!--Start of Client area-->
        <div class="client-area ptb-40 bg-light">
            <div class="container">
                <div class="client-carousel">
                    <div class="col-12">
                        <div class="single-client block">
                            <a href="#" class="block">
                                <span class="p-images"><img src="{{ asset('assets/img/client/1.png') }}"
                                        alt=""></span>
                                <span class="s-images"><img src="{{ asset('assets/img/client/1-hover.png') }}"
                                        alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-client block">
                            <a href="#" class="block">
                                <span class="p-images"><img src="{{ asset('assets/img/client/2.png') }}"
                                        alt=""></span>
                                <span class="s-images"><img src="{{ asset('assets/img/client/2-hover.png') }}"
                                        alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-client block">
                            <a href="#" class="block">
                                <span class="p-images"><img src="{{ asset('assets/img/client/3.png') }}"
                                        alt=""></span>
                                <span class="s-images"><img src="{{ asset('assets/img/client/3-hover.png') }}"
                                        alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-client block">
                            <a href="#" class="block">
                                <span class="p-images"><img src="{{ asset('assets/img/client/4.png') }}"
                                        alt=""></span>
                                <span class="s-images"><img src="{{ asset('assets/img/client/4-hover.png') }}"
                                        alt=""></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-client block">
                            <a href="#" class="block">
                                <span class="p-images"><img src="{{ asset('assets/img/client/5.png') }}"
                                        alt=""></span>
                                <span class="s-images"><img src="{{ asset('assets/img/client/5-hover.png') }}"
                                        alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.home_footer')
        <!--End of Client area-->
        {{-- {{asset('assets/')}} --}}
        <!--Start of Footer Widget-area-->

        <!-- End of Footer area -->

        <!-- All js here -->

        @include('includes.home_script')
</body>
<!-- Mirrored from template.hasthemes.com/financo/financo/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 14:25:29 GMT -->

</html>
