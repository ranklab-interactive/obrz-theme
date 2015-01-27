<?php 
/*
 *Template Name: Contact Page
 *  */
get_header(); ?>
<div class="wide-container clearfix">
    <div class="big-heading small-text-center medium-text-left page-heading">
        <div class="row">
            <div class="small-12 columns">
                <section id="heading">
                    <div class="large-6 columns no-space">
                        <h1><?php the_title(); ?></h1>
                        <?php echo get_post_meta($post->ID, 'ranklab_bigheading_text', true); ?>
                    </div>
                    <div class="large-6 columns">
                        <?php echo do_shortcode( '[contact-form-7 id="2934" title="Contact Form"]' ); ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="clearfix pad">
    <div class="large-12 large-centered columns">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <article>
                    <?php the_content(); ?>
            </article>
            <?php endwhile; endif; ?>
    </div>
</div>
<!-- #main -->
<?php get_footer(); ?>