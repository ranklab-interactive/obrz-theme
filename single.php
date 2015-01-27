<?php get_header(); ?>
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
    <div class="row" data-equalizer>
        <section role="main" class="large-9 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <article>
                <!-- post thumbnail -->
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>
                <!-- end post thumbnail -->
	<?php the_content(); ?>
            </article>
<?php endwhile; endif; ?>
        </section>
<!--        <div class="large-2 columns postmeta" data-equalizer-watch> post details 
            <p class="date"><//?php the_time('F j'); ?></p>
            <div class="post-categories">
                <p class="categories"><//?php _e( 'Categorized in: <br />' ); the_category(', '); // Separated by commas ?></p>
            </div>
             /post details 
        </div> end postmeta -->
        <div class="medium-5 large-3 side-container columns no-space" data-equalizer-watch>
            <?php get_sidebar(); ?>
        </div>
        
    </div> <!-- #main -->
</div>
<?php get_footer(); ?>