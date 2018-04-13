<form class="box_style" method="post">
	<h3 class="box_text_book">- Reserve Ahora -</h3>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="form-group">
				<!-- <input class="form-control" type="text" id="name_booking" name="name_tour_booking" style="display:none;"> -->
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
		<div class="hidden">
			<div class="form-group">
				<label for="nameT_booking">name T</label>
				<input class="form-control" type="text" id="nameT_booking" name="nameT_booking" value="<?php the_title();?>">
			</div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="form-group">
				<label for="phone_booking"><i class="fa fa-phone"></i>Nro Telefonico</label>
				<input class="form-control" type="text" id="phone_booking" name="phone_booking">
			</div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="form-group">
					<label for="fecha_in_booking"><i class="fa fa-calendar"></i>Fecha llegada</label>
					<input class="date-pick form-control" data-date-format="M d, D" type="date" id="fecha_in_booking" name="fecha_in_booking">
			</div>
		</div>
		<!-- <div class="col-md-6 col-sm-6">
			<div class="form-group">
					<label for="fecha_out_booking"><i class="fa fa-calendar"></i>Fecha de salida</label>
					<input class="date-pick form-control" data-date-format="M d, D" type="date" id="fecha_out_booking" name="fecha_out_booking">
			</div>
		</div> -->
		<div class="col-md-6 col-sm-6">
				<div class="form-group">
						<label for="adulto_booking"><i class="fa fa-male"></i>Nro Personas</label>
						<div class="numbers-row">
							<input type="text" value="1" id="adulto_booking" class="qty2 form-control" name="adulto_booking">
						</div>
				</div>
		</div>
	</div>
	<!-- <div class="row">
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
						<label for="nino_booking"><i class="fa fa-child"></i>Niños</label>
						<div class="numbers-row">
							<input type="text" value="0" id="nino_booking" class="qty2 form-control" name="nino_booking">
						</div>
				</div>
		</div>
	</div> -->

	<!--
	<br>
	 <table class="table table_summary">
		<tbody>
			<tr>
				<td>Adultos</td>
				<td class="text-right">
					<p id="tt_adul" >1</p>
				</td>
			</tr>
			<tr>
				<td>Ninos</td>
				<td class="text-right">
					<p id="tt_nino">0</p>
				</td>
			</tr>
			<tr class="hidden">
				<td>Total amount</td>
				<td class="text-right tt_todo">
					<span id="tt_totaladult"></span>
					<span id="tt_totalnino"></span>

				</td>
			</tr>
			<tr class="total hidden">
					<td>Total cost</td>
					<td class="text-right">
						<p class="pr_total total_booking"></p>
					</td>
			</tr>
		</tbody>
	</table> -->
	<div class="row">
		<div class="col-md-12">
			<label for="mensaje_booking">Dejenos un Mensaje</label>
			<textarea name="mensaje_booking" id="mensaje_booking" placeholder="Escribe aqui tu mensaje" class="form-control" cols="30" rows="10" style="overflow:hidden;height:70px;margin-bottom:20px;" ></textarea>
		</div>
	</div>
	<div class="g-recaptcha" data-sitekey="6LfcM0IUAAAAAAli-48_Ym62zHpiu_Vze3zHDMOi"></div>
	<input type="submit" name="reserva_booking" class="btn_booking button">
	<input type="hidden" name="oculto_booking" value="1">

</form>
