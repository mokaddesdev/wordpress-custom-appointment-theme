<?php
/**
 * 
 */

function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attr = [] ) {

    $custom_thumbnail = '';

    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }

    $default_attr = [
        'loading' => 'lazy',
    ];

    if ( has_post_thumbnail( $post_id ) ) {

        $attributes = array_merge( $default_attr, $additional_attr );

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id( $post_id ),
            $size,
            false,
            $attributes
        );
    }

    return $custom_thumbnail;
}

function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attr = [] ) {
    echo get_the_post_custom_thumbnail( $post_id, $size, $additional_attr );
}