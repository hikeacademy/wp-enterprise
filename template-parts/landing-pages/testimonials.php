<?php
	$testimonials = new WP_Query(array(
		'posts_per_page' => -1,
		'post_type' => 'testimonials',
		'meta_key' => 'startup_testimonial',
		'meta_value' => is_startup_page(),
		'order' => 'ASC'
	));
 ?>

		<div class="testimonials">
			<div class="row">
				<h2 <?php echo is_startup_page() ? 'class="hide"' : NULL ; ?>>Depoimentos</h2>
			</div>
			<div class="testimonials-cards">
				<!-- Card -->
				<?php
						while($testimonials->have_posts()):
							$testimonials->the_post();
						?>
							<div class="card-panel">
								<div class="row">
									<div class="col m1 s2 offset-m1">
										<img class="circle responsive-img" src="<?php the_field('author_photo'); ?>" alt="image">
									</div>
									<div class="col s9">
										<i>&quot;<?php the_field('testimonial'); ?>&quot;</i>
										<div class="author-data">
											<p><?php the_title(); ?></p>
											<span><?php the_field('author_role'); ?></span>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata();?>
			</div>
			<div class="slider-controls">
				<i class="material-icons prev">chevron_left</i>
				<i class="material-icons next">chevron_right</i>
			</div>
		</div>
