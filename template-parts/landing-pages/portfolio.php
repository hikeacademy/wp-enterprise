<div class="portfolio">
	<div class="row">
		<div class="col l12 m9">
			<h2><?php echo is_startup_page() ? 'Portfolio' : 'O que os nossos alunos já construíram'; ?></h2>
		</div>
	</div>
	<div class="row">
		<!-- Cerensa site -->
		<div class="col m3 s12">
			<a href="//cerensa.com" target="_blank">
				<div class="card hoverable">
					<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/portfolio/cerensa.png';?>" alt="qulture site">
					<div class="content">
						<h6>Cerensa</h6>
						<p>Com atuação em 16 países, a Cerensa é uma startup brasileira que tem ajudado empresas mundo afora a lidar com gestão ambiental e inteligência socioambiental</p>
					</div>
				</div>
			</a>
		</div>
		<!-- Qulture.Rocks card -->
		<div class="col m3 s12">
			<a href="//qulture.rocks" target="_blank">
				<div class="card hoverable">
					<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/portfolio/qulture.png';?>" alt="qulture site">
					<div class="content">
						<h6>Qulture.Rocks</h6>
						<p>Apoiada pela YCombinator  e com mais de 12,000 usuários ativos em sua plataforma, a Qulture.Rocks é uma startup brasileira que ajuda times de empresas a gerenciar desempenho e produtividade</p>
					</div>
				</div>
			</a>
		</div>
		<!-- Hike Academy site -->
		<div class="col m3 s12">
			<a href="startup" target="_blank">
				<div class="card hoverable">
					<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/portfolio/hike.png';?>" alt="qulture site">
					<div class="content">
						<h6>Hike Academy</h6>
						<p>Nosso site é outro grande exemplo de projeto construído pelos nossos alunos</p>
					</div>
				</div>
			</a>
		</div>
		<!-- Merchan card -->
		<div class="col m3 s12">
			<a href="<?php echo is_startup_page() ? 'contact' : 'apply' ?>" target="_blank">
				<div class="card-panel hoverable valign-wrapper">
					<p><?php echo is_startup_page() ? 'O próximo projeto pode ser o seu. Entre em contato com a gente pra dizer qual é sua demanda  &#8594;' : 'Quer aprender como faz uns sites maneiros assim? Só vir com a gente &#8594;'; ?></p>
				</div>
			</a>
		</div>
	</div>
</div>
