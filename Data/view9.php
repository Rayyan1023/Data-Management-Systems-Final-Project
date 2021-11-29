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


    $sql = "SELECT t1.CourseDelivery, t2.Lname
            FROM Courses AS t1 LEFT JOIN Instructors AS t2
            ON t1.InstructorID = t2.InstructorID
            UNION
            SELECT t1.CourseDelivery, t2.Lname
            FROM Courses AS t1 RIGHT JOIN Instructors AS t2
            ON t2.InstructorID = t1.InstructorID
            ORDER BY Lname";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>CourseDelivery</th><th>Lname</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["CourseDelivery"]."</td><td>".$row["Lname"]."</td></tr>";
        }
            echo "</table>";
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>