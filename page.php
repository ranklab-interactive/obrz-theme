<?php 
/*
 *Default Template 
 *  */
get_header(); ?>
<div class="wide-container clearfix">
    <div class="small-heading small-text-center medium-text-left page-heading">
        <div class="row">
            <div class="small-12 columns">
                <section id="heading">
                    <h1><?php the_title(); ?></h1>
                    <?php get_template_part('library/includes/breadcrumbs'); ?>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="large-12 main-content no-space columns">
    <div class="row">
        <div class="medium-7 large-9 columns" role="main">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <article>
                        <?php
                        if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large' );
                        }
                        ?>
                        <?php the_content(); ?>
            </article>
                <?php endwhile; endif; ?>
        </div>
        <div class="medium-5 large-3 side-container columns">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<div class="wide-container clearfix pad">
    <?php include (TEMPLATEPATH . '/library/includes/testimonials.php'); ?> 
</div>
<!-- #main -->
<?php get_footer(); ?>