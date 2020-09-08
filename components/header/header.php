
<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
	global $customizer_params;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo get_bloginfo('name'); ?></title>
		<meta name="description" content="<?php echo get_bloginfo('description'); ?>">
		<meta property="og:url" content="<?php echo site_url() ?>" />
		<meta property="og:image" content="<?php echo $customizer_params['og_image'] ?>" />
		<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
		<meta name="keywords" content="<?php echo $customizer_params['keywords'] ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
		<body <?php body_class(); ?>>
		<header class="top">
			<div class="container top-content d-flex align-items-lg-start align-items-center justify-flex-between flex-wrap">
				<?php get_template_part('./components/hamburger/hamburger') ?>
				<div class="top-logo">
					<?php the_custom_logo() ?>
				</div>
				<div class="flex-grow-1 d-none d-lg-flex flex-wrap justify-content-between align-items-start">
					<div class="adress d-flex align-items-center">
						<?php get_template_part('./icons/map') ?>
						<div class="c2_semi">
							<?php echo $customizer_params['adress'] ?>
						</div>
					</div>
					<div class="time d-flex align-items-center">
						<?php get_template_part('./icons/clock') ?>
						<div class="c2_semi">
							<?php echo $customizer_params['time'] ?>
						</div>
					</div>
					<div class="top-phone">
						<div class="top-phone-item d-flex justify-content-between">
							<div class="c2_semi">A1</div>
							<a href="tel:<?php echo strPhone( $customizer_params['phone-a1'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-a1'] ?></a>
						</div>
						<div class="top-phone-item d-flex justify-content-between">
							<div class="c2_semi">MTC</div>
							<a href="tel:<?php echo strPhone( $customizer_params['phone-mts'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-mts'] ?></a>
						</div>
						<div class="top-phone-item d-flex justify-content-between">
							<div class="c2_semi">Life</div>
							<a href="tel:<?php echo strPhone( $customizer_params['phone-life'] ) ?>" class="phone c2_semi"><?php echo $customizer_params['phone-life'] ?></a>
						</div>
					</div>
					<button class="mainButton_small modal-trigger" data-target="modalForm" data-description="Заказать звонок">Заказать звонок</button>

				</div>
				<?php get_template_part('./components/navigation/contacts/trigger') ?>
			</div>
			<div class="container d-none d-lg-block">
				<?php get_template_part('./components/navigation/navigation-primary/navigation-primary') ?>
			</div>
		</header>