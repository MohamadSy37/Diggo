<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>bs4 beta friend list - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    background:#FAFAFA;    
}
/*==================================================
  Nearby People CSS
  ==================================================*/

.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}

    </style>
</head>
<body>
  <?php
  session_start();
include("header.php")
  ?>
  <center><a href="friend_list.php"><button class="btn btn-primary">Add friends</button></a>
 <a href="friends_list.php"><button class="btn btn-primary">My friends</button></a>
</center>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="people-nearby">
  <?php
  $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `type`='user' AND `id`!='$_SESSION[user_id]'");
  while($row=mysqli_fetch_array($sql)){

$check_fren=mysqli_query($con,"SELECT * FROM `frends` WHERE `id_send`='$_SESSION[user_id]'");
$row_check=mysqli_fetch_array($check_fren);
if(mysqli_num_rows($check_fren)>0){
  if($row_check['statue']==="1"){
?>
<div class="nearby-user">
<div class="row">
<div class="col-md-2 col-sm-2">
<?php 
    if($row['img']===""){
    ?>
<img  class="profile-photo-lg" src="img/profile/profile.png" >

<?php
    }else{
        ?>
<img class="profile-photo-lg" src="img/profile/<?php echo$row['img'];?>">

        <?php
    }?>
</div>
<div class="col-md-7 col-sm-7">
<h5><a href="#" class="profile-link"><?php echo$row['fullname'];?></a></h5>
<p><?php echo$row['username'];?></p>
<p class="text-muted">Date Join:<?php echo$row['data_join'];?></p>
<p class="text-muted">Date Time:<?php echo$row['time'];?></p>
<p class="text-muted">email:<?php echo$row['email'];?></p>
</div>
<div class="col-md-3 col-sm-3">

<a href="php/accept_friend.php?rn=<?php echo$row_check['id'];?>"><button class="btn btn-danger">Accapet</button></a>





</div>
</div>
</div>
<?php
  }
  }
}?>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>