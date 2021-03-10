<div id="post-<?php the_ID(); ?>" <?php 

	if(is_page_template('blog-left-sidebar.php') ) 

	{ 

	post_class('blog-lg-area-right'); 

	} 

	else if(is_page_template('blog-fullwidth.php') ) 

	{ 

		post_class('blog-lg-area-full');

	}

    

	else{

		post_class('blog-lg-area-left'); 

	}

	?>>

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
				<h3 class="display_responsivo_block" style="margin: 4px 0px;font-size: 18px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<h3 class="display_responsivo_none"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		        <?php  

                // call editor content of post/page	
		        appointment_post_thumbnail('','img-responsive');  
				the_excerpt( __( 'Read More' , 'appointment' ) ); ?>

				<a href="<?php the_permalink(); ?>" class="more-link">Leia mais »</a> 

		</div>

	</div>

</div>