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
function printSimpleHead($title="Title Unset",$pageheader="Placeholder!",$styles=[],$buttons=[]) {
	print "<!doctype html>\n".
	"<html lang=\"en\">\n".
	"<head>\n".
	"<title>".$title."</title>\n";
	if (count($styles) > 0) {
		foreach ($styles as $sheet) {
			print "<link rel='stylesheet' href='".$sheet."'>\n";
		}
	}
	print "<script src='commonJS.js'></script>\n".
	"</head>\n".
	"<body>\n".
	"<div id='titlebar'>\n".
	"\t<h2>".$pageheader."</h2>\n";
	if (count($buttons) > 0) { //Note: buttons shjould be arrays of [0] link, [1] display text
		foreach ($buttons as $button) {
			print "<a class='titlebutton' href='".$button[0]."'><span>".$button[1]."</span></a>\n";
		}
	}
	print"</div>\n".
	"<div id='titlebarPad'></div>\n";
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