<?php


$mysqli = new mysqli('localhost', 'root', '', 'crud') or die (mysqli_error($mysqli));

$sql = "SELECT id, schoolname, adress, maxstudents, coursesfee FROM schools";
$sqll = $mysqli->query($sql);
