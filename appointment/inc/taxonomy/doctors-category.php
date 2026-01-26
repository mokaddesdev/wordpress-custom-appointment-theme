<?php
/**
 * Doctors Category Taxonomy
 * 
 * @package  doctorappointment
 */

function doctorappointment_doctor_category_taxonomy() {
    $labels = array(
        'name' => 'Doctors Category',
        'singular_name' => 'Doctors Category',
        'menu_name' => 'Doctors Category',
    );

        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'doctors_category'
            ),
        );
        register_taxonomy( 'doctors_category', 'doctors', $args );
}
add_action( 'init', 'doctorappointment_doctor_category_taxonomy' );