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
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/featherlight.min.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/featherlight.gallery.min.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />      
<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/jquery.mmenu.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/jquery.mmenu.positioning.css" />
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.mmenu.min.js"></script>
        <link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/library/functions/syntaxhighlighter/shCoreMidnight.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/dev-style.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style/css/formatting.css"/>
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
                    </div>
                    <div class="row">
                        <div class="medium-12 columns main-menu-block">
                            <div class="large-9 columns no-space valign-middle">
                                <nav id="main-nav" class="hide-for-small centered" role="navigation">
                                <div class="menu-nav-header"><ul class="small-text-center large-text-left"><li id="menu-item" class="nav-menu-more menu-item menu-item-type-post_type menu-item-object-page page_item"><a href="#" id="more-menu" style="">Hi</a></li></ul></div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- end header-container -->