<?php
session_start();
require '../db.php';

$id = $_POST['id'];
$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$bd = $_POST['birthday'];


if($_FILES['user_image']['name'] != ''){

   $select= "SELECT user_image FROM crud WHERE id=$id";
   $select_result = mysqli_query($db_conn,$select);
   $after_assoc = mysqli_fetch_assoc($select_result);
   $delete_from = "../uploads/users/".$after_assoc['user_image'];
   unlink($delete_from);

   $uploaded_file = $_FILES['user_image'];
   $after_explode = explode('.', $uploaded_file['name']);
   $extension = end($after_explode);
   $allowed_extension = array('jpg','jpeg','png','svg','gif');
   if(in_array($extension,$allowed_extension)){
      if($uploaded_file['size'] >= 20000){

            $file_name = $id.'.'.$extension;
            $new_location = "../uploads/users/".$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_photo = "UPDATE crud SET user_image='$file_name', uname='$name', email='$email', password='$password', repassword='$repassword', birthday='$bd' WHERE id=$id";
            $update_photo_result = mysqli_query($db_conn,$update_photo);
            header('location:user.php');
      }
      else{
         $_SESSION['image_size']  = "Images size is to big";
         header('location:user_edit.php');
     }
   }
   else{
      $_SESSION['image_format'] = "Invalid format";
      header('location:user_edit.php?id='.$id);
   }
}
else{
   $update= "UPDATE crud SET uname='$name',email='$email', password='$password', repassword='$repassword', birthday='$bd' where id='$id'";
   $update_user = mysqli_query($db_conn, $update);
   header ('location:user.php');
}





?>