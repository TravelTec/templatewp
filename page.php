<?php



get_header();

get_template_part('index','banner');

?>

<style type="text/css">
	.featured-trip .grid .col{
		width: 33.33% !important;
	}
	.wpsm_service_b_row{
		width: 100% !important;
	}

	.justify-content-center{
	    justify-content: center!important;
	} 
	.row {
	    margin-right: -15px;
	    margin-left: -15px;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	    margin-right: -15px;
	    margin-left: -15px;
	}
	@media (min-width: 768px){
		.row{
			margin: 0 35px;
		}
		div#n2-ss-2 .n2-ss-slider-1{
			margin: 0 138px;
		}
	}

	@media (max-width: 767px){
	.featured-trip .grid .col{
		width: 100% !important;
	}
	div#n2-ss-2 .n2-ss-slider-1{
		padding: 0 15px;
	}
}
</style>

<div class="clearfix"></div>

<!-- Blog Section with Sidebar -->

<div class="page-builder">

	<?php if ($_SERVER['REQUEST_URI'] == '/checkout/') { ?>
		<div class="container-fluid">
	<?php }else{ ?>
		<div class="container">
		<?php } ?>

		<div class="row justify-content-center">

		 <!-- Blog Area -->

			<div class="col-md-12">

				<?php the_content(); ?>

				<!-- /Blog Pagination -->

			</div>

			<!-- /Blog Area --> 

		</div>

	</div>

</div>

<!-- /Blog Section with Sidebar -->

<div class="clearfix"></div>

<?php get_footer(); ?>