<?php
/**
 * Template Name: Home Page 1
 */
get_header(); ?>
 		<?php
 			$pagina_blog = get_option('page_for_posts');
 			$imagen_id = get_post_thumbnail_id( $pagina_blog );
 			$imagen = wp_get_attachment_image_src( $imagen_id, 'img_blog');
 		?>
 		</header>
 		<!-- List the Most Wanted -->
 		<?php get_sidebar('list_tour'); ?>
 		<!-- Que quieres Hacer -->
     <section id="travelSytle">
       <div class="container">
         <div class="pin">
           <img src="<?php bloginfo('template_directory'); ?>/img/pin-amarillo.png" alt="">
           <!-- <i class="fa fa-map-marker"></i> -->
         </div>
         <div class="row">
           <div class="styleTitle">
             <h3>Planifica tu Viaje</h3>
             <p>
               <strong>¿Quieres viajar? Nosotros te ayudamos a planear tu viaje.</strong>
             </p>
 						<p>Solo tienes que seleccionar tus preferencias en las opciones de abajo y ¡Listo!</p>
           </div>
 					<div class="col-md-12">
 						<div class="styleTitle">
 							<h4>¿Qué quieres hacer?</h4>
 						</div>
 					</div>
 					<!-- list of Style -->
 					<div class="col-md-12">
 						<div class="styleItems">
 							<div class="item active">
 								<div class="col-md-4 col-sm-6 col-xs-12">
 									<a href="#">
 										<div class="destination_fondo"></div>
 										<img src="https://www.peruforless.com/content-files/uploads/Salkantay-Trek-to-Machu-Picchu.jpg" class="img-responsive">
 									</a>
 									<div class="destination_title">
 										<div>Trekking</div>
 									</div>
 								</div>
 							</div>
 							<div class="item">
 								<div class="col-md-4 col-sm-6 col-xs-12">
 									<a href="#">
 										<div class="destination_fondo"></div>
 										<img src="https://www.peruforless.com/content-files/uploads/Cusco-City-local.jpg" class="img-responsive">
 									</a>
 									<div class="destination_title">
 										<div>Cultura y Historia</div>
 									</div>
 								</div>
 							</div>
 							<div class="item">
 								<div class="col-md-4 col-sm-6 col-xs-12">
 									<a href="#">
 										<div class="destination_fondo"></div>
 										<img src="https://www.peruforless.com/content-files/uploads/Huayna-Picchu-mountain.jpg" class="img-responsive">
 									</a>
 									<div class="destination_title">
 										<div>Aventura</div>
 									</div>
 								</div>
 							</div>
 						</div>
 						<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
 						<a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> -->

 					</div>

         </div><!-- end row -->




 			</div><!-- end container -->
     </section>
     <section id="adventure">
       <div class="container">
 				<!-- <div class="row">
 					<div class="col-md-6 col-sm-6 col-xs-12">
 						<div class="adv_main_contentbg" style='<?php the_post_thumbnail('adv_img_big'); ?>'>
 							<h5 class="adv_taxo"><?php the_title(); ?>soy titulo</h5>
 							<section class="adv_content">
 								<div class="adv_box_content">
 									<div class="adv_price">
 										<p>
 											<span><?php ?></span>
 										</p>
 										por persona
 									</div>
 								</div>
 							</section>
 						</div>
 					</div>
 					<div class="col-md-6 col-sm-6 col-xs-12">
 						<div class="col-md-6 col-sm-6 col-xs-12"></div>
 						<div class="col-md-6 col-sm-6 col-xs-12"></div>
 					</div>
 				</div> -->
 				<?php get_template_part('template-parts/show_tours'); ?>
       </div>
     </section>

     <section id="suscribete" class="desde-tablet">
       <div class="container">
 				<div class="row">
 					<div class="col-md-5 col-sm-6 col-xs-12">
 						<h2>¡Ahora en tus Planes!</h2><span>Reciben nuestros planes por email</span>
 					</div>
 					<div class="col-md-7 col-sm-6 col-xs-12">
 						<input placeholder="Introduce tu email" type="email" name="mail"/>
 						<button>¡Me Apunto!</button>
 						<div class="clear"></div>
 						<input type="checkbox" name="nws_conditions"/>
 						<label>Al hacer clic aceptas la política de protección de datos</label>
 					</div>
 				</div>
       </div>
 		</section>
   <?php get_footer(); ?>
