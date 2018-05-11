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
			<div class="col-xs-12 col-lg-4 shadow">
				<?php the_post_thumbnail() ?>
			</div>
			<div class="col-xs-12 col-lg-8" style="margin-top: 15px;">
				<a href="<?php the_permalink(); ?>"><h4> <?php the_title_attribute(); ?></h4></a>
				<p style="color: #0066ff;"><?php knit_theme_posted_on();?> <?php knit_theme_posted_by();?></p>
				<?php the_excerpt(); ?>
					<footer class="entry-footer">
		<?php knit_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
			</div>
		</div>

</div><!-- .entry-content -->

	
	

