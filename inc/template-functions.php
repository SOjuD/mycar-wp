<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package _s
 */





/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wordpress_starter_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'wordpress_starter_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wordpress_starter_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'wordpress_starter_theme_pingback_header' );




//  отключить обновления WordPress
add_filter('pre_site_transient_update_core', function($a) {return null;} );
wp_clear_scheduled_hook('wp_version_check');


// Отключение обновления шаблонов (тем) WordPress
// Этот код отключает оповещения о выходе новых обновлений тем:

remove_action('load-update-core.php','wp_update_themes');
add_filter('pre_site_transient_update_themes', function($a) {return null;} );
wp_clear_scheduled_hook('wp_update_themes');



// Отключение обновления плагинов WordPress
// Для отключения обновлений плагинов вставьте следующий код:
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', function($a) {return null;} );
wp_clear_scheduled_hook( 'wp_update_plugins' );





function strPhone($option) {
    $phone = $option;
    $phone = str_replace(['(',')',' ', '-'], '', $phone); 
    return $phone;
}


 // ---------------------------------Удаляем параграф вокруг the_content();---------------------------------

 remove_filter( 'the_content', 'wpautop' );
 remove_filter( 'the_excerpt', 'wpautop' );
 
 //------------------------------------------------конец------------------------------------------------


// ---------------------------------новый пункт меню в админке(для слайдера)---------------------------------

add_action('init', 'banners');

function banners(){
	register_post_type('slider', array(
		'public'			=> true,
		'supports'			=> array('title', 'editor', 'thumbnail'),
		'menu_possition'	=> 110,
		'menu_icon'			=> admin_url().'images/align-center.png',
		'labels'			=> array(
			'name' 			=> 'Слайдер',
			'all_items'		=> 'Все слайды',
			'add_new'		=> 'Добавить новый слайд',
			'add_new_item'	=> 'Новый слайд'
		)
		));
}


//------------------------------------------------конец------------------------------------------------



function dumper($data) {
    echo '<pre>'.print_r($data, true).'</pre>';
}



//------------------------------------удаляет H2 из шаблона пагинации------------------------------------



add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

	return '
	<nav class="d-flex justify-content-center align-items-center %1$s" role="navigation">
		%3$s
	</nav>    
	';
}


