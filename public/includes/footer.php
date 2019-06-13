<section class="footer">
    <div class="container">
        <div class="row row-footer-slider-page">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="img-footer" style="text-align: center;">
                    <img src="/images/booking-awards.png" style="width: 55%;margin-bottom:15px;border-radius: 10px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-footer" style="text-align: center;">
                    <a href="\"><img src="/images/favicon.png" style="width: 15%;"></a>
                </div>
                <p id="company-descr-foot-slider-page">Sara Holiday Homes - Mazara del Vallo |<br/>Cell: <a class="white" href="tel:3755742343">+39 3755742343</a> - <a class="white" href="tel:3407863865">+39 3407863865</a> - <a class="white" href="tel:3406919898">+39 3406919898</a></p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/SaraRelaxHome/" target="_blank"><svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg><!-- <i class="fab fa-facebook"></i> --></a>
                    <a href="https://www.instagram.com/SaraRelaxHome/" target="_blank"><svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="fab fa-instagram"></i> --></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Sweet alert 2 -->
<script type="text/javascript" src="/js/sweetalert2.min.js"></script>

<!-- Font awesome -->
<script type="text/javascript" src="/js/all.js"></script>


<script>
    jQuery(document).ready(function () {
        jQuery('.menu-icon-mobile').click(function () {
            jQuery('.menu-icon-mobile').css({ 'transition-duration': '5s', 'display': 'none' })
            jQuery('.close-menu-mobile').css({ 'transition-duration': '5s', 'display': 'block' })
            jQuery('.menu-header-mobile').css('display', 'flex')
        })
        jQuery('.close-menu-mobile').click(function () {
            jQuery('.menu-icon-mobile').css({ 'transition-duration': '5s', 'display': 'block' })
            jQuery('.close-menu-mobile').css({ 'transition-duration': '5s', 'display': 'none' })
            jQuery('.menu-header-mobile').css('display', 'none')
        })
        $('.carousel-reviews').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            focusOnSelect: true,
            dots: true,
            arrows:false
        });
    });
</script>