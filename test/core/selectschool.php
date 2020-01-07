<?php


$mysqli = new mysqli('localhost', 'root', '', 'crud') or die (mysqli_error($mysqli));

$id=0;  
$name = '';
$name1='';
$adress = '';
$first;

if(isset($_GET['edit1'])){  
    $id = $_GET['edit1'];
    $first = $id[0];
    $str = substr($id, 1); 
    $result = $mysqli -> query("SELECT * FROM schools WHERE id=$first") or  die($mysqli->error());
    $result1 = $mysqli -> query("SELECT * FROM data WHERE school='$str  ' ") or  die($mysqli->error());

    if(array($result) !==null)  {

             $row= $result -> fetch_array();
             $name= $row ['schoolname'];
             $adress= $row ['adress'];    
             $maxstudents = $row['maxstudents'];
             $courses = $row['coursesfee'];
    }  
    if(array($result1) !==null)  {
$row1=$result1 -> fetch_array();
    
   }

    }

    if(isset($_POST['update1'])){
    
        $first= $_POST['id'];
        $name1= $_POST['name1'];
        $adress= $_POST['adress'];
        $maxstudents= $_POST['maxstudents'];
        $coursesfee= $_POST['coursesfee'];
        $mysqli-> query ("UPDATE schools SET schoolname='$name1', adress='$adress', maxstudents='$maxstudents', coursesfee='$coursesfee' WHERE id=$first") or  die($mysqli->error());
     
        $_SESSION['message'] = "Record has been updated!";
    
        header("location: ../schools.php");
    
    }

    if(isset($_GET['delete'])){  
        $id=$_GET['delete'];
        $mysqli->query ("DELETE FROM schools WHERE id=$id") or  die($mysqli->error());

        $_SESSION['message'] = "Record has been deleted!";
        header("location: ../schools.php");

        
 }
        
