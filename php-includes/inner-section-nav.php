<?php 
	if (strcmp($inner_sect_nav_title, '') !== 0 && $inner_sect_nav_title !== null) {
		echo "<section class=\"bc-feature-component bc-section-navigation  has-shade-02\">";
		echo "	<article class=\"bc-feature-component__content\">";
		echo "			<div class=\"bc-feature-component__content__text-content\">";
		echo "				<nav class=\"bc-section-navigation\">";
		echo "					<h1 class=\"bc-section-navigation__heading\">$inner_sect_nav_title</h1>";
		echo "					<ul class=\"bc-section-navigation__links\">"; 
		foreach ($sect_nav_links as $link) {
			echo "					<li class=\"bc-section-navigation__item\">";
			echo "						<a href=\"" . $link['url'] . "\" class=\"bc-section-navigation__link\">";
			echo "							 {$link['title']}";
			echo "							<svg class=\"bc-svg-icon\">"; 
			echo "								<use xlink:href=\"". get_theme_file_uri('/media/svg/icons/bc-svgs.svg') . "#arrow\"></use>"; 	
			echo "							</svg>";
			echo "						</a>";
			echo "					</li>";
		}
		echo "					</ul>";
		echo "				</nav>";
		echo "			</div>";
		echo "	</article>";
		echo "</section>"; 
	}
?>