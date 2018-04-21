<?php
/**
 * Template Name: Resources
 */

get_header(); ?>


<!-- Business -->
<div class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-12">
				<h2><?php the_field('section_title_1'); ?></h2>
			</div>
			<div class="col-xs-12 col-md-6">

					<?php

					$args = array(

					"cat" => 30,
					"posts_per_page" => 1

					);

					$wp_query = new WP_Query($args);

					if($wp_query->have_posts()):
						while($wp_query->have_posts()):
							$wp_query->the_post();
							?>

							<div style="background-image: url('<?php echo the_post_thumbnail_url()?>'); min-height: 530px; background-repeat: no-repeat; background-size: cover;" >
							<a href="<?php echo get_permalink() ?>">

						<?php 
							echo '<h1 style="text-align: center; background-color: rgba(150,150,150,.4); min-height:530px; margin: 0 auto; padding-top: 75%;">' . get_the_title() . '</h1>'; 

							?>
							</a>
							</div>

						<?php


						endwhile;

						wp_reset_postdata();
						wp_reset_query();

					endif;

					?>

			</div>
			<div class="col-xs-12 col-md-6 text-center">
				<?php

				$args = array(

				"cat" => 30,
				"posts_per_page" => 3, 
				'offset' => '1'

				);

				$wp_query = new WP_Query($args);

				if($wp_query->have_posts()):
					while($wp_query->have_posts()):
						$wp_query->the_post();
						?>

							<div style="background-image: url('<?php echo the_post_thumbnail_url()?>'); max-height: 170px; background-repeat: no-repeat; background-size: cover;" >
							<a href="<?php echo get_permalink() ?>">

						<?php 
							echo '<h3 style="text-align: center; background-color: rgba(150,150,150,.4); min-height:170px; margin: 0 auto 10px auto; padding-top: 25%;">' . get_the_title() . '</h3>'; 
							?>
							</a>
							</div>

						<?php


					endwhile;

					wp_reset_postdata();
					wp_reset_query();

				endif;

				?>
	
			</div>
		</div>
		<div class="row" style="margin-top: 50px;">
				<?php 
	           if( have_rows('business_resources') ):

	           // loop through the rows of data
	             while ( have_rows('business_resources') ) : the_row();

	                 // vars
	                 $link = get_sub_field('business_link'); 
	                 $icon = get_sub_field('business_icon'); 
	                 $title = get_sub_field('business_title'); 
	                 ?>
			
			<div class="col-xs-12 col-lg-2 text-center">

	                <div class="business"> <a href="<?php if( $link ): echo $link; endif; ?>"><i style="margin-top:25px;" class="fas <?php if( $icon ): echo $icon; endif; ?> fa-3x"></i></a></div>
	                &nbsp
	                 <h4><?php if( $title ): echo $title; endif; ?></h4>
			</div>
		<?php endwhile;
	          endif; ?>
		</div>
	</div>
</div>

<!-- Youth -->
<div class="gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-12">
				<h2><?php the_field('section_title_2'); ?></h2>
			</div>
						<div class="col-xs-12 col-md-6">

					<?php

					$args = array(

					"cat" => 71,
					"posts_per_page" => 1

					);

					$wp_query = new WP_Query($args);

					if($wp_query->have_posts()):
						while($wp_query->have_posts()):
							$wp_query->the_post();
							?>

							<div style="background-image: url('<?php echo the_post_thumbnail_url()?>'); min-height: 530px; background-repeat: no-repeat; background-size: cover;" >
							<a href="<?php echo get_permalink() ?>">

						<?php 
							echo '<h1 style="text-align: center; background-color: rgba(150,150,150,.4); min-height:530px; margin: 0 auto; padding-top: 75%;">' . get_the_title() . '</h1>'; 

							?>
							</a>
							</div>

						<?php


						endwhile;

						wp_reset_postdata();
						wp_reset_query();

					endif;

					?>

			</div>
			<div class="col-xs-12 col-md-6 text-center">
				<?php

				$args = array(

				"cat" => 71,
				"posts_per_page" => 3, 
				'offset' => '1'

				);

				$wp_query = new WP_Query($args);

				if($wp_query->have_posts()):
					while($wp_query->have_posts()):
						$wp_query->the_post();
						?>

							<div style="background-image: url('<?php echo the_post_thumbnail_url()?>'); max-height: 170px; background-repeat: no-repeat; background-size: cover;" >
							<a href="<?php echo get_permalink() ?>">

						<?php 
							echo '<h3 style="text-align: center; background-color: rgba(150,150,150,.4); min-height:170px; margin: 0 auto 10px auto; padding-top: 25%;">' . get_the_title() . '</h3>'; 
							?>
							</a>
							</div>

						<?php


					endwhile;

					wp_reset_postdata();
					wp_reset_query();

				endif;

				?>
	
			</div>
		</div>
				<div class="row" style="margin-top: 50px;">
				<?php 
	           if( have_rows('youth_resources') ):

	           // loop through the rows of data
	             while ( have_rows('youth_resources') ) : the_row();

	                 // vars
	                 $ylink = get_sub_field('youth_link'); 
	                 $yicon = get_sub_field('youth_icon'); 
	                 $ytitle = get_sub_field('youth_title'); 
	                 ?>
			
			<div class="col-xs-12 col-lg-2 text-center">

	                <div class="youth"> <a class="youth" href="<?php if( $ylink ): echo $ylink; endif; ?>"><i style="margin-top:25px;" class="fas <?php if( $yicon ): echo $yicon; endif; ?> fa-3x"></i></a></div>
	                &nbsp
	                 <h4><?php if( $ytitle ): echo $ytitle; endif; ?></h4>
			</div>
		<?php endwhile;
	          endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); 

