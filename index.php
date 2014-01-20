		<?php get_header(); ?>

		<div class="posts">
			
			<?php 
				//run the wordpress loop 
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							//the_content('Read the rest of this entry »');
							get_template_part('content'); //look for a file named content.php 
						endwhile; 
					else : 
				?>
					<!-- Something that happens when a post isn’t found. -->
						<div class="nocontent">
							<h2>No Posts Found</h2>
							<p>It looks like you haven't made any posts on your blog.</p>
						</div>
				<?php endif; ?>
			
		</div> <!-- end posts -->

		<?php get_sidebar(); ?>

		<?php get_footer(); ?>
		







