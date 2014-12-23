<!DOCTYPE HTML>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php the_title(); ?></title>
            
        <!-- dns prefetch -->
        <link href="//www.google-analytics.com" rel="dns-prefetch">
            
        <!-- meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
            
        <!-- icons -->
        <link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/style/images/icons/touch.png" rel="apple-touch-icon-precomposed">
        <!-- css + javascript -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/normalize.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/sidr/jquery.sidr.light.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/slick.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />      
<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/jquery.mmenu.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/jquery.mmenu.positioning.css" />
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.mmenu.min.js"></script>
        <script type="text/javascript">
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
  });
  </script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/dev-style.css"/>
    </head>
    <body <?php body_class(); ?>>
        
        <!-- header -->
        <header class="row">
            <div class="large-12 columns">
                <div class="pad">
                    <div class="medium-3 columns">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>" title="">
                                <img src="<?php echo get_template_directory_uri(); ?>/style/images/header-logo.png" alt="Logo" title="">
                            </a>
                        </div><!-- /logo -->
                    </div>
                    <div class="medium-9 columns">
                        <nav id="top-nav" class="hide-for-small right" role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'top-menu-right' , 'depth' => 1, 'menu' => 'Top Menu') ); ?></nav>
                    </div>
                </div>
                <div>
                    <div class="medium-12 columns">
                        <div class="large-9 columns no-space valign-middle">
                            <nav id="main-nav" class="hide-for-small centered" role="navigation">
                                <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'main-nav-menu', 'depth' => 1, 'items_wrap' => '<div class="menu-nav-header"><ul>%3$s<li id="menu-item" class="nav-menu-more menu-item menu-item-type-post_type menu-item-object-page page_item"><a href="#main-nav" id="more-menu" style="">MORE</a></li></ul></div>')); ?>
                            </nav>
                        </div>
                        <div class="large-3 columns no-space valign-middle">
                            <div class="navigation-callout centered">
                                <p>We can help you now.</p>
                                <span class="navigation-callout-phone">888-123-4567</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!--        <nav id="more-main-nav" class="hide-for-small centered" role="navigation">
                                <?php //wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'main-nav-menu', 'depth' => 1, 'items_wrap' => '<div class="menu-nav-header"><ul>%3$s<li id="menu-item" class="nav-menu-more menu-item menu-item-type-post_type menu-item-object-page page_item"><a href="#main-nav" id="more-menu" style="">MORE</a></li></ul></div>')); ?>
                            </nav>-->
        <!-- end header-container -->