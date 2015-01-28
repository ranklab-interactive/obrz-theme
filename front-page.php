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
            <div class="large-7 columns large-offset-1">
                <span>Ocean Breeze Recovery is an addiction treatment program where people come first. </span>
            </div>
        </div>
    </div>
</div>
<div class="wide-container clearfix" data-equalizer>
    <div class="small-12 large-2 columns home-block-1-3 text-center right">
        <div class="small-12 columns">
            <div  data-equalizer-watch class="home-block-1-content">
                <h2 class="section white"><small>SEE HOW WE CAN HELP</small></h2>
            </div>
            <a class="button invis-btn white" href="/about">→</a>
        </div>
    </div>
    <div class="medium-6 large-5 columns home-block-1-1">
        <div data-equalizer-watch class="home-block-1-content">
            <h2 class="section white"><small>ADDICTION</small></h2>
            <h3 class="section white">Therapy</h3>
            <p>At Ocean Breeze Recovery center we fully understand that each individual is unique and so are their circumstances. This is the very reason that we insist that each individual that embraces our drug treatment program has an individualized treatment plan. We meet individuals where they are on the road to recovery and help them develop the skills needed to live a sober life.</p>
        </div>
        <a class="button invis-btn white" href="/addiction-therapy">Learn More</a>
    </div>
    <div class="medium-6 large-5 columns home-block-1-2">
        <div data-equalizer-watch class="home-block-1-content">
            <h2 class="section white"><small>RESIDENTIAL</small></h2>
            <h3 class="section white">Rehab</h3>
            <p>Our substance abuse inpatient treatment is aimed to help those that call for medical stabilization, are a high risk for relapse, or are resistant to treatment. We offer the very best and most comprehensive inpatient substance abuse treatment made available. Clients in our residential program are monitored 24 hours a day and all their needs are provided for while they begin their recovery.</p>
        </div>
        <a class="button invis-btn white" href="/drug-rehab/">Learn More</a>
    </div>
</div>
<div class="wide-container home-block-2 clearfix">
    <div class="row">
        <div class="small-12 columns pad">
            <div class="small-12 columns home-block-2-header text-center small-centered">
                <h2 class="section white"><small>We Offer</small></h2>
                <h3 class="section white">Extraordinary Treatment</h3>
            </div>
            <div class="small-12 large-3 columns right small-text-center large-text-right">
                <a class="button" href="#">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="row clearfix">
                     <?php include (TEMPLATEPATH . '/library/includes/home-slide.php'); ?> 
    </div>
</div>
<div class="wide-container home-block-3 clearfix">
    <div class="small-12 columns pad">
        <div class="row pad">
            <div class="small-12 columns text-center">
                <h2 class="section orange"><small>Florida</small></h2>
                <h3 class="section darkgray">Addiction Treatment</h3>
                <p>Located in beautiful Pompano Beach, Florida, Ocean Breeze is fully licensed in the state, and its counselors are certified and licensed in their various fields. We are dedicated to assisting individuals and families that are affected by alcohol or drug addiction. We promise to help these individuals find new and better way of living life. We are here to help you or your loved one every step of the way. If you want to transform your life, the time to act is now. Ocean Breeze Recovery offers you everything that you need to begin a new, substance-free life.</p>
            </div>
        </div>
        <div class="row pad" data-equalizer>
            <div class="medium-4 columns text-center">
                <div class="row">
                    <div class="small-12 columns small-centered">
                        <div  class="small-12 columns text-left" data-equalizer-watch>
                                    <?php $args=array('post_type'=>'testimonials', 'orderby'=>'rand', 'posts_per_page'=>'1');
$testimonials=new WP_Query($args);
while ($testimonials->have_posts()) : $testimonials->the_post();?>
                            <p class="testimonial-quote">“ <?php echo get_the_content(); ?> ”</p>
                            <p class="testimonial-author">– <?php the_title(); ?></p>
    <?php
endwhile;
wp_reset_postdata(); ?>
                        </div>
                        <button class="invis-btn blue">TESTIMONIALS</button>
                    </div>
                </div>
            </div>
            <div class="medium-4 columns text-center">
                <div class="row">
                    <div class="small-12 columns small-centered">
                        <div  class="small-12 columns text-left" data-equalizer-watch>
                            <p>We are glad to accept most health insurance plans are are happy to work with your insurance company to get the maximum amount of coverage possible for your treatment.</p>
                        </div>
                        <button class="invis-btn blue">INSURANCE</button>
                    </div>
                </div>
            </div>
            <div class="medium-4 columns text-center">
                <div class="row">
                    <div class="small-12 columns small-centered">
                        <div  class="small-12 columns text-left" data-equalizer-watch>
                            <p>From residential and outpatient therapy to our alumni program, clients are provided with a safe place in which to recover. Our therapists help individuals work through their underlying causes of addiction and restore balance to their lives.</p>
                        </div>
                        <button class="invis-btn blue">OUR STANDARDS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>