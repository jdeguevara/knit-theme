<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Knit_Marketing_2018
 */

?>

</body>
<footer id="colophon">
	<div class="site-footer">
		<div class="container">
			<div class="row" id="footer-sidebar">
				<div id="footer-sidebar1" class="col-sm-6 col-xs-12">
				<?php
				if(is_active_sidebar('footer-1')){
				dynamic_sidebar('footer-1');
				}
				?>
				</div>
				<div id="footer-sidebar2" class="col-sm-3 col-xs-12">
				<?php
				if(is_active_sidebar('footer-2')){
				dynamic_sidebar('footer-2');
				}
				?>
				</div>
				<div id="footer-sidebar3" class="col-sm-3 col-xs-12">
				<?php
				if(is_active_sidebar('footer-3')){
				dynamic_sidebar('footer-3');
				}
				?>
				</div>		
			</div>
		</div>
	</div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
