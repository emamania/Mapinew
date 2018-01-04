<?php
/*
  This is the Template for the footer

  @package ema_theme
*/
?>
  <footer id="footer">
    <div class="container">
      <div class="row">
			<?php if( is_active_sidebar( 'sidebar-footer' ) ): ?>
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			<?php endif; ?>
      <div class="col-md-12">
        <div id="social_footer">
					<?php 
						$args = array(
							'theme_location'				=> 'social-menu',
							'container'							=> 'ul',
							'menu_class'						=> 'redes_sociales',
							'menu_id'								=> 'redes_sociales',
							'link_before'						=> '<span class="rs_text">',
							'link_after'						=> '</span>'	
						);

						wp_nav_menu($args);
					?>
          <p>© Travel and Tourism Agency 2017</p>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
