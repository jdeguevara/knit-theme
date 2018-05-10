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
	
		<div class="col-lg-12" style="margin-top:50px;">

			<img class="doodle" src="<?php if( $doodle ): echo $doodle; endif; ?>" />

		</div>
	
</div>


 
<!--Services How and Includes -->

<div class="white" style="background-color:#F5F5F5; ">
		<div class="row">
			
			<div class="col-xs-12 col-lg-6">
				<h2 class="text-center"><?php the_field('section_title_1'); ?></h2>
				<p class="service-how" ><?php the_field('section_text_1'); ?></p>
			</div>
			
			
			<div class="col-xs-12 col-lg-6 text-center">
				
				<h2 class="text-center"><?php the_field('section_title_2'); ?></h2>
				<div class="container">
 				<ul>
				<?php 
		           if( have_rows('includes') ):

		           // loop through the rows of data
		             while ( have_rows('includes') ) : the_row();

		                 // vars
		                 $includes = get_sub_field('includes_list'); ?>
		                 <li class="services-includes" style="left center no-repeat; padding-left: 35px; margin: 20px 0; font-size: 19px;"><?php if( $includes ): echo $includes; endif; ?></li>
		            <?php endwhile;
		          endif; ?>
      			</ul>
				</div>
			</div>

			<div class=" d-none d-md-block col-lg-12">
							<a  class="call-button" href="<?php the_field('call_button');?>" target="_blank" style="color:white;">Contact Us</a>
					</div>

		</div>
	
</div>



<?php  


get_footer();

?>