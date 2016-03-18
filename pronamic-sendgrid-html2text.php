<?php
/*
Plugin Name: Pronamic SendGrid HTML to plain text
Plugin URI: http://www.pronamic.eu/plugins/pronamic-sendgrid-html2text/
Description: 

Version: 1.0.0
Requires at least: 3.6

Author: Pronamic
Author URI: http://www.pronamic.eu/

Text Domain: pronamic-sendgrid-html2text
Domain Path: /languages/

License: GPL

GitHub URI: https://github.com/pronamic/wp-pronamic-sendgrid-html2text
*/

/**
 * Autoload
 */
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Filter
 */
function pronamic_sendgrid_html2text( $message ) {
	$html = new \Html2Text\Html2Text( $message );

	$message = $html->getText();

	return $message;
}

add_filter( 'pronamic_sendgrid_text_message', 'pronamic_sendgrid_html2text' );
