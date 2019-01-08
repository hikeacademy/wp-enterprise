<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hike_Trampos
 */

get_header();
get_navbar();
?>
	<div class="error-404 container center">
		<div class="row">
			<div class="col s10 offset-s1">
				<h1>Ops! Página não encontrada :(</h1>
			</div>
		</div>
		<div class="row">
			<a href="<?php echo get_home_url(); ?>" class="btn">Voltar à página inicial &#8594;</a>
		</div>
	</div>
<?php
get_footer();
