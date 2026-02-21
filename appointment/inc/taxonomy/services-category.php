<?php
/**
 * Servces Category Taxonomy
 * 
 * @package  doctorappointment
 */

function doctorappointment_services_category_taxonomy() {
    $labels = array(
        'name' => 'Services Category',
        'singular_name' => 'Service Category',
        'menu_name' => 'Service Category',
    );

        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'services_category'
            ),
        );
        register_taxonomy( 'services_category', 'services', $args );
}
add_action( 'init', 'doctorappointment_services_category_taxonomy' );