<?php
include("../../php/db_con.php");
if(isset($_GET['rn'])){
    $sql=mysqli_query($con,"DELETE FROM `frends` WHERE `id`='$_GET[rn]'");
    header("Location: ../Friendship_requests.php");

}