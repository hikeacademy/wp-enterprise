<?php
/**
 * Template Name: StudentTemplate
 *
 * The template file for students landing page
 *
 *
 * @package Hike_Trampos
 */
 
 get_header();
 ?>
 <div class="container students-page">
	<header>
		<div class="row">
			<div class="col s8">
				<h1>Quer aprender a programar? Então fecha com a gente.</h1>		
			</div>
		</div>
		<div class="row">
			<div class="col s8">
				<h5>Durante 3 meses, você vai aprender a construir sites, desde os mais básicos, tipo um blog, até os mais complexos, tipo uma rede social. Se você mandar bem ao longo do curso, a gente te ajuda a descolar um trampo na área depois. E não precisa se preocupar com grana; o curso é gratuito e sempre será.</h5>
			</div>
		</div> 
		<div class="row">
			<div class="col">
				<p>E aí, você vem com a gente?</p>			
			</div>
		</div>
 		<div class="row">
 			<div class="col">
				<a class="btn" href="#!">Inscreva-se &#8594;</a> 		
 			</div>
 		</div>
 		<div class="row">
	 		<div class="col">
	 			<small>Se você tiver condições financeiras, pode <a href="#!">comprar o curso completo aqui</a>.</small>	 		
	 		</div>
 		</div>
 	</header> 
 	<?php 
 		get_template_part('template-parts/landing-pages/portfolio');
 		get_template_part('template-parts/landing-pages/testimonials');
 		get_template_part('template-parts/landing-pages/faq')
 	?>
 	<div class="invite">
		<div class="row">
			<div class="col s7">
				<h5><?php the_field('student_invite_title'); ?></h5>
				<p><?php the_field('student_invite_subtitle'); ?></p>
			</div>
			<div class="col s3 offset-s2">
				<a class="btn">Inscreva-se &#8594;</a>
			</div>
		</div>
 	</div>
 </div>