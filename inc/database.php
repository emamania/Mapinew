<?php

function emaTour_database(){
	global $wpdb;
	global $ematour_dbversion;
	$ematour_dbversion = '0.1';

	$table = $wpdb->prefix . 'reservaciones';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		nombre varchar(50) NOT NULL,
		fecha datetime NOT NULL,
		correo varchar(50) DEFAULT '' NOT NULL,
		telefono varchar(15) NOT NULL,
		mensaje longtext NOT NULL,
		PRIMARY KEY (id)
	) $charset_collate; ";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

	dbDelta( $sql );

	add_option( 'ematour_version', $ematour_dbversion );

	// ACTUALIZAR EN CASO DE SER NECESARIO
	$version_actual = get_option( 'ematour_version' );

	if($ematour_dbversion != $version_actual) {
		$table = $wpdb->prefix . 'reservaciones';

		$sql = "CREATE TABLE $table (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			nombre_tour varchar(50) NOT NULL,
			nombre varchar(50) NOT NULL,
			correo varchar(50) DEFAULT '' NOT NULL,			
			telefono varchar(15) NOT NULL,
			whatsaap varchar(15) NOT NULL,
			fecha_in datetime NOT NULL,
			fecha_out datetime NOT NULL,
			adulto tinyint NOT NULL,
			nino tinyint NOT NULL,
			mensaje longtext NOT NULL,
			PRIMARY KEY (id)
		) $charset_collate; ";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

		dbDelta( $sql );

		add_option( 'ematour_version', $ematour_dbversion );
	}
}
add_action( 'after_setup_theme', 'emaTour_database' );