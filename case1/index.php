<?php 

	try {
		$pdo = new PDO('mysql:host=localhost; dbname=menu', 'root', '');
	} catch (PDOException $e) {
		$outlook = "Connection not established";
		exit();
	}
	
		$outlook = "Connection established";

		require('db_connection.php');
 ?>