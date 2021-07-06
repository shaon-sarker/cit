<?php 
    session_start();
    require '../db.php';
    
    
    $id = $_POST['id'];
    $sub_heading = $_POST['sub_head'];
    $headline = $_POST['headline'];
    $description = $_POST['description'];
    $button = $_POST['button'];

    $update = "UPDATE  banner_contents SET sub_head='$sub_heading', headline='$headline', description='$description', button='$button' WHERE id=$id";
    $Update_baner = mysqli_query($db_conn, $update);

    $_SESSION['baner_update'] = "Update Banner Susccefully";
    header('location:banner_content.php');














?>