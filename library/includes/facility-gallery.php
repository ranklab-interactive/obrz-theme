<?php
    
/* 
 * Ocean Breeze - Theme 2014 - Home Slider Blocks
 */
?>
<div class="facility-gallery-slider">
    <div class="large-4 xlarge-5 columns small-centered large-uncentered no-space">
        <div class="facility-gallery-slider-scroll show-for-medium-down">
            <div class="facility-gallery-slider-scroll">
                <div class="facility-gallery-slider-block">
                <?php 
                    $fac_gal_images = rwmb_meta('ranklab_facility-gallery', 'type=image&size=500x300'); 
                    foreach ($fac_gal_images as $fac_gal_image)
                        {
                        echo "<div class='facility-gallery-slider-block text-left'><img src='{$fac_gal_image['url']}' alt='{$fac_gal_image['alt']}' /></div>";
} ?>
                </div>
                    
            </div>  
        </div>
        <div class="medium-12 columns no-space hide-for-medium-down" data-equalizer-watch>
            <div class="facility-gallery">
                    <?php 
                    $images = rwmb_meta('ranklab_facility-gallery', 'type=image&size=500x300'); 
                    foreach ($images as $image)
                        {
                            echo "<div class='medium-6 columns no-space'><a href='{$image['full_url']}' title='{$image['title']}' class='thumbnail gallery' rel='thickbox'>"
                            . "<div class='facility-gallery-image-block' style='background-image: url({$image['url']});'></div>"
                            . "</a></div>";
}
?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.facility-gallery-slider-block').slick({
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            useCSS: false
        });
        $('.gallery').featherlightGallery({
        gallery: {
                fadeIn: 300,
                fadeOut: 300
        },
        openSpeed:    300,
        closeSpeed:   300
        });
    });
</script>