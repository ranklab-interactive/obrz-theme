<?php
    
/* 
 * Ocean Breeze - Theme 2014 - Testimonials
 */
?>
<div class="testimonials">
    <div class="row">
        <div class="small-12 columns nav-elements-top">
            <div class="testimonial-block">
                    <?php 
                    $args=array(
                      'post_type' => 'testimonials',
                        'posts_per_page' =>1,
                        'orderby' => 'rand'
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) { 
                          while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="testimonials-content">
                    <div class="testimonial-quote"><?php the_content(); ?></div>
                    <h3 class="testimonial-author"><?php the_title(); ?></h3>
                </div>
                     <?php 
            endwhile; 
                    }
                    wp_reset_query();
            ?>
            </div>
        </div>
    </div>
</div>