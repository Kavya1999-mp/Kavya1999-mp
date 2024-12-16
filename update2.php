<?php
include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) 
  { 
    $id = $_POST['id'];
    $fname = $_POST['name'];
    $crse = $_POST['course'];
    $sem = $_POST['semester'];
    $gnder= $_POST['gender'];
    $hobbies1 = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";
    $sql = "UPDATE student 
      SET student_name = '$fname', course_name = '$crse', semester = '$sem', Gender = '$gnder', Hobbies= '$hobbies1' 
      WHERE student_id = '$id'";

    if (mysqli_query($conn, $sql)) 
    {
        header("Location: homepage.php");
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit();
}
if (isset($_GET['student_id'])) 
{
    $student = $_GET;
} 
else 
{
    echo "No student data provided.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Details</title>
</head>
<body>
    <h2>Update Student Details</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $student['student_id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $student['student_name']; ?>" required><br><br>

        <label for="name">Course:</label>
        <input type="text" name="course" value="<?php echo $student['course_name']; ?>" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" name="semester" value="<?php echo $student['semester']; ?>" required><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" <?php if ($student['Gender'] == 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($student['Gender'] == 'female') echo 'checked'; ?>> Female<br><br>
        <input type="radio" name="gender" value="others" <?php if ($student['Gender'] == 'others') echo 'checked'; ?>> others
        <label for="hobbies1">Hobbies:</label>
        <?php 
         $existingHobbies = explode(", ", $student['Hobbies']); ?>
        <input type="checkbox" name="hobbies[]" value="sports" <?php if (in_array("sports", $existingHobbies)) echo 'checked'; ?>> Sports
        <input type="checkbox" name="hobbies[]" value="music" <?php if (in_array("music", $existingHobbies)) echo 'checked'; ?>> Music
        <input type="checkbox" name="hobbies[]" value="dance" <?php if (in_array("dance", $existingHobbies)) echo 'checked'; ?>> Dance
        <input type="checkbox" name="hobbies[]" value="reading" <?php if (in_array("reading", $existingHobbies)) echo 'checked'; ?>> Reading<br><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>