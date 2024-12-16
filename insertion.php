<?php
include'conn.php';
if(isset($_POST['submit']))
{
 $fname=$_POST['student_name'];
 $crse=$_POST['course_name'];
 $sem=$_POST['semester'];
 $gnder=$_POST['Gender'];
 if(isset($_POST['Hobbies']))
 {
  $hobbies1=implode(",",$_POST['Hobbies']);
 }
 else
 {
  $hobbies1="";
 }
 $sql="INSERT INTO student(student_name,course_name,semester,Gender,Hobbies)VALUES('$fname','$crse','$sem',' $gnder','$hobbies1')";
 if(mysqli_query($conn,$sql))
 {
  header("Location:homepage.php");
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
 Student Name:
 <input type="textbox" name="student_name"><br><br>
 Course:
 <input type="textbox" name="course_name"><br><br>
 Semestr:
 <input type="textbox" name="semester"><br><br>
 Gender:
 <input type="radio" name="Gender" value="female">female
 <input type="radio" name="Gender" value="male">male
 <input type="radio" name="Gender" value="others">others<br><br>
 Hobbies
 <input type="checkbox" name="Hobbies[]" value="sports">Sports
 <input type="checkbox" name="Hobbies[]" value="dance">Dance 
 <input type="checkbox" name="Hobbies[]" value="reading">Reading
 <input type="checkbox" name="Hobbies[]" value="music">Music<br><br>
 <input type="submit" name="submit" value="submit"><br><br>
</form>
</center>
</body>
</html>
<?php
}
?>

 