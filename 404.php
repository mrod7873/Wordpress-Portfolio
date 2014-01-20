

		<?php get_header(); ?>


		<div class="posts">
<!--Something with 404 -->
		<div class="nocontent">
			<h2>404 page not found</h2>
			<p>Sorry, we couldn't find your page.</p>
			<p>Maybe you can search for it.</p>

		<?php get_search_form( $echo = true) ?>

			</div>

		</div> <!-- end posts -->

		<?php get_sidebar(); ?>

		<?php get_footer(); ?>
		







