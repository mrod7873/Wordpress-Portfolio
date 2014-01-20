

		<?php get_header(); ?>


		<div class="posts" id="search-results">
			<h1>Search Results</h1>


<?php 
// run the wordpress loop
if (have_posts()) :
	while (have_posts()) : the_post();
	//the_content('Read the rest of this entry »');
	get_template_part('content','search'); //look for a file named content.php
	endwhile;
	else : 
?>

<!--Something that happens when the search is empty. -->
	<div class="nocontent">
		<h2>Sorry, there were no posts for your search.</h2>
		<p>Search Again? <?php get_search_form(); ?></p>
	</div>
<?php endif; ?>		

		</div> <!-- end posts -->

		<?php get_sidebar(); ?>

		<?php get_footer(); ?>
		







