<?php 

require '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `slides` WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
header('location:/cit/slideshow/view_slideshow.php');





?>