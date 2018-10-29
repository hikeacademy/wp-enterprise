<?php
/**
 * Template Name: HomeTemplate
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hike_Trampos
 */

get_header();
?>
<div class="index">
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
		
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="col s12 m7">
						<h1 class="title">The new way of getting software done</h1>
						<p class="subtitle">Hike trains untapped talent from Latin America and manages them in delivering high-quality solutions for businesses world-wide. The next one could be you.</p>
						<a href="/contact" class="waves-effect waves-light btn-large">I NEED GOOD SOFTWARE</a>
					</div>

					<div class="col s12 m5">
						<img src="<?php echo get_template_directory_uri() . '/images/front-page/hero.svg'; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="solution" class="section first-section">
		<div class="container">
			<div class="problem">
				<div class="row">
					<div class="col s12 m5 offset-m1">
						<h1 class="title">Your problem <i class="material-icons">gps_fixed</i></h1>
						<p class="description">Do you need a website built from scratch? Do you want to migrate what you already have to Wordpress? Do you want design + implementation? Do you only need implementation? Get in touch and we can provide you with more information based on your needs!</p>
					</div>

					<div class="col s12 m5 offset-m1">
						<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/yourproblem.svg'; ?>">
					</div>
				</div>	
			</div>
			
			<div class="solution">
				<div class="row">
					<div class="col s12 m5 offset-m1">
						<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/hiker.svg'; ?>">
					</div>
					<div class="col s12 m5 offset-m1">
						<h1 class="title">Our solution <i class="material-icons">wb_incandescent</i></h1>
						<p class="description">We build websites to convey companies' messages clearly, with beautiful design, supported by solid engineering implementation. Our focus for now is on Wordpress websites, since they are a great fit for high-growth businesses that need a good Content Management System.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="flow" class="section second-section center-align flow">
		<div class="container">
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<i class="material-icons">group_work</i>
					<h1 class="title">With the flow</h1>
					<p class="description"><b>Flow</b> is the mental state of operation in which a person performing an activity is fully immersed in a feeling of energized focus, full involvement, and enjoyment in the process of the activity. We delivery a flow-y experience.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4">
					<div class="flow-part">
						<div class="img-container z-depth-2">
							<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/flow/ic-scope.svg'; ?>">	
						</div>
						
						<p><b>Scope</b> is key. Tell us your challenge, we give you some insignts, we come up with a proposal. And then we repeat, until everyone is happy.</p>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="flow-part">
						<div class="img-container z-depth-2">
							<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/flow/ic-delivery.svg'; ?>">	
						</div>
						
						<p><b>Delivery</b> is where the magic happens. We have weekly reports to show you what we've accomplished. This way you can give early feedback and avoid undesirable surprises.</p>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="flow-part">
						<div class="img-container z-depth-2">
							<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/flow/ic-maintainance.svg'; ?>">	
						</div>
						
						<p><b>Maintainance</b> is when we give you all the support you need in fixing the small things we couldn't foresee at scope time and answer any questions you might have.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section third-section">
		<div class="container">
			<div class="row valign-wrapper logos">
				<div class="col m2 hide-on-small-only">
				</div>
				<div class="col s12 m2">
					<img class="logo responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/logos/qr.svg'; ?>">
				</div>
				<div class="col s12 m2">
					<img class="logo responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/logos/mobly-gray.svg'; ?>">
				</div>
				<div class="col s12 m2">
					<img class="logo responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/logos/cubo-gray.png'; ?>">
				</div>
				<div class="col s1 m2 hide-on-small-only">
				</div>
			</div>

			<div class="row">
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="<?php echo get_template_directory_uri() . '/images/front-page/hike.png'; ?>">
						</div>
						<div class="card-content">
							<p>Qulture Rocks</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="<?php echo get_template_directory_uri() . '/images/front-page/qr.png'; ?>">
						</div>
						<div class="card-content">
							<p>Hike Academy</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-image">
							<img src="<?php echo get_template_directory_uri() . '/images/front-page/your-website.png'; ?>">
						</div>
						<div class="card-content">
							<p>Seu Negócio</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section fourth-section">
		<div class="container">
				<div class="row valign-wrapper">
					<div class="col s12 m6">
						<h2 class="title">Ready to rock?</h2>
						<p class="subtitle">Get in touch and get a quote.</p>
					</div>
					<div class="col s12 m6">
						<a href="/contact" class="right waves-effect waves-light btn-large">I NEED GOOD SOFTWARE</a>
					</div>
				</div>
			</div>
	</div>

	<div class="divider"></div>
</div>

<?php
get_footer();
