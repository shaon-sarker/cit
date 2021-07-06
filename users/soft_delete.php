<?php 

require '../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM crud WHERE id='$id'";
$result = mysqli_query($db_conn, $sql);
$after_assoc =mysqli_fetch_assoc($result);

if($after_assoc['status']==1){
    $update = "UPDATE crud SET status=0 WHERE id='$id'";
    $update = mysqli_query($db_conn, $update);
}

else{
    $update = "UPDATE crud SET status=1 WHERE id='$id'";
    $update = mysqli_query($db_conn, $update);
}

header('location:/cit/users/user.php');












?>