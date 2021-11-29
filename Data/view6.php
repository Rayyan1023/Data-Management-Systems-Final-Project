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


    $sql = "SELECT e.StudentID, s.NumGrade, d.CourseID 
            FROM (Student e JOIN Grades s ON e.StudentID = s.StudentID)
                    JOIN Courses d ON s.CourseID = d.CourseID";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>StudentID</th><th>NumGrade</th><th>CourseID</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["StudentID"]."</td><td>".$row["NumGrade"]."</td><td>".$row["CourseID"]."</td></tr>";
        }
            echo "</table>";
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>