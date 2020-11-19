<?php
	/* Template Name: Inner page template */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body> 
	<!-- Inner page template -->
	<?php 
		while (have_posts()) {
			the_post(); 
			get_inner_site_header(get_field('page_title'), get_field('page_subtitle'), '', '', $bcs = array('Homepage' => home_url(), 'Inner page' => ''), 'about-isd--reverse.svg#about'); 
		}
	?>
	<!-- Page content -->
	
	<?php 
		while (have_posts()) {
			the_post();
			the_content();
			wp_reset_postdata();
			if (get_field('content-shortcodes')) { 
				$shortcodes = get_field('content-shortcodes');
				$pattern = get_shortcode_regex();
				preg_match_all('/' . $pattern . '/s', $shortcodes, $matches);
				//var_dump($matches);
				foreach ($matches[0] as $shortcode) {
					$o = '';
					$o .= (substr(do_shortcode($shortcode), 0, 1 ) !== '[') ? do_shortcode($shortcode) : '' ;
					if (strcmp($o, '') === 0 || strcmp($o, '-1') === 0) {
						continue;
					} else {
						echo $o;	
					}
					
				}
				
			}//end if
			wp_reset_postdata();
		}//end while 
	?>
	<section class="content-wrap">
			
				
		</section>
	<!-- // Frequently asked questions -->
	<?php  
		get_global_CTA();
		get_footer();
	?>