
<?php
/**
	*Template Name: About

	*/
	get_header(); ?>

<!-- Vision -->
<div class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<h2><?php the_field('section_title_1'); ?></h2>
				<p><?php the_field('section_text_1'); ?></p>
			</div>
			<div class="col-xs-12 col-md-6">
				<?php if( get_field('section_image_1') ): ?>

				<img class="about" src="<?php the_field('section_image_1'); ?>" />

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<!-- Why Knit -->
<div class="gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
			<?php if( get_field('section_image_2') ): ?>

				<img class="about" src="<?php the_field('section_image_2'); ?>" />

				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-6">
			<h2><?php the_field('section_title_2'); ?></h2>
				 <ul>
				<?php 
		           if( have_rows('why_knit') ):

		           // loop through the rows of data
		             while ( have_rows('why_knit') ) : the_row();

		                 // vars
		                 $fact = get_sub_field('fact'); ?>
		                 <li style="background: url('/wp-content/uploads/2018/04/KNIT logo-18.png') left center no-repeat;    padding-left: 35px; margin: 20px 0; font-size: 19px;"><?php if( $fact ): echo $fact; endif; ?></li>
		            <?php endwhile;
		          endif; ?>
      		</ul>
			</div>
		</div>
	</div>
</div>

<!-- Timeline -->
<div class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<h2><?php the_field('section_title_3'); ?></h2>
			<img src="<?php the_field('section_image_3'); ?>" />
			</div>
		</div>
	</div>
</div>

<!-- Team -->
<div class="gray">
	<div class="container">
		<div class="row">
							<?php 
		           if( have_rows('why_knit') ):

		           // loop through the rows of data
		             while ( have_rows('why_knit') ) : the_row();

		                 // vars
		                 $fact = get_sub_field('fact'); ?>
		                 <li style="background: url('/wp-content/uploads/2018/04/KNIT logo-18.png') left center no-repeat;    padding-left: 35px; margin: 20px 0; font-size: 19px;"><?php if( $fact ): echo $fact; endif; ?></li>
		            <?php endwhile;
		          endif; ?>
			<div class="col-xs-12 col-md-3">
		
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12 col-md-6">
		
			</div>

		</div>
	</div>
</div>

<!-- Collaborate -->
<div class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
		
			</div>

		</div>
	</div>
</div>