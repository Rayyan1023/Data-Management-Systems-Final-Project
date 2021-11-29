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


    $sql = "SELECT StudentID, CourseID, NumGrade  
            FROM Grades
            WHERE NumGrade > ANY (SELECT NumGrade
                                    FROM Grades
                                    WHERE StudentID = 10001)
            GROUP BY NumGrade";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>StudentID</th><th>CourseID</th><th>NumGrade</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["StudentID"]."</td><td>".$row["CourseID"]."</td><td>".$row["NumGrade"]."</td></tr>";
        }
            echo "</table>";
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>