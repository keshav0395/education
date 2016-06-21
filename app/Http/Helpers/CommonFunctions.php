<?php
	
	function pr($in){
		echo '<pre>'; print_r($in); echo '</pre>';
	}
	
	function prd($in){
		echo '<pre>'; print_r($in); echo '</pre>';
		die;
	}

	function capt($in){
		return ucwords(strtolower($in));
	}


?>