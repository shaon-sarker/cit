<?php
session_start();
require '../db.php';

$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_password = password_hash($password,PASSWORD_DEFAULT);
$repassword = $_POST['repassword'];
$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$num = preg_match('@[0-9]@', $password);
$spsl = preg_match('@[#,$,%,^,&,*,(,)]@', $password);
$bd = $_POST['birthday'];
$role = $_POST['role'];



if(empty($name)){
    $_SESSION['name_err'] = "Name is required";
    header('Location:/cit/users/register.php');
    
}
else if(empty($email)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:/cit/users/register.php');
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:/cit/users/register.php');
}
else if(empty($password)){
    $_SESSION['pass_err']= "Your Password is required";
    header('Location:/cit/users/register.php');
}
else if(!$upper || !$lower || !$num || !$spsl || strlen($password) < 8){
    $_SESSION['pass_err'] = 'Password must be upper-case,lower-case,special char,number & must be 8 characters!';
    header('Location:/cit/users/register.php');    

}
else if(empty($repassword)){
    $_SESSION['repass_err'] = "Your repassword is recured";
    header('Location:/cit/users/register.php');
}
else if($password != $repassword){
    $_SESSION['repass_err'] = "password and repassword doesnot match";
    header('Location:/cit/users/register.php');
}   
else if(empty($bd)){
    $_SESSION['birthdate_err'] = "Birth date is required";
    header('Location:/cit/users/register.php');
}
else if(empty($role)){
    $_SESSION['role_err'] = "Role is required";
    header('Location:/cit/users/register.php');
}



else{
    $select="SELECT COUNT(*)as email_exist FROM crud WHERE email='$email'";
    $select_result = mysqli_query ($db_conn,$select);
    $after_assoc = mysqli_fetch_assoc($select_result);

    $uploaded_file= $_FILES['user_image'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array ('jpeg','jpg','png','svg','gif');

    if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {
            if($after_assoc['email_exist'] == 1){
                $_SESSION['email_exist'] = "Email already existed!";
                header('location:/crud/users/register.php');
            }
            else{
                $insert = "INSERT INTO crud (uname,email,password,repassword,birthday,role,status) VALUES ('$name','$email','$hash_password','$repassword','$bd','$role', '0')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/users/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE crud SET user_image='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['succes'] = "Registration Succesessfully";
                header('location:/cit/users/register.php');
            }
            
        } 
    
    else{
        $_SESSION['image_format'] = "file size is too big";
        header('location:/cit/users/register.php');
    }
        }
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/cit/users/register.php');
   }
   
   
}

?>