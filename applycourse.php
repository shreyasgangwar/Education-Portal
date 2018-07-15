<?php
require_once ('conn.php');
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    if(session_id() == '') {session_start();}
} else  {
    if (session_status() == PHP_SESSION_NONE) {session_start();}
}
$email=$_SESSION['email'];
$q2="SELECT * From user WHERE email='$email'";
$r2=mysqli_query($link,$q2);
$r3=mysqli_fetch_assoc($r2);
if($r3!=null)
{
    $course_id=$_GET['id'];
    $student_id=$r3['id'];
    $instructor_id=mysqli_fetch_assoc(mysqli_query($link,"SELECT instructor_id from course where Course_id='$course_id'"));
    $instructor_id=$instructor_id['instructor_id'];
    $q=mysqli_query($link,"INSERT INTO courseapplication (course_id,student_id,instructor_id) VALUES('$course_id','$student_id','$instructor_id')");
    if($q)
    {
        header('location: studentDashboard.php');
    }
    else
    {
        header('location: courses.php');
    }

}
else
{
    header('location: login.php');
}