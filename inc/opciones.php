<?php
/*

@package ema_theme


    ===========================
          ADMIN page
    ===========================
*/
function ema_ajustes() {

  $page_title       = 'MapiNew';
  $menu_title       = 'Mapi Ajustes';
  $capability       = 'administrator';
  $menu_slug        = 'mapinew_ajustes';
  $function         = 'mapinew_opciones';
  $icon_url         = '';
  $position         = 20;

  $parent_slug      = 'mapinew_ajustes';
  $subpage_title    = 'Reservaciones';
  $submenu_title    = 'Reservaciones';
  $submenu_slug     = 'mapinew_reservaciones';
  $subfunction      = 'mapinew_reservaciones';

  add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

  add_submenu_page( $parent_slug, $subpage_title, $submenu_title, $capability, $submenu_slug, $subfunction );

  // Llamar al registro de las opciones de nuestro theme
  add_action('admin_init', 'ema_registrar_opciones');
}
add_action( 'admin_menu','ema_ajustes' );

function ema_registrar_opciones() {
  // Registrar opciones, una por campo
  $option_group = 'ema_opciones_grupo';
  //$option_name = 'ema_direccion';
  register_setting( $option_group, 'ema_direccion' );
  register_setting( $option_group, 'ema_telefono' );
  register_setting( $option_group, 'ema_email' );
}

function mapinew_opciones() { ?>
  <div class="wrap">
    <h1>Ajustes Mapi New</h1>

    <form class="" action="options.php" method="post">
      <?php settings_fields('ema_opciones_grupo'); ?>
      <?php do_settings_sections('ema_opciones_grupo'); ?>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Telefono de Empresa</th>
          <td><input type="text" name="ema_telefono" value="<?php echo esc_attr(get_option('ema_telefono')); ?>"></td>
        </tr>
        <tr valign="top">
          <th scope="row">Direccion del local</th>
          <td><input class="regular-text ltr" type="text" name="ema_direccion" value="<?php echo esc_attr(get_option('ema_direccion')); ?>"></td>
        </tr>
        <tr valign="top">
          <th scope="row">Correo de reservas</th>
          <td><input class="regular-text ltr" type="text" name="ema_email" value="<?php echo esc_attr(get_option('ema_email')); ?>"></td>
        </tr>
      </table>
      <?php submit_button() ?>
    </form>

  </div>
<?php
}

function mapinew_reservaciones() {
  ?>
    <div class="wrap">
      <h1>Reservaciones</h1>
      <table class="wp-list-table widefat striped">
        <thead>
          <tr>
            <th class="manage-column">ID</th>
            <th class="manage-column">Name Tour</th>
            <th class="manage-column">Nombre</th>
            <th class="manage-column">Correo</th>
            <th class="manage-column">Telefono</th>
            <th class="manage-column">Check-in</th>
            <th class="manage-column">Check-out</th>
            <th class="manage-column">Nro Pax</th>
            <th class="manage-column">Nro Niños</th>
            <th class="manage-column">Mensaje</th>
            <th class="manage-column">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php global $wpdb;
            $reservaciones = $wpdb->prefix . 'reservaciones';
            $registros = $wpdb->get_results("SELECT * FROM $reservaciones", ARRAY_A);
            foreach ($registros as $registro) { ?>
              <tr>
                <td><?php echo $registro['id']; ?></td>
                <td><strong><?php echo $registro['nameT']; ?></strong></td>
                <td><?php echo $registro['nombre']; ?></td>
                <td><?php echo $registro['correo']; ?></td>
                <td><?php echo $registro['telefono']; ?></td>
                <td><?php echo $registro['fecha_in']; ?></td>
                <td><?php echo $registro['fecha_out']; ?></td>
                <td><?php echo $registro['adulto']; ?></td>
                <td><?php echo $registro['nino']; ?></td>
                <td><?php echo $registro['mensaje']; ?></td>
                <td>
                  <a href="#" class="borrar_registro" data-reservaciones="<?php echo $registro['id']; ?>">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>

  <?php

}

// Agregando Enqueue lado Administrador
function ema_admin_enqueue_scripts() {
  global $pagenow, $typenow;
  // $screen = get_current_screen();
  // var_dump($screen->post_type);
	// var_dump($pagenow, $typenow);

	if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'tours' ) {
		wp_enqueue_style( 'ema-admin-css', plugins_url( 'css/ema_admin.css', __FILE__ ) );
		wp_enqueue_script( 'ema-adminjs', plugins_url( 'js/ema_admin.js', __FILE__ ), array( 'jquery', 'jquery-ui-datepicker' ), '20160204', true );
  }
  wp_enqueue_style( 'sweetalert', $src = get_template_directory_uri() . '/css/sweetalert2.min.css' );
  wp_enqueue_script( 'sweetalertjs', $src = get_template_directory_uri() . '/js/sweetalert2.min.js', $deps = array('jquery'), $ver = '1.0', $in_footer = true );

  wp_enqueue_script( 'adminjs', get_template_directory_uri() . '/js/admin-ajax.js', array('jquery'), $ver = '1.0', $in_footer = true );

  // Enviar la URL de WP Ajax al adminjs
  wp_localize_script(
    'adminjs',
    'url_eliminar',
    array('ajaxurl' => admin_url('admin-ajax.php'))
  );

}
add_action( 'admin_enqueue_scripts', 'ema_admin_enqueue_scripts' );
