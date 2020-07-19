<?php
	/* Template Name: Admissions - Transition Support */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('Admissions', 'Transition Support', 'More about admissions', array('Transition Support' => '' . get_permalink(176) . '', 'Fees' => '' . get_permalink(57) . '', 'Frequently Asked Questions' => '' . get_permalink(22) . ''), array('Homepage' => home_url(), 'Admissions' => get_permalink(20), 'Transition Support' => ''), 'admissions-icon.svg#export'); ?>
	<!-- Transition support -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature">
				<picture class="bc-gr-feature__media">
					<img src="http://localhost/isd-wordpress/wp-content/themes/isd-twenty-twenty/media/fair-fun-2x3.jpg" alt="Support for your transition to Dublin">
				</picture>
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Transition Support</h1>
					<p class="bc-intro-para">ISD prides itself on its strong sense of community. From your initial expression of interest we provide you with support. We adapt our communication to suit your needs and try to provide support through mother tongues.</p>
					<p>As a new family, you will receive a comprehensive Dublin Information Pack with resources on a wide range of information. A Welcome Back to School event begins the academic year and settling in parent-teacher conferences take place within one month of the school’s commencement.</p>	
					<p>Communication is key at ISD. The School App keeps you updated of student work in real time. We maintain an open door policy and welcome the opportunity to meet with you at any stage should you require assistance.</p>			
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Transition support -->
	<?php  
		get_inner_section_nav('More About Admissions', array('Transition Support' => '' . get_permalink(176) . '', 'Fees' => '' . get_permalink(57) . '', 'Frequently Asked Questions' => '' . get_permalink(22) . ''));
		get_global_CTA();
		get_footer();
	?>