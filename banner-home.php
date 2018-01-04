<!-- Secction slider <-->
		<section class="main_wrapper">
			<div class="wrapper_banner" id="rev_slider">
				<img src='<?php echo get_the_post_thumbnail_url(); ?>'>
				<div class="texto">
					<h2>Machupicchu New</h2>
					<p>Diseña tu propia experiencia</p>
				</div>
			</div>
		</section>
<?php
  $args = array(
    'post_type' => 'slides',
    'orderby' => 'menu_order',
    'posts_per_page' => -1
  );

  $slides = new WP_Query( $args );

  if( $slides->have_posts() ) : ?>
    <div class="flexslider">
      <ul class="slides">
      <?php while ( $slides->have_posts() ) : $slides->the_post(); ?>
        <li>
          <?php the_post_thumbnail('tour_img_slide'); ?>
          <div class="banner__copy">
            <h2 class="banner__title"> <?php the_title_attribute(); ?>
            </h2>
            <h3 class="banner__subtitle"><?php the_field('banner_subtitle') ?></h3>
            <a href="<?php the_permalink(); ?>" class="banner__button"><?php the_field('banner_url') ?></a>
          </div>
        </li>
      <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>