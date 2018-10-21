<!-- Start Footer Section -->

<div id="myDIV">
<form role="search" method="get" class="search-form msearch" action="<?php echo home_url( '/' ); ?>">
   
        <input type="search" class="search-field no-border"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <input type="submit" class="search-submit no-border"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
</div>

<footer id="footer">
       <div class="layer-stretch">
            <div class="row layer-wrapper">
                <div class="col-md-6 footer-block">
                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                        <div id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        </div>
                        <?php endif; ?>
                        <!--
                            <ul class="social-list social-list-colored footer-social">
                        <li>
                            <a href="https://www.facebook.com/sfconsultingbd/" target="_blank" id="footer-facebook" class="fa fa-facebook"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-facebook">Facebook</span> </li>
                        <li>
                            <a href="https://twitter.com/sfconsultingbd" target="_blank" id="footer-twitter" class="fa fa-twitter"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-twitter">Twitter</span> </li>
                        <li>
                            <a href="https://pk.linkedin.com/company/s-&-f-consulting-firm-limited" target="_blank" id="footer-linkedin" class="fa fa-linkedin"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-linkedin">Linkedin</span> </li>
                        <li>
                            <a href="http://companymatter.blogspot.com/" target="_blank" id="footer-google" class="fa fa-google"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-google">Google</span> </li>
                        <li>
                            <a href="https://sfconsultingbd.wordpress.com/" target="_blank" id="footer-wordpress" class="fa fa-wordpress"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-wordpress">Wordpress</span> </li>
                        <li>
                            <a href="https://www.youtube.com/user/companyregistration1/" target="_blank" id="footer-youtube" class="fa fa-youtube"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-youtube">Youtube</span> </li>
                        <li>
                            <a href="https://www.pinterest.com/sfconsultingbd/" target="_blank" id="footer-instagram" class="fa fa-pinterest"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Pinterest</span> </li>
                        <li>
                            <a href="https://www.instagram.com/sfconsultingfirm/" target="_blank" id="footer-instagram" class="fa fa-instagram"></a> <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Instagram</span> </li>
                        </ul>

                        -->
                                
                            </div> 
                <div class="col-md-3 footer-block secndfoote">
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                        <div id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-3 footer-block secndfoote">
                    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                        <div id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
                    <?php endif; ?> 
                </div>
             </div>
        </div>    <!-- Start Footer Section -->
    <footer id="footer">       
        <!-- Start Copyright Section -->
        <div id="copyright">
            <div class="layer-stretch">
                <div class="paragraph-footer paragraph-white">Copyright 2018  &copy; S & F Consulting Firm Ltd. All Rights Reserved.</div>
            </div>
        </div><!-- End of Copyright Section -->
    </footer><!-- End of Footer Section -->

    <!-- **********Included Scripts*********** -->
    <!-- Jquery Library 2.1 JavaScript-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Popper JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="<?php echo get_template_directory_uri();?>/js/mdl-selectfield.min.js"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider.min.js"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-scrolltofixed.min.js"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.waypoints.min.js"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.counterup.js"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/js/smoothscroll.min.js"></script>
    <!--Custom JavaScript for Klinik Template-->
    <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
	<?php wp_footer();?>
        
<script>
document.getElementById('myDIV').style.display="none";
function searchfunctionfor() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
        x.style.position = "absolute";
        x.style.top = "38px";
    } else {
        x.style.display = "none";
    }
}
$('input').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "") {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');  
  } else {
    $(this).addClass('filled');
  }
}) ;

$('#user_login').attr( 'placeholder', 'Username' );
$('#user_pass').attr( 'placeholder', 'Password' );

$(document).ready(function() { 
        $(".ap-main-submit-button"). removeAttr("href");
        $('.ap-main-submit-button').click(function() { 
        $("#loginform").toggleClass("displaylogin");
        });
   });

   $('.test, .nav-link, .navbar-brand, .new-button').click(function() {
    var sectionTo = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(sectionTo).offset().top
    }, 1500);
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<?php get_footer() ?>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
</body>
</html>