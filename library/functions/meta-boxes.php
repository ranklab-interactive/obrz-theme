<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/
 */
     
/********************* META BOX DEFINITIONS ***********************/
//(----------------Gallery for Facilities----------------)

add_filter( 'rwmb_meta_boxes', 'ranklab_register_meta_boxes' );
 
function ranklab_register_meta_boxes( $meta_boxes ){
$prefix = 'ranklab_';
// Facility Gallery
$meta_boxes[] = array(
'id' => 'facility-gallery',
'title' => 'Facility Gallery',
'pages' => array( 'page'),
'context' => 'normal',
'priority' => 'high',
 'clone' => 'true',
'fields' => array(
array(
'name' => 'Facility Gallery',
'id' => $prefix . 'nsv-facility-gallery',
'type' => 'image_advanced',
//'clone' => true,
),
)
);
            return $meta_boxes;
}
?>