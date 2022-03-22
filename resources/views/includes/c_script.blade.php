<script>
    // var $site = '{{ config('app.home') }}';
</script>
<script src="{{ asset('assets/js/dashboard/bundle.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/scripts.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/charts/chart-crypto.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/js/customer.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const answer = document.getElementById("copyResult");
    const copy = document.getElementById("copyButton");
    const selection = window.getSelection();
    const range = document.createRange();
    const textToCopy = document.getElementById("textToCopy")

    copy.addEventListener('click', function(e) {
        range.selectNodeContents(textToCopy);
        selection.removeAllRanges();
        selection.addRange(range);
        const successful = document.execCommand('copy');
        if (successful) {
            answer.innerHTML = 'Copied!';
        } else {
            answer.innerHTML = 'Unable to copy!';
        }
        window.getSelection().removeAllRanges()
    });

    

    
</script>
