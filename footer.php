<div class="wide-container">
    <footer class="large-12 columns no-space">
        <div class="small-12 columns footer-block-1 pad text-center">
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
                <?php wp_nav_menu(array('menu' => 'Footer Menu 2', 'container' => 'false', 'items_wrap' => '<div class="medium-6 large-3 columns"><h3>SERVICES</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
                <?php wp_nav_menu(array("menu" => "Footer Menu 3", 'container' => 'false', 'items_wrap' => '<div class="medium-6 large-3 columns "><h3>RESOURCES</h3><ul class="no-bullet">%3$s</ul></div>')); ?>
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
                            <a href="https://www.facebook.com/OceanBreezeRecovery" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-fb.png" /></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ocean_breeze1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-twitter.png" /></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+OceanbreezerecoveryOrg/posts" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-gplus.png" /></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/oceanbreezefl/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/style/images/footer-pin.png" /></a>
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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/featherlight.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/featherlight.gallery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.min.js"></script>
<script>
    $(document).foundation({
        equalizer : {
            equalize_on_stack: true
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
    });
</script>
</body>
</html>
