<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div>
<?php 


		$image= get_field('banner_image');
		$logo= get_field('logo');

		
?>





			<div  class="jumbotron" style=" background-image: url(<?php if( $image ): echo $image; endif; ?>);">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">


						</div>
					</div>
				</div>
			</div>
	

		</div>

	