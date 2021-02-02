<?php
	/* Template Name: Level 2 page template -- Redirect */
if (get_field('redirect-url') && strcmp(get_field('redirect-url'),  '') !== 0) {
	header('Location: ' . get_field('redirect-url'));
}
	
?>
