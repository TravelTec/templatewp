<?php

get_header(); 

?>

<!-- Page Title Section -->

<style type="text/css">
	@media (max-width: 767px) {
		.page-builder {
    margin: 0px;
    padding: 20px 0 40px !important;
}
		.page-title h1{
			font-size: 20px !important;
		}
		.page-breadcrumb{
			font-size: 12px !important;
		}
		.page-title-section .overlay{
			padding: 10px 0 48px !important;
		}
		.page-title-section{
			height: 95px !important;
		}
		.media-body{
			float: left !important;
    display: contents !important;
		}
		.blog-lg-area-left {
    margin: 0px;
    padding: 0px 0px 60px 0px !important;
}
		.blog-post-date-area{
			height: 41px !important;
    position: absolute;
    display: contents;
    width: 100%;
		}
		.blog-post-date-area .date{
			    color: #ffffff;
    font-family: 'Open Sans';
    font-weight: 400;
    font-size: 18px !important;
    padding: 11px 8px 10px 8px !important;
    line-height: 13px;
    text-align: left;
        width: 74% !important;
    /* position: absolute; */
    float: left !important;
    height: auto; 
		}
		.blog-post-date-area .month-year {
    color: #ffffff;
    display: contents;
    font-family: 'Open Sans';
    font-weight: 400;
    font-size: 18px !important;
    line-height: 20px;
    padding: 5px 0 0;
    text-align: center; 
}
.blog-post-date-area .comment {
	width: 26%;
    /* position: absolute; */
    float: left;
    height: 41px;
    background-color: #2a2a2a;
    color: #d0d0d0;
    font-family: 'Open Sans';
    font-weight: 600;
    font-size: 15px;
    line-height: 20px;
    text-align: center;
    padding: 11px 0;
}
.display_responsivo_none{
	display: none !important;
	}
	.display_responsivo_block{
		display: block !important;
	}
	.blog-lg-area-left h3, .blog-lg-area-right h3, .blog-lg-area-full h3{
		line-height: 48px !important;
	}
}
.display_responsivo_none{
	display: block;
	}
	.display_responsivo_block{
		display: none;
	}

</style>

<div class="page-title-section">		

	<div class="overlay">

		<div class="container">

			<div class="row">

				<div class="col-md-6">

					<div class="page-title">

						<h1>

						<?php 

							$appointment_options = theme_setup_data();

							$current_options = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );

							$banner_title_category = $current_options['banner_title_category']; 

						

							echo $banner_title_category;

							echo  ' ';

							echo single_cat_title("", false); 

						?>

						</h1>

					</div>

				</div>

				<div class="col-md-6">

					<ul class="page-breadcrumb">

						<?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs();?>

					</ul>

				</div>

			</div>

		</div>	

	</div>

</div>

<!-- /Page Title Section -->



<!-- Page Seperator --><!--<div class="page-seperator"></div>--><!-- /Page Seperator -->

<div class="clearfix"></div>



<!-- /Page Title Section ---->

<div class="page-builder">

	<div class="container">

		<div class="row">

			<!-- Blog Area -->

			<div class="<?php appointment_post_layout_class(); ?>" >

			  <?php 

				if ( have_posts() ) :

					// Start the Loop.

					while ( have_posts() ) : the_post();

						// Include the post format-specific template for the content. get_post_format

						get_template_part( 'content',get_post_format() );

					endwhile;

				endif;

				// Previous/next page navigation.

				the_posts_pagination( array(

				'prev_text'          => '<i class="fa fa-angle-double-left"></i>',

				'next_text'          => '<i class="fa fa-angle-double-right"></i>',

				) );

				?>

			<!-- /Blog Pagination -->

			</div>

			<!--Sidebar Area-->

			<div class="col-md-4">

				<?php get_sidebar(); ?>

			</div>

			<!--Sidebar Area-->

		</div>

	</div>

</div>

<?php get_footer(); ?>