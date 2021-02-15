<?php

/**

Template Name: Largura total sem barra

*/

get_header(); ?>

<!-- Blog Section with Sidebar -->

<style type="text/css">
	.page-title-section{
		display: none !important;
	}
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
</style>

<div class="page-builder"> 

	<div class="container-fluid"> 

		<div class="row">

			<!-- Blog Area -->

			<div class="col-md-12" style="padding: 0">

			<?php if( $post->post_content != "" )

			{ ?>

			<div class="blog-lg-area-left" style="padding: 0">

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

<script type="text/javascript">
	jQuery(".wpsm_service_b_row").addClass('container');
	jQuery(".wpsm_row").addClass('row');
</script>

<!-- /Blog Section with Sidebar -->

<?php get_footer(); ?>