<?php
function loadfile(){
	$XML = simplexml_load_file(base_url('xml/items.php')) or die("Error: Cannot Load XML File.");
	return $XML;
}
?>