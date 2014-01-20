<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>

	<div class="content excerpt">
		<?php //the_content(); ?>
		<?php the_excerpt(); ?>
	</div>

	<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span> | <a href="#">Comments</a></p>

</article>