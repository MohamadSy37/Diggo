<?php
include("../../php/db_con.php");
if(isset($_GRT['rn'])){
    $sql=mysqli_query($con,"DELETE FROM `comment` WHERE `id`='$_GET[rn]'");
    header("Location: ../view_post.php?rn=".$id_post);

}