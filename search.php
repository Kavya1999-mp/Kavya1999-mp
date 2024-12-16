<?php
include 'conn.php';

if (isset($_POST['submit'])) 
{
    $id1=$_POST['id'];
    $sql = "SELECT * FROM student WHERE student_id='$id1'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
     {
        
        while($row = mysqli_fetch_assoc($result))
       {
            echo "<br> id:   " . $row["student_id"] . " <br>studentname:  " . $row["student_name"] . "<br><br>coursename: " . $row["course_name"] . "<br>semester:  " . $row["semester"] . "<br>gender:  " . $row["Gender"] . "<br>hobbies:  " . $row["Hobbies"] . "<br>";
       }
     } 
   else 
    {
        echo "0 results";
   
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
            <label for="id">Student ID:</label>
            <input type="text" name="id" required><br>

            <input type="submit" name="submit" value="submit"><br>
        </form>
    


    </body>
    </html>

<?php
}
?>  
