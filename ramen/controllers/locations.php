<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}

/** Create some data for the view file */

if ($routing->path == '/locations/nyc') {
	
	$heading = 'Location: NYC';
}
else if ($routing->path == '/locations/orlando') {
	
	$heading = 'Location: Orlando';
}
else {
	
	$heading = 'Locations';
}


?>