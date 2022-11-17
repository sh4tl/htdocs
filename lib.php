<?php  

	function isValueExists($name='',$value='', $mysqli) 
	{
		$query = $mysqli->query("SELECT * FROM `User`
			WHERE `".$name."` = '".$value."' ");

		$rowCount = $query->num_rows;

		if ($rowCount == 0) return false;
		else return true;
	}
	
?>