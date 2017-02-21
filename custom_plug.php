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
    $result = count_users();
    echo 'There are ', $result['total_users'], 'total_users';
    foreach($result['avail_roles'] as $role => $count)
        echo ', ', $count, 'are', $role, 's';
    echo '.';
    
    echo "<br>";
    
    $total_posts = wp_count_posts();
    $posts_count = $total_posts->publish;
    
    
    echo "total posts: " . $posts_count;

}

function sp_shortcode() {
    ob_start();
    
    html_code();
    
    return ob_get_clean();
}

add_shortcode( 'wp_stats', 'sp_shortcode' );

?>