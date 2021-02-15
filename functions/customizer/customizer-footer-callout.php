<?php

function appointment_footer_callout_customizer( $wp_customize ) {



	//Home call out



	$wp_customize->add_panel( 'appointment_footer_callout_setting', array(

		'priority'       => 820,

		'capability'     => 'edit_theme_options',

		'title'      => __('Configuração do rodapé', 'appointment'),

	) );

	

	//Contact Information Setting

	$wp_customize->add_section(

        'footer_callout_settings',

        array(

            'title' => __('Configuração do rodapé','appointment'),

            'description' => '',

			'panel'  => 'appointment_footer_callout_setting',)

    );

	

	

	//Hide Index footer callout Section

	

	$wp_customize->add_setting(

    'appointment_options[front_callout_enable]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'type' => 'option',

    )	

	);

	$wp_customize->add_control(

    'appointment_options[front_callout_enable]',

    array(

        'label' => __('Ocultar rodapé','appointment'),

        'section' => 'footer_callout_settings',

        'type' => 'checkbox',

    )

	);

	 

    $wp_customize->add_setting(

    'appointment_options[footer_skin_color]', array(

        'capability'     => 'edit_theme_options',

    'default' => '#ffffff',

    'type' => 'option',

    ));

    $wp_customize->add_control( 

    new WP_Customize_Color_Control( 

    $wp_customize, 

    'appointment_options[footer_skin_color]', 

    array(

        'label'   => __('Selecione a cor', 'appointment'),

        'section' => 'footer_callout_settings',

        'settings'   => 'appointment_options[footer_skin_color]',

    ))); 

function appointment_footer_callout_sanitize_html( $input ) {



    return force_balance_tags( $input );



}



	

	}

	//add_action( 'customize_register', 'appointment_footer_callout_customizer' );

	?>