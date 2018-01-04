<section class="main_content_">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#itinerario" data-toggle="tab" aria-expanded="false">Itinerario</a></li>
		<li><a href="#precio" data-toggle="tab" aria-expanded="false">Precio/Hotel</a></li>
		<li><a href="#incluye" data-toggle="tab" aria-expanded="false">Que Incluye</a></li>
	</ul>
	<div class="tab-content">
		<div id="itinerario" class="tab-pane active">
			<article class="info_cont">
				<p><?php the_content(); ?></p>
			</article>
		</div>
		<div id="precio" class="tab-pane">
			<article class="info_cont">
				<?php $tabla_precioTour =  get_post_meta( get_the_ID(), 'cbx_tour_content_txtprecio', true ); ?>
				<div>
					<?php if($tabla_precioTour) { ?>
						<?php echo $tabla_precioTour; ?>
					<?php } ?>					
				</div>
			</article>
		</div>
		<div id="incluye" class="tab-pane">
			<article class="info_cont">
				<?php $incluyeTour =  get_post_meta( get_the_ID(), 'cbx_tour_content_txtincluye', true ); ?>
				<p>
					<?php if($incluyeTour) { ?>
						<?php echo $incluyeTour; ?>
					<?php } ?>
				</p>
			</article>
		</div>
	</div>	
</section>
