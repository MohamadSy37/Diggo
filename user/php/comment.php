<?php
include("../../php/db_con.php");
session_start();
if(isset($_POST['send'])){
    $comment=$_POST['comment'];
    $id=$_POST['id'];
    $sql=mysqli_query($con,"INSERT INTO `comment`(`id_user`, `id_post`, `comment`) VALUES ('$_SESSION[user_id]','$id','$comment')");
    header("Location: ../post.php?rn=".$id);

}