<?php
/**
 * Template Name: Home
 */


get_header(); ?>

<div>

<!--Header Image-->
<?php 
	$image= get_field('banner_image');
	
?>
			
				
			<div class="row">
				<div class="col-lg-12">
					<div class="jumbotron" style=" background-repeat:no-repeat; background-image: url(<?php if( $image ): echo $image; endif; ?>);">
							<?php if( get_field('logo') ): ?>
								<img class="home" style="margin-left:410px; margin-top:100px;" src="<?php the_field('logo'); ?>" />
							<?php endif; ?>						
					</div>
				</div>
			</div>




<!---Dynamic Digital Marketing-->
			<div class="container" class="body">
				<div class="row" >
					<div class="col-lg-12">
						<h1 style="margin-top:80px; text-align: center; "><?php the_field('tagline'); ?></h1>
						<p class="white" style="padding:20px; text-align: center; "><?php the_field('ddm'); ?></p>

					</div>
				</div>
			</div>



<!--Services-->

		<div  style=" margin-top:100px; background-color:#F5F5F5; " >
			<div class="container"> 
			<div class="row" >
					<div class= "col-xs-12 col-lg-12"> 
						<h1 style="margin-top:50px; text-align: center; "><?php the_field('serv_tag'); ?></h1>
					</div>

			
					<?php 
		           if( have_rows('services') ):

		           // loop through the rows of data
		             while ( have_rows('services') ) : the_row();

		                 // vars
		                 $serv_img = get_sub_field('serv_img'); 
		                 $serv_txt = get_sub_field('serv_txt');
		                 

		                 ?>

		                 <div class="col-xs-12 col-lg-3" class="body" style=" margin-top: 30px;">
							<img src="<?php if( $serv_img ): echo $serv_img; endif; ?>" />

							<p class="home-serv"><?php if( $serv_txt ): echo $serv_txt; endif; ?></p>
						</div>
							
		            <?php endwhile;
		          endif; ?>

				</div>
			</div>
		</div>

<!--Blog and Resources-->


		
			<div class="row" >
				<!--Resources Section-->
    			<div class="col-xs-12 col-lg-6">
    				
      				<h2 style="margin-top:80px; text-align: left-center; "><?php the_field('resources_left'); ?></h2>	
					

    			</div>	
				<!--Blog Section-->

    			<div class="col-xs-12 col-lg-6" style="background-color: #8ec11a;" > 
    		
    				
      					
      				<h2 style="margin-top:40px; text-align: center-right; color:white; "><?php the_field('blog_right'); ?></h2>	

      				<img class="home" style=" margin-top:20px;" src="<?php the_field('blog_img'); ?>" />
      				

					
      				<p  class="blog-preview" style="order:3;" ><?php the_field('blog_prev'); ?></p>
					

		
    			</div>	
				<div col-lg-3>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
					<p>
						|
					</p>
				</div>
    		</div>
    	</div>
  	</div>


</div>

