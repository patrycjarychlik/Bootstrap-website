<?php
ini_set ( "log_errors", 1 );

ini_set ( "display_errors", 0 );

error_log ( "INIT MAIN PAGE!" );

date_default_timezone_set ( "Europe/Warsaw" );

if (isset ( $_GET ['tytul'] )) {
	
	$title = $_GET ['tytul'];
} else {
	
	$title = "ofirmie";
}

$fileName = getFileName ( $title );

if ((! file_exists ( $fileName ))) {
	
	$title = "work";
	
	$fileName = getFileName ( $title );
}
function getFileName($title) {
	return "t" . $title . ".htm";
}

?>