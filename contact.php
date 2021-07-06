<?php 

session_start();
require 'db.php';

$name = $_POST['uname'];
$email = $_POST['email'];
$message = $_POST['message'];


if(empty($name)){
    $_SESSION['name_err'] = "Name is required";
    header('Location:index.php');
    
}
else if(empty($email)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:index.php');
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:index.php');
}
else if(empty($message)){
    $_SESSION['message_err']= "Message is required";
    header('Location:index.php');
}
else{
    $insert = "INSERT INTO contactform(uname,email,message) VALUES ('$name','$email','$message')";
    $result_contact = mysqli_query($db_conn, $insert);
    $_SESSION['contact_success'] = "Submit Successfully";
    header('location:index.php');
}










?>