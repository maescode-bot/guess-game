<?php

class Control
{        
 public static function get(){  
 	 	$guessno = $_POST['guessno'];
 	 	 if ($guessno==rand(1,10)) {
 	 	 	 echo '<h3>You Win</h3>';
 	 	 }
 	 	
 	 	else{echo '<h3>You loose</h3>';}
        
 	 }
 	}

?>