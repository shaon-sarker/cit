<?php  
session_start();
require '../../db.php';

$skill_title = $_POST['skill_title'];
$skill_desp = $_POST['skill_desp'];
$skill_percentage = $_POST['percentage'];

$insert = "INSERT INTO skills(skill_title,skill_desp,percentage) VALUES('$skill_title', '$skill_desp', '$skill_percentage')";
$insert_result = mysqli_query($db_conn, $insert);

$_SESSION['skill_content'] = "Skills add succesfully";
header('location:skill_add.php');










?>