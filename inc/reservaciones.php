<?php
function ema_guardar() {
	global $wpdb;
	$tabla = $wpdb->prefix . "reservaciones";

	if(isset($_POST['reserva_booking']) && $_POST['oculto_booking'] == "1" ):
		$nombre 		= sanitize_text_field( $_POST['name_booking'] );
		$email 			= sanitize_text_field( $_POST['email_booking'] );
		$phone 			= sanitize_text_field( $_POST['phone_booking'] );
		$whatsaap 	= sanitize_text_field( $_POST['whatsapp_booking'] );
		$adulto 		= sanitize_text_field( $_POST['adulto_booking'] );
		$child 			= sanitize_text_field( $_POST['nino_booking'] );
		$mensaje 		= sanitize_text_field( $_POST['mensaje_booking'] );
	endif;

	$datos = array(
		'Nombre' 		=> $nombre,
		'email'			=> $email,
		'phone'			=> $phone,
		'whatsapp'	=> $whatsaap,
		'adulto'		=> $adulto,
		'child'			=> $child,
		'mensaje'		=> $mensaje
	);

	$formato = array(
		'%s',
		'%s',
		'%s',
		'%s',
		'%d',
		'%d',
		'%s',
	);

	$wpdb->insert($tabla, $datos, $formato);

}

add_action( 'init', 'ema_guardar' );
