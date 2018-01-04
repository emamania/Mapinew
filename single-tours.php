<?php 
/**
 * The template for displaying all single posts.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package ema_theme
 */

get_header(); ?>
	<?php
		$imagen_id = get_post_thumbnail_id($post->ID );
		$imagen = wp_get_attachment_image_src( $imagen_id, 'single_tour_img_header');		
	?>
	<?php while(have_posts()): the_post(); ?>
	<section class="main_wrapper">
		<div class="wrapper_banner" id="rev_slider">
		<!-- get_the_post_thumbnail_url('tour_img_header'); -->
		<img src="<?php echo $imagen[0]; ?>">
			<div class="parallax_content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h1><?php echo get_the_title(); ?></h1>
							<?php $subtituloTour =  get_post_meta( get_the_ID(), 'ema_campos_tours_subtitulo', true ); ?>
							<?php if($subtituloTour) { ?>
							<span><?php echo $subtituloTour;  ?></span>
							<?php } ?>	
							<span class="include_icon">
								<?php $calificacion =  get_post_meta( get_the_ID(), 'ema_campos_tours_calificacion', true ); ?>
								<?php if($calificacion) { ?>
									<?php echo $calificacion;  $estrellas = '<i class="fa fa-star"></i>'; 
										switch($calificacion) {
											case "low":	
												echo $estrellas;
												break;
											case "Sufficient":
												echo $estrellas . " " . $estrellas;
												break;
											case "Good":
												echo $estrellas . " " . $estrellas. " " . $estrellas;
												break;
											case "Excellent":
												echo $estrellas . " " . $estrellas. " " . $estrellas . " " . $estrellas;
												break;
											case "Super":
												echo $estrellas . " " . $estrellas. " " . $estrellas . " " . $estrellas. " " . $estrellas;
												break;
										}
									?>
								<?php } ?>
								<i class="fa fa-car"></i>
								<i class="fa fa-train"></i>
								<i class="fa fa-hotel"></i>
							</span>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="price_single_main">
								<span>from / per person</span>
								<span>
									<?php $precioTour =  get_post_meta( get_the_ID(), 'ema_campos_tours_price', true ); ?>
									<?php if($precioTour) { ?>
										<sup>$</sup><?php echo $precioTour; ?>
									<?php } ?>
								</span>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<div class="position">
		<div class="container">
			<?php  ?>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="/tours">Tours</a></li>
				<li><a href="#"><?php echo get_the_title( );	 ?></a></li>
			</ul>	
		</div>
	</div>
	<?php endwhile; ?>
	<!-- SINGLE INTRO TOUR BLOCK -->		        	
	<section id="Content_tour" class="margin_60">
		<div class="container">
			<div class="row">
				<?php get_template_part('template-parts/slider_single'); ?>				
			</div>
		</div>
	</section>
<?php
get_footer();
