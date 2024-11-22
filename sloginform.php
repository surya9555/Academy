<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login</title>
  <style>

@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0px;
	padding: 0px;	
	font-family: Raleway, sans-serif;
}

body {
	background-image: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);

.container {
 height: 500px;
 margin: 70px auto;
 display: flex;
 align-items: center;
 justify-content: center;
/* background-color: red; */
}

.screen {		
	background-image: linear-gradient(90deg,#accbee 0%, #e7f0fd 100%);
	position: relative;	
	height: 500px;
	width: 360px;	
	box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;	
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
} 

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;
	border-radius: 60px;
}

.logo{
  height: 60px;
  width: 90%;
  background-image: url(/logo-removebg-preview.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  margin: 5px 0px;
}
.add{
  height: 60px;
  width: 90%;
  text-align: center;
  padding: 10px 0px 0px 0px;
  font-size: 12px;
}
.add h4{
  font-size: 18px;
}

.headd{
  height: 50px;
  width: 90%;
  background-color: darkblue;
  color: #FFF;
  border-radius: 18px;
  font-size: 14px;
  text-align: center;
  padding: 10px 10px;
}
#input1,#input2{
  height:50px;
  width: 255px;
  background-color: transparent;
  border: none;
  border-bottom:2px solid #d1d1d4;
  padding: 10px 10px;
}

form{
  height: 250px;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
}

form input{
  padding: 5px 0px 0px 0px;
}

  form button{
    height: 45px;
    width: 300px;
    background-color: darkblue;
    border-radius: 16px;
    color: white;
    font-size: 20px;
}


.check{
  height: 40px;
  width: 300px;
  background-color: #6A679E;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
align-items: center;
justify-content: space-around;
}
span{
  color: black;
  font-size: 16px;
}
}

</style>
<body>

  <div class="container">
    <div class="screen">
      <div class="screen__content">
  
  <div class="logo"><center><img src="logo.png" height="55px" width="55px"></center><center><b>Ls Digital Academy</b></center></div>
  <div class="add">
    <P1>THE PROFESSIONALS</P1>
    <h4>AN ISO : 2015 COMPANY</h4>
  </div>
  <div class="headd">PLEASE ENTER CREDENTIALS FOR LOGIN</div>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" id="input1" name="email" placeholder="Email / Phone Number" required>
    <input type="password" id="input2" name="password" placeholder="password" required><br>
    <input type="submit" class="btn btn-primary" name="login" value="Login">
  </form>
   <?php 
include "connection.php";
if(isset($_POST['login'])){
  $email = $_SESSION['email'] = mysqli_real_escape_string($connection, $_POST['email']);
  // $mobile_no = $_SESSION['mobile_no'] = mysqli_real_escape_string($connection, $_POST['mobile_no']);
  $password = md5($_POST['password']);

  $sql = "SELECT id, email, FROM studentuser WHERE email='{$email}' AND password='{$password}'";
  
  $result = mysqli_query($connection, $sql) or die("Query Failed");
 
  if(mysqli_num_rows($result)> 0){

    while($row = mysqli_fetch_assoc($result)){
      session_start();
      $_SESSION["email"] = $row['email'];
      // $_SESSION["mobile_no"] = $row['mobile_no'];
      $_SESSION["id"] = $row['id'];
      

     
      
    
      // echo "file continue";
      // session_write_close();
      // header('location:http://localhost/admin/academy/index.php');

         // $url = "http://localhost/admin/dashboard.php";
    $url = "http://localhost/admin/academy/index.php";
     echo '<script> window.location = "'.$url.'";</script>';

    session_destroy();
    }

  }else{
    echo '<div class ="alert slert-danger"> Username and Password are Not Matched.</div>';
mysql_close();
  }

}

 ?>
   <a>Forget Password</a>
<div class="Create-account">
    <p1><b>Register New account? </b><a href="registerform.php"><b>Create</b></a></p1>
  </div>
       
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
  </div>
</body>
</head>
</html>
