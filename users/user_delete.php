<?php 

require '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `crud` WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);

header('location:/cit/users/trash.php');












?>