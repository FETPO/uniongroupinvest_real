<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.viserlab.com/digihyip/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:13:37 GMT -->
<head>
    <title>Zenith Group Invest Contact</title>

    @include('includes.home1_css')

</head>
<body>

    <div class="preloader">
        <div class="preinnner">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
    </div>
    <div class="overlay"></div>

    @include('includes.home_header1')

    <!-- Search Form Starts Here -->
    <div class="search__form__wrapper">
        <div class="form__inner">
            <form class="search__form">
                <div class="form-group">
                    <input type="text" class="form-control form--control" placeholder="Search Here...">
                    <button type="submit" class="cmn--btn btn">Search</button>
                </div>
            </form>
            <button class="btn-close btn-close-white"></button>
        </div>
    </div>
    <!-- Search Form Ends Here -->


    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Get in Touch With us</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="index.html">Home</a>//</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="{{ asset('assets/newassets/images/banner/inner-bg.png') }}" alt="banner" class="shape shape1">
            <img src="{{ asset('assets/newassets/images/banner/inner-thumb.png') }}" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Contact Section Starts Here -->
    <div class="contact-section">
        <div class="container">
            <div class="row padding-top padding-bottom gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-map-marker"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Office Address</h3>
                            <p>Jefferson City 1435 Missouri Blvd</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-envelope-open-text"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Email Address</h3>
                            <ul class="contacts">
                                <li><a href="#"><span class="__cf_email__" data-cfemail="49212c252526672a302b2c3b092e24282025672a2624">support@zenithgroupinvest.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Phone Number</h3>
                            <ul class="contacts">
                                <li><a href="tel:02834">+15102882641</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative map__area">
            <div class="container padding-top padding-bottom contact__area">
                <div class="contact__form__wrapper mx-auto me-lg-0">
                    <h3 class="title">Send Your Messages</h3>
                    <form class="contact__form form" id="contact_form_submit" action="https://template.viserlab.com/digihyip/demo/contact.php">
                        <div class="form-group">
                            <input type="text" class="form-control form--control" placeholder="Full Name" name="contact_name" id="contact_name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form--control" name="contact_email" placeholder="Email" id="contact_email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form--control" name="contact_message" placeholder="Write Your Messages" id="contact_message"></textarea>
                        </div>
                        <button type="submit" class="cmn--btn btn">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="map__wrapper">
                <div class="overlay01"></div>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4340.214604426607!2d90.39243230460072!3d23.830298940050135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1638968781774!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact Section Ends Here -->

 <!-- Plan Section Ends Here -->

 @include('includes.home_footer1')

 @include('includes.home_script1')
 <!-- Footer Section Ends Here -->
</body>

<!-- Mirrored from template.viserlab.com/digihyip/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 07:13:37 GMT -->
</html>