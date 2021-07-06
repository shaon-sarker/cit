<?php 
session_start();
require '../db.php';

$icon_name = $_POST['icon_name'];
$icon_link = $_POST['icon_link'];

$insert = "INSERT INTO social_icons(icon_name,icon_link) VALUES('$icon_name','$icon_link')";
$insert_result = mysqli_query($db_conn, $insert);

$_SESSION['icons'] = "Icons ADD succesfully";
header('location:add_icon_content.php');



?>