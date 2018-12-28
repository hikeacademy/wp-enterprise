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
<div class="container landing-page">
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
 				<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/hero.svg'; ?>" alt="">
 			</div>
 		</div>
	</header>
	<div class="row section valign-wrapper">
		<div class="col s6">
			<h2>Your problem</h3>
			<p>Do you need a website built from scratch? Do you want to migrate what you already have to Wordpress? Do you want design + implementation? Do you only need implementation? Get in touch and we can provide you with more information based on your needs!</p>
		</div>
		<div class="col s4 offset-s2">
			<img src="<?php echo get_template_directory_uri() . '/images/front-page/yourproblem.svg'; ?>" alt="">
		</div>
	</div> 
	<div class="row section valign-wrapper">
		<div class="col s6">
			<h2>Our solution</h3>
			<p>We build websites to convey companies' messages clearly, with beautiful design, supported by solid engineering implementation. We focus on building websites for high-growth businesses that need a good Content Management System.</p>
		</div>
		<div class="col s4 offset-s2">
			<img src="<?php echo get_template_directory_uri() . '/images/front-page/oursolution.svg'; ?>" alt="">
		</div>
	</div>	


	<?php
		get_template_part('template-parts/landing-pages/startup/partners'); 
		get_template_part('template-parts/landing-pages/testimonials');
		get_template_part('/template-parts/landing-pages/portfolio');
		get_template_part('/template-parts/landing-pages/faq');
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
<footer>
	<?php wp_footer(); ?>
</footer>