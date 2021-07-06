<?php 


require '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `banner_contents` WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);

header('location:/cit/banner/banner_content.php');










?>