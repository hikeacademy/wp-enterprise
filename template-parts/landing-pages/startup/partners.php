<div class="partners">
	<div class="row">
		<div class="col s10">
			<h2>Grandes empresas confiam em nosso trabalho:</h2>
		</div>
	</div>
	<div class="row valign-wrapper">
		<?php
		$partners = new WP_Query(array(
			'posts_per_page' => -1,
			'post_type' => 'partners',
			'order' => 'ASC'
		));

		while($partners->have_posts()) :
			$partners->the_post();
		?>
		<div class="col l2 m3 s4">
			<img class="responsive-img" src="<?php the_field('partner_logo'); ?>" alt="<?php the_field('partner_logo_alt'); ?>">
		</div>
		<?php endwhile; wp_reset_postdata();?>
	</div>
</div>
