<?php 
/*
 Template Name: Big Heading Template
 *  */
get_header(); ?>
<div class="wide-container clearfix">
    <div class="big-heading small-text-center medium-text-left page-heading">
        <div class="row">
            <div class="small-12 columns">
                <section id="heading">
                    <h1><?php the_title(); ?></h1>
                    <div class="large-6 columns no-space">
                        <?php echo get_post_meta($post->ID, 'ranklab_bigheading_text', true); ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="wide-container clearfix">
    <div role="main" class="large-12 main-content columns">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <article class="clearfix pad">
                <?php the_content(); ?>
            </article>
                <?php endwhile; endif; ?>
        </div>
    </div>
<div class="wide-container clearfix pad">
    <?php include (TEMPLATEPATH . '/library/includes/testimonials.php'); ?> 
</div>
<!-- #main -->
<?php get_footer(); ?>