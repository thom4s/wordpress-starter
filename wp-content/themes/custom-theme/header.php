<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/assets/img/favicon.png">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'custom-starter' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="header-top">
			<div class="wrapper flex -space -center-y">
				<nav id="header-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header-top', 'menu_id' => 'header-menu', 'container' => false, 'menu_class' => 'flex gap-l -center-y' ) ); ?>
				</nav>

				<nav class="lang_menu flex -center-y">
					<ul id="" class="flex gap-xs">
						<?php pll_the_languages(array( 'display_names_as' => 'slug') );?>
					</ul>
				</nav>
			</div>
		</div>

		<div class="header-bottom flex -space -center-y wrapper">

			<?php
			$logo = get_field('logo_du_site', 'option'); 
			if( $logo ): ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
					<img src="<?php echo esc_url( $logo ); ?>" alt="Logo">
				</a>
			<?php endif; ?>
			
			<nav id="header-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'header-menu', 'container' => false, 'menu_class' => 'flex gap-l -center-y' ) ); ?>
			</nav>

			<nav>
				<a href="#" class="btn -primary">CTA</a>
			</nav>
		</div>

    </header><!-- #masthead -->