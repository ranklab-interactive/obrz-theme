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
 
// Testimonial Taxonomy
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

// Staff Taxonomy
add_action( 'init', 'staff_tax' );

function staff_tax() {
	register_taxonomy(
		'staff-type',
		'staff',
		array(
			'label' => __( 'Departments' ),
			'rewrite' => array( 'slug' => 'staff-type' ),
			'hierarchical' => true,
                    'has_archive' => false
		)
	);
}
 register_taxonomy_for_object_type( 'staff-type', 'staff' );

?>