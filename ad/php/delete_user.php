<?php
include("../../php/db_con.php");
if(isset($_GET['rn'])){
    $sql=mysqli_query($con,"DELETE FROM `user` WHERE `id`='$_GET[rn]'");
    $sql_post=mysqli_query($con,"DELETE FROM `post` WHERE `iduser`='$_GET[rn]'");
    $sql_friend=mysqli_query($con,"DELETE FROM `frends` WHERE `id_user`='$_GET[rn]' OR `id_send`='$_GET[rn]'");
    $sql_like=mysqli_query($con,"DELETE FROM `like_post` WHERE `id_user`='$_GET[rn]'");
    $sql_chat=mysqli_query($con,"DELETE FROM `messages` WHERE `incoming_msg_id`='$_GET[rn]' OR `outgoing_msg_id`='$_GET[rn]'");
    if($sql){
        header("Location: ../user.php");

    }else{
        header("Location: ../user.php");

    }
}