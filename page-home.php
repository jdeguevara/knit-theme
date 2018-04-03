<?php
/**
 * Template Name: Home
 */

get_header(); ?>


<?php 


	$page_title= get_field('page_title');
	$image= get_field('banner_image')
?>





<div class="jumbotron" style=" background-image: url(<?php if( $image ): echo $image; endif; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
		

				<h1 class=" "><?php if( $page_title ): echo $page_title; endif; ?></h1>
			</div>
		</div>
	</div>
</div>

<div>
	<h1 class=" "><?php if( $page_title ): echo $page_title; endif; ?></h1>

</div>