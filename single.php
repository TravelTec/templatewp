<?php

get_header();

get_template_part('index','banner'); ?>

<!-- Blog Section Right Sidebar -->
 
<style type="text/css">
	@media (max-width: 767px) {
		.page-builder {
    margin: 0px;
    padding: 20px 0 40px !important;
}
		.page-title h1{
			font-size: 22px !important;
		}
		.page-breadcrumb{
			font-size: 12px !important;
		}
		.page-title-section .overlay{
			padding: 10px 0 48px !important;
		}
		.page-title-section{
			height: 73px !important;
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
<div class="page-builder">

	<div class="container">

		<div class="row">

		

			<!-- Blog Area -->

			<div class="<?php appointment_post_layout_class(); ?>" >

			<?php

		if(have_posts())

		{

		while(have_posts()) { the_post();

		get_template_part( 'content', get_post_format() ); ?>

				<!--Blog Author-->

				<div class="comment-title"><h3><?php _e('About the author','appointment'); ?></h3></div>

				<div class="blog-author">

					<div class="media">

						<div class="pull-left">

							<?php echo get_avatar( get_the_author_meta( 'ID') , 94); ?>

						</div>

						<div class="media-body">

							<h2> <?php the_author(); ?> <span> <?php $user = new WP_User( get_the_author_meta( 'ID' ) ); echo $user->roles[0];?> </span></h2>

							

							<p><?php the_author_meta( 'description' ); //the_author_description(); ?> </p>

							<ul class="blog-author-social">

							   <?php			

				$google_profile = get_the_author_meta( 'google_profile' );

				if ( $google_profile && $google_profile != '' ) {

					echo '<li class="googleplus"><a href="' . esc_url($google_profile) . '" rel="author"><i class="fa fa-google-plus"></i></a></li>';

				}

								

				$twitter_profile = get_the_author_meta( 'twitter_profile' );

				if ( $twitter_profile && $twitter_profile != '' ) {

				

					echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';

				}

								

				$facebook_profile = get_the_author_meta( 'facebook_profile' );

				if ( $facebook_profile && $facebook_profile != '' ) {

					echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';

				}

								

				$linkedin_profile = get_the_author_meta( 'linkedin_profile' );

				if ( $linkedin_profile && $linkedin_profile != '' ) {

					   echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';

				}

				$skype_profile = get_the_author_meta( 'skype_profile' );

				if ( $skype_profile && $skype_profile != '' ) {

					   echo '<li class="skype"><a href="' . esc_url($skype_profile) . '"><i class="fa fa-skype"></i></a></li>';

				}

				?>

							</ul>

						</div>

					</div>	

				</div>

			<!--/Blog Author-->

			<?php } ?>

			<?php wp_link_pages(); ?>

			<?php comments_template('',true); ?>	

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

</div>

<!-- /Blog Section Right Sidebar -->

<?php get_footer(); ?>