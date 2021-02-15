<?php

function appointment_testimonial_customizer( $wp_customize ) {



//Home project Section

	$wp_customize->add_panel( 'appointment_test_setting', array(

		'priority'       => 20,

		'capability'     => 'edit_theme_options',

		'title'      => __('Identidade do site 2','appointment'),

	) );

	 
	

	// overlay

	$wp_customize->add_setting( 'appointment_options[testi_overlay]', array(

		'default' => true,

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    ) );

    

    $wp_customize->add_control('appointment_options[testi_overlay]', array(

		'label'    => __( 'Enable overlay', 'appointment' ),

		'section'  => 'test_section_settings',

		'type' => 'checkbox',

	) );

	

	function appointment_front_testimonial_sanitize_html( $input ) {

    return force_balance_tags( $input );

	}

	

}

//add_action( 'customize_register', 'appointment_testimonial_customizer' );

?>