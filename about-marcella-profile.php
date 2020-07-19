<?php
	/* Template Name: About - Marcella Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Marcella Tesoriero', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Marcella Tesoriero' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile isd-staff-profile--no-photo">
				<div class="bc-gr-feature__text ">
					<h1 class="bc-inner-page-content__heading">Marcella Tesoriero</h1>
					<h2>Kindergarten Class Teacher</h2>
					<p class="bc-feature-component__intro">Marcella comes from Sydney, Australia and holds a Bachelors in Early Childhood and Primary Education.</p>
					<p>She had the unique experience of attending  IB schools during her youth and had such a wonderful experience that she returned to the environment as a teacher. She has experience teaching all over the world including Australia and London.</p> 
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>