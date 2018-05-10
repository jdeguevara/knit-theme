<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package knit-theme
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-lg-9">
			<div id="primary">
				<main id="main">


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main> <!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-xs-12 col-lg-3 sidebar-content">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php

get_footer();
