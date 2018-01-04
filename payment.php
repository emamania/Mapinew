<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<section class="main_wrapper">
			<div class="wrapper_banner" id="rev_slider">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="texto">
					<?php the_title('<h2>','</h2>'); ?>
					<p>This is my page of Contact</p>
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