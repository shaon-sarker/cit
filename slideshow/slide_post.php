<?php 
    session_start();
    require '../db.php';

    $uploaded_file= $_FILES['slide_pic'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('jpeg','jpg','png','svg','gif');

    if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {

                $insert = "INSERT INTO slides(slide_pic) VALUES('$uploaded_file_name')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/slideshow/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE slides SET slide_pic='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['slide_image'] = "Slide Image Add Succesessfully";
                header('location:/cit/slideshow/slideshow.php');
        }

    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/cit/slideshow/slideshow.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/cit/slideshow/slideshow.php');
   }
   





?>