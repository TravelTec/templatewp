<?php	

add_action( 'widgets_init', 'appointment_widgets_init');

function appointment_widgets_init() {



/*sidebar*/

register_sidebar( array(

		'name' => __( 'Sidebar widget area', 'appointment' ),

		'id' => 'sidebar-primary',

		'description' => __('Sidebar widget area', 'appointment' ),

		'before_widget' => '<div class="sidebar-widget">',

		'after_widget' => '</div>',

		'before_title' => '<div class="sidebar-widget-title"><h3>',

		'after_title' => '</h3></div>',

	) );

register_sidebar( array(
		'name' => esc_html__( 'Área esquerda do widget de rodapé', 'spicepress' ),
		'id' => 'footer_widget_area_left',
		'description' => esc_html__( 'Footer widget left area', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header"><h3 class="widget-title">',
		'after_title' => '</h3><span></span></div>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Área central do widget de rodapé', 'spicepress' ),
		'id' => 'footer_widget_area_center',
		'description' => esc_html__( 'Footer widget central area', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header"><h3 class="widget-title">',
		'after_title' => '</h3><span></span></div>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Área direita de widget do rodapé', 'spicepress' ),
		'id' => 'footer_widget_area_right',
		'description' => esc_html__( 'Footer widget right area', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header"><h3 class="widget-title">',
		'after_title' => '</h3><span></span></div>',
	) );

	

//Header sidebar

	register_sidebar( array(

		'name' => __( 'Top header left area', 'appointment' ),

		'id' => 'home-header-sidebar_left',

		'description' => __('Top header left area', 'appointment' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );

	

	register_sidebar( array(

		'name' => __( 'Top header center area','appointment' ),

		'id' => 'home-header-sidebar_center',

		'description' => __( 'Top header center area', 'appointment' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );

	

	register_sidebar( array(

		'name' => __( 'Top header right area', 'appointment' ),

		'id' => 'home-header-sidebar_right',

		'description' => __( 'Top header right area', 'appointment' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );	

//orange sidebar 
	

	

	register_sidebar( array(

	'name' => __( 'WooCommerce sidebar widget area', 'appointment' ),

	'id' => 'woocommerce',

	'description' => __( 'WooCommerce sidebar widget area', 'appointment' ),

	'before_widget' => '<div class="sidebar-widget" >',

	'after_widget' => '</div>',

	'before_title' => '<h3 class="widget-title">',

	'after_title' => '</h3>'

	) );



}	                     

?>