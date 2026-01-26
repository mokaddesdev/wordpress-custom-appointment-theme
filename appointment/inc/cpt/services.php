<?php
/**
 * Template Name: Register Custom Post Type Services
 * 
 * @package doctorappointment
 */

function doctorappintment_register_services_cpt() {
    $labels = array(
        'name'               => __( 'Services', 'doctorappointment' ),
        'singular_name'      => __( 'Service', 'doctorappointment' ),
        'menu_name'          => __( 'Services', 'doctorappointment' ),
        'name_admin_bar'     => __( 'Services', 'doctorappointment' ),
        'add_new'            => __( 'Add New', 'doctorappointment' ),
        'add_new_item'       => __( 'Add New Service', 'doctorappointment' ),
        'new_item'           => __( 'New Service', 'doctorappointment' ),
        'edit_item'          => __( 'Edite Service', 'doctorappointment' ),
        'view_item'          => __( 'View Service', 'doctorappointment' ),
        'all_items'          => __( 'All Services', 'doctorappointment' ),
        'search_items'       => __( 'Search Services', 'doctorappointment' ),
        'not_found'          => __( 'No Services Fond', 'doctorappointment' ),
        'not_found_in_trash' => __( 'No Services Found in Trash', 'doctorappointment' ),
    );

    $args =  array(
        'labels'             => $labels,
        'description'        => __( 'Service Custom post type for show services', 'doctorappointment' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 16,
        'menu_icon'          => 'dashicons-admin-tools',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'services_category'),
        'show_in_rest'       => true,
    );

    register_post_type( 'services', $args );

}
add_action( 'init', 'doctorappintment_register_services_cpt' );