

<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




$id=$_GET['id']  ?? null;
if(!$id){
  echo "no id";
    
};



$statement = $pdo->prepare('SELECT * FROM withdraw3 WHERE user_id =:user_id');
$statement->bindValue(':user_id',$id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);


$error=[];

$method=$products['method'];
$amount=$products['amount'];
$status=$products['status'];
$id =$products['user_id'];

echo '';


 if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $id=$products['user_id'];
    $method=$products['method'];
    $amount=$products['amount'];
    $status=$products['status'];
      
  $date= date('d-m-y H:i:s');
  
  if(!$method){
      $error[]='method fild is empty';
  }
  if(!$amount){
      $error[]='</br>amount field is empty';
  }
  /*
  if(!is_dir('images')){
   mkdir('images');
  }
 */ 
  if(empty($error)){
      $image=$_FILES['image'] ?? null;
      $imagePath=$products['image'];
      
      
      if($image && $image['tmp_name']){
        
        if($products['image']){ 
          unlink($products['image']);
      }

        $imagePath='images/'.generateRandomString(8).'/'.$image['name'];
  
        mkdir(dirname($imagePath));  
        move_uploaded_file($image['tmp_name'], $imagePath);
                
          
      }
  
  /*
  $statement=$pdo->prepare("UPDATE  withdraw3  SET method =:method, amount=:amount, status=:status  WHERE user_id=:user_id");
  $statement->bindValue(':method',$method);
  $statement->bindValue(':amount',$amount);
  $statement->bindValue(':status',$status);
  $statement->bindValue(':user_id',$id); 
  $statement->execute();
   
  header('location:dbwithdraw.php');
  */

  
 

  try{
    $status=$_POST['status'];
    //$status='successfull';

      $sql = "UPDATE withdraw3 SET status='$status' WHERE user_id=$id";
      $pdo->exec($sql);
      echo "Records was updated successfully.";
      header('location:dbwithdraw.php');
  } catch(PDOException $e){
      die("ERROR: Could not able to execute $sql. "
                                  . $e->getMessage());
  }
  unset($pdo);
  







} 
  }
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  



?>



<!-------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>
    <link rel ='stylesheet' type='text/css' href='set.css'>
    
    <title>CRYPTOMAX-DATABASE</title>
</head>
<body>
  <div class="container">
<br></br>
<a href='pro.php' class='btn btn-secondary'>Global-EXPERT-Trade WITHDRAW</a>

 
<?php if(!empty($error)):?>
    <div class="alert alert-danger">
     <?php foreach($error as $errors):?>
        <?php echo $errors ?>

        <?php endforeach?>
    </div>
    <?php endif?>
    <form action='' method='POST' enctype='multipart/form-data'>
       
    <div class="form-group">
    <label>update withdrawal</label><br>
  <!----  <input type="file" name='image'>----->
  </div>

  <div class="form-group">
    <label>method</label>
    <input type="text" name='method' class="form-control" value='<?php echo $method ?>'>
  </div>
  <div class="form-group">
    <label> amount</label>
    <input type="text" name='amount' class="form-control" value='<?php echo $amount ?>'>
  </div>
  <div class="form-group">
    <label>status</label>
    <input type="text" name='status' class="form-control" value="<?php echo $status?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    

</div>
</body>
</html>