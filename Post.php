<?php
include("connection.php");

if (isset($_POST['create'])){

  $name           = $_POST['name'];
  $mobile_no       = $_POST['mobile_no'];
  $gender          = $_POST['gender'];
  $email           = $_POST['email'];
  $password         = $_POST['password'];
  $confrmpassword    = $_POST['confrmpassword'];

  $query ="INSERT INTO registerform (name, mobile_no, gender, email, password, confrmpassword) VALUES ('{$name}','{$mobile_no}','{$gender}','{$email}','{$password}','{$confrmpassword}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    echo "";
  }
  else{
    echo "data not Save";
  }
  }
    



?>