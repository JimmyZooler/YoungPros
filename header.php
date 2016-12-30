<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Young_Pros
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'youngpros' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'youngpros' ); ?></button>-->
                        <div class="top-bar">
                            <div class="container">
                                <div class="top-bar-section logo-section">
                                    <div class="left">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/young-pros-show-logo.png"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="top-bar-section">
                                    <div class="social-menu right">
                                        <ul class="social-menu-icons">
                                            <li class="social-menu-icon"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-menu-icon"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li class="social-menu-icon"><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li></ul>
                                    </div>
                                    <div class="right">
                                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                                    </div>  
                                </div>
                            </div>
                        </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
