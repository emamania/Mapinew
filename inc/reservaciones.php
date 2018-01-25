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
	if(isset($_POST['reserva_booking']) && $_POST['oculto_booking'] == "1" ):
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$captcha = $_POST['g-recaptcha-response'];

	      // Campos q deben enviarse
				$campos = array(
					'secret' 		=> '6LfcM0IUAAAAAD1SD-B5h_3_lvP_T3nImsRexALG',
					'response'	=> $captcha,
					'remoteip'	=> $_SERVER['REMOTE_ADDR']
				);

	      // Iniciar sesion en CURL (tambien se puede usar file_get_contents)
	      // Curl es utilizado para acceder en servidores remotos
				$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');

	      // Configurar opciones de Curl
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_TIMEOUT, 15);

				// Genera una cadena codigicada para la URL
				$Post = http_build_query($campos);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $Post );

				// Obtener la respuesta
				$respuesta = json_decode(curl_exec($ch));
				if($respuesta ='success') {

          // Desde aqui empieza para guardar en DB
					global $wpdb;
					// if(isset($_POST['reserva_booking']) && $_POST['oculto_booking'] == "1" ):
						$nameTour 	= sanitize_text_field( $_POST['nameT_booking'] );
					  $nombre 		= sanitize_text_field( $_POST['name_booking'] );
					  $email 			= sanitize_text_field( $_POST['email_booking'] );
					  $phone 			= sanitize_text_field( $_POST['phone_booking'] );
					  $check_in 	= sanitize_text_field( $_POST['fecha_in_booking'] );
					  $check_out 	= sanitize_text_field( $_POST['fecha_out_booking'] );
					  $adulto 		= sanitize_text_field( $_POST['adulto_booking'] );
					  $child 			= sanitize_text_field( $_POST['nino_booking'] );
					  $mensaje 		= sanitize_text_field( $_POST['mensaje_booking'] );

					  $tabla = $wpdb->prefix . "reservaciones";
					  $datos = array(
							'nameT'			=> $nameTour,
					    'nombre' 		=> $nombre,
					    'correo'		=> $email,
					    'telefono'	=> $phone,
					    'fecha_in'	=> $check_in,
					    'fecha_out'	=> $check_out,
					    'adulto'		=> $adulto,
					    'nino'			=> $child,
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
					    '%s'
					  );

					  $wpdb->insert($tabla, $datos, $formato);

					  $url = get_page_by_title( 'Gracias por su reserva' );
					  wp_redirect( get_permalink( $url->ID ) );
					  exit();
					// endif;

				}
		}
	endif;

}

add_action( 'init', 'ema_guardar' );
