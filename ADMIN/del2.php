<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo  $_GET['user_id'];


/*

 $user_id =$id;




$statement = $pdo->prepare('DELETE FROM withdraw3  WHERE user_id = :user_id');
$statement->bindValue(':user_id',$user_id);
$statement->execute();


header('location:withdraw.php');


*/






?>