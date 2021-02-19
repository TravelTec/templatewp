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

@media(min-width: 1650px){
	.featured-trip{
		    width: 1330px;
    margin: 0 auto;
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

<div class="page-builder"> 
	<?php if($_SERVER['REQUEST_URI'] == '/'){ ?>

	<?php }else{ ?>
	<br><br>
<?php } ?>

	<div class="container-fluid"> 

		<div class="row">

			<!-- Blog Area -->

			<div class="col-md-12" style="padding: 0">

			<?php if( $post->post_content != "" )

			{ ?>
				<?php if($_SERVER['REQUEST_URI'] == '/'){ ?>
			<div class="blog-lg-area-left" style="padding: 0">
				<?php }else{ ?>
	<div class="blog-lg-area-left">
<?php } ?>

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

	<br><br>

</div>

<script type="text/javascript">
	jQuery(".wpsm_service_b_row").addClass('container');
	jQuery(".wpsm_row").addClass('row');
</script>

<!-- /Blog Section with Sidebar -->

<?php get_footer(); ?>