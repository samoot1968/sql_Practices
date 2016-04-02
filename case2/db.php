<?php 

	try {
		$pdo = new PDO('mysql:host=localhost; dbname=menu', 'root', '');
	    
	} catch (PDOException $e) {
		$error = 'Could not connect to database';
		include 'error.php';
		exit();
	}
	//$success = 'Successfully connected to database';
	include 'form.php';

 ?>