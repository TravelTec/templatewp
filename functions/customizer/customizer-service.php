<?php

function appointment_service_customizer( $wp_customize ) {

 

//Service section panel

$wp_customize->add_panel( 'appointment_service_options', array(

		'priority'       => 600,

		'capability'     => 'edit_theme_options',

		'title'      => __('Service settings', 'appointment'),

	) );



	

	$wp_customize->add_section( 'service_section_head' , array(

		'title'      => __('Section Heading', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 50,

   	) );

	

	

	//Hide Index Service Section

	

	$wp_customize->add_setting(

    'appointment_options[service_section_enabled]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option'

    )	

	);

	$wp_customize->add_control(

    'appointment_options[service_section_enabled]',

    array(

        'label' => __('Hide service section from homepage','appointment'),

        'section' => 'service_section_head',

        'type' => 'checkbox',

    )

	);

	

	$wp_customize->add_setting(

    'appointment_options[service_title]',

    array(

        'default' => __('Our services','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option'

    )	

	);

	$wp_customize->add_control(

    'appointment_options[service_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_head',

        'type' => 'text',

    )

	);

	

	$wp_customize->add_setting(

    'appointment_options[service_description]',

    array(

        'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option'

    )	

	);

	$wp_customize->add_control(

    'appointment_options[service_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_head',

        'type' => 'text',

		'sanitize_callback' => 'sanitize_text_field',

    )

	);	

	

//service section one

	$wp_customize->add_section( 'service_section_one' , array(

		'title'      => __('Service section one', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 100,

		'sanitize_callback' => 'sanitize_text_field',

   	) );

	$wp_customize->add_setting(

		'appointment_options[service_one_icon]', array(

		 'sanitize_callback' => 'sanitize_text_field',

        'default'        => 'fa-mobile',

        'capability'     => 'edit_theme_options',

		'type' => 'option',

    ));

	

	$wp_customize->add_control( 'appointment_options[service_one_icon]', array(

        'label'   => __('Icon', 'appointment'),

		'style' => 'background-color: red',

        'section' => 'service_section_one',

        'type'    => 'text',

    ));		

		

	$wp_customize->add_setting(

    'appointment_options[service_one_title]',

    array(

        'default' => __('Easy to use','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option'

    )	

	);

	$wp_customize->add_control(

    'appointment_options[service_one_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_one',

        'type' => 'text',

    )

	);



	$wp_customize->add_setting(

    'appointment_options[service_one_description]',

    array(

        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

		 'capability'     => 'edit_theme_options',

		 'sanitize_callback' => 'appointment_service_sanitize_html',

		 'type' => 'option'

    )	

	);

	$wp_customize->add_control(

    'appointment_options[service_one_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_one',

        'type' => 'text',	

    )

);

//Service First icon link

$wp_customize ->add_setting (

	'appointment_options[service_one_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_one_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_one',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_one_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		'default' => false

		));



	$wp_customize->add_control(

		'appointment_options[service_one_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_one',

		)

	);





//Second service



$wp_customize->add_section( 'service_section_two' , array(

		'title'      => __('Service section two', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 200,

   	) );





$wp_customize->add_setting(

    'appointment_options[service_two_icon]',

    array(

        'type' =>'option',

		'default' => 'fa-bell',

		 'capability'     => 'edit_theme_options',

		 'sanitize_callback' => 'sanitize_text_field',

		 

    )	

);

$wp_customize->add_control(

    'appointment_options[service_two_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_two',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_two_title]',

    array(

        'default' => __('Easy to use','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_two_title]',

    array(

        'label' => __('Title' ,'appointment'),

        'section' => 'service_section_two',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_two_description]',

    array(

        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

		 'capability'     => 'edit_theme_options',

		 'sanitize_callback' => 'appointment_service_sanitize_html',

		 'type' => 'option',

    )	

);

$wp_customize->add_control(

		'appointment_options[service_two_description]',

		array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_two',

        'type' => 'text',

    )

);



//Service two icon link

$wp_customize ->add_setting (

	'appointment_options[service_two_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_two_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_two',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_two_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_two_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_two',

		)

	);



//Third Service section

$wp_customize->add_section( 'service_section_three' , array(

		'title'      => __('Service section three', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 300,

   	) );





$wp_customize->add_setting(

    'appointment_options[service_three_icon]',

    array(

        'default' => 'fa-laptop',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		

    )	

);

$wp_customize->add_control(

'appointment_options[service_three_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_three',

        'type' => 'text',

		

    )

);



$wp_customize->add_setting(

    'appointment_options[service_three_title]',

    array(

        'default' => __('Easy to use','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' =>'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_three_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_three',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_three_description]',

    array(

        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' =>'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_three_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_three',

        'type' => 'text',

    )

);



//Service three icon link

$wp_customize ->add_setting (

	'appointment_options[service_three_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_three_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_three',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_three_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_three_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_three',

		)

	);



//Four Service section



$wp_customize->add_section( 'service_section_four' , array(

		'title'      => __('Service section four', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 400,

   	) );



$wp_customize->add_setting(

    'appointment_options[service_four_icon]',

    array(

        'default' => 'fa-support',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' =>'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_four_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_four',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_four_title]',

    array(

        'default' => __('Easy to use','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option'

    )	

);

$wp_customize->add_control(

    'appointment_options[service_four_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_four',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

   'appointment_options[service_four_description]',

    array(

        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option'

    )	

);

$wp_customize->add_control(

    'appointment_options[service_four_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_four',

        'type' => 'text',

		'sanitize_callback' => 'sanitize_text_field',

    )

);





//Service Four icon link

$wp_customize ->add_setting (

	'appointment_options[service_four_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_four_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_four',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_four_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_four_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_four',

		)

	);





//Five service section

$wp_customize->add_section( 'service_section_five' , array(

		'title'      => __('Service section five', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 500,

   	) );





$wp_customize->add_setting(

    'appointment_options[service_five_icon]',

    array(

        'default' => 'fa-code',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_five_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_five',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_five_title]',

    array(

        'default' => __('Easy to use','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_five_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_five',

        'type' => 'text',

		

    )

);



$wp_customize->add_setting(

    'appointment_options[service_five_description]',

    array(

        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option'

    )	

);

$wp_customize->add_control(

    'appointment_options[service_five_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_five',

        'type' => 'text',

    )

);



//Service Five icon link

$wp_customize ->add_setting (

	'appointment_options[service_five_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_five_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_five',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_five_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_five_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_five',

		)

	);



//Six service section

$wp_customize->add_section( 'service_section_six' , array(

		'title'      => __('Service section six', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 600,

		

   	) );



	

$wp_customize->add_setting(

    'appointment_options[service_six_icon]',

    array(

        'default' => 'fa-cog',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_six_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_six',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_six_title]',

    array(

        'default' => __('Easy to use','appointment'),

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_six_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_six',

        'type' => 'text',

		

    )

);



$wp_customize->add_setting(

    'appointment_options[service_six_description]',

    array(

        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_six_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_six',

        'type' => 'text',

    )

);



//Service six icon link

$wp_customize ->add_setting (

	'appointment_options[service_six_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_six_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_six',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_six_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_six_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_six',

		)

	);

//Seven service section

$wp_customize->add_section( 'service_section_seven' , array(

		'title'      => __('Service section seven', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 700,

   	) );





$wp_customize->add_setting(

     'appointment_options[service_seven_icon]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    )	

);



$wp_customize->add_control(

    'appointment_options[service_seven_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_seven',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_seven_title]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_seven_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_seven',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_seven_description]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_seven_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_seven',

        'type' => 'text',

    )

);



//Service seven icon link

$wp_customize ->add_setting (

	'appointment_options[service_seven_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_seven_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_seven',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_seven_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_seven_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_seven',

		)

	);



//eight service section

$wp_customize->add_section( 'service_section_eight' , array(

		'title'      => __('Service section eight', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 800,

   	) );



$wp_customize->add_setting(

    'appointment_options[service_eight_icon]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

    )	

);



$wp_customize->add_control(

    'appointment_options[service_eight_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_eight',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_eight_title]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_eight_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_eight',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_eight_description]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_eight_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_eight',

        'type' => 'text',

    )

);

//Service eight link

$wp_customize ->add_setting (

	'appointment_options[service_eight_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_eight_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_eight',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_eight_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_eight_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_eight',

		)

	);



//nine service section

$wp_customize->add_section( 'service_section_nine' , array(

		'title'      => __('Service section nine', 'appointment'),

		'panel'  => 'appointment_service_options',

		'priority'   => 900,

   	) );





$wp_customize->add_setting(

    'appointment_options[service_nine_icon]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		

    )	

);



$wp_customize->add_control(

    'appointment_options[service_nine_icon]',

    array(

        'label' => __('Icon','appointment'),

        'section' => 'service_section_nine',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_nine_title]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_nine_title]',

    array(

        'label' => __('Title','appointment'),

        'section' => 'service_section_nine',

        'type' => 'text',

    )

);



$wp_customize->add_setting(

    'appointment_options[service_nine_description]',

    array(

        'default' => '',

		'capability'     => 'edit_theme_options',

		'sanitize_callback' => 'appointment_service_sanitize_html',

		'type' => 'option',

    )	

);

$wp_customize->add_control(

    'appointment_options[service_nine_description]',

    array(

        'label' => __('Description','appointment'),

        'section' => 'service_section_nine',

        'type' => 'text',

    )

);



//Service nine link

$wp_customize ->add_setting (

	'appointment_options[service_nine_link]',

	array( 

	'default' => '#',

	'capability'     => 'edit_theme_options',

	'sanitize_callback' => 'sanitize_text_field',

	'type' => 'option',

	) );



	$wp_customize->add_control (

	'appointment_options[service_nine_link]',

	array (  

	'label' => __('Link','appointment'),

	'section' => 'service_section_nine',

	'type' => 'text',

	) );



	$wp_customize->add_setting(

		'appointment_options[service_nine_link_target]',

		array('capability'     => 'edit_theme_options',

		'sanitize_callback' => 'sanitize_text_field',

		'type' => 'option',

		));



	$wp_customize->add_control(

		'appointment_options[service_nine_link_target]',

		array(

			'type' => 'checkbox',

			'label' => __('Open link in new tab','appointment'),

			'section' => 'service_section_nine',

		)

	);

	function appointment_service_sanitize_html( $input ) {

    return force_balance_tags( $input );

	}

}

//add_action( 'customize_register', 'appointment_service_customizer' );

?>