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


    $sql = "SELECT Capacity, CourseName, InstructorID  
            FROM Courses
            WHERE Capacity > (SELECT sum(Capacity)
                                FROM Courses
                                WHERE InstructorID = 20001)";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "For the course: " . $row["CourseName"]. " which is thought by: " . $row["InstructorID"]. " has a capacity of: " . $row["Capacity"]. "<br>";
        }
            
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>