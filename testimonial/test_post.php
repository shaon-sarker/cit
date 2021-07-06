<?php  
session_start();
require '../db.php';

    $description = $_POST['description'];
    $test_head = $_POST['test_head'];
    $test_subhead = $_POST['test_subhead'];



    $uploaded_file= $_FILES['test_img'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('jpeg','jpg','png','svg','gif');

if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {
                $insert = "INSERT INTO testimonials(description,test_head,test_subhead) VALUES('$description','$test_head','$test_subhead')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/testimonials/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE testimonials SET test_img='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['testimonials_content'] = "testimonials Add  Succesessfully";
                header('location:/cit/testimonial/testimonial.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/cit/testimonial/testimonial.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/cit/testimonial/testimonial.php');
   }
   










?>