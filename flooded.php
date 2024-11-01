<?
/*
Plugin Name: WP Flooded
Plugin URI: http://www.evlos.org/2011/08/12/wp-flooded-v1-0-0-alpha/
Description: A flooded wordpress ;D.
Author: 邪罗刹.Evlos
Version: 1.0.0
Author URI: http://www.imevlos.com/
*/

function flooded() {
	//回头再写后台面板，提供不随滚动条移动、显示其他效果、显示关闭按键等功能
}
function flooded_add_script(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('spritely',get_bloginfo('wpurl').'/wp-content/plugins/wp-flooded/jquery.spritely-0.5.js');
	wp_enqueue_script('flooded',get_bloginfo('wpurl').'/wp-content/plugins/wp-flooded/flooded.js');
}
add_action('init','flooded_add_script');
function flooded_add_water(){
	echo '<div id="flooded" style="background: url('.get_bloginfo('wpurl').'/wp-content/plugins/wp-flooded/water.png'.') repeat-x;position: fixed;top: 2000px;height: 10px;width: 100%;z-index: -99;opacity: 0.6;"></div>';
}
add_action('wp_footer','flooded_add_water');
?>