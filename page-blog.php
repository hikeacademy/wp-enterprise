<?php
	/* 
	 * Template Name: BlogTemplate
	 */
	get_header();
?>
<div class="blog">
	<nav>
		<div class="container">
			<div class="nav-wrapper">
		      <a href="/" class="brand-logo"><img src="<?php echo get_template_directory_uri() . '/images/hike-black.png'; ?>"/></a>

		    </div>
		</div>
	</nav>

	<div class="container">
		<h1 class="title">Blog</h1>

		<div class="posts-container">
			<?php
			query_posts('posts_per_page=5');
			while ( have_posts() ) :
				the_post();
				$image_id = get_post_thumbnail_id();
				$image_src = "";
				if($image_id) {
					// Get the URL for the full sized image
			    	$image_src = wp_get_attachment_url($image_id);
				}
			?>

			<div class="row">
				<div class="col s12">
					<div class="post-card">
						<img src="<?php echo $image_src; ?>">
						<div class="post-title">
							<?php the_title(); ?>	
						</div>

						<div class="post-content">
							<?php the_content(); ?>	
						</div>
					</div>
				</div>
			</div>

			<?php
			endwhile;
			?>
		</div>
	</div>
</div>
<?php get_footer();