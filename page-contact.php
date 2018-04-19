<?php
/**
	*Template Name: Contact

	*/
	get_header(); ?>

<div class="white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
			<h3><?php the_field('header_1'); ?></h3>
			<p><?php the_field('section_1'); ?></p>
			</div>
			<div class="col-xs-12 col-md-6">
			<h3><?php the_field('header_2'); ?></h3>
			<p><?php the_field('section_2'); ?></p>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-xs-12 col-md-6">
			<h3><?php the_field('header_3'); ?></h3>
			<p><?php the_field('section_3'); ?></p>
			</div>
			<div class="col-xs-12 col-md-6">
			<h3><?php the_field('header_4'); ?></h3>
			<p><?php the_field('section_4'); ?></p>
			</div>
		</div>
	</div>
</div>

		<div class="row">
			<div class="col-xs-12 col-lg-12">
			<?php the_field('map'); ?>
			<script>
		      function initMap() {
		        var crosscampus = {lat: 34.0494, lng: -118.2586};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 10,
		          center: crosscampus
		        });
		        var marker = new google.maps.Marker({
		          position: crosscampus,
		          map: map
		        });
		      }
		    </script>
		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyChFVagTTmC9EnVM8R70GJfQT06lhQb3oQ&callback=initMap">
		    </script>
			</div>
		</div>

	<?php get_footer(); 