<?php
include "personnels.php";
$term = "surname";
$value = "Маркова";
	foreach ($content as $item){
		if ($item[$term] == $value){
		echo $item[$term];		
		}	
	}
?>