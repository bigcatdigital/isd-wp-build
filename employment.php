<?php
	/* Template Name: About - Employment */ 
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<?php get_inner_site_header('About ISD', 'Employment Opportunities', '', '', $bcs = array('Homepage' => home_url(), 'About ISD' => get_permalink(13), 'Employment Opportunities' => ''), 'about-isd--reverse.svg#about'); ?>
	
	<section class="bc-feature-component">     
		<article class="bc-feature-component__content">
			<div class="bc-feature-component__content__text-content">
				
				
					<h1 class="bc-inner-page-content__heading">Employment Opportunities</h1>
					<p>If you are interested in working at ISD, <a href="https://docs.google.com/forms/d/e/1FAIpQLSewBsCadgtogQTY4sg3KS6SSQWgFQ-dVj6eeqQh-CcIrjNgyQ/viewform">please click here to complete our application</a>.</p>
					
					<p>If you are interested in interning at ISD, <a href="https://docs.google.com/forms/d/e/1FAIpQLSc75zlzE1_3QKOolt-4edHYbXYFa-fILgVtkwQrhm_3i92FfQ/viewform">please click here to complete our application</a>.</p>	
				
			</div><!-- // .bc-feature-component__content__text-content -->
		</article><!-- //  .bc-feature-component__content -->
	</section><!-- // .bc-feature-component -->

	<?php  
		get_global_CTA();
		get_footer();
	?>