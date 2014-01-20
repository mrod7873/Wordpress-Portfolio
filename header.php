<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sassy Theme</title>

	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-face.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="masthead">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php  bloginfo('description');?></h2>
			</div>


			<div class="headerimage">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mta-bus-a.jpg" alt="manhattan bokeh">
			</div>
			<?php get_search_form( $echo = true) ?>
</header>
			<?php 

			$defaults = array(
				'theme_location'  => 'main',
				'container'       => 'div',
				'container_class' => 'menu'
			);	

			wp_nav_menu( $defaults );
			?>
					

		
