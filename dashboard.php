<?php
/*
Plugin Name: Woocommerce Price Updater
Description: Work-in-progress plugin that get prices from Amazon and other sites, and updates the prices accordingly, calculating final prices in the local currency.
Author: Sergio I Urbina
License: WTFPL
 */


//Dashboard widget                                                           .

add_action( 'wp_dashboard_setup', 'che_dashboard_widget' );

function che_dashboard_widget () {
	wp_add_dashboard_widget('che_dashboard', 'Price updater info', 
		'che_dashboard_body');
}

$cero = 0;

function che_dashboard_body() {
	echo '<p>Ultima actualizacion: n/a</p>';
	echo '<p>Precios aumentados:n/a \n</p>';
	echo '<p>Precios reducidos: $cero \ntest</p>';
}

//Metabox widget

add_action( 'add_meta_boxes', 'che_metabox_create');

function che_metabox_create() {
	add_meta_box('che_meta', 'Price updater', 'che_metabox_body', 'product',
		'normal', 'deafult');
}

function che_metabox_body() {
	echo 'Opciones: TODO';
}

//Top level menu

add_action( 'admin_menu', 'che_create_admin_menu');

function che_create_admin_menu() {
	add_menu_page('Price Updater', 'Price Updater', 'manage_options',
		'che-plugin', 'che_menu_body');
}

function che_menu_body() {
	echo "<h1>Aun no hay nada lol</h1>";
}

?>
