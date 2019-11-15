<?php
	 function escape($string)
	 {
	 	#function to sanitize html entity
	 	return htmlentities($string, ENT_QUOTES,'UTF-8');
	 } 
 ?>