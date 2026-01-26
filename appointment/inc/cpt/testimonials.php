<?php
/**
 * Template Name: Register Custom Post Type Testimonials
 * 
 * @package doctorappointment
 */

function doctorappintment_register_testimonials_cpt() {
    $labels = array(
        'name'               => __( 'Testimonials', 'doctorappointment' ),
        'singular_name'      => __( 'Testimonial', 'doctorappointment' ),
        'menu_name'          => __( 'Testimonials', 'doctorappointment' ),
        'name_admin_bar'     => __( 'Testimonials', 'doctorappointment' ),
        'add_new'            => __( 'Add New', 'doctorappointment' ),
        'add_new_item'       => __( 'Add New Doctor', 'doctorappointment' ),
        'new_item'           => __( 'New Testimonial', 'doctorappointment' ),
        'edit_item'          => __( 'Edite Testimonial', 'doctorappointment' ),
        'view_item'          => __( 'View Testimonial', 'doctorappointment' ),
        'all_items'          => __( 'All Testimonials', 'doctorappointment' ),
        'search_items'       => __( 'Search Testimonials', 'doctorappointment' ),
        'not_found'          => __( 'No Testimonials Fond', 'doctorappointment' ),
        'not_found_in_trash' => __( 'No Testimonials Found in Trash', 'doctorappointment' ),
    );

    $args =  array(
        'labels'             => $labels,
        'description'        => __( 'Testimonials Custom post type for show doctors', 'doctorappointment' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 12,
        'menu_icon'          => 'dashicons-testimonial',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'testimonials_category'),
        'show_in_rest'       => true,
    );

    register_post_type( 'testimonials', $args );

}
add_action( 'init', 'doctorappintment_register_testimonials_cpt' );