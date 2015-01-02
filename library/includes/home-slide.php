<?php
    
/* 
 * Ocean Breeze - Theme 2014 - Home Slider Blocks
 */
?>
<div class="home-block-2-slider">
    <div class="small-12 columns small-centered pad">
        <div class="home-block-2-slider-scroll">
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                <img src="http://placehold.it/500x250"/>
                    
                        <h3 class="home-block-2-slider-block-title">Section Title 1</h3>
                        <p>
                            Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                        </p>
                        <div class="home-slide-read-more">
                            <a href="#" class="home-slide-read-more-link">Read More</a>
                        </div>
                </div>
            </div>
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                <img src="http://placehold.it/500x250"/>
                    
                <h3 class="home-block-2-slider-block-title">Section Title 2</h3>
                        <p>
                            Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                        </p>
                        <div class="home-slide-read-more">
                            <a href="#" class="home-slide-read-more-link">Read More</a>
                        </div>
                </div>
            </div>
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                <img src="http://placehold.it/500x250"/>
                    
                        <h3 class="home-block-2-slider-block-title">Section Title 3</h3>
                        <p>
                            Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                        </p>
                        <div class="home-slide-read-more">
                            <a href="#" class="home-slide-read-more-link">Read More</a>
                        </div>
                </div>
            </div>
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                <img src="http://placehold.it/500x250"/>
                    
                        <h3 class="home-block-2-slider-block-title">Section Title 4</h3>
                        <p>
                            Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                        </p>
                        <div class="home-slide-read-more">
                            <a href="#" class="home-slide-read-more-link">Read More</a>
                        </div>
                </div>
            </div>
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                <img src="http://placehold.it/500x250"/>
                    
                        <h3 class="home-block-2-slider-block-title">Section Title 5</h3>
                        <p>
                            Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                        </p>
                        <div class="home-slide-read-more">
                            <a href="#" class="home-slide-read-more-link">Read More</a>
                        </div>
                </div>
            </div>
            <div class="home-block-2-slider-block text-left">
                <div class="home-slide-content text-left">    
                <img src="http://placehold.it/500x250"/>
                    
                        <h3 class="home-block-2-slider-block-title">Section Title 6</h3>
                        <p >
                            Normal Paragraph, Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non Lorem, Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula
                        </p>
                        <div class="home-slide-read-more">
                            <a href="#" class="home-slide-read-more-link">Read More</a>
                        </div>
                </div>
            </div>
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
            adaptiveHeight: true,
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
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>