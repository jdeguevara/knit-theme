<?php
/**
	*Template Name: Individual Service

	*/
	get_header(); ?>

<!--Doodle-->

<?php 
	$doodle= get_field('doodle');
	
?>

<div class="container" >
	
		<div class="col-lg-12">

			<img class="doodle" src="<?php if( $doodle ): echo $doodle; endif; ?>" />

		</div>
	
</div>



<!-- Vision -->
<div class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<h2 class="text-center"><?php the_field('section_title_1'); ?></h2>
				<p style="font-size: 19px;"><?php the_field('section_text_1'); ?></p>
			</div>
			<div class="col-xs-12 col-md-6 text-center">
				<img class="about" src="<?php the_field('section_image_1'); ?>" />
			</div>
		</div>
	</div>
</div>



<?php  


get_footer();

?>