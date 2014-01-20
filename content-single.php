<article id="<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<header>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<?php  if((get_post_meta($post->ID, "link_url", true))) { ?>

	<div id="bio">
		<a href="<?php echo get_post_meta($post->ID, "link_url", true); ?>">Visit Site</a>	
	</div>
<?php } ?>
<div class="image">
		<?php the_post_thumbnail('single-post'); ?>
	</div>
	<div class="content">
		
		<?php the_content(); ?>
		<?php //the_excerpt(); ?>

		<!--<a href="<?php get_post_meta(the_ID(), 'url', true) ?>">visit the site</a>-->
		
	</div>

	<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span> | <a href="#">Comments</a></p>

	<?php comments_template(); ?>
</article>