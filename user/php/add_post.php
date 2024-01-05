<?php
date_default_timezone_set('Asia/Damascus');
session_start();
include("../../php/db_con.php");
if(isset($_POST['send'])&& isset($_FILES['file'])){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $post=$_POST['post'];
    $id=$_SESSION['user_id'];
    $data=date('Y-m-d');
    $time=date('h:i:s');
    if(($post==="")&&($file_name==="")){
        
        header("Location: ../user_profile.php?rn=Please Enter text or img or video");

    }else{
        if ($error === 0) {
            $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_ex_lc = strtolower($file_ex);
            
        $img_exs = array("png",'jpg','jpeg');
        $vedio_exs = array("mp4",'wmv');
        if (in_array($file_ex_lc, $img_exs)) {
            //image
              
            $new_image_name = uniqid("image-", true). '.'.$file_ex_lc;
            $image_file = '../img/post/image/'.$new_image_name;
            move_uploaded_file($tmp_name, $image_file);
            $type="image";
        }elseif(in_array($file_ex_lc, $vedio_exs)){
            //video
            $new_image_name = uniqid("video-", true). '.'.$file_ex_lc;
            $image_file = '../img/post/video/'.$new_image_name;
            $type="video";
            move_uploaded_file($tmp_name, $image_file);
        }else{
        header("Location: ../user_profile.php?rn=Please upload png ,jpg,jpeg wmv,mp4");

        }
        $sql=mysqli_query($con,"INSERT INTO `post`(`iduser`, `post`, `file`, `data`, `time`, `type`) VALUES ('$id','$post','$new_image_name','$data','$time','$type')");
        if($sql){
        header("Location: ../user_profile.php?rn=Add post");

        }else{
        header("Location: ../user_profile.php?rn=Not Add post");

        }

        }else{
            header("Location: ../user_profile.php?rn=error");
        }
    }
}