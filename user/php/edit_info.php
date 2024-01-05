<?php
session_start();
include("../../php/db_con.php");
$sql_user=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
$row_user=mysqli_fetch_array($sql_user);
if(isset($_POST['edit'])&& isset($_FILES['file'])){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $fullname=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $about=$_POST['about'];
    $password=md5($_POST['password']);
    $new_password=md5($_POST['new_password']);
    $renew_password=md5($_POST['renew_password']);
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
    $img_exs = array("png",'jpg','jpeg');
    if (in_array($file_ex_lc, $img_exs)) {
        if($password===$row_user['password']){
          if($new_password===$renew_password){
        $new_image_name = uniqid("image-", true). '.'.$file_ex_lc;
        $image_file = '../img/profile/'.$new_image_name;
        move_uploaded_file($tmp_name, $image_file);
        $sql=mysqli_query($con,"UPDATE `user` SET `username`='$username',`fullname`='$fullname',`email`='$email',`password`='$new_password',`img`='$new_image_name',`about`='$about' WHERE `id`='$_SESSION[user_id]'");
        if($sql){
        header("Location: ../edit_profile_page.php?rn=update succfull");
            
        }
          }else{
        header("Location: ../edit_profile_page.php?rn=password and repassword not corect");

          }
        }else{
            header("Location: ../edit_profile_page.php?rn=Password Not corect");

        }
    }else{
        header("Location: ../edit_profile_page.php?rn=please uploded png ,jpg or jpeg");


    }
    }else{
        header("Location: ../edit_profile_page.php?rn=error");

    }
}