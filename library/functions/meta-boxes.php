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
'pages' => array( 'facilities'),
'context' => 'normal',
'priority' => 'high',
'fields' => array(
array(
'name' => 'Facility Gallery',
'id' => $prefix . 'facility-gallery',
'type' => 'image_advanced',
//'clone' => true,
),
)
);

//Page Settings
$meta_boxes[] = array(
'id' => 'bigheading_metaboxes',
'title' => 'Heading Customization',
'pages' => array( 'page'),
'context' => 'normal',
'priority' => 'high',
'fields' => array(
                    array(
                    'name' => 'Heading Text',
                    'id' => $prefix . 'bigheading_text',
                    'type' => 'textarea',
                    //'clone' => true,
                    ),
                )
);

// Page Blocks
$meta_boxes[] = array(
'id' => 'page_block',
'title' => 'Page Block',
'pages' => array( 'facilities'),
'context' => 'normal',
'priority' => 'high',
 'clone' => true,
'fields' => array(
array(
'name' => 'Facility Gallery',
'id' => $prefix . 'page_block',
'type' => 'wysiwyg',
),
)
);
// Staff Title
$meta_boxes[] = array(
'id' => 'staff_title',
'title' => 'Staff Title',
'pages' => array( 'staff'),
'context' => 'normal',
'priority' => 'high',
'fields' => array(
array(
'name' => 'Staff Title',
'id' => $prefix . 'staff_title',
'type' => 'select',
'options' => array(
'Chief Operating Officer' => __( 'Chief Operating Officer', 'meta-box' ),
'Chief Financial Officer' => __( 'Chief Financial Officer', 'meta-box' ),
'Executive Director' => __( 'Executive Director', 'meta-box' ),
'Provider Liaison' => __( 'Provider Liaison', 'meta-box' ),
'Medical Director (MD)' => __( 'Medical Director (MD)', 'meta-box' ),
'Assistant Medical Director' => __( 'Assistant Medical Director', 'meta-box' ),
'Registered Nurse' => __( 'Registered Nurse', 'meta-box' ),
'Client Care Coordinator' => __( 'Client Care Coordinator', 'meta-box' ),
'EMT' => __( 'EMT', 'meta-box' ),
'Clinical Director' => __( 'Clinical Director', 'meta-box' ),
'Program Director' => __( 'Program Director', 'meta-box' ),
'Primary Therapist' => __( 'Primary Therapist', 'meta-box' ),
'IOP Therapist' => __( 'IOP Therapist', 'meta-box' ),
'Case Manager' => __( 'Case Manager', 'meta-box' ),
'Court Liaison, RecoveryU Educator' => __( 'Court Liaison, RecoveryU Educator', 'meta-box' ),
'Intake Coordinator' => __( 'Intake Coordinator', 'meta-box' ),
'Tech Supervisor' => __( 'Tech Supervisor', 'meta-box' ),
'Lead Tech, First Shift' => __( 'Lead Tech, First Shift', 'meta-box' ),
'Director of HR, Accounting' => __( 'Director of HR, Accounting', 'meta-box' ),
'HR Coordinator, Pharmacy Coordinator' => __( 'HR Coordinator, Pharmacy Coordinator', 'meta-box' ),
'Director of Admissions' => __( 'Director of Admissions', 'meta-box' ),
'Digital Marketing Director' => __( 'Digital Marketing Director', 'meta-box' ),
'Director of Maintenance' => __( 'Director of Maintenance', 'meta-box' ),
'Administration' => __( 'Administration', 'meta-box' ),
    ),
),
)
);
            return $meta_boxes;
}
?>