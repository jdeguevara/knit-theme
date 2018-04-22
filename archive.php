<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package knit-theme
 */

get_header('blog');
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-lg-9">
			<div id="primary">
				<main id="main">

		<?php if ( have_posts() ) : ?>

			
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			
			<?php
						

			/* Start the Loop */
						while ( have_posts() ) :

							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content-categories', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :


				endif;
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

