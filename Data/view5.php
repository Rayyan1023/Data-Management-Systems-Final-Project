<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "FinalProject";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    $sql = "SELECT * FROM Courses WHERE CourseDelivery ='In Person' ORDER BY ExamDates";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>CourseID</th><th>CourseName</th><th>CourseDelivery</th><th>Capacity</th><th>ExamDates</th><th>InstructorID</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["CourseID"]."</td><td>".$row["CourseName"]."</td><td>".$row["CourseDelivery"]."</td><td>".$row["Capacity"]."</td><td>".$row["ExamDates"]."</td><td>".$row["InstructorID"]."</td></tr>";
        }
            echo "</table>";
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>