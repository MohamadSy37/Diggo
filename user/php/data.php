<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['id']}
                OR outgoing_msg_id = {$row['id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
if($row['img']===""){
    
    $output .= '<a href="chat.php?user_id='. $row['id'] .'">
    <div class="content">
    <img src="img/profile/profile.png" alt="">
    <div class="details">
        <span>'. $row['username'].'</span>
        <p>'. $you . $msg .'</p>
    </div>
    </div>
</a>';

}else{
 

        $output .= '<a href="chat.php?user_id='. $row['id'] .'">
                    <div class="content">
                    <img src="img/profile/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['username'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                </a>';
        
}   
}
?>