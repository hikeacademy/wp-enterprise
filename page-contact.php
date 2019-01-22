<?php
	/*
	 * Template Name: ContactTemplate
	 */
	get_header();
	get_navbar();
?>
<div class="container contact">
	<div class="row">
		<div class="col s12">
			<h1>Qual é sua demanda?</h1>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<p>Estamos felizes em saber que você está considerando trabalhar com a gente!<br>Preencha o formulário abaixo para entendermos qual é seu desafio e como podemos te ajudar :)</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<div class="card-panel">
				<div class="row">
					<div class="col s10 offset-s1">
						<?php while(have_posts()) {
							the_post();
							the_content();
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
