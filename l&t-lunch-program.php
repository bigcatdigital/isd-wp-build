<?php
	/* Template Name: L&T Lunch Program */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Learning and Teaching', 'Catered Lunch Program', 'More about Learning and Teaching', array('Daily Schedule' => get_permalink(90), 'Class Groupings' => get_permalink(94), 'Academic Calendar' => get_permalink(100), 'After School Programme' => get_permalink(102), 'School Bus' => get_permalink(104)), $bcs = array('Homepage' => home_url(), 'Learning & Teaching' => get_permalink(86), 'Catered Lunch Program' => ''), 'learning-icon-reverse.svg#learning-icon'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-inner-page-content__heading">Catered Lunch Program</h1>
				<p class="bc-inner-page-content__intro">We offer our students and families two lunchtime options.  Students may bring a lunch from home or take part in our catered lunch programme.</p>
				<p>If students bring a lunch from home we have the facilities in our canteen to re-heat meals.</p>
				<p>Our catered lunches are provided by Moon &amp; Spoon.  Moon &amp; Spoon is a specialist catering company dedicated to the provision of healthy and delicious dishes for children in Ireland. Dietician designed, student meals are varied and represent an international palette.</p>
				<p>Our lunch menu is provided to ISD families on a monthly basis. Catered lunches incur additional charges to tuition fees.</p>
				<p>Please see an example Catered Lunch Menu below:</p>
				<div class="bc-responsive-embed">
					<iframe src="https://docs.google.com/document/d/e/2PACX-1vSpc-9UjU2hnTaH6F8YA4Kq7uCgx3QDf8mL2frDbXQ4kxLMsVvGZrzJ1_facfyFpuVmocy-rHys8ccM/pub?embedded=true" frameborder="0" width="100%" height="697" marginheight="0" marginwidth="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
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