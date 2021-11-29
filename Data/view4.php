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


    $sql = "SELECT sum(capacity) FROM Courses WHERE CourseDelivery ='Online'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "The total capacity for online courses is: " . $row["sum(capacity)"]. "<br>";
        }
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>