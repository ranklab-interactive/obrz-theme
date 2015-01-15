<div class="wide-container">
    <footer class="large-12 columns no-space">
        <div class="row clearfix">
            <!-- logo -->
            <div class="small-12 columns text-center">
                <div class="footer-logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-logo.png" alt="Logo" class="logo-footer">
                    </a>
                </div>
            </div>
            <!-- /logo -->
        </div>
        <div class="small-12 columns footer-block-2 pad" data-equalizer>
            <div class="row pad">
                <?php wp_nav_menu(array("menu" => "Footer Menu 1", 'container' => 'false', 'items_wrap' => '<div class="medium-6 large-3 columns"><h3>ABOUT US</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                <?php wp_nav_menu(array('menu' => 'Footer Menu 2', 'container' => 'false', 'items_wrap' => '<div class="medium-6 large-3 columns"><h3>WHAT WE TREAT</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                <?php wp_nav_menu(array("menu" => "Footer Menu 3", 'container' => 'false', 'items_wrap' => '<div class="medium-6 large-3 columns "><h3>TREATMENT</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                                <?php wp_nav_menu(array("menu" => "Footer Menu 4", 'container' => 'false', 'items_wrap' => '<div class="medium-6 large-3 columns"><h3>QUICK LINKS</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                
            </div>
        </div>
        <div class="small-12 columns footer-block-3">
            <div id="copyright" class="small-12 medium-7 large-8 columns small-text-center medium-text-left valign-middle">
                <span class="centered">Ocean Breeze &copy;<?php echo date("Y "); echo stripslashes(get_option('ranklab_copyright')); ?> - Address Here</span>
            </div>
            <div id="social-media" class="small-12 medium-5 large-4 columns">
                <div class="row">
                    <ul class="small-text-center small-block-grid-5">
                        <li>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-fb.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-twitter.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-gplus.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-pin.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-yt.png" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div><!-- end footer-container -->
<?php wp_footer(); ?>
<!--<script type="text/javascript" src="<?php //echo get_template_directory_uri(); ?>/library/js/jquery.sidr.min.js"></script>-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.equalizer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.dropdown.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.accordion.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.reveal.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.orbit.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/featherlight.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/featherlight.gallery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/functions/syntaxhighlighter/shBrushPhp.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/functions/syntaxhighlighter/shBrushPlain.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/functions/syntaxhighlighter/shBrushCss.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/functions/syntaxhighlighter/shBrushJScript.js"></script>
<script>
    SyntaxHighlighter.all()
    $(document).foundation({
        equalizer : {
            equalize_on_stack: true
        },
        orbit: {
    animation: 'slide',
    timer_speed: 1000,
    pause_on_hover: true,
    animation_speed: 500,
    navigation_arrows: true,
    bullets: false
  }
    });
    $(document).ready(function(){
        $("#my-responsive-menu").mmenu();
        $("#responsive-menu-button").click(function() {
            $("#my-responsive-menu").trigger("open.mm");
            $("#my-responsive-menu").trigger("close.mm");
        });
        $("#my-menu").mmenu({         
            offCanvas: {
                position  : "top",
                zposition : "front"
            }
        });
        $("#more-menu-close").click(function() {
            $("#my-menu").trigger("close.mm");
        });
        $( ".crossRotate" ).click(function() {
            //alert($( this ).css( "transform" ));
            if (  $( this ).css( "transform" ) == 'none' ){
                $(this).css("transform","rotate(180deg)");
            } else {
                $(this).css("transform","" );
            }
        });
        $('.facility-gallery-slider-block').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            useCSS: false
        });
        $('.gallery').featherlightGallery({
            gallery: {
                fadeIn: 300,
                fadeOut: 300
            },
            openSpeed:    300,
            closeSpeed:   300
        });
    });
</script>
</body>
</html>
