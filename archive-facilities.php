<?php 
/*
 *
 * Facilities Archive Template
 * 
 */
     
get_header(); ?>
<div class="facility-information">
    <section id="introduction-content">
        <div class="pad">
            <div class="row text-center">
                <h2>The Right Environment To Help You Take The Next Step</h2>
                <div class="subtitle">My idea here is to omit everything superfluous so deep and art is not simple, and showing. That's not the nature of data. </div>
            </div>
            <?php get_template_part('library/includes/facilities') ?>
        </div>
    </section>
    <section id="testimonials">
         <?php get_template_part('library/includes/testimonials'); ?> 
    </section>
    <section id="transition-importance">
        <div class="transition-importance pad">
            <div class="row">
                <div class="large-12 columns">
                    <div class="row">					
                        <div class="large-12 columns text-center">
                            <h2>Location &amp; Facility Benefits</h2>
                            <div class="subtitle">Ultimately, and often truth than it has to design is unobtrusive. Good design makes it really is incredibly challenging.</div>
                        </div>
                    </div>
                    <ul class="medium-block-grid-3 small-text-center medium-text-left">
                    <?php
//list terms in taxonomy
$types[0] = 'facility-type';
foreach ($types as $type) {
  $taxonomy = $type;
  $terms = get_terms( $taxonomy, array('child_of' => 6, 'hide_empty' => 0));
  if ($terms) {
    foreach($terms as $term) {
    echo '<li><h6>' . $term->name . '</h6>' . $term->description . '</li>';
  }
}
}
?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>