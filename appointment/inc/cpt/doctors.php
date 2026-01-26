<?php
/**
 * Template Name: Register Custom Post Type Doctors
 * 
 * @package doctorappointment
 */

function doctorappintment_register_doctors_cpt() {
    $labels = array(
        'name'               => __( 'Doctors', 'doctorappointment' ),
        'singular_name'      => __( 'Doctor', 'doctorappointment' ),
        'menu_name'          => __( 'Doctors', 'doctorappointment' ),
        'name_admin_bar'     => __( 'Doctors', 'doctorappointment' ),
        'add_new'            => __( 'Add New', 'doctorappointment' ),
        'add_new_item'       => __( 'Add New Doctor', 'doctorappointment' ),
        'new_item'           => __( 'New Doctor', 'doctorappointment' ),
        'edit_item'          => __( 'Edite Doctor', 'doctorappointment' ),
        'view_item'          => __( 'View Doctor', 'doctorappointment' ),
        'all_items'          => __( 'All Doctors', 'doctorappointment' ),
        'search_items'       => __( 'Search Doctors', 'doctorappointment' ),
        'not_found'          => __( 'No Doctors Fond', 'doctorappointment' ),
        'not_found_in_trash' => __( 'No Doctors Found in Trash', 'doctorappointment' ),
    );

    $args =  array(
        'labels'             => $labels,
        'description'        => __( 'Doctors Custom post type for show doctors', 'doctorappointment' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 14,
        'menu_icon'          => 'dashicons-businessperson',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'doctors' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'doctors_category'),
        'show_in_rest'       => true,
    );

    register_post_type( 'doctors', $args );

}
add_action( 'init', 'doctorappintment_register_doctors_cpt' );