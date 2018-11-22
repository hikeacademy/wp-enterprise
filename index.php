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
						<h1 class="title">The new way of getting websites done</h1>
						<p class="subtitle">Hike trains untapped talent from Latin America and manages them in delivering high-quality solutions for businesses world-wide. The next one could be you.</p>
						<a href="/contact" class="waves-effect waves-light btn-large">I NEED A GORGEOUS WEBSITE</a>
					</div>

					<div class="col s12 m5 hide-on-med-and-down">
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
						<h2 class="title">Your problem <i class="material-icons">gps_fixed</i></h2>
						<p class="description">Do you need a website built from scratch? Do you want to migrate what you already have to Wordpress? Do you want design + implementation? Do you only need implementation? Get in touch and we can provide you with more information based on your needs!</p>
					</div>

					<div class="col s12 m4 offset-m1 hide-on-small-only">
						<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/yourproblem.svg'; ?>">
					</div>
				</div>	
			</div>
			
			<div class="solution">
				<div class="row">
					<div class="col s12 m4 offset-m1">
						<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/oursolution.svg'; ?>">
					</div>
					<div class="col s12 m5 offset-m1">
						<h2 class="title">Our solution <i class="material-icons">wb_incandescent</i></h2>
						<p class="description">We build websites to convey companies' messages clearly, with beautiful design, supported by solid engineering implementation. We focus on building websites for high-growth businesses that need a good Content Management System.</p>
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
					<h2 class="title">With the flow</h2>
					<p class="description"><span class="black-font"><b>Flow</b></span> /flō/ <b>noun</b> is the mental state of operation in which a person performing an activity is fully immersed in a feeling of energized focus, full involvement, and enjoyment in the process of the activity. <span class="black-font">We delivery a flow-y experience.</span></p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4">
					<div class="flow-part">
						<div class="img-container z-depth-2">
							<img class="responsive-img" src="<?php echo get_template_directory_uri() . '/images/front-page/flow/ic-scope.svg'; ?>">	
						</div>
						
						<p><b>Scope</b> is the starting point. Tell us your challenge, we give you some insights, we come up with a proposal. And then we negotiate, until everyone is happy.</p>
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
						
						<p><b>Maintenance</b> is when we give you all the support you need in making your website better with small improvements we couldn't foresee at scope time, as well as answering any questions you might have.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section third-section">
		<div class="container">
			<div class="row center-align">
				<h2 class="title">partners & portfolio</h2>
			</div>

			<div class="logos">
				<div class="row center-align">
					<div class="col s12 m2 offset-m3">
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
			</div>

			<div class="row">
				 <div class="col s12 m4">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Hike Academy</span>
							<p>You already know us. This website was designed and implemented by our own team.</p>
						</div>
						<div class="card-action">
				          <a href="#">Check our work</a>
				        </div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Qulture Rocks</span>
							<p>Backed by Y Combinator, Qulture Rocks provides teams with their next perfomance management platform.</p>
						</div>
						<div class="card-action">
				          <a href="http://qulture.rocks/" target="_blank">Check our work</a>
				        </div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Your Business</span>
							<p>The next one can be you! Interested in trying it out? Contact us and see the magic unfold.</p>
						</div>
						<div class="card-action">
				          <a href="/contact" target="_blank">Try our work</a>
				        </div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="section fourth-section">
		<div class="container">
				<div class="row">
					<div class="col s12 m6">
						<h2 class="title">Ready to rock?</h2>
						<p class="subtitle">Get in touch and get a quote.</p>
					</div>
					<div class="col s12 m6">
						<a href="/contact" class="waves-effect waves-light btn-large cta">I NEED A GORGEOUS WEBSITE</a>
					</div>
				</div>
			</div>
	</div>

	<div class="divider"></div>
</div>

<?php
get_footer();
