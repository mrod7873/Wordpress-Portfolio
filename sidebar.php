		<div class="sidebar">
			<?php // Dynamic Sidebar
			if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'main' ) ) : ?>
			
				<!-- Sidebar fallback content -->
			
			<?php endif; // End Dynamic Sidebar main ?>
		</div> <!-- end sidebar -->