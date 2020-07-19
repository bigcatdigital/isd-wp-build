<?php
	/* Template Name: About - Pedro Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Pedro Pérez Laplaza', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Pedro Pérez Laplaza' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile">
				<picture class="bc-gr-feature__media">
						<img src="<?php echo get_theme_file_uri('/media/people/pedro-perez-laplaza.jpg'); ?>" alt="Pedro">
				</picture>
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Pedro Pérez Laplaza</h1>
					<h2> Grade 3,4 Class Teacher</h2>
					<p class="bc-feature-component__intro">Pedro holds a Bachelors in Primary and Pre-Primary Education. He came to ISD from Barcelona, Spain, first as an intern with the Erasmus Programme. </p>
					<p>Once he discovered the IB PYP at ISD, he was passionate to pursue it within his teaching career.  He is an enthusiastic and proactive educator willing to help all students with their unique learning processes.</p> 
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>