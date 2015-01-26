<?php
    
/* 
 * Ocean Breeze- Theme 2014
 * Single Page for Staff
 */
get_header();
?>
<div class="small-heading small-text-center medium-text-left  page-heading">
    <div class="row">
        <div class="small-12 columns">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <section id="heading">
                <h1><?php the_title(); ?></h1>
                <h2><?php echo rwmb_meta( ranklab_staff_title );?></h2>
                <div class="heading-breadcrumbs">
                    <?php include (TEMPLATEPATH . '/library/includes/breadcrumbs.php'); ?>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="wide-container heading-share-block clearfix">
    <div class="large-12 columns no-space">
        <section id="social-media-sharing">
            <?php include (TEMPLATEPATH . '/library/includes/header-share.php'); ?>
        </section>
    </div>
</div>
<div class="wide-container clearfix">
    <div class="large-12 columns no-space">
        <section id="staff-details" data-equalizer>
            <div class="medium-4 large-2 small-feature-image columns no-space">
        <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
                <div style="background-image:url('<?php echo $url ?>');" data-equalizer-watch></div>
            </div>
            <div class="medium-8  columns no-space end" data-equalizer-watch>
                <section id="staff-biography">
                    <div class="row pad">
                        <div class="small-12 columns small-feature-content">
                            <h3>Biography</h3>
                                <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
</div>
<div class="wide-container clearfix small-12 columns"></div>
                                    <?php endwhile; endif; ?>
<?php get_footer(); ?>