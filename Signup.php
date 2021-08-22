<?php

include 'control.php';
if(isset($_POST['signup']))
{

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$comm=$_POST['comm'];
$phone=$_POST['phone'];


$password=password_hash($password, PASSWORD_DEFAULT);

$save_user=new user;
session_start();
$_SESSION['name'] =$username;
$_SESSION['email'] =$email;
$_SESSION['pass'] =$password;
$_SESSION['phone']=$phone;
$_SESSION['comm']=$comm;

$targetDir = "images/";
var_dump($_FILES['image1']['name']);
$fileName = basename($_FILES["image1"]["name"]);
$_SESSION['img'] = $fileName;
$targetFilePath = $targetDir . $fileName;

if(!empty($_FILES["image1"]["name"]) )
{
    
    if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath))
    {
        $save_user->InsertNewUser($username,$password,$email,$comm,$phone,$fileName);
    }else{
        echo "<script> alert('can't upload the image try again'); window.location.href='index.html';</script>";
    }
}
}

?>