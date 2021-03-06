<?php
    
/* 
 * Ocean Breeze - Theme 2014 - Home Slider Blocks
 */
?>
<div class="home-block-2-slider">
    <div class="small-12 columns small-centered pad">
        <div class="home-block-2-slider-scroll">
             <?php
query_posts( 'cat=334' );
while ( have_posts() ) : the_post();?>
            <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'home_slide_featured_image');
        $feature_url = $featuredimg['0'];
        ?>
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                    <?php if (isset($feature_url)) { ?>
                    <div class="home-slide-featured-image" style="background-image: url('<?php echo $feature_url ?>');">
                             <?php } else { ?>
                    <div class="home-slide-featured-image" style='background-position: center center; background-size: unset;'>
                         <?php } ?>
                </div>
                    <h3 class="home-block-2-slider-block-title"><?php the_title()?></h3>
                        <?php the_excerpt() ?>
                    <div class="home-slide-read-more">
                        <a href="<?php the_permalink()?>" class="home-slide-read-more-link">Read More</a>
                    </div>
                </div>
            </div>
            <?php endwhile;
            wp_reset_query();
            ?>            
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.home-block-2-slider-scroll').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            useCSS: false,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>