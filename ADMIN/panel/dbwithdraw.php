<?php

session_start();
if(empty($_SESSION['name'])){

 header("location:logout.php");

}

?>


<?php  
 echo "Congratulation!    ". $_SESSION['name'];
?>
<br />You have logged into password protected page.<br />
<a href="logout.php">Click here</a> to Logout




<?php 
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$search =$_GET['search'] ?? '';

if($search){
  $statement= $pdo->prepare('SELECT * FROM withdraw3  WHERE fname LIKE :fname ORDER BY user_id DESC');
 $statement->bindValue(":fname","%$search%");


}else{
$statement= $pdo->prepare('SELECT * FROM withdraw3 ORDER BY user_id DESC');
}
$statement->execute();
$product = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>';
//var_dump($product);
//echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>
    <link rel ='stylesheet' type='text/css' href='set.css'>
    
    <title>admininstrative </title><style> .imgsec{width:100px;height:100px;}</style>
</head>
<body>
<br></br>

<h1>cryptny</h1>
 <p> <a href='admin.php' ><button class='btn btn-success'>BACK</button></a></p>

<form>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="search user" name ='search' value='<?php echo $search;?>'>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" >search</button>
  </div>
</div>

</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">userid</th>
      <th scope="col">METHOD</th>
      <th scope="col">AMMOUNT</th>
      <th scope="col">STATUS</th>
      <th scope="col">MODIFY</th>
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($product as $i => $products):?>
    <tr>
      <th scope="row"><?php echo  $i + 1?></th>
      
      <td><?php echo $products['user_id']?></td>
      <td><?php echo $products['method']?></td>
      <td><?php echo $products['amount']?></td>
      <td><?php echo $products['status']?></td>
      <td>

      <a href='withdrawupdate.php?id=<?php echo $products['user_id']?>' btn-small class="btn btn-primary">edit</a>
      
      <form action='deletewithdraw.php' method='post' style='display:inline-block;'>

              <input type='hidden' name='id' value='<?php echo $products ['user_id'];?>'>      
            <button type="submit" btn-small class="btn btn-danger" style='display:in-line;' name='delmack'>delete</button>
              </form>
    </td> 
  </tr>
  
    
    <?php endforeach;?>
  
    
  </tbody>
</table>
</body>
</html>