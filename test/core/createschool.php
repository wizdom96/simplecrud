<?php


$mysqli = new mysqli('localhost', 'root', '', 'crud') or die (mysqli_error($mysqli));


$maxstudents = '';
$schoolname= '';
$adress= '';


if (isset($_POST['save1'])){

    $schoolname=$_POST['sname'];
    $adress=$_POST['sadress'];
    $maxstudents=$_POST['smaxstudents'];
    $coursesfee=$_POST['scoursesfee'];

       
    $mysqli->query ("INSERT INTO schools (schoolname, adress, maxstudents, coursesfee) VALUES ('$schoolname', '$adress', '$maxstudents', '$coursesfee')") or 
    die($mysqli->error);

    header("location: ../schools.php");
      }