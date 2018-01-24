<?php
/*
  This is the Template for the header

  @package ema_theme
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Machupicchu New">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#e04f67">
    <meta name="application-name" content="Machupicchu New">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" sizes="192x192">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <?php
      $custom_css = esc_attr( get_option( 'ema_css' ) );
      if( !empty( $custom_css ) ):
        echo '<style>' . $custom_css . '</style>';
      endif;
    ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <!-- TOP LINE -->
      <div id="top_line">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-6">
						<?php if( is_active_sidebar( 'sidebar-phones' ) ): ?>
						<?php dynamic_sidebar( 'sidebar-phones' ); ?>
						<?php endif; ?>
            </div>
            <div class="col-sm-6 col-xs-6">
              <div class="top_links">
                <ul>
  								<li>
  									<a href="#">
  										<i class="fa fa-skype" aria-hidden="true"></i>Skype
  									</a>
  								</li>
  								<li>
  									<a href="#">
  										<i class="fa fa-whatsapp" aria-hidden="true"></i>Whatsaap
  									</a>
  								</li>
  								<li>
  									<a href="#">
  										<i class="fa fa-skype" aria-hidden="true"></i>Idioma
  									</a>
  								</li>
  							</ul>
              </div>
            </div>
          </div><!-- end row -->
        </div>
      </div><!-- end top_line -->
      <!-- MAIN MENU -->
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-2">
            <div id="logo_mapinew">
              <h1>
								<a href="<?php echo esc_url( home_url('/') ); ?>" title="Machupicchu New - tour to machupicchu - Travel to Machupicchu"><?php bloginfo( 'name' ); ?></a>
              </h1>
            </div>
          </div>
          <nav class="col-md-9 col-sm-9 col-xs-10">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);" >
  						<span>Menu Mobil</span>
  					</a>
            <div class="main_menu">
              <div id="header_menu">
								<a href="<?php echo esc_url( home_url('/') ); ?>">
									<img src="<?php echo get_template_directory_uri(); ?> /img/logo_sticky.png" width="160" height="34" alt="Machupicchu New">
								</a>
  						</div>
  						<a href="#" class="open_close" id="close_in">
  							<i class="fa fa-closee"></i>
							</a>
							<?php
								if ( has_nav_menu( 'header-menu' ) ) :
									wp_nav_menu( array(
										'theme_location'				=> 'header-menu',
										'container'							=> 'ul',
										'menu_class'						=> 'redes_sociales',
										'menu_id'								=> 'redes_sociales',
										'link_before'						=> '<span class="e">',
										'link_after'						=> '</span>'
										// 'walker'								=> new newtheme\inc\core\walkernav(),
									) );
								endif;
								if ( has_nav_menu( 'mega-menu' ) ) :
									wp_nav_menu( array(
										'theme_location'				=> 'mega-menu',
										'container'							=> 'ul',
										'menu_class'						=> 'redes_sociales',
										'menu_id'								=> 'redes_sociales',
										'link_before'						=> '<span class="e">',
										'link_after'						=> '</span>'
										// 'walker'								=> new newtheme\inc\core\walkernav(),
									) );
								endif;
							?>
							<!-- <ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="show-submenu-mega">Que hacer?
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="menuuu">
										<li class="col">
											<h3>Pages</h3>
										</li>
									</ul>
								</li>
							</ul> -->
            </div>
          </nav>
        </div>
      </div>
    </header>
		<!-- Banner -->

		<?php if (is_front_page() ) {
			get_template_part( 'banner', 'home' );
			}
		?>
