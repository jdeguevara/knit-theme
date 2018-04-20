<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package knit-theme
 */
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-lg-9 slim-container">
			<div id="primary">
				<main id="main">

							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );

								the_post_navigation(
									array(
						            'prev_text'                  => __( '<i class="fas fa-chevron-circle-left"></i> %title' ),
						            'next_text'                  => __( '%title <i class="fas fa-chevron-circle-right"></i>' ),
						            'in_same_term'               => true,
						            'taxonomy'                   => __( 'post_tag' ),
						            'screen_reader_text' => __( 'Continue Reading' ),
						        ));

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="col-xs-12 col-lg-3 sidebar-content">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>


<?php
get_footer();
