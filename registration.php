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
  user_registration(first_name,last_name,phone_number,email,user_name,password)VALUES('$fname','$lname','$ph','$eid','$uname','$psswrd')";
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
 <input type="textbox" name="firstname"><br><br>
 Last name:
 <input type="textbox" name="lastname"><br><br>
 Phone number:
 <input type="textbox" name="phonenumber"><br><br>
 Email:
 <input type="textbox" name="email"><br><br>
 Username:
 <input type="textbox" name="username"><br><br>
 Password:
  <input type="textbox" name="password"><br><br>
 <input type="submit" name="submit">
 </form>
 </center>
 </body>
</html>
<?php
}
?>
 