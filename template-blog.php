<?php
/*
Template Name: Blog
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
<div class="main-content pad">
    <div class="row">
        <div class="large-12 columns">
            <div class="medium-7 large-9 small-text-center medium-text-left columns" role="main">
                <section id="blog-posts">
                    <h3>Latest Blog Entries</h3>                    
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
                    <?php if( have_posts() ):  while( have_posts() ): the_post(); ?>
                    <div class="row blog-post">
                        <article class="blog">
		<?php
		if ( has_post_thumbnail() ) {?>
                            <div class="medium-3 columns"> <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail' );?></a></div>
                                
		<?php } else { ?>
                            <div class="medium-3 columns"> <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/style/images/header-logo.png" alt="Logo" title="" style="width: auto; height: auto;"></a></div>
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
            <div class="medium-5 large-3 side-container columns">
            <?php get_sidebar(); ?>
            </div>
        </div> <!-- #main -->
    </div>
</div>
<?php get_footer(); ?>