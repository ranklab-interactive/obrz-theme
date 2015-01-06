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
    <style type="text/css">
    nav #my-menu{display:none}
    </style>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.mmenu.min.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/dev-style.css"/>
    </head>
    <body <?php body_class(); ?>>
        <!-- header -->
        <div class="wide-container clearfix">
            <header>
                <div class="large-12 columns clearfix header-block">
                    <div class="row pad header-top-block">
                        <div class="responsive-menu show-for-small-only left crossRotate">
                            <a href="#my-responsive-menu" id="responsive-menu-button" class="resp-menu-close"></a>
                        </div>
                        <div class="medium-3 columns">
                            <!-- logo -->
                            <div class="logo small-text-center medium-text-left">
                                <a href="<?php echo home_url(); ?>" title="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/style/images/header-logo.png" alt="Logo" title="">
                                </a>
                            </div><!-- /logo -->
                        </div>
                        <div class="medium-9 columns">
                            <nav id="top-nav" class="hide-for-small right" role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'top-menu-right' , 'depth' => 1, 'menu' => 'Top Menu') ); ?></nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns main-menu-block">
                            <div class="large-9 columns no-space valign-middle">
                                <nav id="main-nav" class="hide-for-small centered" role="navigation">
                                <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'main-nav-menu', 'depth' => 1, 'items_wrap' => '<div class="menu-nav-header"><ul class="small-text-center large-text-left">%3$s<li id="menu-item" class="nav-menu-more menu-item menu-item-type-post_type menu-item-object-page page_item"><a href="#my-menu" id="more-menu" style="">MORE</a></li></ul></div>')); ?>
                                </nav>
                            </div>
                            <div class="large-3 columns no-space valign-middle">
                                <div class="navigation-callout centered">
                                    <p>We can help you now.</p>
                                    <span class="navigation-callout-phone">888-123-4567</span>
                                </div>
                            </div>
                            <nav id="my-menu" class="row" role="navigation">
                                <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'main-more-nav-menu', 'depth' => 1, 'items_wrap' => '<div class="menu-more-nav-header medium-12 columns small-centered"><a href="#my-menu" id="more-menu-close">CLOSE</a><ul>%3$s</ul></div>')); ?>
                                    
                            </nav>
                            <nav id="my-responsive-menu" role="navigation">
                                <ul>
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a>
                                    <ul>
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li><a href="#">Link 4</a></li>
                                    <li><a href="#">Link 5</a></li>
                                </ul></li>
                                    <li><a href="#">Link 4</a></li>
                                    <li><a href="#">Link 5</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- end header-container -->