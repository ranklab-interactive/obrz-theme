<?php
//Maintenance Mode
function activate_maintenance_mode() {
   if ( !(current_user_can( 'administrator' ) ||  current_user_can(
'super admin' ) ||  current_user_can( 'editor' ))) {
	include(TEMPLATEPATH.'/maintenance.php');
   }
}
$value = stripslashes(get_option('ranklab_mm_active'));

if($value == 'Yes') {
	add_action('get_header', 'activate_maintenance_mode');
} else {
	
}
//Enqueuing the admin script
add_action('admin_enqueue_scripts', 'my_admin_script');
function my_admin_script()
{
    wp_enqueue_script('my-admin', get_bloginfo('template_url').'/library/js/my-admin.js', array('jquery'));
}

//Custom Image Size
add_image_size( 'home_slide_featured_image', '800', '400', 'true' ); 

//Home Slide Custom Excerpt Length
function home_slide_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'home_slide_excerpt_length', 999 );
?>