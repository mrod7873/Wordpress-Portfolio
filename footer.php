<footer>
			<div class="footer-menu">
				<?php 

			$defaults = array(
				'theme_location'  => 'footer',
				'container'       => 'div',
				'container_class' => 'menu'
			);	

			wp_nav_menu( $defaults );
			?>
			</div> <!-- end menu -->

			<p class="copyright">&copy; 2013 by Michael Rodriguez</p>

			<!--<p class="designedby">designed by Michael Rodriguez</p>-->
		</footer>

	</div> <!-- end wrapper -->
	<?php wp_footer(); ?>
</body>
</html>