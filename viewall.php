<?php
include'conn.php';
$sql="SELECT *FROM student";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
 {
   while($row=mysqli_fetch_assoc($result))
    {
      echo"<br>id: " .$row['student_id']."<br>name:".$row["student_name"]."<br>course:".$row["course_name"].
      "<br>semester:" .$row["semester"]."<br>gender:".$row["Gender"]."<br>hobbies:".$row["Hobbies"]."<br>";
    }
 }
else
 {
   echo"0 reults";
 }
mysqli_close($conn);
?>
<html>
 <body>
 <center>
  <a href="homepage.php">Back</a>
</center>
</body>
</html>