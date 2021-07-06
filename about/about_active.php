<?php require '../db.php';  ?>

<?php
$id = $_GET['id'];

$update = "UPDATE about SET status = 0";
$update_result = mysqli_query($db_conn,$update);


$update2 = "UPDATE about SET status = 1 WHERE id= $id";
$update_result2 = mysqli_query($db_conn,$update2);
header('location:view_about.php');

?>