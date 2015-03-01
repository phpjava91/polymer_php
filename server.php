	<?php 
		error_reporting(E_ERROR);

		$username = $_POST["username"];
		$password = $_POST["password"];	
		$connection = mysql_connect("localhost",$username,$password);
		$res = mysql_query("SHOW DATABASES");

		$jsonArray = array();
		while($row = mysql_fetch_assoc($res)){
				array_push($jsonArray,$row);
		}

		echo json_encode($jsonArray);
	?>