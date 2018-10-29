<?php
	/* 
	 * Template Name: ContactTemplate
	 */
	get_header();
?>
<div class="contact">
	<nav>
		<div class="container">
			<div class="nav-wrapper">
		      <a href="/" class="brand-logo"><img src="<?php echo get_template_directory_uri() . '/images/hike-black.png'; ?>"/></a>

		    </div>
		</div>
	</nav>

	<div class="bg">
		<div class="bg-white"></div>
		<div class="bg-gradient"></div>
	</div>
	
	<div class="container">
		<div class="hero">
			<div class="row">
				<div class="col s12 m8 offset-m2 center-align">
					<h1 class="title">Tell us what you need</h1>
					<p class="description">We're happy you are considering working with us! Fill out the form and we'll get back to you in up to two days.</p>
				</div>
			</div>
		</div>

		<div class="first-section">
			<div class="row">
				<div class="col s12 m7">
					<div class="form-container z-depth-2">
						<?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
					</div>
				</div>
				<div class="col s12 m5">
					<div class="benefits-container">
						<h2 class="title-2">With Hike you can</h2>
						<ul class="benefits">
							<li class="benefit"><i class="material-icons">check</i> Get powerful software done in a timely manner</li>
							<li class="benefit"><i class="material-icons">check</i> Save on team's resources so they can better focus</li>
							<li class="benefit"><i class="material-icons">check</i> Skip all sorts of management headaches</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col s12 m6">
					ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
				<div class="col s12 m6">
					ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
			</div> -->
		</div>
	</div>
</div>
<?php get_footer();