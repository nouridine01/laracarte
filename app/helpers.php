<?php
	if(!function_exists('page_title')){
		function page_title($title){
			$base_tile ='Laravel- List of artisans';
			if($title == ''){
				return $base_tile;
			}else{
				return $title.' | '.$base_tile;
			}
		}
	}
?>