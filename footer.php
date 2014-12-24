<div class="wide-container">
    <footer class="large-12 columns no-space">
        <div class="small-12 columns footer-block-1 pad">
            <div class="row pad valign-middle">
                <div class="medium-4 columns footer-block-1-1 text-center centered">
                    <h4>TRUSTED CARE</h4>
                    <div class="row">
                        <div class="small-12 columns text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-trusted.jpg" />
                        </div>
                    </div>
                </div>
                <div class="medium-4 columns footer-block-1-2 text-center centered">
                    <h2 class="pad"><strong>Questions?</strong> Give us a Call</h2>
                </div>
                <div class="medium-4 columns footer-block-1-3 text-center centered pad">
                    <button>888-123-4567</button>
                </div>
            </div>
        </div>
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
            <div class="row">
                <div id="copyright" class="small-12 medium-7 columns pad">Ocean Breeze &copy;<?php echo date("Y "); echo stripslashes(get_option('ranklab_copyright')); ?> - Address Here</div>
                <div id="social-media" class="small-12 medium-4 columns">
                    <div class="row">
                        <div class="small-2 columns small-offset-2 pad">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-fb.png" /></a>
                        </div>
                        <div class="small-2 columns pad">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-twitter.png" /></a>
                        </div>
                        <div class="small-2 columns pad">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-gplus.png" /></a>
                        </div>
                        <div class="small-2 columns pad">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-pin.png" /></a>
                        </div>
                        <div class="small-2 columns pad">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-yt.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- end footer-container -->
<?php wp_footer(); ?>
<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.sidr.min.js"></script>-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.equalizer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
<script>
    $(document).foundation({
        equalizer : {
            equalize_on_stack: false
        }       
    });
    $(document).ready(function(){
        //            $("#more-main-nav").mmenu({
        //         offCanvas: {
        //            pageNodetype: "header",
        //            position  : "top",
        //            zposition : "front"
        //         }
        //            });
        //            
        //      $("#more-menu").click(function() {
        //         $("#more-main-nav").trigger("open.mm");
        //      });
        $('.home-block-2-slider-scroll').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            useCSS: false,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
