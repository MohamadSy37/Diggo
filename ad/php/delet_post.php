<?php
include("../../php/db_con.php");
if(isset($_GET['rn'])){
    $sql=mysqli_query($con,"DELETE FROM `post` WHERE `id`='$_GET[rn]'");
    if($sql){
        header("Location: ../post.php");
    }else{
        header("Location: ../post.php");

    }
}