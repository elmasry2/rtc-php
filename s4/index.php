<?php require_once('process.php');?>
<html>
    <head>
     
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Form Handling PHP  </title>
        <link rel="icon" href="https://www.w3schools.com/favicon.ico" type="image/x-icon">
        <meta property="description" content="<?php echo $description;?>">
        <meta name="Keywords"        content="<?php echo $keywords;?>">

    </head>
    <body>
    <p style="color: red;"> <?php echo $ErrorMessage;?></p>
    <p style="color: green;"> <?php echo $name;?></p>
    <p style="color: green;"> <?php echo empty($emailErr)?$email:'';?></p>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
username: <input type="text" name="username" ><br>
password: <input type="text" name="password" ><br>
<span style="color:red;"> <?php echo $emailErr; ?></span>
<br>
<input type="submit">
</form>
    </body>
</html>