<?php
    session_start();
    include_once "../../php/db_con.php";
    $outgoing_id = $_SESSION['user_id'];
    $output = "";
    $user=mysqli_query($con,"SELECT * FROM frends WHERE `id_user`='$_SESSION[user_id]' OR `id_send`='$_SESSION[user_id]'");
    if(mysqli_num_rows($user)>0){
    while($req_user=mysqli_fetch_array($user)){
    $sql = "SELECT * FROM user WHERE  id = {$req_user['id_send']} OR id={$req_user['id_user']} AND NOT id={$_SESSION['user_id']} ORDER BY id DESC";
    $query = mysqli_query($con, $sql);
    }

    if(mysqli_num_rows($query) === 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
}else{
    $output .= "No Friends";
}
    echo $output;
?>