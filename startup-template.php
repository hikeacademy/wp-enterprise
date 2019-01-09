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
	get_navbar(
		array(
			'landing-page' => true
		)
	);
 ?>
<div class="container landing-page">
	<header>
		<div class="row valign-wrapper">
	 		<div class="col l5 m7">
 				<div class="row">
 					<h1>A melhor forma de ter o seu site construído</h1>
 				</div>
				<div class="row">
	 				<p>Tenha o seu website ou plataforma web construído por um time talentoso de jovens desenvolvedores, por um preço mais acessível que de outras casas de software e com alta qualidade garantida.</p>
 				</div>
 				<div class="row">
	 				<a class="btn" href="contact">Entre em contato &#8594;</a>
 				</div>
 				<div class="row">
	 				<!-- <small>Or <a href="#your-problem">get to know more</a> about us</small> -->
 				</div>
 			</div>
 			<div class="col l6 m5 s6 offset-l1">
 				<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/landing-pages/hero.svg'; ?>" alt="">
 			</div>
 		</div>
	</header>
	<div id="your-problem" class="hide row section valign-wrapper">
		<div class="col s6">
			<h2>Your problem</h3>
			<p>Do you need a website built from scratch? Do you want to migrate what you already have to Wordpress? Do you want design + implementation? Do you only need implementation? Get in touch and we can provide you with more information based on your needs!</p>
		</div>
		<div class="col s4 offset-s2">
			<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/yourproblem.svg'; ?>" alt="">
		</div>
	</div>
	<div class="hide row section valign-wrapper">
		<div class="col s6">
			<h2>Our solution</h3>
			<p>We build websites to convey companies' messages clearly, with beautiful design, supported by solid engineering implementation. We focus on building websites for high-growth businesses that need a good Content Management System.</p>
		</div>
		<div class="col s4 offset-s2">
			<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/oursolution.svg'; ?>" alt="">
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
			<div class="col s4 offset-s1">
				<a href="contact" class="btn">Entre em contato &#8594;</a>
			</div>
		</div>
 	</div>
</div>
<footer>
	<?php get_footer(); ?>
</footer>
