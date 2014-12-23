<div class="wide-container">
    <footer class="large-12 columns no-space">
        <div class="small-12 columns footer-block-1 pad" data-equalizer>
            <div class="row pad">
                <div class="medium-4 columns footer-block-1-1 text-center">
                    <h4>TRUSTED CARE</h4>
                    <div class="row">
                        <div class="small-12 columns text-center" data-equalizer-watch>
                            <img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-trusted.jpg" />
                        </div>
                    </div>
                </div>
                <div class="medium-4 columns text-center" data-equalizer-watch>
                    <h2><strong>Questions?</strong> Give us a Call</h2>
                </div>
                <div class="medium-4 columns text-center" data-equalizer-watch>
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
        <div class="row pad">
            <div id="copyright">&copy;<?php echo date("Y "); echo stripslashes(get_option('ranklab_copyright')); ?></div>
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
            $("#main-nav").mmenu({
         offCanvas: {
            position  : "bottom",
            zposition : "front"
         }
      });
    $('.home-block-2-slider-scroll').slick({
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
