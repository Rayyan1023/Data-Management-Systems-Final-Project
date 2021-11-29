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


    $sql = "SELECT Grades.StudentID, NumGrade, CourseID  
            FROM Grades
            WHERE NumGrade > 80
            AND StudentID IN (SELECT StudentID
                                FROM Student
                                WHERE StudentID = 10001)";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "The student: " . $row["StudentID"]. " for the course: " . $row["CourseID"]. " got a grade of: " . $row["NumGrade"]. "<br>";
        }
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>