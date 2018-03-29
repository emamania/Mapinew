<?php
/*
  This is the Template for the footer

  @package ema_theme
*/
?>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="data_footer">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <h3>Contactenos</h3>
              <ul class="address">
                <li class="foot_post_list"><a href="tel://<?php echo esc_attr( get_option('ema_telefono') ); ?>"><i class="fa fa-phone"></i><?php echo esc_attr( get_option('ema_telefono') ); ?></a></li>
                <li class="foot_post_list"><a href="mailto:<?php echo esc_attr( get_option('ema_email') ); ?>"><i class="fa fa-envelope-o"></i><?php echo esc_attr( get_option('ema_email') ); ?></a></li>
                <li class="foot_post_list"><a href="#"><i class="fa fa-home"></i><?php echo esc_attr( get_option('ema_direccion') ); ?></a></li>
                <!-- <li><a href="#">?php echo esc_attr( get_option('ema_direccion') ); ?></a></li> -->
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <h3>Informacion Util</h3>
              <?php
              $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 5
              );
              $the_query = new WP_Query( $args );

              // The Loop
              if ( $the_query->have_posts() ) {
                echo '<ul class="post_list_ul" >';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li class="foot_post_list"><a href="'. get_the_permalink() .'"><i class="fa fa-caret-right"></i>' . get_the_title() . '</a></li>';
                }
                echo '</ul>';
                /* Restore original Post Data */
                wp_reset_postdata();
              } else {
                // no posts found
                echo '<p>No hay Post Publicados</p>';
              }

              ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <h3>Siguenos</h3>
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmachupicchunew%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=693185077454576" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
          </div>
        </div>

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
    <div class="grid_contactanos">
    	<div class="messenger"><a href="https://m.me/machupicchunew"><img src="<?php bloginfo('template_directory'); ?>/img/messenger.svg" alt="Messenger"></a></div>
    	<div class="whatsapp"><a href="https://api.whatsapp.com/send?phone=51997329168"><img src="<?php bloginfo('template_directory'); ?>/img/whatsapp.svg" alt="Whatsapp"></a></div>
    </div>
    <section id="chat" >
      <div>
        <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '3966b671-0fb2-4542-8ec5-8b35a6329aca', f: true }); done = true; } }; })();</script>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
