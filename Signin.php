<?php

include 'control.php';
if(isset($_POST['signin']))
{

session_start();
$_SESSION['email']=$_POST['Email'];
$_SESSION['password']=$_POST['password'];

$user = new user;
$result = $user -> User_Sign_In($_SESSION['email']);

//var_dump($result);
if($result->num_rows != 0){

    $data=mysqli_fetch_assoc($result);
    $v = password_verify($_SESSION['password'], $data['PASWORD']);
    if($v){
      $_SESSION['name'] = $data['NAME'];
      $_SESSION['img'] = $data['IMAGE'];
      $_SESSION['phone']=$data['PHONE'];
      $_SESSION['comm']=$data['COMMITTEE'];
      
      echo "<script> alert('Welcome Back!!!!'); window.location.href='main.php';</script>";
    }
    else{
      echo "<script> alert('Wrong password or Email'); window.location.href='index.html';</script>";
    }
}else{
  echo "<script> alert('Wrong password or Email'); window.location.href='index.html';</script>";
}
}
?>