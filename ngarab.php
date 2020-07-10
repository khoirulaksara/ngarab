<?php

/*
Plugin Name: (ng)Arab V2
Plugin URI: https://mojo.my.id/
Description: dedicated to http://pelajarnujogja.or.id and http://ipnudiy.or.id - ^ I ❤ OpenSource ^
Author: Khoirul Aksara
Version: 2.0
Author URI: https://mojo.my.id/
*/
//fungsi load css
function makeup_arab() {
	$src = plugins_url('/css/wedak.css', __FILE__);
	wp_enqueue_style( 'wedak', $src );
}
makeup_arab();

//fungsi shortcode
function shortcode_arab( $atts, $content = null ) {
return '<p class="arab">' . $content . '</p>';
}
//hooking
add_shortcode( 'ngarab', 'shortcode_arab' );

