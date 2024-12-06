<?php
include'conn.php';
if(isset($_POST['submit'])
{
  $uname=$_POST['username'];
  $psswrd=$_POST['password'];
  $sql="select * from user_registration where username='$uname' and password='$psswrd'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
   header("location:welcome.php");
  }
  mysqli_close($conn);
 }
 else
 {
?>
<html>
 <body>
 <center>
 <form action="" method="post">
 username:
 <input type="textbox" name="username">
 <br>
 <br>
 password
 <input type="password" name="password">
 <a href="registration.php">new user?sign up</a><br><br>
 <input type="submit" name="submit value="submit"><br><br>
</form>
</center>
</html>
<?php
}
?> 