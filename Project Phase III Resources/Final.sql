# CUSTOM VIEW 1
SELECT * FROM FinalProject.Grades
WHERE NumGrade > 50
ORDER BY StudentID;

# CUSTOM VIEW 2
SELECT * FROM FinalProject.Student
WHERE City IN ("Toronto", "Mississauga")
ORDER BY Fname;

# CUSTOM VIEW 3
SELECT * FROM FinalProject.Courses
WHERE CourseDelivery = "In Person"
AND Capacity > 100;

# CUSTOM VIEW 4
SELECT sum(capacity)
From FinalProject.Courses
WHERE CourseDelivery = "Online";

# CUSTOM VIEW 5
SELECT * FROM FinalProject.Courses
WHERE CourseDelivery = "In Person"
ORDER BY ExamDates;

# VIEW 1
SELECT e.studentID, s.NumGrade, d.CourseID
FROM (Student e JOIN Grades s ON e.StudentID = s.StudentID)
	JOIN Courses d ON s.CourseID = d.CourseID;

# VIEW 2
SELECT StudentID, CourseID, NumGrade
FROM Grades
WHERE NumGrade > ANY ( SELECT NumGrade
						FROM Grades
                        WHERE StudentID = 10001)
GROUP BY NumGrade;

# VIEW 3
SELECT Capacity, CourseName, InstructorID
FROM Courses
WHERE Capacity > (SELECT sum(Capacity)
					FROM Courses
                    WHERE InstructorID = 20001);

# VIEW 4
SELECT t1.CourseDelivery, t2.Lname
FROM Courses AS t1 LEFT JOIN Instructors AS t2
ON t1.InstructorID = t2.InstructorID
UNION
SELECT t1.CourseDelivery, t2.Lname
FROM Courses AS t1 RIGHT JOIN Instructors AS t2
ON t2.InstructorID = t1.InstructorID
ORDER BY Lname;

# VIEW 5
SELECT Grades.StudentID, NumGrade, CourseID
FROM Grades
WHERE NumGrade > 80
AND StudentID IN
	(SELECT StudentID
     FROM Student
     WHERE StudentID = 10001);


