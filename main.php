<?php
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$comm=$_SESSION['comm'];
$img=$_SESSION['img'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STP</title>
    <link rel="icon" href="images/stp_logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="main">
   
    <div class="card">
        <img src="images/<?=$img?>" class="card-img-top" alt="userimg">
        <div class="card-body">
          <h5 class="card-title"><?=$name?></h5>
          <p class="card-text">Committee: <?=$comm?></p>
          <p class="card-text">Phone Number: <?=$phone?></p>
          <p class="card-text">Email: <?=$email?></p>
        </div>
      </div>
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>