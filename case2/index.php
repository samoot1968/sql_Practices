<?php 
include 'db.php';

if(isset($_POST['name'])) 
{
	try {
		$sql = 'INSERT INTO name SET name = :name';
		$s = $pdo->prepare($sql);
		$s->bindValue(':name', $_POST['name']);
		$s->execute();
	} catch (PDOException $e) {
		$error = 'Could not insert into database';
		include 'error.php';
		exit();
	}
	header('Location: .');
	exit();

}

 ?>
