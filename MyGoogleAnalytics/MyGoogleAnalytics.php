<?php
/*
Plugin Name: MyGoogleAnalytics
Plugin URI: 
Description: Dodaje kod G.A. prosto na górę headera
Version: 0.1 
Requires at least: 1.0
Author: Aleksandra Szcz�sna
Author URI: http://mojswiat.eu
License: GPL2
*/

add_action( 'wp_head', 'GAcode', 0 );

function GAcode() { ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXXX-X', 'auto');
  ga('send', 'pageview');

</script>

<?php 
}


?>