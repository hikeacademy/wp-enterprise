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
	get_template_part('template-parts/navbar');
	?>

<style type="text/css" media="screen">
	@media only screen and (max-width: 600px) {
		.landing-page header {
			background-image: url(<?php echo get_template_directory_uri() . '/images/landing-pages/hero.svg'; ?>);
			background-repeat: no-repeat;
			background-size: 140px;
			background-position: right center;
		}
	}
</style>
<div class="container landing-page">
	<header>
		<!-- Desktop hero -->
		<div class="row valign-wrapper hide-on-small-only">
	 		<div class="col l5 m7">
 				<div class="row">
 					<h1>A melhor forma de ter o seu site construído</h1>
 				</div>
				<div class="row">
	 				<p>Tenha o seu website ou plataforma web construído por um time talentoso de jovens desenvolvedores, por um preço mais acessível que de outras casas de software e com alta qualidade garantida.</p>
 				</div>
 				<div class="row">
	 				<a class="btn" href="contato">Entre em contato &#8594;</a>
 				</div>
 				<div class="row">
	 				<!-- <small>Or <a href="#your-problem">get to know more</a> about us</small> -->
 				</div>
 			</div>
 			<div class="col l6 m5 s6 offset-l1">
 				<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/landing-pages/hero.svg'; ?>" alt="">
 			</div>
 		</div>
		<!-- Smartphone hero -->
		<div class="hide-on-med-and-up">
			<div class="row">
				<h1>A melhor forma de ter o seu site construído</h1>
			</div>
			<div class="row">
				<div class="col s7">
					<div class="row">
						<p>Tenha o seu website ou plataforma web construído por um time talentoso de jovens desenvolvedores, por um preço mais acessível que de outras casas de software e com alta qualidade garantida.</p>
					</div>
					<div class="row">
						<a class="btn" href="contato">Entre em contato &#8594;</a>
					</div>
					<div class="row">
						<!-- <small>Or <a href="#your-problem">get to know more</a> about us</small> -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Desktop display template -->
	<div class="row section hide-on-small-only">
		<div id="your-problem" class="row section valign-wrapper">
			<div class="col s6">
				<h2>Seu desafio</h3>
				<p>Você precisa de um site construído do zero? Reconstruir um site já existente? Desenvolver um sistema web robusto? Serviço de manutenção? Explica pra gente qual é sua demanda que te retornamos com uma proposta :)</p>
			</div>
			<div class="col s4 offset-s2">
				<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/yourproblem.svg'; ?>" alt="">
			</div>
		</div>
		<div class="row section valign-wrapper">
			<div class="col s6">
				<h2>Nossa solução</h3>
				<p>Desenvolvemos seu site ou plataforma web por um preço acessível e com design e estrutura de alta qualidade. Utilizamos a metodologia SCRUM para desenvolver nossas soluções, o que significa que você poderá acompanhar de perto todo o andamento do seu projeto, dar feedback prévio e tê-lo pronto de forma rápida.</p>
			</div>
			<div class="col s4 offset-s2">
				<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/oursolution.svg'; ?>" alt="">
			</div>
		</div>
	</div>
	<!-- Mobile display template -->
	<div class="row section hide-on-med-and-up">
		<div class="row">
			<div class="col s12">
				<h2>Seu desafio</h3>
			</div>
		</div>
		<div id="your-problem" class="row valign-wrapper">
			<div class="col s3">
				<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/yourproblem.svg'; ?>" alt="">
			</div>
			<div class="col s9">
				<p>Você precisa de um site construído do zero? Reconstruir um site já existente? Desenvolver um sistema web robusto? Serviço de manutenção? Explica pra gente qual é sua demanda que te retornamos com uma proposta :)</p>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<h2>Nossa solução</h3>
			</div>
		</div>
		<div class="row valign-wrapper">
			<div class="col s3">
				<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/oursolution.svg'; ?>" alt="">
			</div>
			<div class="col s9">
				<p>Desenvolvemos seu site ou plataforma web por um preço acessível e com design e estrutura de alta qualidade. Utilizamos a metodologia SCRUM para desenvolver nossas soluções, o que significa que você poderá acompanhar de perto todo o andamento do seu projeto, dar feedback prévio e tê-lo pronto de forma rápida.</p>
			</div>
		</div>
	</div>

	<?php
		// Require Partners section
		get_template_part('template-parts/landing-pages/startup/partners');
		// Require Testimonials section
		// get_template_part('template-parts/landing-pages/testimonials');
		// Require Portfolio section
		get_template_part('/template-parts/landing-pages/portfolio');
		// Require FAQ section
		get_template_part('/template-parts/landing-pages/faq');
	?>

	<div class="row invite <?php echo !wp_is_mobile() ? 'valign-wrapper' : NULL; ?>">
		<div class="col m7 s12">
			<h3><?php the_field('startup_invite_title'); ?></h3>
			<p><?php the_field('startup_invite_subtitle'); ?></p>
		</div>
		<div class="col m4 s12 offset-m1">
			<a href="contato" class="btn">Entre em contato &#8594;</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>
