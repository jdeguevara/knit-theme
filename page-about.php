
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
				<h2 class="text-center"><?php the_field('section_title_1'); ?></h2>
				<p style="font-size: 19px;"><?php the_field('section_text_1'); ?></p>
			</div>
			<div class="col-xs-12 col-md-6 text-center">
				<img class="about" src="<?php the_field('section_image_1'); ?>" />
			</div>
		</div>
	</div>
</div>

<!-- Why Knit -->
<div class="gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 text-center">
			<?php if( get_field('section_image_2') ): ?>

				<img class="about" src="<?php the_field('section_image_2'); ?>" />

				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-6">
			<h2 class="text-center"><?php the_field('section_title_2'); ?></h2>
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
	<div class="container text-center">
		<div class="row">
			<div class="col-xs-12 col-lg-12">
				<h2><?php the_field('section_title_4'); ?></h2>
			</div>

<!--Leadeship-->
							<?php 
		           if( have_rows('leadership') ):

		           // loop through the rows of data
		             while ( have_rows('leadership') ) : the_row();

		                 // vars
		                 $Lphoto = get_sub_field('l_team_photo');
		                 $Lname = get_sub_field('l_team_member_name'); 
		                 $LlinkName = get_sub_field('l_team_member_first_name');
		                 $Ltitle = get_sub_field('l_team_member_title');
		                 $Lbio = get_sub_field('l_team_member_bio'); ?>

             <div class="col-xs-12 col-md-6">
             	<img class="team-photo" src="<?php if( $Lphoto ): echo $Lphoto; endif; ?>" />
             	<a href="#<?php if( $LlinkName ): echo $LlinkName; endif; ?>" data-toggle="modal" data-target="#<?php if( $LlinkName ): echo $LlinkName; endif; ?>"><h4 style="margin-bottom: 0px;"><?php if( $Lname ): echo $Lname; endif; ?></h4></a>
             	<p><?php if( $Ltitle ): echo $Ltitle; endif; ?></p>
				<!-- Modal -->
				<div class="modal" id="<?php if( $LlinkName ): echo $LlinkName; endif; ?>" data-toggle="modal"  tabindex="-1" role="dialog" aria-labelledby="<?php if( $LlinkName ): echo $LlinkName; endif; ?>" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
							<p><?php if( $Lbio ): echo $Lbio; endif; ?></p>
							</div>
					    </div>
					</div>
				</div>

			</div>
		<?php endwhile;
		endif; ?>

<!--Team-->		
							<?php 
		           if( have_rows('team') ):

		           // loop through the rows of data
		             while ( have_rows('team') ) : the_row();

		                 // vars
		                 $photo = get_sub_field('team_photo');
		                 $name = get_sub_field('team_member_name'); 
		                 $linkName = get_sub_field('team_member_first_name');
		                 $title = get_sub_field('team_member_title');
		                 $bio = get_sub_field('team_member_bio'); ?>

             <div class="col-xs-12 col-md-4">
             	<img class="team-photo" src="<?php if( $photo ): echo $photo; endif; ?>" />
             	<a href="#<?php if( $linkName ): echo $linkName; endif; ?>" data-toggle="modal" data-target="#<?php if( $linkName ): echo $linkName; endif; ?>"><h4 style="margin-bottom: 0px;"><?php if( $name ): echo $name; endif; ?></h4></a>
             	<p><?php if( $title ): echo $title; endif; ?></p>
				<!-- Modal -->
				<div class="modal" id="<?php if( $linkName ): echo $linkName; endif; ?>" data-toggle="modal"  tabindex="-1" role="dialog" aria-labelledby="<?php if( $linkName ): echo $linkName; endif; ?>" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
							<p><?php if( $bio ): echo $bio; endif; ?></p>
							</div>
					    </div>
					</div>
				</div>

			</div>
		<?php endwhile;
		endif; ?>
		</div>
	</div>
</div>
<!--Advisors-->	
<div class="white">
	<div class="container text-center">
		<div class="row">	
			<div class="col-xs-12 col-lg-12">
			<h2><?php the_field('section_title_5'); ?></h2>
			</div>
			<?php 
		           if( have_rows('advisors') ):

		           // loop through the rows of data
		             while ( have_rows('advisors') ) : the_row();

		                 // vars
		                 $advPhoto = get_sub_field('adv_photo');
		                 $advName = get_sub_field('adv_name'); 
		                 $advLinkName = get_sub_field('advisor_first_name');
		                 $advTitle = get_sub_field('adv_title');
		                 $advBio = get_sub_field('adv_bio'); ?>
			<div class="col-xs-12 col-md-6">
             	<img class="team-photo" src="<?php if( $advPhoto ): echo $advPhoto; endif; ?>" />
             	<a href="#<?php if( $advLinkName ): echo $advLinkName; endif; ?>" data-toggle="modal" data-target="#<?php if( $advLinkName ): echo $advLinkName; endif; ?>"><h4 style="margin-bottom: 0px;"><?php if( $advName ): echo $advName; endif; ?></h4></a>
             	<p><?php if( $advTitle ): echo $advTitle; endif; ?></p>
<!-- Modal -->
				<div class="modal" id="<?php if( $advLinkName ): echo $advLinkName; endif; ?>" data-toggle="modal"  tabindex="-1" role="dialog" aria-labelledby="<?php if( $advLinkName ): echo $advLinkName; endif; ?>" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
							<p><?php if( $advBio ): echo $advBio; endif; ?></p>
							</div>
					    </div>
					</div>
				</div>

			</div>
		<?php endwhile;
		endif; ?>	
	</div>
</div>
</div>

<!-- Collaborate -->
<div class="gray">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-12 text-center">
			<h2><?php the_field('section_title_6'); ?></h2>
			</div>
			<div class="col-xs-12 col-md-6">
				<img src="<?php the_field('section_image_6'); ?>" />
				<p><?php the_field('collab_text'); ?></p>
			</div>
			<div class="col-xs-12 col-md-6 text-center">
				<p><?php the_field('collab_form'); ?></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); 