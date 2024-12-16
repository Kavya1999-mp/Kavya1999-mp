<?php
include'conn.php';
if(isset($_GET['student_id']))
 {
   $studentid=$_GET['student_id'];
   $sql="SELECT * FROM student WHERE student_id='$studentid'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
    {
      $student=mysqli_fetch_assoc($result);
      $query=http_build_query($student);
      header("Location:update2.php?$query");
      exit();
    }
   else
   { 
     echo"No student found with id:$studentid"; 
   }
 }
?>
<html>
<head>
 <title>Retrieve student details</title>
</head>
<body>
 <h2>Retrieve student details</h2>
 <form method="GET" action="">
 <lable for="student_id">Student ID:</lable>
 <input type="text" name="student_id" id="student_id" required>
  <button type="submit">Retrieve</button>
 </form>
</body>
</html>