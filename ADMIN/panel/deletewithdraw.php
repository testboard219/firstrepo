<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo $id =$_POST['id'] ?? null;




$statement = $pdo->prepare('DELETE FROM withdraw3 WHERE user_id = :id');
$statement->bindValue(':id',$id);
$statement->execute();


header('location:dbwithdraw.php');









?>