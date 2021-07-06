<?php  
session_start();
require '../db.php';

    $project_no = $_POST['project_no'];
    $project_head = $_POST['project_head'];


    $uploaded_file= $_FILES['project_img'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('jpeg','jpg','png','svg','gif');

if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {
                $insert = "INSERT INTO projects(project_no,project_head) VALUES('$project_no','$project_head')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/projects/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE projects SET project_img='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['project_content'] = "Project Work Add  Succesessfully";
                header('location:/cit/project/project.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/cit/project/project.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/cit/project/project.php');
   }
   










?>