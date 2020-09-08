<?php
	wp_nav_menu(array(
		'theme_location' 	=> 'menu-mobile',
		'container' 		=> false,
		'items_wrap' 		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'menu_id'        	=> 'slide-out',
		'menu_class'		=> 'navigation sidenav mobile-menu',
	));
?>