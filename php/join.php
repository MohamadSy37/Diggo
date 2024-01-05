<?php
date_default_timezone_set('Asia/Damascus');
include("db_con.php");
if(isset($_POST['join'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $fullName=$_POST['fullName'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);
    $birth=$_POST['birth'];
    $Gender=$_POST['Gender'];
    $data=date('Y-m-d');
    $time=date('h:i:s');
    $check_email=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$email'");
    if(mysqli_num_rows($check_email)<=0){
        $check_username=mysqli_query($con,"SELECT * FROM `user` WHERE `username`='$username'");
        if(mysqli_num_rows($check_username)<=0){
            if($password===$repassword){
                $sql=mysqli_query($con,"INSERT INTO `user`(`username`, `fullname`, `email`, `password`, `date`, `data_join`, `time`) VALUES ('$username','$fullName','$email','$password','$birth','$data','$time')");
                if($sql){
                header("Location: ../join/index.php?rn=User registration successful");

                }else{
                header("Location: ../join/index.php?rn=User not successful registration");

                }
            }else{

        header("Location: ../join/index.php?rn=The password not confirm");
            }
        }else{
        header("Location: ../join/index.php?rn=The username used");

        }
    }else{
        header("Location: ../join/index.php?rn=The email used");

    }

}