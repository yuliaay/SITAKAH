<?php

function escape($data){
	global $link;
	return mysqli_real_escape_string($link,$data);
}

?>