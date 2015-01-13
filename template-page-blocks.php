<?php
/*
Template Name: Page Blocks
*/
?>
<?php get_header(); ?>
<div class="wide-container clearfix">
<section role="main" class="large-12 columns">
<header id="page-id">
	<h1><?php the_title(); ?></h1>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
</header>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<article>
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>
	<?php the_content(); ?>
</article>
    <div class="page-block-2 medium-3 columns">
        <div class="page-block-2-title">
            <h3>Page Block 3 Test Title</h3>
        </div>
        <div class="page-block-2-content">
            <p>He ate in the same open air; that is, his two only meals,&mdash;breakfast and dinner: supper he never touched; nor reaped his beard; which darkly grew all gnarled, as unearthed roots of trees blown over, which still grow idly on at naked base, though perished in the upper verdure.</p>
        </div>
        
    </div>
<?php endwhile; endif; ?>
</section>
</div> <!-- #main -->
<?php get_footer(); ?>