<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package energy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'energy' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'energy' ); ?></button>-->
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            <?php dynamic_sidebar( 'main-menu' ); ?>
        </nav><!-- #site-navigation -->
		<div class="site-branding">
			<?php if ( is_front_page() ) : ?>
			
            
                <div id="header">
                    <span class="logo icon fa-cube"></span>
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); /* WPCS: xss ok. */ ?></p>
                </div>
                <video autoplay loop class="fillWidth">
                    <source src="<?php echo esc_url( get_stylesheet_directory_uri( ) ); ?>/video/solar-b.mp4" type="video/mp4" />
                </video> 
			<?php else : ?>
                                <!--<div id="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="logo icon fa-power-off"></span></a>
                    </div> -->
                
			<?php endif; ?>
        </div><!-- .site-branding -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
