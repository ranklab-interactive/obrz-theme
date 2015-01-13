<?php
    
/* 
 * Next Step Village - Theme 2014
 * Single Page for Facilities
 */
get_header();
?>
<div class="facility-information">
    <div class="facility-information-heading small-text-center medium-text-left  page-heading">
        <div class="row">
            <div class="small-12 columns">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
                <section id="heading">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt()?>
                </section>
            </div>
        </div>
    </div>
    <div class="wide-container heading-share-block clearfix">
        <div class="large-12 columns no-space">
            <section id="social-media-sharing">
                         <?php include (TEMPLATEPATH . '/library/includes/header-share.php'); ?> 
            </section>
        </div>
    </div>
    <div class="wide-container facility-introduction clearfix">
        <div class="large-12 no-space columns">
            <section id="facility-details" data-equalizer>
                <?php include (TEMPLATEPATH . '/library/includes/facility-gallery.php'); ?> 
                <div class="small-12 large-7 right columns facility-introduction-content" data-equalizer-watch>
                    <section id="facility-description">
                        <div class="row pad">
                            <div class="small-12 columns">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
    <div class="wide-container clearfix small-12 columns">
        <section id="facility-benefits" class="small-12 columns pad">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3" data-equalizer>
                <li class="page-block-1">
                    <div class="page-block-content" data-equalizer-watch>
                        <h5 class="text-center">Amenities</h5>
                        <?php
                $terms = wp_get_post_terms($post->ID, 'facility-type', array(
                    'orderby' => 'parent',
                    'order' => 'DESC'
                ));
                if ( !empty( $terms ) ) {
                    $output = array();
                    foreach ( $terms as $term ){
                        if( 0 != $term->parent && $term->parent != "")
                            $output[] = '' . $term->name . '';            
                    } ?>
                        <ul class="no-bullet"><li><?php echo '' . join( "</li><li>", $output ) . ''; ?> </li></ul>
        <?php } ?>
                    </div>
                </li>
                <li class="page-block-1">
                    <div class="page-block-content" data-equalizer-watch>
                        <h5 class="text-center">Transportation</h5>
                        <div class="page-block-text">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        </div>
                    </div>
                </li>
                <li class="page-block-1">
                    <div class="page-block-content" data-equalizer-watch>
                        <h5 class="text-center">Residential Treatment</h5>
                        <div class="page-block-text">
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>
</div>
                                    <?php endwhile; endif; ?>
<div class="wide-container clearfix">
    <?php include (TEMPLATEPATH . '/library/includes/testimonials.php'); ?> 
</div>
<?php get_footer(); ?>