<?php
include("../../php/db_con.php");
session_start();
$sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
$row=mysqli_fetch_array($sql);
if(isset($_POST['info'])&& isset($_FILES['file'])){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $password=md5($_POST['password']);
    if($password===$row['password']){
        if ($error === 0) {
            $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_ex_lc = strtolower($file_ex);
            
        $img_exs = array("png",'jpg','jpeg');
        if (in_array($file_ex_lc, $img_exs)) {
            //image
              
            $new_image_name = uniqid("image-", true). '.'.$file_ex_lc;
            $image_file = '../images/'.$new_image_name;
            move_uploaded_file($tmp_name, $image_file);
            $insert=mysqli_query($con,"UPDATE `user` SET `username`='$name',`email`='$email',`img`='$new_image_name' WHERE `id`='$row[id]'");
            if($insert){
            header("Location: ../edit_info.php?rn=Updata");

            }
        }else{
            header("Location: ../edit_info.php?rn=Please upload png ,jpg,jpeg");
    
            }
    }
    }else{
        header("Location: ../edit_info.php?rn=The password Not corect");
    }

}
if(isset($_POST['epassword'])){
    $password=md5($_POST['password']);
    $newpassword=md5($_POST['newpassword']);
    $repassword=md5($_POST['repassword']);
    if($row['password']===$password){
        if($newpassword===$repassword){
            $edit=mysqli_query($con,"UPDATE `user` SET `password`='$newpassword' WHERE `id`='$row[id]'");
            header("Location: ../edit_info.php?rn=Updata");

        }else{
        header("Location: ../edit_info.php?rn=The password Not corect");
            
        }
    }else{
        header("Location: ../edit_info.php?rn=The password Not corect");

    }
}