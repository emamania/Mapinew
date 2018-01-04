<?php get_header(); ?>
	<?php 
		$pagina_blog = get_option('page_for_posts');
		$imagen_id = get_post_thumbnail_id( $pagina_blog );
		$imagen = wp_get_attachment_image_src( $imagen_id, 'img_blog');		
	?>
	<?php while(have_posts()): the_post(); ?>
		<section class="main_wrapper">
			<div class="wrapper_banner" id="rev_slider">
			<!-- get_the_post_thumbnail_url(); -->
			<img src="<?php echo $imagen[0]; ?>">
				<div class="texto">
					<h2><?php echo get_the_title(); ?></h2>
					<p>This is my page of ????</p>
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


<?php get_footer(); ?>