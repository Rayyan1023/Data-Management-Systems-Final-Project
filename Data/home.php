<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="homeStyle.css">

</head>
<body>

    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="#CourseInformation">Course Information</a>
        <a href="#Grades">Grades</a>
        <a href="data.html"> LOGOUT </a>
    </div>

    <h1>Welcome: <?php echo $_SESSION['studentid'].", ",$_SESSION['firstname']?></h1>

    <div id="StudentPortal">
        <hr>
        <h2>Student Portal</h2>
        <p>Welcome to the student home page!</p>
        <p>On this page you can access information about courses and grades</p>
        <p>You can use the menu bar to navigate to the different sections</p>
        <p>Remember to logout once your done with your session</p>
        <hr>
    </div>

        <form method="POST">

            <div id="CourseInformation">

                <h2>Course Information</h2> 
                <p>In this section you can access information about the courses that are offered</p>
                <p>Remember to click the view button to display the table for the information of your liking</p><br>
                
                <div id="view5">
                    <p>What is the exam schedule for the in-person classes? </p>
                    <p>Make sure you plan your trip to school accordingly on the day of your exam: </p>
                    <?php 
                    if(isset($_POST['button5'])) {
                    require('view5.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button5" value="View"/> <br> <br>
                </div>

                <div id="view9">
                    <p>What type of delivery method would the instructors be offering? </p>
                    <p>Here's the list of the instructors and their method of delivery: </p>
                    <?php 
                    if(isset($_POST['button9'])) {
                    require('view9.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button9" value="View"/> <br> <br>
                </div>

                <div id="view3">
                    <p>Which courses offered in-person will have more than 100 students attending?</p>
                    <p>According to health and safety officials courses with more than 100 students will be allowed</p>
                    <p>However if you are uncomfortable, choose the online option: </p>
                    <?php 
                    if(isset($_POST['button3'])) {
                    require('view3.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button3" value="View"/> <br> <br>
                </div>
                
                <div id="view4">
                    <p>How much is the capacity for the online courses?</p>
                    <p>Please ensure you are registered in the courses before it's not too late: </p>
                    <?php 
                    if(isset($_POST['button4'])) {
                    require('view4.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button4" value="View"/> <br> <br>
                </div>

                <div id="view8">
                    <p>Are there any courses that have more capacity than the ones thaught by Dr.Hafeez? </p>
                    <p>Dr.Hafeez is teaching a total of 380 students, here are the instructors who teach more: </p>
                    <?php 
                    if(isset($_POST['button8'])) {
                    require('view8.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button8" value="View"/> <br> <br>
                </div>


            </div>

            <div id="Grades">

                <hr>
                <h2>Grades</h2> 
                <p>In this section you can access information about your grades</p>
                <p>If you have any concerns contact academic advising</p><br>

                <div id="view1">
                    <p>Am I passing a course?</p>
                    <p>If your name isn't on the table, contact academic advising:</p>
                    <?php 
                    if(isset($_POST['button1'])) {
                    require('view1.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button1" value="View"/> <br> <br>
                </div>

                
                <div id="view6">
                    <p>When can we see our grades? </p>
                    <p>Here are all student grades with the course ID's: </p>
                    <?php 
                    if(isset($_POST['button6'])) {
                    require('view6.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button6" value="View"/> <br> <br>
                </div>

                <div id="view2">
                    <p>Here is the information about who have to commute to school</p>
                    <p>Their contact information is given if you'd like to have someone to commute with: </p>
                    <?php 
                    if(isset($_POST['button2'])) {
                    require('view2.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button2" value="View"/> <br> <br>
                </div>

                <div id="view7">
                    <p>Can I see how I did compared to other students or the average?</p>
                    <p>Here are the students who have a higher grade than your lowest grade: </p>
                    <?php 
                    if(isset($_POST['button7'])) {
                    require('view7.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button7" value="View"/> <br> <br>
                </div>

                
                <div id="view10">
                    <p>How can I see if I am on the dean's list? </p>
                    <p>The dean's list has students who obtain an average of a grade A and higher </p>
                    <p>Here's the courses where you got a grade of A and higher: </p>
                    <?php 
                    if(isset($_POST['button10'])) {
                    require('view10.php');
                    }   
                    ?>
                    <br>
                    <input type="submit" name="button10" value="View"/> <br> <br>
                </div>

            </div>

        </form>
        
        
</body>
    
</html>



