<?php

	$mysqli = new mysqli('localhost', 'root', 'root', 'Users');
	
	if ($mysqli->connect_error) {
    	echo "Подключение невозможно: ".mysqli_connect_error();
  	} else {
  		echo "hi";
  	}

?>