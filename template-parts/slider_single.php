<div class="col-sm-8">
	<!-- Slider Single -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- inner Elements -->
		<?php cmb2_output_file_list('ema_campos_tours_galeria', 'tour_img_slide');?>
		<!-- left and right Elements -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div> <!-- End Slider -->
	<hr>
	<!-- section contenido de tour -->
	<?php
while (have_posts()): the_post();
   get_template_part('template-parts/content', 'tours');

   // if comments are open or we havve  at least one commert, load up the comment template.
   if (comments_open() || get_comments_number()):
      comments_template();
   endif;

endwhile; // End of the loop.
?>
</div>
<aside class="col-sm-4">
	<div class="box_style">
		<h3 class="box_text_book">- Reserve Ahora -</h3>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="form-group">
					<input class="form-control" type="text" id="name_booking" name="name_tour_booking" style="display:none;">
					<label for="name_booking"><i class="fa fa-user-o"></i>Nombre Completo</label>
					<input class="form-control" type="text" id="name_booking" name="name_booking">
				</div>
			</div>
			<div class="col-md-12 col-sm-12">
				<div class="form-group">
					<label for="email_booking"><i class="fa fa-envelope-o"></i>Email</label>
					<input class="form-control" type="email" id="email_booking" name="email_booking">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="form-group">
					<label for="phone_booking"><i class="fa fa-phone"></i>Nro Telefonico</label>
					<input class="form-control" type="text" id="phone_booking" name="phone_booking">
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="form-group">
					<label for="whatsaap_booking"><i class="fa fa-whatsapp"></i>Nro de Whatsaap</label>
					<input class="form-control" type="text" id="whatsaap_booking" name="whatsaap_booking">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="form-group">
						<label for="fecha_in_booking"><i class="fa fa-calendar"></i>Fecha llegada</label>
						<input class="date-pick form-control" data-date-format="M d, D" type="date" id="fecha_in_booking" name="fecha_in_booking">
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="form-group">
						<label for="fecha_out_booking"><i class="fa fa-calendar"></i>Fecha de salida</label>
						<input class="date-pick form-control" data-date-format="M d, D" type="date" id="fecha_out_booking" name="fecha_out_booking">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
					<div class="form-group">
							<label for="adulto_booking"><i class="fa fa-male"></i>Adultos</label>
							<div class="numbers-row">
									<input type="text" value="1" id="adulto_booking" class="qty2 form-control" name="adulto_booking">
							</div>
					</div>
			</div>
			<div class="col-md-6 col-sm-6">
					<div class="form-group">
							<label for="nino_booking"><i class="fa fa-child"></i>Ninos</label>
							<div class="numbers-row">
									<input type="text" value="1" id="nino_booking" class="qty2 form-control" name="nino_booking">
							</div>
					</div>
			</div>
		</div>

		<br>
		<table class="table table_summary">
			<tbody>
				<tr>
					<td>Adultos</td>
					<td class="text-right">
						<p id="tt_adul">1</p>
					</td>
				</tr>
				<tr>
					<td>Ninos</td>
					<td class="text-right">
						<p id="tt_nino">1</p>
					</td>
				</tr>
				<tr>
					<td>Total amount</td>
					<td class="text-right">
					<?php $precioTour     = get_post_meta(get_the_ID(), 'ema_campos_tours_price', true);?>
					<?php $precioTournino = get_post_meta(get_the_ID(), 'ema_campos_tours_price_nino', true);?>
					<?php if ($precioTour) {?>
						<?php echo $tt_adul . ' X ' . '$' . $precioTour; ?>
					<?php }?>
							<!-- 3x $52 -->
					</td>
				</tr>
				<tr class="total">
						<td>
								Total cost
						</td>
						<td class="text-right">
							<?php echo ($tt_adul * $precioTour); ?>
						</td>
				</tr>
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-12">
				<label for="mensaje_booking">Dejenos un Mensaje</label>
				<textarea name="mensaje_booking" id="mensaje_booking" placeholder="Write your message" class="form-control" cols="30" rows="10" style="overflow:hidden;height:70px;margin-bottom:20px;" ></textarea>
			</div>
		</div>
		<a class="btn_booking" href="cart.html">Book now</a>

	</div>
	<!-- Realizar pago -->
	<div class="box_style cachito">
		<h4>
			<span>Metodos </span>de Pago
		</h4>
		<small>Todos los pagos via Paypal están sujetas a una comisión adicional del 8%</small>
		<a href=""><img src="<?php echo get_template_directory_uri() . '/img/paypal.png' ?>" alt=""></a>
	</div>
	<div class="box_style cachito">
		<i class="fa fa-phone"></i>
		<h4>
			<span>Reserve </span>por Telefono
		</h4>
		<a href="tel://+51997329168" class="phone">+51 997 329 168</a>
		<small>Lunes a Viernes 9.00 - 15.30</small>

		<div class="row no-padding contac_rs">
			<div class="col-sm-6">
				<a href="mailto:"><i class="fa fa-envelope-o"></i><span>E-mail</span></a>
			</div>
			<!-- <div>
				<a href="intent://send/51997329168#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><i class="fa fa-whatsapp"></i><span>Whatsapp</span></a>
			</div> -->
			<div class="col-sm-6">
				<a href="https://m.me/machupicchunew"><div class="mss_fb"></div><span>Messenger</span></a>
			</div>
		</div>
	</div>
</aside>