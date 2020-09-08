<?php
/**
 * _s Theme Customizer
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wordpress_starter_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// echo '<pre>'. print_r($wp_customize, true).'</pre>';
	

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wordpress_starter_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wordpress_starter_theme_customize_partial_blogdescription',
		) );
	}

		// Theme Custom Customizer

		

		$wp_customize->remove_section( 'colors' );
		$wp_customize->remove_section( 'background_image' );
		$wp_customize->remove_panel( 'widgets' );
		$wp_customize->remove_section( 'static_front_page' );


		$wp_customize->add_section(
			'phones_section', // id секции, должен прописываться во всех настройках, которые в неё попадают
			array(
				'title'     => 'Номера телефонов',
				'priority'  => 100, 
				'description' => 'Номера телефонов' 
			)
		);
		$wp_customize->add_section(
			'contacts_section', // id секции, должен прописываться во всех настройках, которые в неё попадают
			array(
				'title'     => 'Контактная информация',
				'priority'  => 101, 
				'description' => 'Контактная информация' 
			)
		);
		$wp_customize->add_section(
			'percent_section', // id секции, должен прописываться во всех настройках, которые в неё попадают
			array(
				'title'     => 'Процентная ставка',
				'priority'  => 103, 
				'description' => 'Наша процентная ставка' 
			)
		);





		$wp_customize->add_setting('keywords', array(
			'default' => '',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'keywords',
			array(
				'label' => __('Ключевые слова', 'clean'),
				'section' => 'title_tagline',
				'type' => 'textarea',
			)
		);


		$wp_customize->add_setting('phone-a1', array(
			'default' => '+375 (00) 000-00-00',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'phone-a1',
			array(
				'label' => __('Номер телефона A1', 'clean'),
				'section' => 'phones_section',
				'type' => 'text',
			)
		);


		$wp_customize->add_setting('phone-mts', array(
			'default' => '+375 (00) 000-00-00',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'phone-mts',
			array(
				'label' => __('Номер телефона МТС', 'clean'),
				'section' => 'phones_section',
				'type' => 'text',
			)
		);


		$wp_customize->add_setting('phone-life', array(
			'default' => '+375 (00) 000-00-00',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'phone-life',
			array(
				'label' => __('Номер телефона life', 'clean'),
				'section' => 'phones_section',
				'type' => 'text',
			)
		);

		
		$wp_customize->add_setting('adress', array(
			'default' => '',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'adress',
			array(
				'label' => __('Адрес', 'clean'),
				'section' => 'contacts_section',
				'type' => 'text',
			)
		);


		$wp_customize->add_setting('map', array(
			'default' => '',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'map',
			array(
				'label' => __('Код карты', 'clean'),
				'section' => 'contacts_section',
				'type' => 'textarea',
			)
		);

		
		$wp_customize->add_setting('time', array(
			'default' => '',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'time',
			array(
				'label' => __('Время работы', 'clean'),
				'section' => 'contacts_section',
				'type' => 'textarea',
			)
		);

		
		$wp_customize->add_setting('jur-adress', array(
			'default' => '',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'jur-adress',
			array(
				'label' => __('Юридический адрес', 'clean'),
				'section' => 'contacts_section',
				'type' => 'textarea',
			)
		);

		
		$wp_customize->add_setting('instagram', array(
			'default' => '',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'instagram',
			array(
				'label' => __('instagram', 'clean'),
				'section' => 'contacts_section',
				'type' => 'text',
			)
		);


		$wp_customize->add_setting('percent', array(
			'default' => '25',
			//'transport'=>'postMessage',
		));
		$wp_customize->add_control(
			'percent',
			array(
				'label' => __('Укажите процентную ставку Лизинга'),
				'section' => 'percent_section',
				'type' => 'number',
			)
		);


		$wp_customize->add_setting('percent_credit', array(
			'default' => '16',
		));
		$wp_customize->add_control(
			'percent_credit',
			array(
				'label' => __('Укажите процентную ставку Кредита'),
				'section' => 'percent_section',
				'type' => 'number',
			)
		);


		$wp_customize->add_setting(
			'og_image',
			array(
				'default'      => '', // по умолчанию - фоновое изображение не установлено
				// 'transport'    => $true_transport
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'og_image',
				array(
					'label'    => 'Постер для социальных сетей',
					'settings' => 'og_image',
					'section'  => 'title_tagline'
				)
			)
		);


		
}
add_action( 'customize_register', 'wordpress_starter_theme_customize_register' );





/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wordpress_starter_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wordpress_starter_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wordpress_starter_theme_customize_preview_js() {
	wp_enqueue_script( 'wordpress-starter-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wordpress_starter_theme_customize_preview_js' );
