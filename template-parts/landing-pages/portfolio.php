<div class="portfolio">
	<h2><?php echo is_startup_page() ? 'Portfolio' : 'O que os nossos alunos já construíram'; ?></h2>
	<div class="row">
		<!-- Qulture.Rocks card -->
		<div class="col m3 s12">
			<a href="//qulture.rocks" target="_blank">
				<div class="card hoverable">
					<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/portfolio/qulture.png';?>" alt="qulture site">
					<div class="content">
						<h6>Qulture.Rocks</h6>
						<p>Backed by YCombinator and with over 12,000 active users, Qulture.Rocks is a Brazilian SaaS that provides teams with a ground-breaking perfomance management platform.</p>
					</div>
				</div>
			</a>
		</div>
		<!-- Cerensa site -->
		<div class="col m3 s12">
			<a href="//cerensa.com" target="_blank">
				<div class="card hoverable">
					<img src="<?php echo get_template_directory_uri() . '/images/landing-pages/portfolio/cerensa.png';?>" alt="qulture site">
					<div class="content">
						<h6>Cerensa</h6>
						<p>Present in 16 countries, Cerensa is a Brazilian startup that is helping companies worldwide to deal with sustainability management and environmental intelligence.</p>
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
						<p>Our website is the ultimate example of websites that was entirely built by our pupils.</p>
					</div>
				</div>
			</a>
		</div>
		<!---->
		<div class="col m3 s12">
			<a href="<?php echo is_startup_page() ? 'contact' : 'apply' ?>" target="_blank">
				<div class="card-panel hoverable valign-wrapper">
					<p><?php echo is_startup_page() ? 'The next project could be yours. Contact us to tell what you need and get a quote &#8594;' : 'Quer aprender como faz uns sites maneiros assim? Só vir com a gente &#8594;'; ?></p>
				</div>
			</a>
		</div>
	</div>
</div>
