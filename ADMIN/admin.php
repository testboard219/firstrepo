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
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=prime','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$search =$_GET['search'] ?? '';

if($search){
  $statement= $pdo->prepare('SELECT * FROM globaltable  WHERE fname LIKE :fname ORDER BY date DESC');
 $statement->bindValue(":fname","%$search%");


}else{
$statement= $pdo->prepare('SELECT * FROM globaltable ORDER BY date DESC');
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

<h1>PRIME PLOX Trade DATABASE</h1>
<div class="x" style="display: flex;">
 <p> <a href='admin.php' ><button class='btn btn-success'>ACTIVE</button></a></p>
 <p> <a href='dbwithdraw.php' ><button class='btn btn-success' style="margin-left:5px;">WITHDRAW</button></a></p>
 </div>
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
      <th scope="col">user_id</th>
      <th scope="col">email</th>
      <th scope="col">fname</th>
      <th scope="col">lname</th>
      <th scope="col">number</th>
      <th scope="col">country</th>
      <th scope="col">ballance</th>
      <th scope="col">profit</th>
      <th scope="col">bonus</th>
      <th scope="col">plan</th>
      <th scope="col">withdraw</th>
      <th scope="col">modify</th>
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($product as $i => $products):?>
    <tr>
      <th scope="row"><?php echo  $i + 1?></th>
      <td><?php echo $products['id']?></td>
      <td><?php echo $products['email']?></td>
      <td><?php echo $products['fname']?></td>
      <td><?php echo $products['lname']?></td>
      <td><?php echo $products['number']?></td>
      <td><?php echo $products['country']?></td>
      <td><?php echo $products['ballance']?></td>
      <td><?php echo $products['profit']?></td>
      <td><?php echo $products['bonus']?></td>
      <td><?php echo $products['plan']?></td>
      <td><?php echo $products['withdraw']?></td>
      <td>

      <a href='update.php?id=<?php echo $products['id']?>' btn-small class="btn btn-primary">edit</a>
      
      <form action='delete.php' method='post' style='display:inline-block;'>

              <input type='hidden' name='id' value='<?php echo $products ['id'];?>'>      
            <button type="submit" btn-small class="btn btn-danger" style='display:in-line;'>delete</button>
              </form>
    </td> 
  </tr>
  
    
    <?php endforeach;?>
  
    
  </tbody>
</table>
</body>
</html>