<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/counterup.js') }}"></script>
<script src="{{ asset('assets/s/plugins.js') }}j"></script>
<script src="{{ asset('assets/js/canvasjs.min.js') }}"></script>
<script src="{{ asset('assets/js/canvas-active-2.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/imgfix.min.js') }}"></script>

<!-- Global Init -->
<script src="{{ asset('assets/js/custom1.js') }}"></script>

<script>
    let summaryCollection = document.getElementsByTagName('summary');
    let signsCollection = document.getElementsByClassName('faq-open-icon');

    for (let i = 0; i < summaryCollection.length; i++) {
        summaryCollection[i].onclick = function() {
            if (signsCollection[i].innerHTML === '+') signsCollection[i].innerHTML = '—';
            else signsCollection[i].innerHTML = '+';
        }
    }
</script>
