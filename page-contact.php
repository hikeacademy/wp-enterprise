<?php
	/*
	 * Template Name: ContactTemplate
	 */
	get_header();
	get_template_part('template-parts/navbar');
?>
<div class="container contact">
	<div class="row center">
		<div class="col s10 offset-s1">
			<h1>Como podemos te ajudar?</h1>
		</div>
	</div>
	<div class="row center">
		<div class="col s10 offset-s1">
			<p>Estamos felizes em saber que você está considerando trabalhar com a gente! Preencha o formulário abaixo e te retornamos em até dois dias úteis.</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<div class="card-panel">
				<?php while(have_posts()) {
					the_post();
					the_content();
				} ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
