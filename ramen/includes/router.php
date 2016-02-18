<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}

require_once( RAMEN_ROOT . '/classes/routing.php' );

$routing = new routing();

/** Check if current URL path exists above in array, otherwise it's not found */

if (!(array_key_exists( $routing->path, $routing_arr ))) {
	
	$routing->path = '/error';
}

/** Set files */

$routing->controller 	= $routing_arr[$routing->path][0];
$routing->view 			= $routing_arr[$routing->path][1];

/** Include the controller, if it's set */

if ($routing->controller != '') {
	
	require_once( RAMEN_ROOT . '/controllers/' . $routing->controller);
}

/** Include the view */

if ($routing->view != '') {
	
	require_once( RAMEN_ROOT . '/views/' . $routing->view );
}

?>