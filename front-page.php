<?php
/*
Template Name: Homepage template
*/
?>
<?php get_header(); ?>
<div id="home-featured-image-container" class="clearfix">
        <?php $featuredimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size');
        $url = $featuredimg['0'];
        ?>
            
    <div class="wide-featured-image" style="background-image:url('<?php echo $url ?>');">
        <div class="row featured-image-text">
            <div class="large-8 columns large-offset-1">
                <span>Morbi leo risus, porta ac consectetur ac, at eros. Donec ullamcorper nulla non metus auctor fringilla.</span>
            </div>
        </div>
    </div>
</div>
    <div class="wide-container" data-equalizer>
        <div class="large-2 columns home-block-1-3 large-text-left right">
            <div class="small-12 medium-3 large-12 columns">
                <div  data-equalizer-watch>
                    <h2><small>SEE HOW WE CAN HELP</small></h2>
                </div>
                <a class="button home-block-button hide-for-medium-only">--></a>
            </div>
            <div class="small-9 columns show-for-medium-only">
                <div>
                    <h2><small>SEE HOW WE CAN HELP</small></h2>
                </div>
                <a class="button home-block-button">--></a>
            </div>
        </div>
        <div class="large-5 columns home-block-1-1">
            <div data-equalizer-watch>
                <h2><small>ADDICTION</small></h2>
                <h3>Therapy</h3>
                <span>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor frivngilla.</span>
            </div>
            <a class="button home-block-button">Learn More</a>
        </div>
        <div class="large-5 columns home-block-1-2">
            <div data-equalizer-watch>
                <h2><small>RESIDENTIAL</small></h2>
                <h3>Rehab</h3>
                <span>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor frivngilla.</span>
            </div>
            <a class="button home-block-button">Learn More</a>
        </div>
    </div>
    <div class="wide-container home-block-2">
        <div class="row clearfix">
                     <?php include (TEMPLATEPATH . '/library/includes/home-slide.php'); ?> 
        </div>
    </div>
    <div class="wide-container home-block-3">
            <div class="small-12 columns">
                <div class="row">
                    <div class="small-12 columns text-center">
                        <h2><small>Florida</small></h2>
                        <h3>Addiction Treatment</h3>
                    </div>
                </div>
                <div class="row pad" data-equalizer>
                    <div class="medium-4 columns text-center">
                        <div class="row">
                            <div class="small-12 columns small-centered">
                                <div  class="small-12 columns text-left" data-equalizer-watch>
                                <p class="testimonial-quote">“ Testimonial, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non. ”</p>
                                <p class="testimonial-author">– QUOTE AUTHOR</p>
                                </div>
                                <button class="home-block-button button-blue">TESTIMONIALS</button>
                            </div>
                        </div>
                    </div>
                    <div class="medium-4 columns text-center">
                        <div class="row">
                            <div class="small-12 columns small-centered">
                                <div  class="small-12 columns text-left" data-equalizer-watch>
                                <p>Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                </div>
                                <button class="home-block-button button-blue">INSURANCE</button>
                            </div>
                        </div>
                    </div>
                    <div class="medium-4 columns text-center">
                        <div class="row">
                            <div class="small-12 columns small-centered">
                                <div  class="small-12 columns text-left" data-equalizer-watch>
                                <p>Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                </div>
                                <button class="home-block-button button-blue">OUR STANDARDS</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php get_footer(); ?>