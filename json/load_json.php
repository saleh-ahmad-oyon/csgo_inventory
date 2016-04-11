<?php
	function loadJson(){
		$string = file_get_contents(base_url('json/myJson.json')) or die ("Error: Cannot Load JSON File.");
		$json = json_decode($string, true);
		return $json;
	}
?>