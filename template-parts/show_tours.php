<div class="row">
	<h3 class="section__title"><span class="section__span">¡Date prisa! Estas son las mejores ofertas para hoy en Machupicchu New</span></h3>
</div>
<!-- Division de tours -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="show_tours">
	<!-- Start the Loop -->
	<?php
	$args = array(
		'post_type' 			=> 'tours',
		'orderby'        	=> 'rand',
		'posts_per_page'		=> '9',
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
				echo '<article class="items_showTours">';
				echo '<a href="' . get_the_permalink() . '">';
				echo '<img src="' . get_the_post_thumbnail_url() . '">';
				echo '</a>';
				echo '<div class="show_tours_text">';
				echo '<p>'. get_the_title() .'</p>';
				echo '<span><a href="' . get_the_permalink() . '">Ver mas</a></span>';
				echo '</div></article>';		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
		echo '<p>Tours no encontrados -_-!!</p>';
	}?>
		</div>
	</div>
</div>


<section class="ListaTours">
  <div class="container">
    <!-- Division de tours -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h3 class="title">Los viajes mas cotizados y mas buscados</h3>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="allTours">
    	<!-- Start the Loop -->
    	<?php
    	$args = array(
    		'post_type' 			=> 'tours',
    		'orderby'        	=> 'rand',
    		'posts_per_page'		=> '6',
    	);

      $excerpt = '';
      if (has_excerpt()) {
          $excerpt = wp_strip_all_tags(get_the_excerpt());
      }

      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
          $the_query->the_post();
            echo '<article class="itemallTours">';
            echo '<a href="' . get_the_permalink() . '">';
            echo '<img src="' . get_the_post_thumbnail_url($post->ID, 'allTours_img') . '">';
            echo '<div class="textTopallTours"><span>'. get_the_title() .'</span></div>';
            echo '</a>';
            // content
            echo '<div class="textallTours">';
            echo '<p>'.  get_the_excerpt() .'</p>';
            echo '<span><i>usd</i>';
            $precioTour =  get_post_meta( get_the_ID(), 'ema_campos_tours_price', true );
            if($precioTour) {
            echo '<var>'. $precioTour.'</var>';}
            echo '<a href="'.get_the_permalink().'">Reservar</a></span></div>';
            echo '</article>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      } else {
        // no posts found
        echo '<p>Tours no encontrados -_-!!</p>';
      }?>

    </div>

  </div>

</section>
