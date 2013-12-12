<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Hydrus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); 
						bloginfo('name');
			?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hydrus' ); ?></a>

	<?php
	    wp_nav_menu( array(
	        'menu'              => 'primary',
	        'theme_location'    => 'primary',
	        'depth'             => 2,
	        'container'         => 'div',
	        'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
	        'menu_class'        => 'nav navbar-nav',
	        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	        'walker'            => new wp_bootstrap_navwalker())
	    );
	?>
			</nav><!-- #site-navigation -->
		</div> <!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
