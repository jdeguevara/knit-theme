<?php
/**
	*Template Name: Services

	*/
	get_header(); ?>


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
		             	 $name_txt = get_sub_field('name_txt');
		                 $serv_img = get_sub_field('serv_img'); 
		                 $serv_txt = get_sub_field('serv_txt');
		                 
		                 ?>
		
		                 <div class="col-xs-12 col-lg-3" class="body" style=" margin-top: 30px;">
		                 	<a  class="serv-card" href="<?php the_sub_field('serv_link');?>" target="_blank" >
		                 
		                 	<div class="card">
		                 	
		                 	<h2 class="home-serv"><?php if( $name_txt ): echo $name_txt; endif; ?></h2>
		                 	
							<img src="<?php if( $serv_img ): echo $serv_img; endif; ?>" />

							<p class="home-serv"><?php if( $serv_txt ): echo $serv_txt; endif; ?></p>
							</div>
						</a>
						</div>
			
		            <?php endwhile;
		          endif; ?>
		         
		         
				</div>
			</div>
		</div>

<!--Slider-->

<script type="text/javascript">
$('.slider').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
	
</script>


<div class=".slider">
  <div><img src="<?php the_field('slider'); ?> "/></div>
  <div><img src="<?php the_field('slider-2'); ?> "/></div>
  <div><img src="<?php the_field('slider-3'); ?> "/></div>

</div>

<?php  


get_footer();

?>