<?php
// -------------------------------  Taxonomies ---------------------------------------

// Sample Taxonomy
add_action( 'init', 'testimonial_tax' );

function testimonial_tax() {
	register_taxonomy(
		'testimonial-type',
		'testimonials',
		array(
			'label' => __( 'Testimonial Type' ),
			'rewrite' => array( 'slug' => 'testimonial-type' ),
			'hierarchical' => true,
		)
	);
}
 register_taxonomy_for_object_type( 'testimonial-type', 'testimonials' );

?>