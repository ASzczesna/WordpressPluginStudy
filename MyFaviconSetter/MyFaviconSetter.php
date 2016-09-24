<?php
/*
Plugin Name: MyFaviconSetter
Plugin URI: 
Description: Ustawia faviconę na podstawie załączonego w folderze pliku
Version: 0.1 
Requires at least: 4.6
Author: ASz
Author URI: http://mojswiat.eu
License: GPL2
*/

add_action( 'wp_head', 'MyFaviconSetter' );

function MyFaviconSetter() { 

	$icon_link = plugins_url( 'favicon.ico', __FILE__ );
	?> 
	<link rel="shortcut icon" href="<?php echo $icon_link; ?>" />
	<?php 
}
?>