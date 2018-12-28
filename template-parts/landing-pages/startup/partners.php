<div class="partners">
	<h2>Great companies that trust our work</h2>	
	<div class="row">
		<?php
		$partners = new WP_Query(array(
			'posts_per_page' => -1,
			'post_type' => 'partners',
			'order' => 'ASC'
		));
	
		while($partners->have_posts()) :
			$partners->the_post();
		?>
		<div class="col l3 m4 s6">
			<img class="responsive-img" src="<?php the_field('partner_logo'); ?>" alt="<?php the_field('partner_logo_alt'); ?>">
		</div>	
		<?php endwhile; wp_reset_postdata();?>
	</div>
</div>