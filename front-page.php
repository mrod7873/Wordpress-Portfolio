		<?php 
			/*
			Template Name: Front Page
			*/
		 ?>


		<?php get_header(); ?>

		<div class="frontpage">
			<div class="homecontent">
			<?php 
// un the wordpress loop 
					if (have_posts()) : 
						while (have_posts()) : 
							the_post(); 
							//the_content('Read the rest of this entry »');
							// get_template_part('content', 'front');
							//look for a file named content.php 
							the_content();
						endwhile; 
					endif;		
			 ?>
			</div><!-- end home content -->
			<?php 

			$args = array('category_name' => 'featured');
			$featured = new WP_Query($args);

				//run the wordpress loop 
					if ($featured->have_posts()) : 
						while ($featured->have_posts()) : 
							$featured->the_post(); 
							//the_content('Read the rest of this entry »');
							get_template_part('content', 'front');
							//look for a file named content.php 
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


		<?php get_footer(); ?>
		







