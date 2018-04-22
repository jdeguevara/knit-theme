<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package knit-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="row">
			<div class="col-xs-12">

			
				<h1 style="text-align: center; max-width: 550px; margin: 0 auto;"> <?php the_title_attribute(); ?></h1>
				<h3 style="text-align: center; color: #0066ff;"><?php knit_theme_posted_by();?></h3>
				<p style="text-align: center; color: #0066ff;"><?php knit_theme_posted_on();?></p> 
				<?php the_content(); ?>
					<footer class="entry-footer">
						<?php knit_theme_entry_footer(); ?>
					</footer><!-- .entry-footer -->
			</div>
		</div>

	</div><!-- .entry-content -->

	

