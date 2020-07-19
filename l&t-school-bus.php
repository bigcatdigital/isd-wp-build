<?php
	/* Template Name: L&T School Bus */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'School Bus', 'More about Learning and Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)), $bcs = array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'School Bus' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">School Bus</h1>
				<p class="bc-feature-component__intro">Based on demand, ISD provides a private school bus service for students. Please see the morning and afternoon routes below.</p>
				
				<h2>Morning Bus Route</h2>
				<div class="bc-responsive-embed">
					<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/d/embed?mid=1AYxpojZZIJUrlSnROjuKDauJw72e4BjF&#038;hl=en"></iframe>
				</div>
				<h2>Afternoon Bus Route</h2>
				<div class="bc-responsive-embed">
					<iframe src="https://www.google.com/maps/d/embed?mid=1RuXyYBP5k8MsLCNkMreudyghEJrQsF_U" width="640" height="480"></iframe>
				</div>
				
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
		
	
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_inner_section_nav('More about Learning & Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)));
		get_global_CTA();
		get_footer();
	?>