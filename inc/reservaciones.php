<?php
function ema_eliminar() {
	if(isset($_POST['tipo'])) {
		if($_POST['tipo'] == 'eliminar') {
			global $wpdb;
			$tabla = $wpdb->prefix . 'reservaciones';

			$id_registro = $_POST['id'];

			$resultado = $wpdb->delete($tabla, array('id' => $id_registro), array('%d'));
			if($resultado == 1) {
				$respuesta = array(
					'respuesta' => 1,
					'id' => $id_registro
				);
			}else {
				$respuesta =array(
					'respuesta' => 'error'
				);
			}
		}
	}

	die(json_encode( $respuesta ));
}
add_action( 'wp_ajax_ema_eliminar', 'ema_eliminar' );

function ema_guardar() {
	global $wpdb;


	if(isset($_POST['reserva_booking']) && $_POST['oculto_booking'] == "1" ):
		$nombre 		= sanitize_text_field( $_POST['name_booking'] );
		$email 			= sanitize_text_field( $_POST['email_booking'] );
		$phone 			= sanitize_text_field( $_POST['phone_booking'] );
		$whatsaap 	= sanitize_text_field( $_POST['whatsaap_booking'] );
		$check_in 	= sanitize_text_field( $_POST['fecha_in_booking'] );
		$check_out 	= sanitize_text_field( $_POST['fecha_out_booking'] );
		$adulto 		= sanitize_text_field( $_POST['adulto_booking'] );
		$child 			= sanitize_text_field( $_POST['nino_booking'] );
		$total 			= sanitize_text_field( $_POST['total_booking'] );
		$mensaje 		= sanitize_text_field( $_POST['mensaje_booking'] );

		$tabla = $wpdb->prefix . "reservaciones";
		$datos = array(
			'nombre' 		=> $nombre,
			'correo'		=> $email,
			'telefono'	=> $phone,
			'whatsaap'	=> $whatsaap,
			'fecha_in'	=> $check_in,
			'fecha_out'	=> $check_out,
			'adulto'		=> $adulto,
			'nino'			=> $child,
			'total'			=> $total,
			'mensaje'		=> $mensaje
		);

		$formato = array(
			'%s', // tipo de dato
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%d', // entero
			'%d',
			'%f', // total float
			'%s'
		);

		$wpdb->insert($tabla, $datos, $formato);

		$url = get_page_by_title( 'Gracias por su reserva' );
		wp_redirect( get_permalink( $url->ID ) );
		exit();

	endif;



}

add_action( 'init', 'ema_guardar' );
