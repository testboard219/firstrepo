<?php 
/*

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=cryptomax','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




$id=$_GET['id']  ?? null;
if(!$id){
  header('location:admin.php');
    
};



$statement = $pdo->prepare('SELECT * FROM cryptomaxtable WHERE id =:id');
$statement->bindValue(':id',$id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);



$error=[];
$email=$products['email'];
$fname=$products['fname'];
$lname=$products['lname'];
$number=$products['number'];
$country=$products['country'];
$profit=$products['profit'];
$ballance=$products['ballance'];
$bonus=$products['bonus'];
$id=$products['id']; 
$date= date('d-m-y H:i:s');
$ip=$_SERVER['REMOTE_ADDR'];


 if($_SERVER['REQUEST_METHOD'] === 'POST'){

  
  
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $number=$_POST['number'];
    $country=$_POST['country'];
    $profit=$_POST['profit'];
    $ballance=$_POST['ballance'];
    $bonus=$_POST['bonus'];
    $id=$_POST['id'];
  $date= date('d-m-y H:i:s');
  
    
  
  
  
  $statement=$pdo->prepare("UPDATE  cryptomaxtable  SET email =:email,fname=:fname,lname=:lname,number=:number,date=:date,
  ip=:ip,ballance=:ballance,profit=:profit,bonus=:bonus WHERE id=:id");
  $statement->bindValue(':email',$email);
  $statement->bindValue(':fname',$fname);
  $statement->bindValue(':lname',$lname);
  $statement->bindValue(':number',$number);
  $statement->bindValue(':date',$date);
  $statement->bindValue(':ip',$ip);
  $statement->bindValue(':ballance', $ballance);
  $statement->bindValue(':profit', $profit);
  $statement->bindValue(':bonus', $bonus);
  $statement->bindValue(':id',$id); 
  $statement->execute();
  header('location:admin.php');
  //
  //$statement->bindValue(':fname', $fname);
  //$statement->bindValue(':lname', $lname);
  //$statement->bindValue(':email', $email);
  //$statement->bindValue(':ballance', $ballance);
  //$statement->bindValue(':profit', $profit);
  //$statement->bindValue(':bonus', $bonus);
  //$statement->bindValue(':id', $id);
  //$statement->execute();
  



    } 
*/
?>

<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=cryptomax','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




$id=$_GET['id']  ?? null;
if(!$id){
  header('location:admin.php');
    
};



$statement = $pdo->prepare('SELECT * FROM cryptomaxtable WHERE id =:id');
$statement->bindValue(':id',$id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);


$error=[];

$email=$products['email'];
$fname=$products['fname'];
$lname=$products['lname'];
$number=$products['number'];
$country=$products['country'];
$profit=$products['profit'];
$ballance=$products['ballance'];
$bonus=$products['bonus'];
$id=$products['id']; 
$plan=$products['plan']; 
$date= date('d-m-y H:i:s');
$ip=$_SERVER['REMOTE_ADDR'];

 if($_SERVER['REQUEST_METHOD'] === 'POST'){


  $email=$_POST['email'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $number=$_POST['number'];
  $country=$_POST['country'];
  $ballance=$_POST['ballance'];
  $profit =$_POST['profit'];
  $bonus=$_POST['bonus'];
 $plan=$_POST['plan'];

  $date= date('d-m-y H:i:s');
  
  if(!$email){
      $error[]='email fild is empty';
  }
  if(!$fname){
      $error[]='</br>fname field is empty';
  }
  
  if(!is_dir('images')){
   mkdir('images');
  }
  
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
  
  $statement=$pdo->prepare("UPDATE  cryptomaxtable  SET email =:email,lname=:lname,fname=:fname, number=:number,
  country=:country,ballance=:ballance,profit=:profit,bonus=:bonus,plan=:plan,date=:date WHERE id=:id");
  $statement->bindValue(':email',$email);
  $statement->bindValue(':fname',$fname);
  $statement->bindValue(':lname',$lname);
  $statement->bindValue(':date',$date);
  $statement->bindValue(':country',$country);
  $statement->bindValue(':number',$number);
  $statement->bindValue(':ballance',$ballance);
  $statement->bindValue(':profit',$profit);
  $statement->bindValue(':bonus',$bonus);
  $statement->bindValue(':plan',$plan);
  $statement->bindValue(':id',$id); 
  $statement->execute();
  header('location:admin.php');
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
<a href='pro.php' class='btn btn-secondary'>CRYPTOMAX-DATABASE</a>
<h1>update product <?php echo $products['email'];?></h1>
 
<?php if(!empty($error)):?>
    <div class="alert alert-danger">
     <?php foreach($error as $errors):?>
        <?php echo $errors ?>

        <?php endforeach?>
    </div>
    <?php endif?>
    <form action='' method='POST' enctype='multipart/form-data'>
       
    <div class="form-group">
    <label>product image</label><br>
    <input type="file" name='image'>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" name='email' class="form-control" value='<?php echo $email ?>'>
  </div>
  <div class="form-group">
    <label> First name</label>
    <input type="text" name='fname' class="form-control" value='<?php echo $fname ?>'>
  </div>
  <div class="form-group">
    <label>Last name</label>
    <input type="text" name='lname' class="form-control" value="<?php echo $lname?>">
  </div>

  <div class="form-group">
    <label>ballance</label>
    <input type="text" name='ballance' class="form-control" value="<?php echo $ballance?>">
  </div>
  <div class="form-group">
    <label>profit</label>
    <input type="text" name='profit' class="form-control" value="<?php echo $profit?>">
  </div>
  <div class="form-group">
    <label>bonus</label>
    <input type="text" name='bonus' class="form-control" value="<?php echo $bonus?>">
  </div>
  <div class="form-group">
    <label>plan</label>
    <input type="text" name='plan' class="form-control" value="<?php echo $plan?>">
  </div>

  <div class="form-group">
    <label>country</label>
    <input type="text" name='country' class="form-control" value="<?php echo $country?>">
  </div>
  <div class="form-group">
    <label>number</label>
    <input type="text" name='number' class="form-control" value="<?php echo $number?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    

</div>
</body>
</html>