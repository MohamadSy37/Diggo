<?php
include("../../php/db_con.php");
session_start();
if(isset($_GET['rn'])){
    $sql=mysqli_query($con,"DELETE FROM `like_post` WHERE `id_user`='$_SESSION[user_id]' AND `id_post`='$_GET[rn]'");
    header("Location: ../post.php?rn=".$_GET['rn']);

}