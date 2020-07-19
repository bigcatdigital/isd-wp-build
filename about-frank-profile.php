<?php
	/* Template Name: About - Frank Profile */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Frank Cooney', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Frank Cooney' => ''), 'about-isd--reverse.svg#about'); ?>
	<!-- FAQs -->
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-gr-feature isd-staff-profile isd-staff-profile--no-photo">			
				<div class="bc-gr-feature__text">
					<h1 class="bc-inner-page-content__heading">Frank Cooney</h1>
					<h2>Director</h2>
					<p class="bc-feature-component__intro">Andy has worked as an international educator for over 25 years for IB schools in Argentina, Italy, Spain and the UK where he was the Director of the International School of London. He previously worked for the IB as Head of the Diploma Programme in The Netherlands and Director of School Services in Washington DC.</p>
					<p>Andy has taught Geography, Drama and English throughout his career and also trained as a PYP workshop leader and visitor for the IB.</p> 
					<p>Andy has a Bachelor of Arts in Geography and History, a PGCE and is taking a sabbatical year to complete his Masters in Education at Trinity College.</p>
					<p>Andy is fluent in Spanish and while in Dublin, has been a consultant supporting bilingual schools in Spain.</p>
				</div>
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>