<!-- List the Most Wanted -->
<section id="most_wanted">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="title">Los viajes mas cotizados y mas buscados</h3>
			</div>
		</div>
		<div class="row ">
			<?php if( is_active_sidebar( 'sidebar-list_tour' ) ): ?>
			<?php dynamic_sidebar( 'sidebar-list_tour' ); ?>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>