<div class="row">
	<h3 class="section__title"><span class="section__span">¡Date prisa! Estas son las mejores ofertas para hoy en Machupicchu New</span></h3>
</div>
<!-- Division de tours -->
<div class="row">
	<!-- Start the Loop -->
	<?php
	$args = array(
		'post_type' 			=> 'tours',
		'orderby'        	=> 'rand',
		'posts_per_page'		=> '1',		
	);
	$args1 = array(
		'post_type' 			=> 'tours',
		'posts_per_page'		=> '5',
		'tax_query' => array(
			array(
				'taxonomy' => 'tipo-de-viaje',
				'field'    => 'slug',
				'terms'    => array( 'camino-inca', 'inti-raymi', 'tours-a-machu-picchu', 'tours-tradicionales', 'trekking'), //4, 6, 5, 8, 7, 9
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
				echo '<div class="col-md-6 col-sm-6 col-xs-12">';		
				echo '<div class="adv_main_contentbg">';
				echo '<a href="'.the_permalink().'"';
				echo '<img src="' . get_the_post_thumbnail_url() . '">';
				echo '</a>';
				echo '<h5 class="adv_taxo">taxonomia</h5>';
				echo '<section class="adv_content">';
				echo '<div class="col-md-9">';
				echo '<div class="adv_textoo"><h4>'. the_title() .'</h4></div>';
				echo '</div>';
				echo '<div class="col-md-3">';
				echo '<div class="adv_price">';
				echo '<p>';
				$precioTour =  get_post_meta( get_the_ID(), 'ema_campos_tours_price', true );
				if($precioTour) {
				echo '<span><sup>$</sup>'. $precioTour.'*</span>';}
				echo '</p>por persona';										
				echo '</div>';
				echo '</div>';
				echo '</section>';
				echo '</div></div>';			
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
		echo '<p>Tours no encontrados -_-!!</p>';
	}?>	
	
	
</div>