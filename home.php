
<?php

		if('page' == get_option('show_on_front')){ ?>

			<style type="text/css">
				.page-title-section{
					display: none !important;
				}
			</style>
		<?php

			get_template_part('index');}

		else

		{

		$current_option = wp_parse_args( get_option('appointment_options',array()),theme_setup_data()); ?>

		<style type="text/css">
				.page-title-section{
					display: none !important;
				}
			</style>

		<?php

		get_header(); 

		$data =is_array($current_option['front_page_data']) ? $current_option['front_page_data'] : explode(",",$current_option['front_page_data']);		

		if($data) 

		{  

		foreach($data as $key=>$value)

			{		

				//****** Orange Sidebar Area ********

					get_sidebar('orange');

				switch($value) 

				{ 
					 
  

					

				}

			}

		//} 	

	get_footer(); 

	} }

?>