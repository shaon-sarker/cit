<?php 


require '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `baner_images` WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);

header('location:/cit/banner/view_banner_image.php');










?>