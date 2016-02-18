<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}

/** Enter the complete path to your website. */

define( 'SITE_PATH', 'http://domain.com' );


/**
 * If your website is inside a directory e.g. http://domain.com/blog or http://localhost/ramenrouter
 * then you'll want to include the directory like so: 
 * define( 'EXCLUDE_PATH_IN_ROUTING', 	'/blog' );
 */

define( 'EXCLUDE_PATH_IN_ROUTING', 	'' );


/** Add all your pages and their perspective controller and view files. */

$routing_arr = array(
	
	//	PATH								CONTROLLER					VIEW
	'/' 						=> array(	'', 						'home.php'			),
	'/about' 					=> array(	'', 						'about.php'			),
	'/contact' 					=> array(	'',							'contact.php'		),
	'/locations'				=> array(	'locations.php', 			'locations.php'		),
	'/locations/nyc'			=> array(	'locations.php', 			'locations.php'		),
	'/locations/orlando'		=> array(	'locations.php', 			'locations.php'		),
	'/error' 					=> array(	'error.php',				'error.php'			),
	'/ajax/contact'				=> array(	'ajax-contact.php', 		''					),
);


/** Path variable used to include the controllers, views, etc. */

define( 'RAMEN_ROOT', dirname(__FILE__) );

?>