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
	
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

<script type="text/javascript" src="code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>



<div id="page" class="site">
	

	<!-- #masthead -->
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
		<div class="col-xs-8 col-lg-8">
			<h1 class="header-title">  <?php add_filter( 'the_title', 'max_title_length'); the_title(); ?></h1>

			<?php rewind_posts(); ?>
		</div>
		
		<div class="col-xs-4 col-lg-4">
<!-- 			<div class="btn-group dropleft">
			  <a href="#" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img class="header-logo" src="/wp-content/uploads/2018/04/KNIT-logo-12.jpg" />
			</a>
			</div>
			<div>
				
			</div> -->
<!-- 
			<div class="dropleft show" style="float: right;">
  <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="header-logo" src="/wp-content/uploads/2018/04/00" />
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding: 15px; background-color: rgba(250, 250, 250, 0.95);">
		<?php //wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
  </div>
</div> -->

		</div>


			
	</div>
</div>


	</header><!-- #masthead -->



	<div id="content" class="site-content">
