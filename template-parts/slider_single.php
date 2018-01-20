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
	<?php get_template_part('template-parts/content','book'); ?>
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