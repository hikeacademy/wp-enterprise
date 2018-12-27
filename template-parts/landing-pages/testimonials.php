<div class="testimonials">
	<h2>Depoimentos</h2>
	<div class="testimonials-cards">
		<!-- Card -->
		<?php 

			$startup_page = get_page_template_slug() == 'startup-template.php' ? 1 : 0; 

			$testimonials = new WP_Query(array(
				'posts_per_page' => -1,
				'post_type' => 'testimonials',
				'meta_key' => 'startup_testimonial',
				'meta_value' => $startup_page,
				'order' => 'ASC'
			));
		
			while($testimonials->have_posts()):
				$testimonials->the_post(); 
		?>
		<div class="card-panel">
			<div class="row">
				<div class="col s2">
					<img class="circle responsive-img" src="<?php the_field('author_photo'); ?>" alt="image">
				</div>
				<div class="col s10">
					<i>&quot; <?php the_field('testimonial'); ?> &quot;</i>
					<div class="author-data">
						<p><?php the_field('author_name'); ?></p>
						<span><?php the_field('author_role'); ?></span>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>	
	</div>
	<div class="slider-controls">
		<i class="material-icons prev">chevron_left</i>
		<i class="material-icons next">chevron_right</i>
	</div>
</div>