<?php get_header(); ?>
<div class="main-content pad">
    <div class="row">
        <div class="large-12 columns">
            <div class="small-12 columns">
                <header id="page-id">
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
                    <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h1>Archive for <?php the_time('F, Y'); ?></h1>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h1 class="pagetitle">Author Archive</h1>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h1 class="pagetitle">Blog Archives</h1>
	<?php } ?>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
                </header>
            </div>
            <div class="medium-7 large-9 small-text-center medium-text-left columns" role="main">
                <section id="blog-posts">
<?php if (have_posts()) :  while  (have_posts()) : the_post(); ?>
                    <div class="row nsv-blog-post">
                        <article class="blog">
                        <?php
		if ( has_post_thumbnail() ) {?>
                            <div class="medium-3 columns"> <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail' );?></a></div>
                                
		<?php } else { ?>
                            <div class="medium-3 columns"> <a href="<?php the_permalink();?>"><img src="<?php echo content_url( '/uploads/2014/11/nsv-logo-final-150x150.png' ); ?>" alt="Logo" title="" style="width: auto; height: auto;"></a></div>
                        <?php } ?>
                            <div class="medium-9 columns">
                                <section id="blog-post">
                                    <section id="blog-post-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </section>
                                    <section id="blog-post-meta">
                                        
                                        <div class="postmeta">
			<?php the_time('F jS Y') ?> | By: <?php the_author(); ?> | Posted In: <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                                        </div><!-- end meta -->
                                    </section>
                                    <section id="blog-post-excerpt">
		<?php the_excerpt();?>
                                    </section>
                                    <a href="<?php the_permalink();?>" class="btn">Keep Reading</a>
                            </div>
                        </article><!-- end blog -->	
                    </div>
                    <hr />
<?php endwhile; endif; ?>
<?php ranklab_pagination();?>
                </section>
            </div>
            <div class="medium-5 large-3 nsv-side-container columns">
<?php get_sidebar(); ?>
            </div>
        </div> <!-- #main -->
    </div>
</div>
<?php get_footer(); ?>