<?php

/**

Template Name: Largura total com barra

*/

get_header(); 

get_template_part('index','banner');
?>

<!-- Blog Section with Sidebar -->

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
</style>

<div class="clearfix"></div>

<br><br><br><br>

<div class="page-builder"> 

	<div class="container-fluid"> 

		<div class="row">

			<!-- Blog Area -->

			<div class="col-md-12" style="padding: 0">

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

<script type="text/javascript">
	jQuery(".wpsm_service_b_row").addClass('container');
	jQuery(".wpsm_row").addClass('row');
</script>

<!-- /Blog Section with Sidebar -->

<?php get_footer(); ?>