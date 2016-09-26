<?php
/*
Plugin Name: MyEmailShare
Plugin URI:
Description: Dokleja link mailto na koniec wpisu
Version: 0.1
Requires at least: 1.0
Author: Aleksandra Szczęsna
Author URI: http://mojswiat.eu
License: GPL2
 */

add_filter( 'the_content', 'MyEmailShare', 0 );

function MyEmailShare ($the_content){

    $icon_url = plugins_url( 'mailicon.png', __FILE__ );

    $content = $the_content;

    $content .= "<a title='Podziel się!' href='mailto:szczesna.aleksandra@gmail.com?subject=Polecam artykuł ";
    $content .= get_the_title();
    $content .= "&body=Cześć!%0A%0AMoże masz ochotę przeczytać ";
    $content .= get_the_title();
    $content .= ".'> <img alt='' src='" . $icon_url. "' /></a>";

    return $content;

}
?>