<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abbydylan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abbydylan' ); ?></a>
	<!-- #masthead -->
	<div class="cover-container d-flex h-100 p-3 mx-auto flex-column"> <!-- .cover-container -->
		<header class="masthead">
        	<div class="inner">
				<nav id="site-navigation" class="nav-masthead justify-content-md-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="hamburger-bar"></span>
						<span class="hamburger-bar"></span>
						<span class="hamburger-bar"></span>
						<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'abbydylan' ); ?></span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
        	</div>
      </header>
