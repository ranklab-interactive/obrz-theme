<?php 
/*
 *Default Template 
 *  */
get_header(); ?>
<div class="row pad">
    <div class="small-12 columns">
        <header id="page-id">
            <h1><?php the_title(); ?></h1>
            <?php get_template_part('library/includes/breadcrumbs'); ?>
        </header>
    </div>
</div>
<div role="main" class="large-12 main-content no-space columns">
    <div class="row">
        <div class="medium-7 large-9 columns">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <article class="pad">
                        <?php
                        if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large' );
                        }
                        ?>
                        <?php the_content(); ?>
            </article>
                <?php endwhile; endif; ?>
            <div class="row">
                <div class="large-12 columns">
                    <section id="social-media-sharing">
                        <div class="shareme row pad">
                         <?php include (TEMPLATEPATH . '/library/includes/share.php'); ?> 
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="medium-5 large-3 nsv-side-container columns">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- #main -->
<?php get_footer(); ?>