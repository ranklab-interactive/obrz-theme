<?php 
/*
 *Template Name: Contact Page
 *  */
get_header(); ?>
<div class="row">
    <div class="large-8 large-centered text-center columns">
        <header id="page-id">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
                <article>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
        </header>
    </div>
</div>
<section  role="main" class="large-12 main-content no-space columns">
    <div class="row pad">
        <div class="medium-7 columns">
            <section>
                <div class="row pad" itemscope itemtype="http://schema.org/Organization">
                    <div class="small-12 medium-6 small-text-center medium-text-left columns">
                        <h3>Address</h3>
                        <div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
<p>                          <span itemprop="name">Next Step Village</span><br />
                            <span itemprop="streetAddress">123 Main St</span><br>
                            <span itemprop="addressLocality">Daytona</span>, <span itemprop="addressRegion">FL</span>
                          </p>
                        </div>
                    </div>
                    <div class="small-12 medium-6 small-text-center medium-text-left columns">
                        <h3>Give us a call</h3>
                        <a class="big-phone-number" itemprop="telephone" href="tel: +112345678">123-456-789</a>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns left">
                        <iframe frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13224.102768787663!2d-118.24995340000001!3d34.043212049999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c634253dfd01%3A0x26fe52df19a5a920!2sDowntown%2C+Los+Angeles%2C+CA!5e0!3m2!1sen!2sus!4v1415737584447" style="height: 450px; width: 100%;"></iframe>
                    </div>
                </div>
            </section>
        </div>
        <div class="medium-5 nsv-side-container columns">
            <section id="contact-form">
                <div class="row pad">
                    <div class="small-12 columns">
                        <h3>Contact Us Now For Admissions Details</h3>
                        <form>
                            <label>First Name*: </label><input type="text" placeholder="First Name" required="">
                            <label>Last Name*: </label><input type="text" placeholder="Last Name" required="">
                            <label>Subject: </label><input type="text" placeholder="Subject">
                            <label>Your Comments: </label><input type="text" class="textarea" placeholder="Your Message"> 
                            <div class="small-text-center"><button type="submit" value="Submit">Submit</button></div>
                            <div>* = Required Field</div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- #main -->
<?php get_footer(); ?>