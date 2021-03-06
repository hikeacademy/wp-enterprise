<?php
/**
 * Template Name: StudentTemplate
 *
 * The template file for students landing page
 *
 *
 * @package Hike_Trampos
 */

	get_header();
	get_template_part('template-parts/navbar');
	?>
	
 <div class="container landing-page">
 	<!-- Hero -->
	<header>
		<div class="row">
			<div class="col s10">
				<h1 id="student-title">Quer aprender a programar? Então fecha com a gente.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col m10 s11">
				<h5>Durante 3 meses, você vai aprender a construir sites, desde os mais básicos, tipo um blog, até os mais complexos, tipo uma rede social. Se você mandar bem ao longo do curso, a gente te ajuda a descolar um trampo na área depois. E não precisa se preocupar com grana; o curso é gratuito e sempre será.</h5>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>E aí, você vem com a gente?</p>
			</div>
		</div>
 		<div class="row">
 			<div class="col">
				<a class="btn" href="inscreva-se">Inscreva-se  &#8594;</a>
 			</div>
 		</div>
 		<div class="row hide">
	 		<div class="col">
	 			<small>Se você tiver condições financeiras, pode <a href="#!">comprar o curso completo aqui</a>.</small>
	 		</div>
 		</div>
 	</header>
	<!-- First section -->
	<div id="student-profile" class="row first-section">
		<div class="col">
			<h2>A Hike procura por jovens:</h2>
		</div>
		<div class="col m9 s12 offset-m1">
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
						<!-- âncora do processo seletivo -->
						A primeira etapa do processo seletivo é bem simples: consiste em você preencher <a href="inscreva-se" target="_blank">essas perguntas aqui</a>.<br>
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
 	<?php
		// Require Portfolio section
 		get_template_part('template-parts/landing-pages/portfolio');
		// Require Testimonials section
 		get_template_part('template-parts/landing-pages/testimonials');
		// Require FAQ section
 		get_template_part('template-parts/landing-pages/faq');
 	?>
	<!-- Invite section -->
	<div class="row invite <?php echo !wp_is_mobile() ? 'valign-wrapper' : NULL; ?>">
		<div class="col m7 s12">
			<h3><?php the_field('student_invite_title'); ?></h3>
			<p><?php the_field('student_invite_subtitle'); ?></p>
		</div>
		<div class="col m4 s12 offset-m1">
			<a href="inscreva-se" class="btn">Inscreva-se  &#8594;</a>
		</div>
	</div>
	</div>
	<?php get_footer(); ?>
