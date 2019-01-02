<?php





get_header();
?>
<div class="container apply-page">
	<header>
		<div class="row">
			<div class="col s8">
				<h1>Participe do processo seletivo da Hike</h1>
			</div>
		</div>
		<div class="row">
			<div class="col s8">
				<p>Salve, quebrada!<br>A Hike tá procurando jovens de baixa renda que tão a fim de aprender a criar coisas maneiras, tipo websites e aplicativos de celular. Você é um deles?</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a class="btn" href="#subscription-form">Inscreva-se para o programa de bolsas &#8594;</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<small>Ou, se tiver condições, <a href="#!">compre o curso</a> e tenha acesso agora</small>
			</div>
		</div>
	</header>
	<!-- First section -->
	<div class="row first-section">
		<div class="col">
			<h2>A Hike procura por jovens:</h2>
		</div>
		<div class="col s12">
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">Maiores de 16 anos</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
				<li>
					<div class="collapsible-header">Brasileiro (a)</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
				<li>
					<div class="collapsible-header">Com renda familiar mensal de até 1,5 salário mínio</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
				<li>
					<div class="collapsible-header">Que consigam dedicar, no mínimo, 6h por semana ao curso</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Second section -->
	<div class="row second-section">
		<div class="col">
			<h2>Como funciona o processo seletivo:</h2>
		</div>
		<div class="col s12">
			<ul class="collapsible">
				<li>
					<div class="collapsible-header">1. formulário com informações básicas sobre você</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
				<li>
					<div class="collapsible-header">2. teste de lógica</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
				<li>
					<div class="collapsible-header">3. entrevista</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
				<li>
					<div class="collapsible-header">4. início do curso</div>
					<div class="collapsible-body">Lorem ipsum dolor sit amet</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Third section -->
	<div class="row third-section" id="subscription-form">
		<div class="col">
			<h2>Responda as perguntas abaixo</h2>
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
wp_footer();
?>
