<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'FinalProject');


$studentid = $_POST['studentid'];
$firstname = $_POST['firstname'];


$s = " select * from Student where StudentID = '$studentid' && Fname = '$firstname'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['firstname'] = $firstname;
    $_SESSION['studentid'] = $studentid;
    header('location:home.php');
}
else{
    echo "<script> 
    alert ('Sorry you have entered the wrong information. Please try again');
    window.location.href = 'data.html';
    </script>";
    
        
}



    
?>