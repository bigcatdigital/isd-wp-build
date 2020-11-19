<?php
	if (get_field('show-show-to-top') == 'yes') { 
	echo get_field('show-show-to-top');
?>
	<section class="bc-floating-widget  ">
		<a href="javascript:void(0)" class="bc-to-page-top">
			Scroll to top
			<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
			<svg version="1.1" class="bc-svg-icon bc-svg-icon--arrow-up" id="bc-arrow-up" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 100 100" >
				<polygon points="47.4,11 25.7,32.8 22,29 50,1 78,29 74.3,32.8 52.6,11 52.6,99 47.4,99 "/>
			</svg>
		</a>
	 </section><!-- // .feature-page-navigation--floating -->	
<?php }//end if  'show-show-to-top' ?>
 
