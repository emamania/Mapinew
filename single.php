<?php get_header(); ?>
		<?php
			$imagen_id = get_post_thumbnail_id( );
			$imagen = wp_get_attachment_image_src( $imagen_id, 'single_tour_img_header');
		?>

		<section class="main_wrapper">
			<div class="wrapper_banner" id="rev_slider">
			<!-- get_the_post_thumbnail_url(); -->
			<img src="<?php echo $imagen[0]; ?>">
				<div class="texto">
					<h2><?php  the_title(); ?></h2>
				</div>
			</div>
		</section>
		<div class="position">
			<div class="container">
				<div class="post_info">
					<div class="post_left">
						<ul>
							<li>
								<time>
									<i class="fa fa-calendar"></i>
									<?php echo the_time('d');?> de <?php the_time('M'); ?>
									<span>del <?php the_time('Y'); ?></span>
								</time>
							</li>
							<li><a href=""><?php the_category(); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

    <section id="blog" class="container margin_60">
      <div class="row">
        <div class="col-md-9">
			<div class="box_style">
				<?php while(have_posts()): the_post(); ?>
				<article>
					<div class="post">
						<h2><?php the_title(); ?></h2>
						<div class="blog_content">
							<?php the_content(); ?>
						</div>

					</div>
				</article>
				<hr>
				<?php endwhile; // end of the loop. ?>
			</div><!-- end box style-->
			<hr>

      </div>
			<div class="col-md-3">
				<?php get_sidebar('blog_sidebar'); ?>
			</div>

      </div>
    </section>

  <?php get_footer(); ?>
