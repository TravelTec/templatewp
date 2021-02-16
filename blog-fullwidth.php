<?php

/**

Template Name: Modelo blog com coluna na esquerda

*/

get_header(); 

get_template_part('index','banner');

$the_query = new WP_Query ( array( 'post_type'=>'post' ) );
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

<?php if ( $the_query->have_posts() ) { ?>
	<div class="container">

		<div class="row"> 	

			

			<!--Sidebar Area-->

			<div class="col-md-4">

			<?php get_sidebar(); ?>	

			</div>

			<!--Sidebar Area-->

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

		</div>

	</div>
		<?php }else{  // show comments ?>
	<div class="container-fluid"> 

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

<script type="text/javascript">
	jQuery(".wpsm_service_b_row").addClass('container');
	jQuery(".wpsm_row").addClass('row');
</script>

<!-- /Blog Section with Sidebar -->

<?php get_footer(); ?>