<?php get_header(); ?>
		<?php
			$pagina_blog = get_option('page_for_posts');
			$imagen_id = get_post_thumbnail_id( $pagina_blog );
			$imagen = wp_get_attachment_image_src( $imagen_id, 'single_tour_img_header');		
		?>
		
		<section class="main_wrapper">
			<div class="wrapper_banner" id="rev_slider">
			<!-- get_the_post_thumbnail_url(); -->
			<img src="<?php echo $imagen[0]; ?>">
				<div class="texto">
					<h2><?php echo get_the_title($pagina_blog); ?></h2>
					<p>Cuentanos tus Aventuras, Relatanos tus viajes.</p>
				</div>
			</div>
		</section>
		<div class="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Home</a></li>
				</ul>	
			</div>
		</div>		
		
    <section id="blog" class="container margin_60">
      <div class="row">				
        <div class="col-md-9">					
					<div class="box_style">
						<?php while(have_posts()): the_post(); ?>					
						<article>
							<div class="post">								
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_post_thumbnail_url('blog_img_list'); ?>" alt="">	
								</a>
								<div class="post_info">
									<div class="post_left">
										<ul>
											<li>
												<time>
													<i class="fa fa-calendar"></i>On
													<?php echo the_time('d'); the_time('M'); ?>
													<span><?php the_time('Y'); ?></span>
												</time>
											</li>
											<li>
												<i class="fa fa-inbox"></i>In
												<a href="">Sin categoria</a>
											</li>
										</ul>
									</div>
								</div>
								<h2><?php the_title(); ?></h2>
								<div class="blog_content">
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="btn_1">Read More</a>
								</div>
								
							</div>							
						</article>
						<hr>
						<?php endwhile; // end of the loop. ?> 
					</div><!-- end box style-->
					<hr>
					<div style=" text-align: center; ">
						<?php echo paginate_links(); ?>
						hla mundo
						<!-- <ul class="pagination">
							<li><a href="http://">Prev</a></li>
							<li class="active"><a href="http://">1</a></li>
							<li><a href="http://">2</a></li>
							<li><a href="http://">3</a></li>
							<li><a href="http://">4</a></li>
							<li><a href="http://">5</a></li>
							<li><a href="http://">Next</a></li>
						</ul> -->
					</div>         
        </div>
				<div class="col-md-3">
					<?php get_sidebar('blog_sidebar'); ?>					
				</div>
        
				
				

      </div>
    </section>		
		
  <?php get_footer(); ?>
