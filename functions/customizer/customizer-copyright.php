<?php

// Footer copyright section 

	function appointment_copyright_customizer( $wp_customize ) {

	$wp_customize->add_panel( 'appointment_copyright_setting', array(

		'priority'       => 900,

		'capability'     => 'edit_theme_options',

		'title'      => __('Configuração do rodapé', 'appointment'),

	) );

	

	$wp_customize->add_section(

        'copyright_section_one',

        array(

            'title' => __('Nota sobre direitos autorais','appointment'),

            'priority' => 35,

			'panel' => 'appointment_copyright_setting',

        )

    );

	

	

	$wp_customize->add_setting(

    'appointment_options[footer_copyright_text]',

    array(

        'default' => __('No copyright information has been saved yet.','appointment'),

		'sanitize_callback' => 'appointment_copyright_sanitize_text',

		'type' =>'option'

    )

	

);

$wp_customize->add_control(

    'appointment_options[footer_copyright_text]',

    array(

        'label' => __('Copyright text','appointment'),

        'section' => 'copyright_section_one',

        'type' => 'text',

    )

);

$wp_customize->add_setting(

    'appointment_options[footer_menu_bar_enabled]',array(

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option'

));



$wp_customize->add_control(

    'appointment_options[footer_menu_bar_enabled]',

    array(

        'type' => 'checkbox',

        'label' => __('Hide copyright text','appointment'),

        'section' => 'copyright_section_one',

    )

);

$wp_customize->add_section(

        'footer_color',

        array(

            'title' => __('Cores','appointment'),

           'priority' => 10,

            'panel' => 'appointment_copyright_setting',

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

        'label'   => __('Selecione a cor de fundo', 'appointment'),

        'section' => 'footer_color',

        'settings'   => 'appointment_options[footer_skin_color]',

    ))); 


$wp_customize->add_setting(

    'appointment_options[footer_text_color]', array(

        'capability'     => 'edit_theme_options',

    'default' => '#ffffff',

    'type' => 'option',

    ));

    $wp_customize->add_control( 

    new WP_Customize_Color_Control( 

    $wp_customize, 

    'appointment_options[footer_text_color]', 

    array(

        'label'   => __('Selecione a cor do texto', 'appointment'),

        'section' => 'footer_color',

        'settings'   => 'appointment_options[footer_text_color]',

    ))); 


	//Footer social link 

	$wp_customize->add_section(

        'copyright_social_icon',

        array(

            'title' => __('Social Links','appointment'),

           'priority' => 45,

			'panel' => 'appointment_copyright_setting',

        )

    );

	

	

	//Hide Index Service Section

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_enabled]',

    array(

        'default' => 0,

		'capability' => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option'

    )	

	);

	$wp_customize->add_control(

    'appointment_options[footer_social_media_enabled]',

    array(

        'label' => __('Hide footer social icons','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'checkbox',

    )

	);



	// Facebook link

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_facebook_link]',

    array(

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    )

	

	);

	$wp_customize->add_control(

    'appointment_options[footer_social_media_facebook_link]',

    array(

        'label' => __('Facebook URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_facebook_link_taregt]',array(

	'default' => 1,

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option'

	));



	$wp_customize->add_control(

    'appointment_options[footer_facebook_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);



	//twitter link

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_twitter_link]',

    array(

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option'

    )

	

	);

	$wp_customize->add_control(

    'appointment_options[footer_social_media_twitter_link]',

    array(

        'label' => __('Twitter URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_twitter_link_taregt]',array(

	'sanitize_callback' => 'sanitize_text_field',

	'default' => 1,

	'type'=> 'option'

	));



	$wp_customize->add_control(

    'appointment_options[footer_twitter_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);

	//Linkdin link

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_linkedin_link]',

    array(

		'type' => 'option',

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

    )

	

	);

	$wp_customize->add_control(

    'appointment_options[footer_social_media_linkedin_link]',

    array(

        'label' => __('LinkedIn URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_linkdin_link_taregt]',array(

	'default' => 1,

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	));



	$wp_customize->add_control(

    'appointment_options[footer_linkdin_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);



	//Google-plus link

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_googleplus_link]',

    array(

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    )

	

	);

	$wp_customize->add_control(

    'appointment_options[footer_social_media_googleplus_link]',

    array(

        'label' => __('GooglePlus URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_googleplus_link_taregt]',array(

	'default' => 1,

	'sanitize_callback' => 'sanitize_text_field',

	'type'=> 'option',

	));



	$wp_customize->add_control(

    'appointment_options[footer_googleplus_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);



	//Skype link

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_skype_link]',

    array(

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

		'type'=>'option',

    )

	

	);

	$wp_customize->add_control(

   'appointment_options[footer_social_media_skype_link]',

    array(

        'label' => __('Skype URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_skype_link_taregt]',array(

	'default' => 1,

	'sanitize_callback' => 'sanitize_text_field',

	'type'=>'option',

	));



	$wp_customize->add_control(

    'appointment_options[footer_skype_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);





//instagram link

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_instagram_link]',

    array(

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

		'type'=>'option',

    )

	

	);

	$wp_customize->add_control(

   'appointment_options[footer_social_media_instagram_link]',

    array(

        'label' => __('Instagram URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_instagram_link_taregt]',array(

	'default' => 1,

	'sanitize_callback' => 'sanitize_text_field',

	'type'=>'option',

	));



	$wp_customize->add_control(

    'appointment_options[footer_instagram_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);



//Youtube link

	

	$wp_customize->add_setting(

    'appointment_options[footer_social_media_youtube_link]',

    array(

        'default' => '#',

		'sanitize_callback' => 'sanitize_text_field',

		'type'=>'option',

    )

	

	);

	$wp_customize->add_control(

   'appointment_options[footer_social_media_youtube_link]',

    array(

        'label' => __('YouTube URL','appointment'),

        'section' => 'copyright_social_icon',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[footer_youtube_link_taregt]',array(

	'default' => 1,

	'sanitize_callback' => 'sanitize_text_field',

	'type'=>'option',

	));



	$wp_customize->add_control(

    'appointment_options[footer_youtube_link_taregt]',

    array(

        'type' => 'checkbox',

        'label' => __('Open link in new tab','appointment'),

        'section' => 'copyright_social_icon',

    )

);













function appointment_copyright_sanitize_text( $input ) {



    return wp_kses_post( force_balance_tags( $input ) );



}

	

	function appointment_copyright_sanitize_html( $input ) {



    return force_balance_tags( $input );



}



}

add_action( 'customize_register', 'appointment_copyright_customizer' );

?>