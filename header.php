<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php 

	$appointment_options=theme_setup_data(); 

	$header_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options);  

	$exibe_title = get_header_textcolor(); 

	if ($exibe_title === 'blank') {  }else{ ?>
		<?php $descricao = (empty(get_bloginfo( 'description' )) ? '' : ' - '.get_bloginfo( 'description' )); ?>
		<title><?php echo get_bloginfo( 'name' ); ?> <?php echo $descricao ?></title>
	
	<?php 

	}

	if($header_setting['upload_image_favicon']!=''){ ?> 

	<link rel="icon" href="<?php  echo $header_setting['upload_image_favicon']; ?>" sizes="32x32" />
<link rel="icon" href="<?php  echo $header_setting['upload_image_favicon']; ?>" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php  echo $header_setting['upload_image_favicon']; ?>" />
<meta name="msapplication-TileImage" content="<?php  echo $header_setting['upload_image_favicon']; ?>" />

	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	</head>

	<?php 

	if($header_setting['layout_selector'] == "boxed")

	{ $class="boxed"; }

	else

	{ $class="wide"; }

	?>

<body <?php body_class($class); ?> >

<div id="wrapper">

<?php if ( get_header_image() != '') {?>

<div class="header-img">

	<div class="header-content">

		<?php if($header_setting['header_one_name'] != '') { ?>

		<h1><?php echo $header_setting['header_one_name'];?></h1>

		<?php }  if($header_setting['header_one_text'] != '') { ?>

		<h3><?php echo $header_setting['header_one_text'];?></h3>

		<?php } ?>

	</div>

	<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

</div>

<?php } ?>

<?php if( is_active_sidebar('home-header-sidebar_left') || is_active_sidebar('home-header-sidebar_center') || is_active_sidebar('home-header-sidebar_right') ) { ?>

<section class="top-header-widget">

	<div class="container">

		<div class="row">

			<div class="col-sm-4">

			<div id="top-header-sidebar-left">

			<?php if( is_active_sidebar('home-header-sidebar_left') ) { ?>

			<?php  dynamic_sidebar( 'home-header-sidebar_left' ); ?>

			<?php } ?>

			</div>

			</div>

			<div class="col-sm-4">

			<div id="top-header-sidebar-center">

			<?php if( is_active_sidebar('home-header-sidebar_center') ) { 

			 dynamic_sidebar( 'home-header-sidebar_center' );

			 } ?>

			</div>

			</div>

			<div class="col-sm-4">

			<div id="top-header-sidebar-right">

			<?php  if( is_active_sidebar('home-header-sidebar_right') ) { ?>

			<?php dynamic_sidebar( 'home-header-sidebar_right' ); ?>

			<?php } ?>

			</div>

			</div>

		</div>	

	</div>

</section>

<?php } ?>

<!--Logo & Menu Section-->	

<nav class="navbar navbar-default" style="background: <?=(empty($header_setting['header_skin_color']) ? '#ffffff' : $header_setting['header_skin_color'])?>">

	<div class="container">

		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="navbar-header"> 
					<?php $site_description = get_bloginfo( 'description', 'display' );  ?>

					<?php $exibir_logo = $header_setting['text_title']; ?>
					<?php $exibir_texto_logo = $header_setting['enable_header_logo_text']; ?>
 
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="padding: 0">

					<?php if ($exibir_logo == 1 && !empty($header_setting['upload_image_logo'])) { ?>
					<img class="img-responsive" src="<?php echo $header_setting['upload_image_logo']; ?>" style="height:<?php echo $header_setting['height']; ?>px; width:<?php echo $header_setting['width']; ?>px;"/>
				<?php } ?> 
					 	<?php if ($exibir_texto_logo == 1 && $exibir_logo != 1) {  ?>
					 	<?php echo "<div class=appointment_title_head style=''>" . get_bloginfo( 'name' ). " ".$descricao."</div>"; }else if ($exibir_texto_logo == 1 && $exibir_logo == 1) { ?> 
					 		<?php echo "<div class=appointment_title_head style='font-size:15px'>" . get_bloginfo( 'name' ). " ".$descricao."</div>"; } ?> 

				</a> 

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

				<span class="sr-only"><?php echo 'Toggle navigation'; ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

			</button>

		</div>

		

		<?php 

				$facebook = $header_setting['social_media_facebook_link'];

				$twitter = $header_setting['social_media_twitter_link'];

				$linkdin = $header_setting['social_media_linkedin_link'];

				$googleplus = $header_setting['social_media_googleplus_link'];

				$instagram = $header_setting['social_media_instagram_link'];

				$skype = $header_setting['social_media_skype_link'];

				$youtube = $header_setting['social_media_youtube_link'];

				

				

				$social = '<ul id="%1$s" class="%2$s">%3$s';

				if($header_setting['header_social_media_enabled'] == 0 )

				{

					$social .= '<ul class="head-contact-social">';



					if($header_setting['social_media_facebook_link'] != '') {

					$social .= '<li class="facebook"><a href="'.$facebook.'"';

						if($header_setting['facebook_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-facebook"></i></a></li>';

					}

					if($header_setting['social_media_twitter_link']!='') {

					$social .= '<li class="twitter"><a href="'.$twitter.'"';

						if($header_setting['twitter_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-twitter"></i></a></li>';

					

					}

					if($header_setting['social_media_linkedin_link']!='') {

					$social .= '<li class="linkedin"><a href="'.$linkdin.'"';

						if($header_setting['linkedin_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-linkedin-in"></i></a></li>';

					}

					

					if($header_setting['social_media_googleplus_link']!='') {

					$social .= '<li class="googleplus"><a href="'.$googleplus.'"';

						if($header_setting['googleplus_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-google-plus-g"></i></a></li>';

					}

					

					if($header_setting['social_media_instagram_link']!='') {

					$social .= '<li class="instagram"><a href="'.$instagram.'"';

						if($header_setting['instagram_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-instagram"></i></a></li>';

					}

					

					if($header_setting['social_media_skype_link']!='') {

					$social .= '<li class="skype"><a href="'.$skype.'"';

						if($header_setting['skype_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-skype"></i></a></li>';

					}

					

					

					if($header_setting['social_media_youtube_link']!='') {

					$social .= '<li class="youtube"><a href="'.$youtube.'"';

						if($header_setting['youtube_media_link_target']==1)

						{

						 $social .= 'target="_blank"';

						}

					$social .='><i class="fab fa-youtube"></i></a></li>';

					}

					

					if ( class_exists( 'WooCommerce' ) ) {

					global $woocommerce; 

					$social .= '<li class="cart-icon">'; 

					

					$social .= '<a href="'.$woocommerce->cart->get_cart_url().'" >';

					

					if ($woocommerce->cart->cart_contents_count == 0){

						$social .= '<img src="'.get_stylesheet_directory_uri().'/images/empty.png" alt="empty" height="25" width="25">';

				   }else{

					   $social .= '<img src="'.get_stylesheet_directory_uri().'/images/full.png" alt="full" height="25" width="25">';

					   }

					   

					   $social .= '</a>';

					

					$social .= '<a class="cart-contents" href="'.$woocommerce->cart->get_cart_url().'" >

					'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'appointment'), $woocommerce->cart->cart_contents_count).'</a>';

					

					$social .= '</li>';

					}

					



					$social .='</ul>'; 

					

			}

			$social .='</ul>'; 

		

		?>



		<!-- Collect the nav links, forms, and other content for toggling -->

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<?php wp_nav_menu( array(  

				'theme_location' => 'primary',

				'container'  => '',

				'menu_class' => 'nav navbar-nav navbar-right',

				'fallback_cb' => 'webriti_fallback_page_menu',

				'items_wrap'  => $social,

				'walker' => new webriti_nav_walker()

				 ) );

				?>

		</div><!-- /.navbar-collapse -->

	</div><!-- /.container-fluid -->

</nav>	

<!--/Logo & Menu Section-->	

<div class="clearfix"></div>

<?php $color = $header_setting['background_color']; ?> 
<?php $color_page = $header_setting['page_builder_color']; ?>

<?php if($_GET['page_id'] == 11 || $_SERVER['REQUEST_URI'] == '/checkout/'){ ?> 

	<style type="text/css">
	.page-builder{
		background-color: #f7f7f7 !important;
	}
</style>

	<?php }else{ ?>

<style type="text/css">
	body{
		background-color: <?=(empty($color) ? '#ffffff' : $color)?> !important;
	}
	.page-builder{
		background-color: <?=(empty($color_page) ? '#ffffff' : $color_page)?> !important;
	}
</style>
<?php } ?> 

<?php if($_SERVER['REQUEST_URI'] == '/'){ ?>

<?php }else{ ?>
	<style type="text/css">
		.featured-trip .grid .col{
			width: 100% !important;
		}
		.featured-trip .container{
			width: 100% !important;
		}
	</style>
<?php } ?> 

<style type="text/css">
	@media (max-width: 668px){
		.featured-trip .grid .col{
			width: 100% !important;
		}
	} 
	.footer-sidebar li a, .custom-html-widget{
		color: <?=(empty($header_setting['footer_text_color']) ? '#ffffff' : $header_setting['footer_text_color'])?>;
	}
	.navbar-default .navbar-nav > li > a{
		color: <?=(empty($header_setting['header_item_color']) ? '#1b1b1b' : $header_setting['header_item_color'])?>;
	}
	.appointment_title_head{
		color: <?=(empty($header_setting['header_item_color']) ? '#1b1b1b' : $header_setting['header_item_color'])?> !important;
	}
</style> 