<?php
	/* Template Name: L&T School Uniform */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'School Uniform', '', '', $bcs = array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'School Uniform' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">School Uniform</h1>
				<p class="bc-feature-component__intro">There is no required school uniform at ISD.  We encourage students to express themselves through their clothing.  We guide children to wear sensible clothing given the nature of the school day activities (e.g. painting) and weather (e.g. rain).</p>
				<p>On Physical Education days, children are encouraged to wear trainers and comfortable fitness apparel.</p>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
		
	
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>