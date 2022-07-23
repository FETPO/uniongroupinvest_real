{{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/shortcode/shortcodes.css') }}">
<link rel="stylesheet" href="{{ asset("assets/css/default.css") }}"> --}}
{{-- <link id="skin-default" rel="stylesheet" href="{{ asset("assets/css/dashboard/theme.css?ver=1.4.0") }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"> --}}


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/ugp.png') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/templatemo-softy-pinko.css') }}">

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/622f407fa34c2456412af87e/1fu497sve';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd"
    background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>

<style>
    .poom {
        width: 100%;
        display: inline-block;
        background: #333;
        height: 50vh;
        text-align: center;
        font-size: 22px;
        font-weight: 700;
        text-decoration: underline;
    }

    .heading {
        text-align: center;
        color: #454343;
        font-size: 30px;
        font-weight: 700;
        position: relative;
        margin-bottom: 70px;
        text-transform: uppercase;
        z-index: 999;
    }

    .white-heading {
        color: #ffffff;
    }

    .heading:after {
        content: ' ';
        position: absolute;
        top: 100%;
        left: 50%;
        height: 40px;
        width: 180px;
        border-radius: 4px;
        transform: translateX(-50%);
        background: url(img/heading-line.png);
        background-repeat: no-repeat;
        background-position: center;
    }

    .white-heading:after {
        background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
        background-repeat: no-repeat;
        background-position: center;
    }

    .heading span {
        font-size: 18px;
        display: block;
        font-weight: 500;
    }

    .white-heading span {
        color: #ffffff;
    }

    /*-----Testimonial-------*/

    .testimonial:after {
        position: absolute;
        top: -0 !important;
        left: 0;
        content: " ";
        background: url(img/testimonial.bg-top.png);
        background-size: 100% 100px;
        width: 100%;
        height: 100px;
        float: left;
        z-index: 99;
    }

    .testimonial {
        min-height: 375px;
        position: relative;
        background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg);
        padding-top: 50px;
        padding-bottom: 50px;
        background-position: center;
        background-size: cover;
    }

    #testimonial4 .carousel-inner:hover {
        cursor: -moz-grab;
        cursor: -webkit-grab;
    }

    #testimonial4 .carousel-inner:active {
        cursor: -moz-grabbing;
        cursor: -webkit-grabbing;
    }

    #testimonial4 .carousel-inner .item {
        overflow: hidden;
    }

    .testimonial4_indicators .carousel-indicators {
        left: 0;
        margin: 0;
        width: 100%;
        font-size: 0;
        height: 20px;
        bottom: 15px;
        padding: 0 5px;
        cursor: e-resize;
        overflow-x: auto;
        overflow-y: hidden;
        position: absolute;
        text-align: center;
        white-space: nowrap;
    }

    .testimonial4_indicators .carousel-indicators li {
        padding: 0;
        width: 14px;
        height: 14px;
        border: none;
        text-indent: 0;
        margin: 2px 3px;
        cursor: pointer;
        display: inline-block;
        background: #ffffff;
        -webkit-border-radius: 100%;
        border-radius: 100%;
    }

    .testimonial4_indicators .carousel-indicators .active {
        padding: 0;
        width: 14px;
        height: 14px;
        border: none;
        margin: 2px 3px;
        background-color: #9dd3af;
        -webkit-border-radius: 100%;
        border-radius: 100%;
    }

    .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
        height: 3px;
    }

    .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
        background: #eeeeee;
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    .testimonial4_control_button .carousel-control {
        top: 175px;
        opacity: 1;
        width: 40px;
        bottom: auto;
        height: 40px;
        font-size: 10px;
        cursor: pointer;
        font-weight: 700;
        overflow: hidden;
        line-height: 38px;
        text-shadow: none;
        text-align: center;
        position: absolute;
        background: transparent;
        border: 2px solid #ffffff;
        text-transform: uppercase;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
        transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
    }

    .testimonial4_control_button .carousel-control.left {
        left: 7%;
        top: 50%;
        right: auto;
    }

    .testimonial4_control_button .carousel-control.right {
        right: 7%;
        top: 50%;
        left: auto;
    }

    .testimonial4_control_button .carousel-control.left:hover,
    .testimonial4_control_button .carousel-control.right:hover {
        color: #000;
        background: #fff;
        border: 2px solid #fff;
    }

    .testimonial4_header {
        top: 0;
        left: 0;
        bottom: 0;
        width: 550px;
        display: block;
        margin: 30px auto;
        text-align: center;
        position: relative;
    }

    .testimonial4_header h4 {
        color: #ffffff;
        font-size: 30px;
        font-weight: 600;
        position: relative;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .testimonial4_slide {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 70%;
        margin: auto;
        padding: 20px;
        position: relative;
        text-align: center;
    }

    .testimonial4_slide img {
        top: 0;
        left: 0;
        right: 0;
        width: 136px;
        height: 136px;
        margin: auto;
        display: block;
        color: #f2f2f2;
        font-size: 18px;
        line-height: 46px;
        text-align: center;
        position: relative;
        border-radius: 50%;
        box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    }

    .testimonial4_slide p {
        color: #ffffff;
        font-size: 20px;
        line-height: 1.4;
        margin: 40px 0 20px 0;
    }

    .testimonial4_slide h4 {
        color: #ffffff;
        font-size: 22px;
    }

    .testimonial .carousel {
        padding-bottom: 50px;
    }

    .testimonial .carousel-control-next-icon,
    .testimonial .carousel-control-prev-icon {
        width: 35px;
        height: 35px;
    }

    /* ------testimonial  close-------*/

    /* .footer */

    .footer-distributed {
        background: rgb(130, 97, 238);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 55px 50px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 20%;
    }

    /* The company logo */

    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
    }

    .footer-distributed h3 span {
        color: lightseagreen;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
        padding: 0;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        font-weight: 400;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-company-name {
        color: #222;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 35%;
    }

    .footer-distributed .footer-center i {
        background-color: #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        font-weight: 400;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: lightseagreen;
        text-decoration: none;
        ;
    }

    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
    }

    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */

    .footer-distributed .footer-right {
        width: 20%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
    }




    .faq-heading {
        margin-top: 45px;
        margin-bottom: 15px;
        text-align: center;
        font-weight: 400;
        font-size: 30px;
    }

    .faq-card {
        border: 1px solid #dce0e8;
        border-radius: 6px;
        padding: 24px 20px;
        margin-bottom: 12px;
        list-style: none;
        position: relative;
        cursor: pointer;
    }

    .faq-open-icon {
        font-size: 22px;
        position: absolute;
        top: 18px;
        right: 24px;
        font-weight: 700;
    }

    details[open] .faq-open-icon {
        top: 18px;
        right: 24px;
    }

    details>summary {
        list-style: none;
    }

    details>summary::-webkit-details-marker {
        display: none;
    }

    details[open] summary {
        color: #0186ff;
        font-weight: 500;
    }

    details[open] .faq-card-spoiler {
        display: inline-block;
        padding-top: 8px;
        color: #8b8b9a;
    }

    .faq-aftertext {
        text-align: center;
        color: #8b8b9a;
    }

    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 880px) {

        .footer-distributed {
            font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }

    }
</style>
<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825" currency="USD" theme="dark" transparent="false" show-symbol-logo="true"></div>
{{-- <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/shortcode/shortcodes.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/responsive.css"> --}}
