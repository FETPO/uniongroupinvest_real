<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <img src="assets/images/logo.png" alt="Softy Pinko" />
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('app.home') }}">Home</a></li>
                        <li><a href="{{ route('investment_plans') }}" >Investment Plans</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                              Services
                            </a>
                          
                            <ul class="dropdown-menu col-sm-12" aria-labelledby="dropdownMenuLink">
                              <li><a class="dropdown-item text-center" href="{{ route('services') }}">Services</a></li>
                              <li><a class="dropdown-item text-center" href="{{ route('cryptocurrency') }}">Cryptocurrencies</a></li>
                             <li> <a class="dropdown-item text-center" href="{{ route('escrow') }}">escrow</a></li>
                             <li> <a class="dropdown-item text-center" href="{{ route('forex') }}">forex</a></li>
                             <li> <a class="dropdown-item text-center" href="{{ route('loans') }}">loans</a></li>
                             <li> <a class="dropdown-item text-center" href="{{ route('real_estate') }}">real estate</a></li>
                             <li> <a class="dropdown-item text-center" href="{{ route('stocks') }}">stocks</a></li>
                            </ul>
                          </li>
                        <li><a href="{{ route('user.faq') }}">Faq</a></li>
                        <li><a href="{{ route('user.login') }}">Login</a></li>
                        <li><a href="{{ route('user.register') }}">Signup</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

