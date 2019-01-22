<?php
	/*
	 * Template Name: ApplyTemplate
	 */
get_header();
get_template_part('template-parts/navbar');
?>
<div class="container apply-page">
	<div id="subscription-form" class="row">
		<div class="col">
			<h1>Tá pront@ pra essa jornada? Então responda as perguntas abaixo:</h1>
		</div>
		<div class="col s12">
			<div class="card-panel">
				<?php
					while (have_posts()) {
						the_post();
						the_content();
					}
				?>
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>
