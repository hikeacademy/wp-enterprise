<div id="faq" class="faq">
	<div class="row">
		<h2>Perguntas frequentes</h2>
	</div>
	<ul class="collapsible">
		<?php


			$questions = new WP_Query(array(
				'posts_per_page' => -1,
				'post_type' => 'questions',
				'meta_key' => 'startup_question',
				'meta_value' => is_startup_page(),
				'order' => 'ASC'
			));


			while($questions->have_posts()):
				$questions->the_post();
		?>
			<li>
				<div class="collapsible-header"><?php the_title(); ?><i class="material-icons">keyboard_arrow_down</i></div>
				<div class="collapsible-body"><span><?php the_field('question_answer'); ?></span></div>
			</li>
		<?php endwhile; wp_reset_postdata();?>
</div>
