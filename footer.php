<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hike_Trampos
 */

?>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="<?php echo get_template_directory_uri() . '/images/footer/hike-logo.png'?>" alt="HikeAcademy">
				</div>
				<div class="col">
					<!-- Dropdown para languages -->
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col m3 s6">
					<p>Quem somos</p>
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">O que fazemos</a></li>
					</ul>
				</div>
				<div class="col m3 s6">
					<p>Para alunos</p>
					<ul>
						<li><a href="student">Como funciona</a></li>
						<li class="hide"><a href="#!">Comprar o curso</a></li>
						<li><a href="apply">Bolsa de estudos</a></li>
						<li><a href="student/#faq">Dúvidas</a></li>
					</ul>
				</div>
				<div class="col m3 s6">
					<p>Para empresas</p>
					<ul>
						<li><a href="startup">Como funciona</a></li>
						<li><a href="contact">Contatar vendas</a></li>
						<li><a href="startup/#faq">Dúvidas</a></li>
					</ul>
				</div>
				<div class="col m3 s6">
					<p>Contato</p>
					<ul>
						<li><a href="mailto:time@hikeacademy.com.br">time@hikeacademy.com.br</a></li>
						<li><a href="https://goo.gl/maps/aSQy8hWiwG52">Alameda Vicente Pinzon, 54 - 7º Andar Vila Olímpia, São Paulo - SP</a></li>
						<ul>
							<li><a href="https://pt.linkedin.com/company/hike-academy"><img src="<?php echo get_template_directory_uri() . "/images/footer/linkedin.svg"; ?>" target="_blank" alt="Linkedin"></a></li>
							<li><a href="https://www.instagram.com/hikeacademy/"><img src="<?php echo get_template_directory_uri() . "/images/footer/instagram.svg"; ?>" target="_blank" alt="Instagram"></a></li>
							<li><a href="https://www.facebook.com/HikeAcademyBrasil/"><img src="<?php echo get_template_directory_uri() . "/images/footer/facebook.svg"; ?>" target="_blank" alt="Facebook"></a></li>
						</ul>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Scroll Reveal: https://scrollrevealjs.org/ -->
<script src="https://unpkg.com/scrollreveal"></script>
<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132568063-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-132568063-1');
</script>

</body>
</html>
