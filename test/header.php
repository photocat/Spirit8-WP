<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header section">
		<div class="content">
			<h1 class="header__logo">SPIRIT8</h1>
			<input class="burger__trigger" id="burger" type="checkbox" />
			<label for="burger" class="burger__icon">
				<span class="buger__icon__elem"></span>
				<span class="buger__icon__elem"></span>
				<span class="buger__icon__elem"></span>
			</label>
			<nav>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'      => 'ul',
					'menu_class'     => 'menu',
					'menu_items_class' => 'menu__item',
				) );
				?>
		</nav>
		</div>
	</div>
