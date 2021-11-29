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


    $sql = "SELECT * FROM Student WHERE City IN ('Toronto','Mississauga') ORDER BY Fname";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>StudentID</th><th>Fname</th><th>Lname</th><th>City</th><th>Phone</th><th>DateOfBirth</th><th>Program</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["StudentID"]."</td><td>".$row["Fname"]."</td><td>".$row["Lname"]."</td><td>".$row["City"]."</td><td>".$row["Phone"]."</td><td>".$row["DateOfBirth"]."</td><td>".$row["Program"]."</td></tr>";
        }
            echo "</table>";
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>