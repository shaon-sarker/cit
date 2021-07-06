<?php 

require '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `projects` WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
header('location:/cit/project/view_project.php');






?>