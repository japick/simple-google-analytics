<?
/*
Plugin Name: Simple Google Analytics Plugin
Description: Adds a Google analytics tracking code to the <head> of your theme, by hooking to wp_head.
Author: Jay Pick
Version: 1.0
*/

function custom_google_analytics() { ?>

   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-XXXXXXXX-X');
   </script>

<? }

add_action( 'wp_head', 'custom_google_analytics', 10 );
