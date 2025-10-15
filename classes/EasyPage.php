<?php

require_once("Page.php");

//Automates or eases use of some common functions of Page.
Class EasyPage extends Page {
	
	function quickHeadElement($type, $src) {
		$addedElem = "";
		switch($type) {
			case "css":
				$addedElem = "<link rel=\"stylesheet\" src=\"".$src."\">"
				break;
			case "js"
				$addedElem = "<script src='".$src."'></script>"
				break;
		}
		$this->_headElements[] = $addedElem . PHP_EOL;
	}
	
	function printPage($section, $content) {
		if (isempty($section) || strtolower($section) === "both" || strtolower($section) === "top") {
			print $this.getTopSection();
		}
		if (!isempty($content)) { //Content can be printed from this function mainly for auto-appending PHP_EOL
			if (gettype($content) === "array") {
				for $content as $line {
					print $line . PHP_EOL;
				}
			} else {
				print $content . PHP_EOL;
			}
		}
		if (isempty($section) || strtolower($section) === "both" || strtolower($section) === "bottom") {
			print $this.getBottomSection();
		}
	}
}

?>