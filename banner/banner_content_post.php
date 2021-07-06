<?php
session_start();
require '../db.php';

$sub_heading = $_POST['sub_head'];
$headline = $_POST['headline'];
$description = $_POST['description'];
$button = $_POST['button'];

$insert= "INSERT INTO banner_contents(sub_head, headline, description, button) VALUES('$sub_heading', '$headline', '$description', '$button')";

$insert_result = mysqli_query($db_conn,$insert);
$_SESSION['banner_content'] = 'Banner Content Added Successfully!';
header('location:add_banner_content.php');

?>