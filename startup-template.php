<?php
/**
 * Template Name: StartupTemplate
 *
 * The template file for students landing page
 *
 *
 * @package Hike_Trampos
 */
 
 get_header();
 ?>
<div class=" container landing-page">
	<header>
		<div class="row">
	 		<div class="col s5">
 				<div class="row">
 					<h1>The best way of getting your website done</h1>
 				</div>
				<div class="row">
	 				<p>Get your website done by a community of top talented, high motivated devs.</p>
 				</div> 			
 				<div class="row">
	 				<a class="btn" href="#!">Contact sales &#8594;</a>
 				</div>
 				<div class="row">
	 				<small>Or <a href="#!">get to know more</a> about us</small>
 				</div>
 			</div>
 			<div class="col s6 offset-s1">
 				<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/hero.png'; ?>" alt="">
 			</div>
 		</div>
	</header> 	


	<?php 
		get_template_part('template-parts/landing-pages/testimonials');
		get_template_part('/template-parts/landing-pages/portfolio');
	?> 	

	<div class="invite">
		<div class="row valign-wrapper">
			<div class="col s7">
				<h3><?php the_field('startup_invite_title'); ?></h3>
				<p><?php the_field('startup_invite_subtitle'); ?></p>
			</div>
			<div class="col s3 offset-s2">
				<a class="btn">Inscreva-se &#8594;</a>
			</div>
		</div>
 	</div>
</div>