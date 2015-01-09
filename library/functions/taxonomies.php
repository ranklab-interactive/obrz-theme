<?php
// -------------------------------  Taxonomies ---------------------------------------

// Facility Taxonomy
add_action( 'init', 'facility_type_tax' );

function facility_type_tax() {
	register_taxonomy(
		'facility-type',
		'facilities',
		array(
			'label' => __( 'Facility Type' ),
			'rewrite' => array( 'slug' => 'facility-type' ),
			'hierarchical' => true,
		)
	);
}
 register_taxonomy_for_object_type( 'facility-type', 'facilities' );
 
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