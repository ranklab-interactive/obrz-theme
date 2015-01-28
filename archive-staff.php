<?php 
/*
 *
 * Ocean Breeze Staff Archive Template
 * 
 */ 
get_header(); ?>
<div class="wide-container clearfix">
    <div class="small-heading small-text-center medium-text-left page-heading">
        <div class="row">
            <div class="small-12 columns">
                <section id="heading">
                    <h1><?php post_type_archive_title(); ?></h1>
                    <ul class="inline-menu">
                        <li><a href="#executive">Executive</a></li>
                        <li><a href="#clinical">Clinical</a></li>
                        <li><a href="#medical">Medical</a></li>
                        <li><a href="#administrative">Administrative</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="large-12 columns">
            <div class="row">					
                <div class="large-12 columns">
                    <div class="row" id="executive">
                        <h4 class="section darkgray pad">Executive Team</h4>
                    <ul class="small-block-grid-2 large-block-grid-4" data-equalizer>    
<?php
$staff_args=array(
    'post_type' => 'staff',
    'tax_query' => array(
        array(
        'taxonomy' => 'staff-type',
        'field' => 'slug',
        'terms' => 'executive-team'
            )
        ),
  'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'date'
);
$my_query = null;
$my_query = new WP_Query($staff_args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="page-block-2">
                            <div class="page-block-2-content text-center">
                    <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
                                <div class="page-block-2-top" style="background: url('<?php echo $url ?>');">
                                </div>
                                <div class="page-block-text text-left">
                                    <div>
                                        <h5><?php echo rwmb_meta( ranklab_staff_title );?></h5>
                <?php the_excerpt(); ?>
                                        <a href="<?php echo get_permalink();?>" class="button invis-btn blue">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
                    </ul>
                    </div>
                    <div class="row" id="medical">
                        <h4 class="section darkgray pad">Medical Professionals</h4><ul class="small-block-grid-2 large-block-grid-4" data-equalizer>        
<?php
$staff_args=array(
    'post_type' => 'staff',
    'tax_query' => array(
        array(
        'taxonomy' => 'staff-type',
        'field' => 'slug',
        'terms' => 'medical-professionals'
            )
        ),
  'posts_per_page' => -1
);
$my_query = null;
$my_query = new WP_Query($staff_args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="page-block-2">
                            <div class="page-block-2-content text-center">
                    <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
                                <div class="page-block-2-top" style="background: url('<?php echo $url ?>');">
                                </div>
                                <div class="page-block-text text-left">
                                    <div>
                                        <h5><?php echo rwmb_meta( ranklab_staff_title );?></h5>
                <?php the_excerpt(); ?>
                                        <a href="<?php echo get_permalink();?>" class="button invis-btn blue">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
                    </ul>
                    </div>
                    <div class="row" id="clinical">
                        <h4 class="section darkgray pad">Clinical Professionals</h4><ul class="small-block-grid-2 large-block-grid-4">
<?php
$staff_args=array(
    'post_type' => 'staff',
    'tax_query' => array(
        array(
        'taxonomy' => 'staff-type',
        'field' => 'slug',
        'terms' => 'clinical-professionals'
            )
        ),
  'posts_per_page' => -1
);
$my_query = null;
$my_query = new WP_Query($staff_args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="page-block-2">
                            <div class="page-block-2-content text-center">
                    <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
                                <div class="page-block-2-top" style="background: url('<?php echo $url ?>');">
                                </div>
                                <div class="page-block-text text-left">
                                    <div>
                                        <h5><?php echo rwmb_meta( ranklab_staff_title );?></h5>
                <?php the_excerpt(); ?>
                                        <a href="<?php echo get_permalink();?>" class="button invis-btn blue">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
                    </ul>
                    </div>
                    <div class="row" id="administrative">
                        <h4 class="section darkgray pad">Administrative Professionals</h4><ul class="small-block-grid-2 large-block-grid-4">
<?php
$staff_args=array(
    'post_type' => 'staff',
    'tax_query' => array(
        array(
        'taxonomy' => 'staff-type',
        'field' => 'slug',
        'terms' => 'administrative-professionals'
            )
        ),
  'posts_per_page' => -1
);
$my_query = null;
$my_query = new WP_Query($staff_args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="page-block-2">
                            <div class="page-block-2-content text-center">
                    <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
                                <div class="page-block-2-top" style="background: url('<?php echo $url ?>');">
                                </div>
                                <div class="page-block-text text-left">
                                    <div>
                                        <h5><?php echo rwmb_meta( ranklab_staff_title );?></h5>
                <?php the_excerpt(); ?>
                                        <a href="<?php echo get_permalink();?>" class="button invis-btn blue">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>