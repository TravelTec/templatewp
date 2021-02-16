<?php



get_header();

get_template_part('index','banner');

$the_query = new WP_Query ( array( 'post_type'=>'post' ) );

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

		<?php if ( $the_query->have_posts() ) { ?>
	<div class="container">

		<div class="row"> 

			<!-- Blog Area -->

			<div class="col-md-8" >

			<?php 

		while ( $the_query->have_posts() ) { 

			$the_query->the_post();  ?> 
			<div class="media">						

			<?php

			

			 if(!is_home() && !is_page_template('blog-masonry.php'))

			{

			appointment_aside_meta_content(); 

			}

			elseif(is_home())

			{

			appointment_aside_meta_content(); 

			}

			

			?>

		<div class="media-body">

				<?php // Check Image size for fullwidth template

				 appointment_post_thumbnail('','img-responsive'); 
				?>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		        <?php  

                // call editor content of post/page	

				the_content( __( 'Read More' , 'appointment' ) );

				wp_link_pages( );

		       ?>

		</div>

	</div>
	<br><br>

			<?php } ?> 

			</div>

			<!-- /Blog Area -->			

			

			<!--Sidebar Area-->

			<div class="col-md-4">

			<?php get_sidebar(); ?>	

			</div>

			<!--Sidebar Area-->

		</div>

	</div>
		<?php }else{  // show comments ?>
	<?php if ($_SERVER['REQUEST_URI'] == '/checkout/') { ?>
		<div class="container-fluid">
	<?php }else{ ?>
		<div class="container">
		<?php } ?>

		<div class="row">

			<!-- Blog Area -->

			<div class="col-md-12" style="padding: 0">

				<?php the_content(); ?>

				<!-- /Blog Pagination -->

			</div>

			<!-- /Blog Area --> 

		</div>
	<?php } ?>


	</div>

</div>

<!-- /Blog Section with Sidebar -->

<div class="clearfix"></div>

<?php get_footer(); ?>