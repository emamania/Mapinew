<?php
/*
 * Template Name: Atractivos Turisticos
*/

get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<section class="main_wrapper">
			<div class="wrapper_banner" id="rev_slider">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="texto">
					<?php the_title('<h2>','</h2>'); ?>
					<p>¡Tu próxima aventura comienza aquí!</p>
				</div>
			</div>
		</section>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php the_content(); ?>
				</div>
				<div class="col-md-4">
						<!--the_sidear(); -->
				</div>
			</div>
		</div>
	<?php endwhile; ?>

		<section class="atractic_list">
			<div class="container margin_60">
				<div class="row">
					<aside class="col-lg-3 col-md-3">
						<p class="btn_p">Filtro de Atractivos</p>
						<div class="aside_cat_list">
							<ul id="cat_list_nav">
								<?php
									$terminos = get_terms( array(
										'taxonomy' => 'tipo-actividad'
										) );
									
									echo '<li class="all"><a href="#">Todas las categorias</a></li>';									
									foreach($terminos as $termino) {
										echo "<li><a href='#" . $termino->slug . "'>" . $termino->name . "</a></li>";									
									}
								?>
							</ul>
						</div>
					</aside>
					<div class="col-lg-9 col-md-9">
						<div id="tx_tours">
							<?php
								foreach($terminos as $termino) {
									filtrar_tours($termino->slug);										
								}
							?>
						</div>						
						<div style=" text-align: center; ">
							<ul class="pagination">
								<li><a href="http://">Prev</a></li>
								<li class="active"><a href="http://">1</a></li>
								<li><a href="http://">2</a></li>
								<li><a href="http://">3</a></li>
								<li><a href="http://">4</a></li>
								<li><a href="http://">5</a></li>
								<li><a href="http://">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>