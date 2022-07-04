<div class="header">
    <div class="header-bottom pt-lg-5">
        <div class="container">
            <div class="header-bottom-area">
                <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="logo"></a></div>
                <ul class="menu">
                    <li>
                        <a href="{{ route('app.home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('investment_plans') }}">Investment Plans</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About us</a>
                    </li>
                    <li>
                        <a href="#0">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('cryptocurrency') }}">Cryptocurrencies</a></li>
                            <li><a href="{{ route('escrow') }}">escrow</a></li>
                            <li><a href="{{ route('forex') }}">forex</a></li>
                            <li><a href="{{ route('loans') }}">loans</a></li>
                            <li><a href="{{ route('real_estate') }}">real estate</a></li>
                            <li><a href="{{ route('stocks') }}">stocks</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('user.faq') }}">FAQs</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>   <!-- Menu End -->

                <div class="button__wrapper d-none d-lg-block">
                    <a href="{{ route('user.register') }}" class="cmn--btn4">Register</a>
                    <a href="{{ route('user.login') }}" class="cmn--btn4">Login</a>
                </div>
                

                <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                    <div class="mobile-nav-right d-flex align-items-center"></div>
                    <a href="#0" class="search--btn me-4 text--base"><i class="fas fa-search"></i></a>
                    <div class="header-trigger d-block d--none">
                        <span></span>
                    </div>
                </div>  <!-- Trigger End-->
            </div>
        </div>
    </div>
</div>