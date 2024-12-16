<?php
session_start();
$validUsername="admin";
$validPassword="password";
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  $usename=$_POST['username'];
  $password=$_POST['password'];
  if($usename==$validUsername && $password==$validPassword)
   {
     $_SESSION['username']=$username;
     $_SESSION['loggedin']=true;
     header("location:homepage.php");
     exit();
   }
  else
  {
    $error="invalid username or password";
  }
 }
?>
<html>
<head>
 <tilte>Login</tilte>
</head>
<body> 
 <form method="POST" action="">
 <h2>Login</h2>
 <?php if(!empty($error))echo"<p style='color:red;'>$error</p>";?>
 <lable for="username">Username:</lable>
 <lable type="text" name="username" required><br><br>
 <lable for="password">Password:</lable>
 <lable type="password" name="password" required><br><br>
 <button type="submit">Logout</button>
</form>
</body>
</html>
 
 
 
 