<?php
date_default_timezone_set('Asia/Damascus');
include("../../php/db_con.php");
session_start();
if(isset($_GET['rn'])){
    $data=date('Y-m-d');
    $time=date('h:i:s');
$like=mysqli_query($con,"INSERT INTO `like_post`(`id_user`, `id_post`, `data`, `time`) VALUES ('$_SESSION[user_id]','$_GET[rn]','$data','$time')");

    header("Location: ../post.php?rn=".$_GET['rn']);

}