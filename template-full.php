<?php
/*
Template Name: Full
*/
?>
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
</div>
<div class="wide-container clearfix">
    <section role="main" class="small-12 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <article class="small-12 columns">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>
	<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
</div> <!-- #main -->
<div class="wide-container clearfix pad">
    <?php include (TEMPLATEPATH . '/library/includes/testimonials.php'); ?> 
</div>
<?php get_footer(); ?>