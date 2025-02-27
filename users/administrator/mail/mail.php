<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
        $email="
        <html>
        <div style=\"position:relative;  border:2px solid black;background-color:black; padding:30px 30px; width:70%;height:auto; margin:auto; text-align:center;\">
        <img src=\"..\images/cryptomax.jpg \" style=\" width:80px; height:80px;\"> IMAGE</img>
        <h1 style=\" color:red; line-height:5px;\">welcome <{name}></h1><br>
        <h5 style=\"color:white; \">THANKS FOR REGISTERING WITH CRYPTOMAX</h5>
        <p style=\"color:white; \">we're excited for you to dream big, invest smart and reach your biggest goals,</p>
        <p style=\"color:white; \">now lets complete your registration </p>
        <div class='small'>
        <p style=\"color:white; font-size:1px;\">now lets complete your registration </p>
        
        </div>
        </div>
        </html>
        
   

        
        ";
        echo $email;
      ?>
</body>
</html>