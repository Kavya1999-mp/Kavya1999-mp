<?php
include'con.php';
$sql="SELECT *FROM student";
$reult=mysqli_query($conn,$sql);
if(mysqli_num_rows($reslt)>0)
 {
   while($row=mysqli_fetch_assoc($result))
    {
      echo"<br>id:"$row['studentid']."<br>Name:".$row["Name"]."<br>Course:".$row["Course"]
      $row["Semester"]."<br>Gender:".$row["Gender"]."<br>Hobbies:".$row["Hobbies"].
      "<br>";
    }
 }
else
 {
   echo"0 reults";
 }
mysqli_close($conn);
?>
<html>
 <center>
  <a href="homepage.php">Back</a>
</center>
</body>
</html>