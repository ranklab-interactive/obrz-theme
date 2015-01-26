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
    <div class="row">
        <section role="main" class="large-9 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <article>
                <!-- post details -->
                <div class="postmeta">
                    <p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
                    
                    <p class="categories"><?php _e( 'Categorised in: ' ); the_category(', '); // Separated by commas ?></p>
                    <p class="author"><?php _e( 'This post was written by ' ); the_author(); ?></p>
                </div><!-- end postmeta -->
                <!-- /post details -->
                    
                <!-- post thumbnail -->
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>
                <!-- end post thumbnail -->
	<?php the_content(); ?>
	<?php comments_template(); ?>
            </article>
<?php endwhile; endif; ?>
        </section>
<?php get_sidebar(); ?>
    
    </div> <!-- #main -->
</div>
<?php get_footer(); ?>