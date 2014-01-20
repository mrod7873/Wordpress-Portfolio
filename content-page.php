
<div class="posts">

<h2 class="post-title">

<?php the_title(); ?>

</h2>

	<?php the_content(); ?>

<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
<a href="#">
 	<?php if( comments_open( )): ?>
 		<?php comments_popup_link( 'No Comments','1 comment', '% comments'); ?>
 	<?php else: ?>
 	 	comments closed
 	<?php endif; ?>
</a>

<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_link(); ?></span> | <a href="#">Comments</a></p>

</div>

<?php comments_template(); ?>
</article>