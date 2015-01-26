<?php
//Facilities Custom Post Type
function post_type_facilities() {
    $labels = array(
        'name' => __( 'Facility' ),
        'singular_name' => __( 'Facility' ),
        'add_new' => __( 'Add New Facility' ),
        'add_new_item' => __( 'Add New Facility' ),
        'edit_item' => __( 'Edit Facility' ),
        'new_item' => __( 'Add New Facility' ),
        'view_item' => __( 'View Facility' ),
        'search_items' => __( 'Search Facilities' ),
        'not_found' => __( 'No Facilities found' ),
        'not_found_in_trash' => __( 'No Facilities found in trash' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt', 'revisions' ),
        'capability_type' => 'post',
        'rewrite' => array("slug" => "ocean-breeze-facilities", "with_front" => false), // Permalinks format
        'menu_position' => 5,
        'taxonomies' => 'facility-type',
        //'menu_icon' => plugin_dir_url( __FILE__ ) . '/images/calendar-icon.gif',  // Icon Path
        'has_archive' => true
    );
    register_post_type( 'facilities', $args );
}
add_action( 'init', 'post_type_facilities' );

//Staff Custom Post Type
function post_type_staff() {
    $labels = array(
        'name' => __( 'Staff' ),
        'singular_name' => __( 'Staff Member' ),
        'add_new' => __( 'Add New Staff Member' ),
        'add_new_item' => __( 'Add New Staff Member' ),
        'edit_item' => __( 'Edit Staff Member' ),
        'new_item' => __( 'Add New Staff Member' ),
        'view_item' => __( 'View Staff Member' ),
        'search_items' => __( 'Search Staff' ),
        'not_found' => __( 'No Staff Found' ),
        'not_found_in_trash' => __( 'No Staff found in trash' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt', 'revisions' ),
        'capability_type' => 'post',
        'rewrite' => array("slug" => "staff", "with_front" => false), // Permalinks format
        'menu_position' => 5,
        'taxonomies' => 'staff',
        'has_archive' => true
    );
    register_post_type( 'staff', $args );
}
add_action( 'init', 'post_type_staff' );

//Testimonials Custom Post Type
function post_type_testimonials() {
    $labels = array(
        'name' => __( 'Testimonial' ),
        'singular_name' => __( 'Testimonial' ),
        'add_new' => __( 'Add New Testimonial' ),
        'add_new_item' => __( 'Add New Testimonial' ),
        'edit_item' => __( 'Edit Testimonial' ),
        'new_item' => __( 'Add New Testimonial' ),
        'view_item' => __( 'View Testimonial' ),
        'search_items' => __( 'Search Testimonials' ),
        'not_found' => __( 'No Testimonials found' ),
        'not_found_in_trash' => __( 'No Testimonials found in trash' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt' ),
        'capability_type' => 'post',
        'rewrite' => array("slug" => "testimonial"), // Permalinks format
        'menu_position' => 5,
        'taxonomies' => 'testimonial-type',
        //'menu_icon' => plugin_dir_url( __FILE__ ) . '/images/calendar-icon.gif',  // Icon Path
        'has_archive' => true
    );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'post_type_testimonials' );
?>