<?php

/**

Template Name: Modelo blog com coluna na direita

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
 

<div class="page-builder"> 

<div class="clearfix"></div>

<br><br><br>

<?php if ( $the_query->have_posts() ) { ?>
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

				

		       ?>

		</div>

	</div>
	<br><br>

			<?php 

				}
				previous_posts_link( '&laquo; Mais recentes' );
    next_posts_link( 'Mais antigos &raquo;', $the_query->max_num_pages );
    wp_reset_postdata();

			?> 

			</div>

			<!-- /Blog Area -->			

			

			<!--Sidebar Area-->

			<div class="col-md-4">

			<?php get_sidebar(); ?>	

			</div>

			<!--Sidebar Area-->

		</div>
		<br><br>
	</div>
	<?php // Restore original query object
$wp_query = null;
$wp_query = $tmp_query; ?>
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