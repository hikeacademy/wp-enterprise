<?php
get_header();
?>

	<div class="header">
		<nav>
			<div class="container">
				<div class="nav-wrapper">
			      <a href="#" class="brand-logo"><img src="<?php echo get_template_directory_uri() . '/images/front-page/logos/hike.png'; ?>"/></a>
			      <ul id="nav-mobile" class="right hide-on-med-and-down">
			        <li><a href="#solution">Solution</a></li>
			        <li><a href="#flow">Flow</a></li>
			        <li><a href="/contact" class="btn waves-effect waves-light">Get Started</a></li>
			      </ul>
			    </div>
			</div>
		</nav>
	</div>
	<div class="container front-page">
		<div class="row">
			<div class="col s10">
				<h1>Ensinamos programação para jovens de baixa renda e os conectamos com empresas.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col s10">
				<h5>A Hike é uma escola online que ensina programação para jovens de baixa renda de forma gratuita e, depois, conecta os que mais se destacam com empresas que precisam de mão de obra para construir soluções digitais. Como a gente pode ajudar você?</h5>
			</div>
		</div>
		<div class="row buttons">
			<div class="col s6">
				<a class="btn" href="student">Quero aprender a programar &#8594;</a>
				<p>Pra você que quer ter acesso de forma gratuita ao nosso curso, desenhado por brasileiros que estudaram em Harvard e Stanford</p>
			</div>
			<div class="col s6">
				<a class="btn" href="startup">Quero contratar um serviço &#8594;</a>
				<p>Pra você que é empresa ou pessoa física e deseja contratar um serviço para construir, modificar ou fazer a manutenção de um site ou plataforma web</p>
			</div>
		</div>
	</div>

	<?php
	wp_footer();
