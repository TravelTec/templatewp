<?php

/**

Template Name: Modelo blog com coluna na esquerda

*/

get_header();

get_template_part('index','banner'); ?>

<!-- Blog Section with Sidebar -->
<style type="text/css">
	.featured-trip .grid .col{
		width: 33.33% !important;
	}

	.sidebar-widget .featured-trip .grid .col{
		width: 100% !important;
	}
	.wpsm_service_b_row{
		width: 100% !important;
	}
	@media (max-width: 767px){
	.featured-trip .grid .col{
		width: 100% !important;
	}
}
</style>

<div class="page-builder">

	<div class="container">

		<div class="row">	

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

			<!--Sidebar Area-->

			<!-- Blog Area -->

			<?php 

				if ( class_exists( 'WooCommerce' ) ) {

					

					if( is_account_page() || is_cart() || is_checkout() ) {

							echo '<div class="col-md-'.( !is_active_sidebar( "woocommerce" ) ?"12" :"8" ).'">'; 

					}

					else{ 

				

					echo '<div class="col-md-'.( !is_active_sidebar( "sidebar-primary" ) ?"12" :"8" ).'">'; 

					

					}

					

				}

				else{ 

				

					echo '<div class="col-md-'.( !is_active_sidebar( "sidebar-primary" ) ?"12" :"8" ).'">';

					

					} ?>

			

			

			

			<?php if( $post->post_content != "" )

			{ ?>

			<div class="blog-lg-area-left">

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

</div>

<!-- /Blog Section with Sidebar -->

<?php get_footer(); ?>