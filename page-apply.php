<?php
	/*
	 * Template Name: ApplyTemplate
	 */
get_header();
get_navbar();
?>
<div class="container apply-page">
	<header>
		<div class="row">
			<div class="col m8 s10">
				<h1>Participe do processo seletivo da Hike</h1>
			</div>
		</div>
		<div class="row">
			<div class="col s10">
				<p>Salve, quebrada!<br>A Hike tá procurando jovens de baixa renda que tão a fim de aprender a criar coisas maneiras, tipo websites e aplicativos de celular. Você é um deles?</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a class="btn" href="#subscription-form">Inscreva-se para o programa de bolsas &#8594;</a>
			</div>
		</div>
		<div class="row hide">
			<div class="col">
				<small>Ou, se tiver condições, <a href="#!">compre o curso</a> e tenha acesso agora</small>
			</div>
		</div>
	</header>
	<!-- First section -->
	<div id="student-profile" class="row first-section">
		<div class="col">
			<h2>A Hike procura por jovens:</h2>
		</div>
		<div class="col s9 offset-s1">
			<ul>
				<li>&#8594; Brasileiros;</li>
				<li>&#8594; Maiores de 16 anos;</li>
				<li>&#8594; Com renda familiar mensal de até 1,5 salário mínimo;</li>
				<li>&#8594; Que consigam dedicar, no mínimo, 6h por semana a aprender programação;</li>
				<li>&#8594; Que, acimda de tudo, são determinados.</li>
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
				<li class="active">
					<div class="collapsible-header">1. Informações pessoais</div>
					<div class="collapsible-body">
						A primeira etapa do processo seletivo é bem simples: consiste em você preencher <a href="#subscription-form">essas perguntas aqui embaixo</a>.<br>
						<br>
						Nessa etapa, fazemos algumas perguntas gerais sobre você, como nome e idade, e pedimos pra responder essas três perguntas:<br>
						1. Por que quer aprender a programar?<br>
						2. Qual foi o maior obstáculo que você já enfrentou na vida?<br>
						3. O que você fez pra superar este obstáculo?<br>
						<br>
						Nosso objetivo com essa etapa é te conhecer um pouquinho e entender se você se encaixa minimamente no <a href="#student-profile">perfil de pessoa que procuramos</a>. Você receberá um e-mail nosso avisando se foi aprovado na próxima etapa ou não dentro de até 15 dias.
					</div>
				</li>
				<li>
					<div class="collapsible-header">2. Entrevista online</div>
					<div class="collapsible-body">Caso seja aprovado na etapa anterior, você vai receber um convite pra fazer uma entrevista online com alguém do nosso time. O objetivo da entrevista é conhecer você de forma mais profunda e pessoal, para entendermos o quão motivado você está pra aprender a programar e, quem sabe, trabalhar com isto depois.</div>
				</li>
				<li>
					<div class="collapsible-header">3. Curso</div>
					<div class="collapsible-body">Se aprovado na entrevista, você recebe acesso ao nosso curso. A partir daí, é com você: assista às videoaulas online, construa os projetos e preencha as avaliações.</div>
				</li>
				<li>
					<div class="collapsible-header">4. Emprego</div>
					<div class="collapsible-body">Se você se destacar durante o curso, vamos te conectar com empresas de tecnologia que estão em busca de jovens talentosos como você.</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Third section -->
	<div id="subscription-form" class="row third-section">
		<div class="col">
			<h2>Tá pront@ pra essa jornada? Então responda as perguntas abaixo:</h2>
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
