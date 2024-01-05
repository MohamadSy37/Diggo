<?php
session_start();
include("../../php/db_con.php");
if(isset($_GET['rn'])){
    $sql=mysqli_query($con,"INSERT INTO `frends`(`id_user`, `id_send`, `statue`) VALUES ('$_SESSION[user_id]','$_GET[rn]','1')");
    header("Location: ../friend_list.php");

}