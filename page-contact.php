<?php
	/*
	 * Template Name: ContactTemplate
	 */
	get_header();
	get_navbar();
?>
<div class="container contact">
	<div class="row center">
		<div class="col l10 s12 offset-l1">
			<h1>Como podemos te ajudar?</h1>
		</div>
	</div>
	<div class="row center">
		<div class="col l10 s12 offset-l1">
			<p>Estamos felizes em saber que você está considerando trabalhar com a gente! Preencha o formulário abaixo e te retornamos em até dois dias úteis.</p>
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
