<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=cryptomax','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id =$_POST['id'] ?? null;




$statement = $pdo->prepare('DELETE FROM cryptomaxtable WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();


header('location:admin.php');









?>