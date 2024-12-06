<?php
include'conn.php';
if(isset($_POST['submit']))
{
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $ph=$_POST['phonenumber'];
  $eid=$_POST['email'];
  $uname=$_POST['username'];
  $psswrd=$_POST['password'];
  $sql="INSERT INTO 
  user_registration(firstname,lastname,phonenumber,email,username,password)VALUES('$fname','$lname','$ph','$eid','$uname','$psswrd')";
  if(mysqli_query($conn,$sql))
   {
     echo"NEW RECORD CREATED SUCCESSFULLY";
   }
  else
   {
    echo"Error:".$sql."<br>".mysqli_error($conn);
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
 first name:
 <input type="textbox" name="firstname"><br>
 Last name:
 <input type="textbox" name="lastname"><br>
 Phone number:
 <input type="textbox" name="phonenumber"><br>
 Email:
 <input type="textbox" name="email"><br>
 Username:
 <input type="textbox" name="username"><br>
 Password:
  <input type="textbox" name="password"><br>
 <input type="submit" name="submit">
 </form>
 </center>
 </body>
</html>
<?php
}
?>
 