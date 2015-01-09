<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="main-content pad">
    <div class="row">
        <div class="large-12 columns">
            <div class="small-12 columns">
                <header id="page-id">
                    <h1><?php the_title(); ?></h1>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
                </header>
            </div>
            <div class="medium-7 large-9 small-text-center medium-text-left columns" role="main">
                <section id="blog-posts">
                    <h3>Latest Blog Entries</h3>                    
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
                    <?php if( have_posts() ):  while( have_posts() ): the_post(); ?>
                    <div class="row nsv-blog-post">
                        <article class="blog">
		<?php
		if ( has_post_thumbnail() ) {?>
                            <div class="medium-3 columns"> <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail' );?></a></div>
                                
		<?php } else { ?>
                            <div class="medium-3 columns"> <a href="<?php the_permalink();?>"><img src="<?php echo content_url( '/uploads/2014/11/nsv-logo-final-150x150.png' ); ?>" alt="Logo" title="" style="width: auto; height: auto;"></a></div>
                        <?php } ?>
                            <div class="medium-9 columns">
                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <div class="postmeta">
			<?php the_time('F jS Y') ?> | Posted In: <?php the_category(', ') ?></div>
                                <!-- end meta -->
                		<?php the_excerpt();?>
                                <a href="<?php the_permalink();?>" class="btn">Keep Reading</a>
                            </div>
                        </article><!-- end blog -->	
                    </div>
                    <hr />
                        <?php endwhile; endif;?>
<div class="navigation">
	<?php ranklab_pagination()?>
</div>
<?php wp_reset_postdata(); ?>                    
                </section>
            </div>
            <div class="medium-5 large-3 nsv-side-container columns">
            <?php get_sidebar(); ?>
            </div>
        </div> <!-- #main -->
    </div>
</div>
<?php get_footer(); ?>