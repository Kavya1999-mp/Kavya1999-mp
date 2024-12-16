<?php
include'conn.php';
if(isset($_POST['submit']))
{
  $id1=$_POST['id'];
  $sql="DELETE FROM student WHERE student='$id1'";
 if(mysqli_query($conn,$sql))
  {
    header('Location:homepage.php');
  }
 else
  {
    echo"error deleting record:".mysqli_error($conn);
  }
 mysqli_close($conn);
}
?>
<html>
 <body>
 <center>
  <form action="" method="post">
 Student id:
 <input type="submit" name="submit" value="Submit"><br><br>
 </form>
 </cente>
 </body>
</html>
}
?>