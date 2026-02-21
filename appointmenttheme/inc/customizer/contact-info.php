<?php
/**
 * Contact Information Customize
 * 
 * @package doctorappointment
 */

function doctorappointment_contact_information_customizer( $wp_customize ) {

    $wp_customize->add_section( 'contact_section', array(
        'title'    => __( 'Contact Information Details', 'doctorappointment' ),
        'priority' => 120,
    ) );

    $contact_info = array(
        'number' => array(
            'title' => array(
                'label'   => 'Phone Title',
                'default' => 'Emergency',
            ),
            'heading_one' => array(
                'label'   => 'Phone Heading One',
                'default' => '(237) 681-812-255',
            ),
            'heading_two' => array(
                'label'   => 'Phone Heading Two',
                'default' => '(237) 666-331-894',
            ),
        ),

        'location' => array(
            'title' => array(
                'label'   => 'Location Title',
                'default' => 'Location',
            ),
            'heading_one' => array(
                'label'   => 'Location Heading One',
                'default' => '0123 Some place',
            ),
            'heading_two' => array(
                'label'   => 'Location Heading Two',
                'default' => '9876 Some country',
            )
        ),

        'email' => array(
            'title' => array(
                'label'   => 'Email Title',
                'default' => 'Email',
            ),
            'heading_one' => array(
                'label'   => 'Email Heading One',
                'default' => 'fildineeesoe@gmil.com',
            ),
            'heading_two' => array(
                'label'   => 'Email Heading Two',
                'default' => 'myebstudios@gmail.com',
            )
        ),

         'working_hours' => array(
            'title' => array(
                'label'   => 'Working Hours Title',
                'default' => 'Working Hours',
            ),
            'heading_one' => array(
                'label'   => 'Working Hours One',
                'default' => 'Mon-Sat 09:00-20:00',
            ),
            'heading_two' => array(
                'label'   => 'Working Hours Two',
                'default' => 'Sunday Emergency only',
            )
        ),
    );

    foreach ( $contact_info as $info_key => $info_fields ) {
        foreach ( $info_fields as $field_key => $field ) {

            $setting_id = "contact_{$info_key}_{$field_key}";

            // Setting
            $wp_customize->add_setting( $setting_id, array(
                'default'           => $field['default'],
                'sanitize_callback' => 'sanitize_text_field',
            ) );

            // Control
            $wp_customize->add_control( $setting_id, array(
                'label'   => __( $field['label'], 'doctorappointment' ),
                'section' => 'contact_section',
                'type'    => 'text',
            ) );
        }
    }
}

add_action( 'customize_register', 'doctorappointment_contact_information_customizer' );
