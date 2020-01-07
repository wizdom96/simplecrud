<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die (mysqli_error($mysqli));

$id=0;  
$name = '';
$lastname = '';
$date=date('m/d/Y');


if(isset($_GET['edit'])){  
    $id = $_GET['edit'];
    $result = $mysqli -> query("SELECT * FROM data WHERE id=$id") or  die($mysqli->error());
    
    if(array($result) !==null)  {

             $row=$result -> fetch_array();
             $name= $row ['name'];
             $lastname= $row['lastname'];       
             $school = $row['school'];
             
             
        }
        
}
    

    if(isset($_POST['update'])){

        $id= $_POST['id'];
        $name= $_POST['name'];
        $lastname= $_POST['lastname'];
        $date= $_POST['date'];
        $school= $_POST['school'];
        $mysqli-> query ("UPDATE  data SET name='$name', lastname='$lastname', birthdate='$date', school='$school' WHERE id=$id") or  die($mysqli->error());

        $_SESSION['message'] = "Record has been updated!";
       

        header("location: ../index.php");
    }

   