<?php
	wp_nav_menu(array(
		'theme_location' 	=> 'menu-primary',
		'container' 		=> false,
		'items_wrap' 		=> '<ul class="%2$s">%3$s</ul>',
		'menu_id'        	=> false,
		'menu_class'		=> 'navigation top-menu d-flex justify-content-between w-100',
	));
?>