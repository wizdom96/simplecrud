<?php

    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
    
    $id=0;
    $name = '';
    $lastname = '';
    $school = '';
    $date=date('m/d/Y');
  

    if (isset($_POST['save'])){

    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $date=$_POST['date'];
    $school=$_POST['school'];

       
    $mysqli->query ("INSERT INTO data (name, lastname, birthdate, school) VALUES ('$name', '$lastname', '$date', '$school')") or 
    die($mysqli->error);
    
    
    $_SESSION['message'] = "Record has been saved!";
  

    header("location: ../index.php");
      }

 if(isset($_GET['delete'])){  
        $id=$_GET['delete'];
        $mysqli->query ("DELETE FROM data WHERE id=$id") or  die($mysqli->error());

        $_SESSION['message'] = "Record has been deleted!";
        header("location: ../index.php");

        
 }