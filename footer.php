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
				<div class="col s3">
					<ul>
						<span>Quem somos</span>
						<li><a href="#!">O que fazemos</a></li>
						<li><a href="#!">Enviar pergunta</a></li>
					</ul>
				</div>
				<div class="col s3">
					<ul>
						<span>Para alunos</span>
						<li><a href="#!">Como funciona</a></li>
						<li><a href="#!">Comprar o curso</a></li>
						<li><a href="#!">Bolsa de estudos</a></li>
						<li><a href="#!">Dúvidas</a></li>
					</ul>
				</div>
				<div class="col s3">
					<ul>
						<span>Para empresas</span>
						<li><a href="#!">Como funciona</a></li>
						<li><a href="#!">Contatar vendas</a></li>
						<li><a href="#!">Dúvidas</a></li>
					</ul>
				</div>
				<div class="col s3">
					<ul>
						<span>Contato</span>
						<li id="email"><a href="mailto:time@hikeacademy.com.br">time@hikeacademy.com.br</a></li>
						<li><a href="#!">Alameda Vicente Pinzon, 54 - 7º Andar Vila Olímpia, São Paulo - SP</a></li>
						<ul>
							<li><a href="#!"><img src="" alt="Linkedin"></a></li>
							<li><a href="#!"><img src="" alt="Instagram"></a></li>
							<li><a href="#!"><img src="" alt="Facebook"></a></li>
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

</body>
</html>
