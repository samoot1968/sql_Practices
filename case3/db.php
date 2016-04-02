<?php 

try {
	$pdo =  new PDO('mysql:host=localhost; dbname=menu', 'root', '');

} catch (PDOException $e) {
	$error = 'Error';
	include 'error.php';
	exit();
}
include 'form.php';

?>