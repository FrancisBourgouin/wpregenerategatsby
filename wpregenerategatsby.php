<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * @package wpregenerategatsby
 */
/*
Plugin Name: WP Regenerate Gatsby
Plugin URI: https://francisbourgouin.com
Description: Execution du build Gatsby à partir de l'admin
Version: 1.0.0
Author: Francis Bourgouin
Author URI: https://francisbourgouin.com
License: GPLv2 or later
Text Domain: gatsby wordpress react
*/

define( 'GATSBY_FOLDER_NAME', 'YOUR_FOLDER_HERE');


function gatsbywp_custom_toolbar(){
    global $wp_admin_bar;
    
	$queryParamEncoded = urlencode('hellyeah');
	$currentUrl = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	$reinsertUrlWithParam = add_query_arg('wp_rebuild_gatsby', $queryParamEncoded, $currentUrl);
	
	$args = array(
		'id'    => 'regenerate_gatsby',
		'title' => 'Regenerate Gatsby Front',
		'href'  =>  $reinsertUrlWithParam
	);
	$wp_admin_bar->add_menu($args);
}

add_action('wp_before_admin_bar_render', 'gatsbywp_custom_toolbar', 999);

if($_GET['wp_rebuild_gatsby'] == 'hellyeah'){
	if( is_admin() ){
        	exec('cd ' . GATSBY_FOLDER_NAME . ' && gatsby build');
	}
}
?>
