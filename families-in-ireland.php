<?php
	/* Template Name: Families in Ireland */
	include 'php-includes/global-functions.php';
	get_header();
?>
<body class="bc-feature-page"> 
	<?php 
	 echo '<?xml version="1.0" encoding="utf-8"?>'
	?>
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 0 0" class="bc-svg-defs" xml:space="preserve">
				<defs>
					<linearGradient id="isd-rainbow-grad" class="bc-svg-defs__rainbow-grad" gradientUnits="userSpaceOnUse" x1="0" y1="25.5" x2="1440" y2="25.5">
						<stop offset="0" 		class="isd-rainbow-grad__stop1"style="stop-color:#05D1D1"/>
						<stop offset="0.25" class="isd-rainbow-grad__stop2"style="stop-color:#6881DB"/>
						<stop offset="0.5" 	class="isd-rainbow-grad__stop3"style="stop-color:#D02CE5"/>
						<stop offset="0.75" class="isd-rainbow-grad__stop3"style="stop-color:#F2EF11"/>
						<stop offset="1" 		class="isd-rainbow-grad__stop5"style="stop-color:#3B857E"/>
					</linearGradient>	
					<linearGradient id="linear-gradient" class="bc-svg-defs__linear-gradient" viewBox="0 0 100 100" gradientTransform="rotate(135)">
						<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/> 
						<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
					</linearGradient>
					<linearGradient id="linear-gradient--shade" class="bc-svg-defs__linear-gradient--shade" viewBox="0 0 100 100" gradientTransform="rotate(135)">
						<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/> 
						<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
					</linearGradient>
					<linearGradient id="linear-gradient--orange" class="bc-svg-defs__linear-gradient--orange" viewBox="0 0 100 100" gradientTransform="rotate(135)">
						<stop offset="0%" stop-opacity="1"  class="bc-svg-defs__linear-gradient__col-stop1"/> 
						<stop offset="72%" stop-opacity="1" class="bc-svg-defs__linear-gradient__col-stop2"/>
					</linearGradient>
				</defs>
			</svg>
	<?php get_site_header(); ?>
	<section class="bc-hero bc-hero--inpage has-waves has-mid-green-grad"> 
		<div class="bc-hero__content">
			<div class="bc-hero__body">
				<div class="bc-hero__body__text bc-fade-in-up--is-not-visible">
					<h1 class="bc-hero__heading">For Families Based in Ireland</h1>
					<p class="bc-hero__tagline">Find out how we offer local families a progressive primary school learning alternative.</p>
				</div><!-- // .bc-hero__body__text --> 
			</div><!-- // .bc-hero__body -->
			<img class="bc-hero__image" src="<?php echo get_theme_file_uri('/media/irish-family.jpg '); ?>" alt="A family" >
			<div class="media-overlay"></div> 
		</div><!-- // .bc-hero__content -->
		<div class="wave-wrap">
			<?php
				echo '<?xml version="1.0" encoding="utf-8"?>'
			?>
			<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Layer_1" class="wave-wrap__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 1440 50" xml:space="preserve">
				<path id="isd-rainbow-wave" class="wave-wrap__rainbow" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
				<path class="isd-wave"class="wave-wrap__wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
			</svg>
		</div><!-- // .bc-wave-wrap -->
	</section><!-- // .bc-hero--inpage -->
	
	<section class="bc-feature-component bc-expandible-blocks-component"  id="learning-for-life">
		<header class="bc-feature-component__header">
			<div class="bc-feature-component__content__text-content">
				<h1 class="bc-feature-component__heading">Options in Education</h1>
				<p class="bc-feature-component__intro">The International School of Dublin (ISD) comprises both local and international families. We believe that an international education is not solely for international families.</p>
				<p class="">At ISD we offer a different option for education. ISD is multi-denominational, co-educational and inclusive. We have small class sizes to promote individualised education.</p>
			</div>	
		</header><!-- // .bc-feature-component__heading -->
		<div class="bc-feature-component__content">
			<article class="bc-gr-feature bc-gr-columns has-colored-text"> 
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/children-learning-together.jpg'); ?>" alt="Children learning together">
				</picture>
				<div class="bc-gr-feature__text bc-column">
					<h2 class="bc-gr-feature__heading">Culturally Diverse</h2>
					<p class="bc-gr-feature__intro">We provide Spanish as a foreign language and we promote mother-tongue development. The school is culturally diverse with over 20 nationalities amongst students, staff and parents/guardians.</p> 
				</div><!-- // .bc-gr-feature__text bc-column -->
			</article><!-- // .bc-gr-columns.bc-expandible-block -->
			<article class="bc-gr-feature bc-gr-columns has-colored-text">
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/ib-world-school-logo-2-colour.png'); ?>" alt="International Baccalaureate World School crest">
				</picture>
				<div class="bc-gr-feature__text bc-column"> 
					<h2 class="bc-gr-feature__heading">The International Baccalaureate</h2>
					<p class="bc-gr-feature__intro">ISD offers the <a href="<?php echo get_permalink(86) ?>">International Baccalaureate (IB)</a>, which is an inquiry based curriculum falling outside national and political agendas. It is based on a continuum which is innovative and relevant and focuses on the total growth of the developing learner.</p> 
					<p>It is regarded as the gold-standard measurement of academic and intellectual development both by universities and graduate employers.</p>	
					<a href="<?php echo get_permalink(86) ?>#about-the-ib" class="bc-icon-link">
						Read more about the International Baccalaureate
						<svg class="bc-svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#arrow"></use>
						</svg>
					</a>
				</div><!-- // bc-gr-feature__text.bc-column | About the International Baccalaureate -->
			</article><!-- // .bc-gr-columns.bc-expandible-block -->
			<article class="bc-gr-feature bc-gr-columns has-colored-text">
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/the-world-in-your-hand.jpeg'); ?>" alt="International Mindedness">
				</picture>
				<div class="bc-gr-feature__text bc-column"> 
					<h2 class="bc-gr-feature__heading">Internationally Minded</h2>
					<p class="bc-gr-feature__intro">International-mindedness is at the heart of an IB and ISD education. This includes the understanding of one’s local, regional, national as well as international context and begins with understanding of the uniqueness of oneself, one’s home and one’s nationality and culture.</p> 
					<p>The diverse nature of our community allows the students to naturally and continually revisit what it is to be globally connected.</p>
				</div><!-- // .bc-gr-feature__text.bc-column | International-mindedness -->
			</article><!-- // .bc-gr-feature --> 
			<article class="bc-gr-feature bc-gr-columns has-colored-text">
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/students-working-at-a-laptop.jpg'); ?>" alt="Students working at a laptop">
				</picture>
				<div class="bc-gr-feature__text bc-column"> 
					<h2 class="bc-gr-feature__heading">Global Citizenship</h2>
					<p class="bc-gr-feature__intro">Any Irish citizen will develop in an ever increasingly interconnected world where their home location will be influenced by global forces; and there are proven benefits for children attending international schools, whether they are local citizens or expatriates.</p>  
					<p>Allowing students to interact and have experience with global awareness and understanding in a first person context from the very start of their education sets them apart from others; this plants the seed for future worldwide networking.</p>  
				</div><!-- // .bc-gr-feature__text.bc-column | International-mindedness -->
			</article><!-- // .bc-gr-feature --> 
			<article class="bc-gr-feature bc-gr-columns has-colored-text">
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/multicultural-kids.jpg'); ?>" alt="Multicultural kids">
				</picture>
				<div class="bc-gr-feature__text bc-column"> 
					<h2 class="bc-gr-feature__heading">International Network</h2>
					<p  class="bc-gr-feature__intro">It provides valuable skills for later life such as building relationships with people from a variety of cultures and backgrounds, it also equips students with the confidence to travel and work in other countries opening opportunities and experiences throughout adulthood.</p>
					<p>Students thus engage with both local and global issues as they have gained valuable personal connections, knowledge and understanding. They benefit from understanding the value of the interconnected nature of the world and work to make a difference in the lives of everyone.</p>
				</div><!-- // .bc-gr-feature__text.bc-column | International-mindedness -->
			</article><!-- // .bc-gr-feature --> 
			<article class="bc-gr-feature bc-gr-columns bc-expandible-block has-colored-text">
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/excited-child.jpeg'); ?>" alt="A child heading off into the future">
				</picture>
				<div class="bc-gr-feature__text bc-column"> 
					<h2 class="bc-gr-feature__heading">Transition to Secondary School</h2>
						<p class="bc-gr-feature__intro">The transition from primary to post-primary/secondary education represents a significant milestone. It is a period filled with change not only for the student but for the entire family.</p> 
						<p>By the time students reach their final year at ISD, we aim for the students to feel excited and prepared to move on in their educational journey. We find our students transition very successfully to a range of secondary school options.</p>
						
						<div class="bc-expandible-block__body">
							<div class="bc-expandible-block__body__text">
								<p>By Grade 6, students are deeply familiar with school routines and environments. They have been presented with increasingly advanced concepts and workload demands; and they have been developing a wide skill set to be more autonomous in their learning. In their final term at ISD, students are responsible for engaging in an independent Exhibition, a “thesis” of sorts.</p>
								<p>In their final term at ISD, students are responsible for engaging in an independent Exhibition, a “thesis” of sorts. This endeavor is challenging and provides the students the space to apply all they have learned throughout primary school to a personal inquiry.</p>
								<p>It is at this time that the students truly learn the value of strategies such as: goal setting, time and organisational management, study habits self assessment and reflection.</p>
								<p>ISD is happy to provide assistance to families in the quest for suitable secondary school options. ISD has relationships with a variety of surrounding secondary schools offering different options (e.g. single sex, coeducational, national Irish curriculum, IB curriculum) and can explain these to families to help them identify which schools may be of interest to them. ISD can then guide and help facilitate communication between families, teachers and secondary schools.</p>
							</div>
						</div><!-- // .bc-expandible-block__body -->
						<div class="bc-expandible-block__expander">
							<a href="javascript:void(0)" class="bc-expandible-block__expander__button">
								<span class="bc-expandible-block__expander__button__text">
									<span class="inactive-text">Show more</span> 
									<span class="active-text">Show less</span>
								</span>
								<span class="bc-expandible-block__expander__button__icon">
									<svg class="bc-svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use> 	
									</svg>	
								</span>
							</a>
						</div><!-- // .bc-expandible-block__expander -->
				</div><!-- // .bc-gr-feature__text.bc-column | International-mindedness -->
			</article><!-- // .bc-expandible-block --> 
			<article class="bc-gr-feature bc-gr-columns bc-expandible-block has-colored-text" id="isd-community">
				<picture class="bc-gr-feature__media bc-column">
					<img src="<?php echo get_theme_file_uri('/media/multicultural-kids.jpg'); ?>" alt="Multicultural kids">
				</picture>
				<div class="bc-gr-feature__text bc-column"> 
					<h2 class="bc-gr-feature__heading">ISD Community</h2>
						<p class="bc-gr-feature__intro">ISD prides itself in having a strong, close-knit community composed of students, parents, staff, directors and alumni.</p> 
						<p>The community is culturally rich and spread across the globe. With an open door policy it is not unusual to have alumni popping in during a flying visit to Dublin or parents stopping in to the office for a morning chat.</p>
						<div class="bc-expandible-block__expander">
							<a href="javascript:void(0)" class="bc-expandible-block__expander__button">
								<span class="bc-expandible-block__expander__button__text">
									<span class="inactive-text">Show more</span> 
									<span class="active-text">Show less</span>
								</span>
								<span class="bc-expandible-block__expander__button__icon">
									<svg class="bc-svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#close-x"></use> 	
									</svg>	
								</span>
							</a>
						</div><!-- // .bc-expandible-block__expander -->
						<div class="bc-expandible-block__body">
							<div class="bc-expandible-block__body__text">
								<p>At ISD we believe an excellent education requires a collaborative approach and thus formal and informal channels are provided for community members to create meaningful ties that span the student’s school years in ISD and beyond.</p> 
								<p>Parental involvement is welcomed in varying capacities and the school calendar features events which provide opportunities to link up whilst celebrating student accomplishments.</p>
							</div>
						</div><!-- // .bc-expandible-block__body -->
				</div><!-- // .bc-gr-feature__text.bc-column | International-mindedness -->
			</article><!-- // .bc-expandible-block --> 
		</div> <!-- // .bc-feature-component__content -->	
	</section><!-- // .bc-expandible-blocks-component -->
	<section class="bc-feature-component has-waves has-shade-01">
		<div class="bc-feature-component__wrap">
			<header class="bc-feature-component__header">
				<div class="bc-feature-component__content__text-content">
					<h1 class="bc-feature-component__heading">Testimonials</h1>
					<p class="bc-feature-component__intro">Hear local Irish parents and students describe their experience with ISD.</p>

				</div>	
			</header><!-- // .bc-feature-component__heading -->
			<div class="bc-feature-component__content">
				<div class="bc-feature-component__content__text-content">
					<div class="bc-flickty-slider bc-text-slider">
						<div class="bc-flickty-slider__slider">
							<a href="" class="bc-flickty-slider__prev is-inactive">
								<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
								</svg>
							</a>
							<a href="" class="bc-flickty-slider__next">
								<svg version="1.1" class="bc-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<use xlink:href="<?php echo get_theme_file_uri('/media/svg/icons/bc-svgs.svg'); ?>#carat"></use>  
								</svg>
							</a>
							<article class="bc-flickty-slider__slide ">
								<p class="bc-quote-text">&quot;I have never been a fan of private education, being a firm believer is exposing my kids to the real world and developing them as responsible, caring individuals.</p>
								<p class="bc-quote-text">&quot;When we traveled as a family, to Denmark and to India, however, we found that the IB system of education offered in the fee-paying international schools available to us were at an incredible standard and suited the needs of our children perfectly.</p>
								<p><strong>-- Fiona O’Brien - Irish - Mother of two students at ISD</strong></p>

							</article><!-- // .bc-flickty-slider__slide --> 
							<article class="bc-flickty-slider__slide ">
								<p class="bc-quote-text">&quot;I highly recommend ISD because everyone is very nice. Everyone treats one another so well and most of all keeps the students really HAPPY.</p> 
								<p class="bc-quote-text">&quot;ISD really represents all of the IB Learner Profile so well uses it all the time. At ISD you can meet people from all around the world. The teachers adapt the learning to your own skills and talents and always have time to help students who need a little bit more help. ISD is the best school ever (in my opinion)!</p>
								<p><strong>-- Joshua Merry - Irish - Age 11</strong></p>
							</article><!-- // .bc-flickty-slider__slide --> 
							<article class="bc-flickty-slider__slide">
								<p class="bc-quote-text">&quot;I chose ISD initially because of class size and teacher ratio, and the broadminded international focus of the curriculum. However, we have stayed at ISD throughout my child’s entire primary education for all the benefits it continues to provide, like the feeling of a big family who come from all different places.</p> 
								<p class="bc-quote-text">&quot; My child has developed inquiry skills, so she can continually learn about how her decisions and behaviour affects her group, her community and the world. There is a tremendous feeling of warmth in the ISD community that benefits both the local Irish families and the expatriate families.</p>
								<p><strong>-- Hazel Cullen - Irish - Mother of one student at ISD</strong></p>
							</article><!-- // .bc-flickty-slider__slide --> 
						</div><!-- // .bc-flickty-slider__slider -->
					</div><!-- // .bc-flickty-slider -->
				</div><!-- // .bc-feature-component__content__text-content -->
			</div><!-- // .bc-feature-component__content -->
		</div><!-- // .bc-feature-component__wrap -->
		<div class="wave-wrap">
			<?php
				echo '<?xml version="1.0" encoding="utf-8"?>'
			?>
			<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="Layer_1" class="wave-wrap__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 1440 50" xml:space="preserve">
				<path id="isd-rainbow-wave" class="wave-wrap__rainbow" d="M0,1v1v25.2c0,0,200.9-24.7,360-24.7S923.9,50,1080,50s360-23.5,360-23.5V2V1H0z"/>
				<path class="isd-wave"class="wave-wrap__wave" id="isd-wave" d="M0,0v1v24.7C0,25.7,200.9,1,360,1s563.9,47,720,47s360-22.5,360-22.5V1V0H0z"/>
			</svg>
		</div><!-- // .bc-wave-wrap -->
	</section><!-- // Testimonials -->
	<?php  
		get_global_CTA();
		get_footer();
		get_floating_section_nav(); 
	?>
