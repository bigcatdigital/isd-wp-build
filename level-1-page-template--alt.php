<?php
	/* Template Name: Level 1 page template - alt */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body class="bc-feature-page"> 
	<?php 
	 echo '<?xml version="1.0" encoding="utf-8"?>'
	?>
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 0 0" class="bc-svg-defs" xml:space="preserve">
				<defs>
					<linearGradient id="isd-rainbow-grad" class="bc-svg-defs__rainbow-grad" gradientUnits="userSpaceOnUse" x1="0" y1="25.5" x2="1440" y2="25.5">
						<stop offset="0" 		class="isd-rainbow-grad__stop1"style="stop-color:#05D1D1"/>
						<stop offset="0.25" class="isd-rainbow-grad__stop2"style="stop-color:#6881DB"/>
						<stop offset="0.5" 	class="isd-rainbow-grad__stop3"style="stop-color:#D02CE5"/>
						<stop offset="0.75" class="isd-rainbow-grad__stop3"style="stop-color:#F2EF11"/>
						<stop offset="1" 		class="isd-rainbow-grad__stop5"style="stop-color:#3B857E"/>
					</linearGradient>	
					<linearGradient id="linear-gradient" class="bc-svg-defs__linear-gradient" viewBox="0 0 100 100" gradientTransform="rotate(135)">
						<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/> 
						<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
					</linearGradient>
					<linearGradient id="linear-gradient--shade" class="bc-svg-defs__linear-gradient--shade" viewBox="0 0 100 100" gradientTransform="rotate(135)">
						<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/> 
						<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
					</linearGradient>
					<linearGradient id="linear-gradient--orange" class="bc-svg-defs__linear-gradient--orange" viewBox="0 0 100 100" gradientTransform="rotate(135)">
						<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/> 
						<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
					</linearGradient>
				</defs>
			</svg>
	<?php get_site_header(); ?>
	
	<?php while (have_posts()) {
			the_post();
			the_content();
		}//end while have_posts();
		wp_reset_postdata();
		if (get_field('show-feature-cta') && get_field('show-feature-cta') !== 'no') {
			get_global_CTA();	
		}
		get_footer();
		if (get_field('show-show-to-top') && get_field('show-show-to-top') === 'yes') {
			
			get_floating_section_nav(); 	
		}
	?>
