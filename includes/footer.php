
    <footer id="id-footer">

    <div id="footer-widgets" class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span>ABOUT US</span></h2>
                    <div class="textwidget">
                        <div class="brand-wrap">
                            <img src="<?php echo URL; ?>assets/images/new-logo.png" />
                            <div class="brand-text">
                                <strong>Micromerger <small>(Pvt.) Ltd.</small></strong>
                                <span>IT Services, Consulting &amp; Business Solutions</span>
                            </div>
                        </div>
                        <p>
                            MicroMerger is an established software development company that offers application development, e-commerce website development, website design, business web hosting , internet marketing and online media planning.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                    <ul class="col2">
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> History</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Team &amp; Awards</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Delivery Methods</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Community</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Safety</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> News &amp; Events</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sustainability</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> FAQ</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Portfolio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                    <ul>
                        <li class="address clearfix">
                            <span class="hl">Address:</span>
                            <span class="text">Plot No. 395-396 Sector I-9/3 (Service Road North), Islamabad, Pakistan</span>
                        </li>
                        <li class="phone clearfix">
                            <span class="hl">Phone:</span>
                            <span class="text">+92-51-8444777</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">E-mail:</span>
                            <span class="text">info@micromerger.com</span>
                        </li>
                    </ul>
                </div>
                <div class="widget widget_socials">
                    <div class="socials">
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright">Copyright 2003-13 MicroMerger (Pvt.) Ltd. | All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <ul class="bottom-nav list-inline">
                        <li>
                            <a href="#/">Privacy & Terms</a>
                        </li>
                        <li>
                            <a href="#/">Help Center</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo URL; ?>assets/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo URL; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>assets/js/modernizr.js"></script>
<!-- one-page-nav Js -->
<script src="<?php echo URL; ?>assets/plugins/one-page-nav/jquery.nav.js"></script>

<!-- smooth-scroll Js
<script src="<?php echo URL; ?>assets/plugins/smooth-scroll/smooth-scroll.js"></script>-->
<!-- fancybox Js -->
<script src="<?php echo URL; ?>assets/plugins/fancybox/jquery.fancybox.min.js"></script>

<!-- Typed Js -->
<script src="<?php echo URL; ?>assets/plugins/typed/typed.js"></script>
<!-- mixitup Js -->
<script src="<?php echo URL; ?>assets/plugins/mixitup/mixitup.min.js"></script>
<!-- OwlCarousel Js -->
<script src="<?php echo URL; ?>assets/plugins/OwlCarousel/owl.carousel.min.js"></script>
<!-- custom -->
<script src="<?php echo URL; ?>assets/plugins/counter-up/jquery.counterup.min.js"></script>
<script src="assets/plugins/waypoints/waypoints.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?&callback=initMap"
  type="text/javascript"></script>
<script src="assets/js/TweenMax.js"></script>
<script src="<?php echo URL; ?>assets/js/app.js"></script>

<script>
    $('.carousel').carousel({
        interval: 2000
    })

</script>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 20,
            time: 1000
        });
    });

</script>
<script>
    function initMap() {
        var Islamabad = {
            lat: 33.667593,
            lng: 73.057638
        };
        var UK = {
            lat: 53.695737,
            lng: -2.693050
        };
        var Pashawar = {
            lat: 34.016849,
            lng: 71.564171
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 3.2,
            center: {
               lat: 45.936643,
               lng: 34.126704
            },

        });
        var IslamabadM = new google.maps.Marker({
            position: Islamabad,
            map: map,
            optimized: false,
            icon: 'assets/images/contact/signal.gif'
        });
        var UKM = new google.maps.Marker({
            position: UK,
            map: map,
            optimized: false,
            icon: 'assets/images/contact/signal.gif'
        });
        var PashawarM = new google.maps.Marker({
            position: Pashawar,
            map: map,
            optimized: false,
            icon: 'assets/images/contact/signal.gif'
        });
    }

</script>

<!-------------------------------Paralexx-->
<script>
    $(".image-items").mousemove(function(e) {
        parallaxIt(e, ".image-item-1", 40);
        parallaxIt(e, ".image-item-2", 40);
        parallaxIt(e, ".image-item-3", -40);
        parallaxIt(e, ".image-item-4", 40);
        parallaxIt(e, ".image-item-5", -40);
        parallaxIt(e, ".image-item-6", -40);
    });

    function parallaxIt(e, target, movement) {
        var $this = $(".image-items");
        var relX = e.pageX - $this.offset().left;
        //  var relY = e.pageY - $this.offset().top;

        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement
            //    ,y: (relY - $this.height() / 2) / $this.height() * movement
        });
    }

</script>
<script>
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );

</script>
<!--
<script>
var e_isbAdd =document.getElementById("#copyyy");
    e_isbAdd.onclick = copyToClipboard("#isb-add");
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("p").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

</script>
-->
</body>

</html>
