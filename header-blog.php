<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package knit-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=0">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="/wp-content/themes/knit-theme/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/knit-theme/slick/slick-theme.css"/>
	
	
	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<div id="page" class="site">


	<nav class="navbar">
		<div class="container" style="padding: 0;">
			<div class="col-xs-12 col-sm-3 col-lg-3">
				<a class="navbar-brand" href="/">
					<img class="header-logo" src="/wp-content/uploads/2018/05/KNIT-logo-23-e1484944550631.png" />
				</a>
			</div>
			<div class="navbar-collapse menu-main col-xs-12 col-sm-9 col-lg-9">
			<?php 
			wp_nav_menu( array( 
					'theme_location' => 'menu-1',
					'container' => false,
					'walker' => new Walker_Nav_Primary() 
					) 
				); 
			?>
			</div>
		</div>
	</nav>

	<header id="masthead" class="site-header row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="/blog"><h1 style="color: white;">  Blog</h1></a>

					<?php rewind_posts(); ?>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->


	<div id="content" class="site-content">
