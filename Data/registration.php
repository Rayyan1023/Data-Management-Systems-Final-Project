<?php
	session_start();

   	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con,'FinalProject');
    
    $studentid = $_POST['studentid'];
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$dateofbirth = $_POST['dateofbirth'];
	$program = $_POST['program'];
	
	$s = " select * from Student where StudentID = '$studentid'";
	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "<script> 
				alert ('Sorry you the studentid you have entered is already taken. Please try again');
				window.location.href = 'data.html';
			</script>";
	}
	else{
		$reg = " insert into Student(StudentID, Fname, Lname, City, Phone, DateOfBirth, Program) values ('$studentid', '$firstname', '$lastname', '$city', '$phone', '$dateofbirth', '$program')";
		mysqli_query($con, $reg);
		echo "<script> 
				alert ('Registration Successful!. Please login');
				window.location.href = 'data.html';
			</script>";
	}
		


	
?>