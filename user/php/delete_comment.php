<?php
include("../../php/db_con.php");
if(isset($_POST['delet'])){
    $id_comment=$_POST['id_comment'];
    $id_post=$_POST['id_post'];
    $sql=mysqli_query($con,"DELETE FROM `comment` WHERE `id`='$id_comment'");
    header("Location: ../post.php?rn=".$id_post);

}