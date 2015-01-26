<?php get_header(); ?>
<div class="wide-container clearfix">
    <div class="small-heading small-text-center medium-text-left page-heading">
        <div class="row">
            <div class="small-12 columns text-center">
                <section id="heading">
                    <h1>404</h1>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="row pad">
    <section role="main" class="small-12 columns">
            <h2 style="text-align: center;">Sorry, we couldn't find what you are looking for</h2>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <article>
            <p><?php echo stripslashes(get_option('ranklab_404')); ?></p>
        </article>
<?php endwhile; endif; ?>
    </section>
</div> <!-- #main -->
<?php get_footer(); ?>
