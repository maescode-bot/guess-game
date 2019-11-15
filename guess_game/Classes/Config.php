<?php
 /**
  * The class to load the configuration
  */
 class Config {
 	public static function get($path=null)
 	 { 
 	 	if($path) {
 	 		$config = $GLOBALS['config'];
 	 		$path =explode('/', $path);
 	 		foreach ($path as $bit) {
 	 			# code...
 	 			if(isset($config[$bit]))
 	 				{$config=$config[$bit];
 	 		}
 	 		}
 	 	return $config;
 	 	}
 	 	return false;
 	 }
 }
?>