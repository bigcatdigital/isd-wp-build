<?php
	/* Template Name: About - Ann Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Ann Hinds', '', '', $bcs = array('Homepage' => get_permalink(13), 'About ISD' => get_permalink(86), 'Ann Hinds' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile isd-staff-profile--no-photo">			
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Ann Hinds</h1>
					<h2>Director</h2>
					<p class="bc-feature-component__intro">Ann has over 20 years experience of leading, both as HRD in stellar organisations and professional services firms and as a main board director. </p>
					<p>Her reputation for being creative and result orientated is demonstrated by her track record of developing strategy, managing issues and solving complex problems in leading organisations.</p> 
					<p>Her ability to build and her concern for the management of relationships along with a deep understanding of the issues that impact leadership has allowed her to build an outstanding reputation in her field.</p>
					<p>Ann has a Masters of Business in Strategic Management.</p>
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>