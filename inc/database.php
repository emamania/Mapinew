<?php
// Inicializa la creacion de las tablas nuevas
function emaTour_database(){
	// WPDB nos da los metodos para trabajar con tablas
	global $wpdb;
	// Agregamos un version
	global $ematour_dbversion;
	$ematour_dbversion = '1.0';

	// Obtenemos el prefijo
	$table = $wpdb->prefix . 'reservaciones';

	// Obtenemos el collation de la instalacion
	$charset_collate = $wpdb->get_charset_collate();

	// Agregamos la estructura de la DB
	$sql = "CREATE TABLE $table (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		nameT varchar(50) NOT NULL,
		nombre varchar(50) NOT NULL,
		correo varchar(50) DEFAULT '' NOT NULL,
		telefono varchar(15) NOT NULL,
		fecha_in datetime NOT NULL,
		fecha_out datetime NOT NULL,
		adulto tinyint NOT NULL,
		nino tinyint NOT NULL,
		mensaje longtext NOT NULL,
		PRIMARY KEY (id)
	) $charset_collate; ";

	// Se necesita dbDelta para ejecutar el SQL y esta la sigte direccion
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta( $sql );

	// Agregamos la version de la DB Para compararla con futuras actualizaciones
	add_option( 'ematour_dbversion', $ematour_dbversion );

	// ACTUALIZAR EN CASO DE SER NECESARIO
	$version_actual = get_option( 'ematour_dbversion' );

	// Comparamos las 2 versiones
	if($ematour_dbversion != $version_actual) {
		$table = $wpdb->prefix . 'reservaciones';

		//  Aqui realizarias las actualizaciones
		$sql = "CREATE TABLE $table (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			nameT varchar(50) NOT NULL,
			nombre varchar(50) NOT NULL,
			correo varchar(50) DEFAULT '' NOT NULL,
			telefono varchar(15) NOT NULL,
			fecha_in datetime NOT NULL,
			fecha_out datetime NOT NULL,
			adulto tinyint NOT NULL,
			nino tinyint NOT NULL,
			mensaje longtext NOT NULL,
			PRIMARY KEY (id)
		) $charset_collate; ";
		// Se necesita dbDelta para ejecutar el SQL y esta en la sigte direccion
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta( $sql );

		// Actualizamos a la version actual en caso de que asi sea
		update_option( 'ematour_dbversion', $ematour_dbversion );
	}
}
add_action( 'after_setup_theme', 'emaTour_database' );


// Funcion para comprobar que la version instala es igual a la base de datos nueva.
function emaTourdb_revisar() {
	global $ematour_dbversion;
	if(get_site_option( 'ematour_dbversion') != $ematour_dbversion ) {
		emaTour_database();
	}
}
add_action('plugins_loaded', 'emaTourdb_revisar');
