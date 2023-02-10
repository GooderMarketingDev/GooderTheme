<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/ara2hvo.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.min.css">


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/output.css">

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<a id="skip-content" href="#content" title="Skip to Main Content" class="skip-main" >Skip to Main Content</a>
	<header id="masthead" class="site-header fixedHeader">
			<div id="topbar">
				<div class="row">
					<a href="<?php echo get_site_url(); ?>/contact/" class="button">Get Started</a>
					<div class="headerinfo">
						<a href="mailto:info@aodaweb.com" class="headeremail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/EmailIcon.png" width="16" alt="Email Icon"> info@aodaweb.com</a> <a href="tel:+1705229-571" class="headerphone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phoneicon.png" width="16" alt="Phone Icon"> 705-229-2571</a> 
					</div>
				</div>
			</div>
			<div id="bottombar">
					<div class="row">
						
					<div class=" site-logo" id="logo">
						<div class="logo-text">
							<a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AodaWeb_Logo_Web.png" width="46" alt="AODA Web Accessibility Logo"></a>
							<a href="<?php echo get_site_url(); ?>" title="Home" aria-label="AODA Web Accessibility Home" class="full-text">
							AODA Web Accessibility
							</a>

						</div>
					</div>
					<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">
						<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?><div class="container"><?php endif; ?>
							<?php
								wp_nav_menu( array(
									'theme_location'  => 'menu-1',
									'menu_id'         => 'primary-menu',
									'container'       => 'div',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'primary-menu-wrap',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '__return_false',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 2,
									'walker'          => new WP_bootstrap_4_walker_nav_menu()
								) );
							?>
						<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?></div><!-- /.container --><?php endif; ?>
					</nav><!-- #site-navigation -->
				
				</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<?php
