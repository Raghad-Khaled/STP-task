<?php


require('Database.php');

class user
{
  private $_conn;

  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }


  public function InsertNewUser($name, $password, $email, $comm, $phone,$image)
  {
    $record = $this->_conn->query("SELECT EMAIL FROM memember WHERE EMAIL='$email'");
  
   

    if ($record->num_rows != 0)
      echo "<script> alert('Oops!, This Email is already Exist!');  window.location.href='index.html';</script>";
    else {
      $qury = "INSERT INTO memember (`NAME`,`PASWORD`,`EMAIL`,`COMMITTEE`,`PHONE`,`IMAGE`)  VALUES ('$name','$password','$email','$comm','$phone','$image')";
      //echo $qury;
      echo "<script> alert('Welcome :)');  window.location.href='main.php';</script>";
      $result = mysqli_query($this->_conn, $qury);
    }
  }


  public function User_Sign_In($email)
  {
    $qury = ("SELECT * FROM memember WHERE EMAIL='$email'");
    
    return $result = mysqli_query($this->_conn, $qury);
  }

}
