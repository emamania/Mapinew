<!-- List the Most Wanted -->
<section id="most_wanted">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">Tours a Machu Picchu, Tours a Peru, Tour a Cusco</h1>
				<p><strong>Machupicchu New</strong> es una Agencia de viajes y turismo integrada por un equipo de profesionales con amplia trayectoria, conocimiento y experiencia en el mundo del turismo.
Contamos con el personal  adecuado para que podamos responder de manera ágil la exigencia de nuestros clientes; asumiendo el compromiso de brindar todo nuestro conocimiento profesional. Tanto nuestro staff como nosotros amamos viajar, por lo que la pasión y el compromiso es una característica que nos destaca. Ponemos nuestro mejor empeño para que aquellos que decidan realizar un viaje con nosotros se lleven un recuerdo para toda la vida.</p>
			</div>
		</div>

		<!-- // SECTION SIDEBAR -->
		<div class="row ">
			<h3 class="title">Los viajes mas cotizados y mas buscados</h3>
			<?php if( is_active_sidebar( 'sidebar-list_tour' ) ): ?>
			<?php dynamic_sidebar( 'sidebar-list_tour' ); ?>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
