<?php 
    session_start();
    require '../db.php';

        $uploaded_file = $_FILES['baner_pic'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extension = array('jpg','jpeg','png','svg','gif');
        if(in_array($extension,$allowed_extension)){
           if($uploaded_file['size'] >= 20000){
     
                 $file_name = $id.'.'.$extension;
                 $new_location = "../uploads/baners/".$file_name;
                 move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                 $update_photo = "UPDATE baner_images SET baner_pic='$file_name' WHERE id=$id";
                 $update_photo_result = mysqli_query($db_conn,$update_photo);
                 header('location:view_baner_image.php');
           }
           else{
              $_SESSION['image_size']  = "Images size is to big";
              header('location:edit_baner_image.php');
          }
        }
        else{
           $_SESSION['image_format'] = "Invalid format";
           header('location:edit_baner_image.php');
        }


























?>