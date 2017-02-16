<?php
/*
Plugin Name: Custom Plugin
Plugin URI: http://example.com
Description: Custom Plug that displays some stats
Version: 1.0
Author: Meg Gauthier
Author URI: https://meg-gauthier.com
*/

function html_code() {
    echo "<h3>Hello</h3>";
}

function sp_shortcode() {
    ob_start();
    
    html_code();
    
    return ob_get_clean();
}

add_code( 'wp_stats', 'sp_shortcode' );

?>