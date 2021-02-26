<?php

/**

Template Name: Largura total com barra

*/

get_header(); 
get_template_part('index','banner');

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page' => 4,
    'paged'          => $paged,
);
$the_query = new WP_Query( $args );

global $wp_query;
// Put default query object in a temp variable
$tmp_query = $wp_query;
// Now wipe it out completely
$wp_query = null;
// Re-populate the global with our custom query
$wp_query = $the_query;
?>

<!-- Blog Section with Sidebar -->



<div class="page-builder"> 

	<br><br>

	
			<?php 
			$contador = 0;
		$totalpost = $the_query->found_posts;  ?>  

		<?php if ( is_home() ) { ?>
	<?php  
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="more-link"';
}
	?>
	<?php 
	$appointment_options=theme_setup_data(); 
	$current_options = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
	$link_color = str_replace("#", "", $current_options['link_color']);
	list($r, $g, $b) = sscanf($current_options['link_color'], "#%02x%02x%02x");
	$r = $r - 50;
	$g = $g - 25;
	$b = $b - 40; 
	 ?>
	<style type="text/css"> 
		a.more-link {
    background-color: #<?php echo $link_color; ?> !important;  
    color: #ffffff;
    text-shadow: 0 1px 0 rgb(0 0 0 / 10%);
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    font-family: 'Open Sans';
    font-weight: 600;
    transition: all 0.3s ease-in-out 0s;
    font-size: 14px;
    letter-spacing: 0.5px;
    line-height: 20px;
    padding: 13px 35px;
    margin: 12px 0 3px;
    text-align: center;
    vertical-align: middle;
    margin-right: 15px;
}
	</style>
			<div class="container"> 

		<div class="row">
			<!-- Blog Area -->

			<div class="col-md-8" >

			<?php 

		while ( $the_query->have_posts() ) { 

			$the_query->the_post();  
			 
	global $more;

				$more = 0;

				get_template_part( 'content',get_post_format());

				}

				// Previous/next page navigation.

				the_posts_pagination( array(

				'prev_text'          => '<i class="fa fa-angle-double-left"></i>',

				'next_text'          => '<i class="fa fa-angle-double-right"></i>',

				) );
			?> 

			</div>

			<!-- /Blog Area -->	

			<!--Sidebar Area-->

			<div class="col-md-4">

				<?php 

				if ( class_exists( 'WooCommerce' ) ) {

					

					if( is_account_page() || is_cart() || is_checkout() ) {

							get_sidebar('woocommerce'); 

					}

					else{ 

				

					get_sidebar(); 

					

					}

					

				}

				else{ 

				

					get_sidebar(); 

					

					} ?>

			</div>
		</div>
	</div>

			<!--Sidebar Area-->	
		<?php }else{ ?>
			<style type="text/css"> 
	.page-builder { margin: 0px; padding: 0; }
	.featured-trip .grid .col{
		width: 33.33% !important;
	}
	.featured-trip{
		padding: 0 90px;
	}
	@media (max-width: 767px){
	.featured-trip .grid .col{
		width: 100% !important;
	} 
	.featured-trip{
		padding: 0;
	}
}

	.has-text-align-left, .has-text-align-right, .has-text-align-center, .has-text-align-justify{
		margin: 0 40px 20px !important;
	}
	.blog-lg-area-left{
		text-align: left !important;
	}
	p, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .wp-block-buttons, .wp-block-image	{
		margin: 0 40px 20px !important;
	}
	p.has-background{
		margin: 0 !important;
	}
	
	.detail-item h3{
		margin: 0 !important;
	}
</style>

<?php if (strpos($_SERVER['REQUEST_URI'], "checkout")) { ?>
	<style type="text/css">
		@media (min-width: 768px){
		.row{
			margin: 0 35px;
		} 
	}
	p, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .wp-block-buttons, .wp-block-image{
		margin: 0 !important;
	}
	</style>
<?php } ?>
			<div class="container-fluid"> 

		<div class="row">
			<!-- Blog Area -->

			<div class="col-md-12" style="padding: 0">

			<?php if( $post->post_content != "" )

			{ ?>

			<div class="blog-lg-area-left" style="padding-right: 0">

			<?php if( have_posts()) :  the_post(); ?>		

			<?php the_content(); ?>

				<?php endif; ?>

			</div>

			<?php } ?>			

				<?php comments_template( '', true ); // show comments ?>

			</div>

			<!-- /Blog Area -->

		</div>

	</div>
		<?php } ?>

	<br><br>

</div>

<script type="text/javascript">
	jQuery(".wpsm_service_b_row").addClass('container');
	jQuery(".wpsm_row").addClass('row');
</script>

<!-- /Blog Section with Sidebar -->

<?php get_footer(); ?>