<?php
	
	function get_site_header($t = 'Welcome to ISD') {
		global $title;
		$title = $t;
		include 'site-header.php';	
	}
	function get_inner_site_header($innert = 'Inner Page Template', $innersubt = '', $nav_title = '', $nav_links, $bcs = array('Homepage' => 'homepage.php', 'Level #1' => 'javascript:void(0)', 'Level #2' => 'javascript:void(0)'), $icon = 'families.svg#familiy_3') {
		global $innertitle;
		$innertitle = $innert;
		global $innersubtitle;
		$innersubtitle = $innersubt;
		global $headericon; 
		$headericon = 'media/svg/images/' . $icon;
		global $breadcrumbs;
		$breadcrumbs = $bcs;
		
		global $inner_nav_title;
		global $inner_nav_links;
		$inner_nav_title = $nav_title;
		$inner_nav_links = $nav_links;
		
		include 'inner-site-header.php';	
	}
	function get_inner_section_nav($sect_nav_title = 'Inner section navigation', $sect_nav_links = array('Section link#1' => 'javascript:void(0)', 'Section link#2' => 'javascript:void(0)', 'Section link#3' => 'javascript:void(0)', 'Section link#4' => 'javascript:void(0)')) {
		global $inner_sect_nav_title;
		global $inner_sect_nav_links;
		$inner_sect_nav_title = $sect_nav_title;
		$inner_sect_nav_links = $sect_nav_links;
		include 'inner-section-nav.php';	
	}
	function get_floating_section_nav() {
		include 'floating-section-nav.php';	
	}
	function get_global_CTA() {
		include 'global-cta.php';
	}
?>