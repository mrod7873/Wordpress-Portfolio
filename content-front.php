<div id="<?php the_ID(); ?>" class="featured">
	
	<div class="image">
		<?php the_post_thumbnail('featured-post'); ?>
	</div>
	<h3>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>

	</h3>
</div>