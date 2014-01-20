

<?php get_header(); ?>

<div class="posts">


<?php 
// wordpress loop
if (have_posts()) :
	while (have_posts()) : the_post();
// retrieves the content
	get_template_part('content', 'page');
	endwhile;
	endif;
?>

</div> <!-- end posts -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>