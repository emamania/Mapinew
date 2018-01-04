<?php 
/**
 * The template for displaying all single posts.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package ema_theme
 */

get_header(); ?>

	<?php if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); ?>	
			<!-- the_title(); -->
		<?php endwhile;?>
	<?php endif; ?>


<?php get_footer(); ?>
