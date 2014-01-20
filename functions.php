<?php 
/*=========================
		FEATURED IMAGES
===========================*/
function set_featured_images(){
	//add support for featured images
	add_theme_support('post-thumbnails');

	//set the custom image sizes
	add_image_size('feature-home', 240, 200, true);
	add_image_size('feature-sidebar', 180, 180, true);
	add_image_size('single-post', 720, 9999);
	add_image_size( 'test', 150, 150, true);
	add_image_size('test2', 300, 300, true);
}//end function set_featured_images

add_action('after_setup_theme', 'set_featured_images');

/*=========================
 		NAVIGATION MENUS
 ==========================*/
function theme_nav_menus(){
	register_nav_menus( array(
		'main'=>'Main Menu',
		'footer'=>'Footer Menu'

		) );
}

add_action('init','theme_nav_menus' );


/*=========================
 		WIDGETS
 ==========================*/
function sidebar_widgets_init(){
	register_sidebar( array(
		'name' => 'The Main sidebar',
		'id' => 'main'
		)
	);

	register_sidebar( array(
		'name' => 'The Footer Widget Area',
		'id' => 'footer'
		)
	);
}

// adds the widgets to the widgets init action
add_action( 'widgets_init', 'sidebar_widgets_init');

?>