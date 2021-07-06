<?php 
    session_start();
    require '../db.php';

    $user_id = $_SESSION['id'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $uploaded_file= $_FILES['port_pic'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
    $extension = end($after_explode);
    $allowed_extesion = array('jpeg','jpg','png','svg','gif');

    if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {

                $insert = "INSERT INTO portfolios(user_id,category,title,description) VALUES('$user_id','$category','$title','$description')";
                $insert_query = mysqli_query($db_conn,$insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/portfolio/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE portfolios SET port_pic='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['portfolio_content'] = "Portfolio added  Succesessfully";
                header('location:/cit/portfolio/add_portfolio.php');
        }

    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/cit/portfolio/add_portfolio.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/cit/portfolio/add_portfolio.php');
   }

















?>