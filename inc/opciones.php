<?php

function ema_ajustes() {

  $page_title       = 'MapiNew';
  $menu_title       = 'Ajustes';
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
}
add_action( 'admin_menu','ema_ajustes' );

function mapinew_opciones() {

}

function mapinew_reservaciones() {
  ?>
    <div class="wrap">
      <h1>Reservaciones</h1>
      <table class="wp-list-table widefat striped">
        <thead>
          <tr>
            <th class="manage-column">ID</th>
            <th class="manage-column">Nombre</th>
            <th class="manage-column">Correo</th>
            <th class="manage-column">Telefono</th>
            <th class="manage-column">Whatsaap</th>
            <th class="manage-column">Check-in</th>
            <th class="manage-column">Check-out</th>
            <th class="manage-column">Nro Pax</th>
            <th class="manage-column">Nro Niños</th>
            <th class="manage-column">Cobrar</th>
            <th class="manage-column">Mensaje</th>
          </tr>
        </thead>
        <tbody>
          <?php global $wpdb;
            $reservaciones = $wpdb->prefix . 'reservaciones';
            $registros = $wpdb->get_results("SELECT * FROM $reservaciones", ARRAY_A);
            foreach ($registros as $registro) { ?>
              <tr>
                <td><?php echo $registro['id']; ?></td>
                <td><?php echo $registro['nombre']; ?></td>
                <td><?php echo $registro['correo']; ?></td>
                <td><?php echo $registro['telefono']; ?></td>
                <td><?php echo $registro['whatsaap']; ?></td>
                <td><?php echo $registro['fecha_in']; ?></td>
                <td><?php echo $registro['fecha_out']; ?></td>
                <td><?php echo $registro['adulto']; ?></td>
                <td><?php echo $registro['nino']; ?></td>
                <td><?php echo $registro['total']; ?></td>
                <td><?php echo $registro['mensaje']; ?></td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>

  <?php

}
