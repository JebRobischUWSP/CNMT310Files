<?php
//Figured I'd add some basic PHPDoc since I have nothing else to do at the moment
/**
 * Prints an array of strings sequentially
 * 
 * @param string[] $content strings to print
 */
function printLines($content) {
	foreach ($content as $line) {
		print $line;
	}
}
/**
 * Prints the start of a simple HTML page
 * 
 * Creates a doctype, an opening html tag, a head with a title, and an opening body tag
 * 
 * @param string $title page title
 */
function printSimpleHead($title="Title Unset",$styles=[]) {
	print "<!doctype html>\n".
	"<html lang=\"en\">\n".
	"<head>\n".
	"<title>".$title."</title>\n";
	if (count($styles) > 0) {
		foreach ($styles as $sheet) {
			print "<link rel='stylesheet' href='".$sheet."'>";
		}
	}
	print "</head>\n".
	"<body>\n";
}
/**
 * Prints the end of a simple HTML page
 * 
 * Closes the body & html tags
 */
function printSimpleEnd() {
	print "</body>\n".
	"</html>\n";
}
?>