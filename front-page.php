<?php get_header(); ?>
		<?php
			$pagina_blog = get_option('page_for_posts');
			$imagen_id = get_post_thumbnail_id( $pagina_blog );
			$imagen = wp_get_attachment_image_src( $imagen_id, 'img_blog');
		?>
		</header>
		<!-- List the Most Wanted -->
		<?php get_sidebar('list_tour'); ?>
		<section class="ListaTours">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="title">Los viajes mas cotizados y mas buscados</h3>
					</div>
					<div class="col-md-12">
						<div class="allTours">
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco Clasico</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>249</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>
							<div class="itemallTours">
								<img src="http://www.machupicchugolden.com/wp-content/uploads/2017/03/machupicchu-cusco.jpg" alt="">
								<div class="textTopallTours">
									<span>Cusco by Car</span>
									<span>4 dias / 3 noches</span>
								</div>
								<div class="textallTours">
										<p>Programa alternativo para los turistas que deseen conocer Machupicchu en tren y atractivos del Cusco.</p>
										<span><i>usd</i><var>449</var><a href="#">Reservar</a></span>
								</div>
							</div>


						</div>


					</div>
				</div>

			</div>

		</section>
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
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h3 class="title">¡Date prisa! Estas son las mejores ofertas para hoy en Machupicchu New</h2>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="show_tours">
							<div class="items_showTours">
								<img src="https://a.travel-assets.com/dynamic_destination_images/179892.jpg" alt="">

								<div class="show_tours_text">
									<p>Tour 1</p>
									<span><a href="#">button 1</a></span>
								</div>
							</div>
							<div class="items_showTours">
								<img src="https://a.travel-assets.com/dynamic_destination_images/179899.jpg" alt="">

								<div class="show_tours_text">
									<a href="#">
										<p>Tour 2</p>
									</a>
									<span><a href="#">button 2</a></span>
								</div>
							</div>
							<div class="items_showTours">
								<img src="https://a.travel-assets.com/dynamic_destination_images/179899.jpg" alt="">
								<div class="show_tours_text">
									<p>Tour 2</p>
									<span>button 2</span>
								</div>
							</div>
							<div class="items_showTours">
								<img src="https://a.travel-assets.com/dynamic_destination_images/179899.jpg" alt="">
								<div class="show_tours_text">
									<p>Tour 2</p>
									<span>button 2</span>
								</div>
							</div>
							<div class="items_showTours">
								<img src="https://a.travel-assets.com/dynamic_destination_images/179899.jpg" alt="">
								<div class="show_tours_text">
									<p>Tour 2</p>
									<span>button 2</span>
								</div>
							</div>

						</div>
					</div>

				</div>
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
