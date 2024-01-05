
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;}

/*==================================================
  Post Contents CSS
  ==================================================*/

.post-content{
  background: #f8f8f8;
  border-radius: 4px;
  width: 100%;
  border: 1px solid #f1f2f2;
  margin-bottom: 20px;
  overflow: hidden;
  position: relative;
}

.post-content img.post-image, video.post-video, .google-maps{
  width: 100%;
  height: auto;
}

.post-content .google-maps .map{
  height: 300px;
}

.post-content .post-container{
  padding: 20px;
}

.post-content .post-container .post-detail{
  margin-left: 65px;
  position: relative;
}

.post-content .post-container .post-detail .post-text{
  line-height: 24px;
  margin: 0;
}

.post-content .post-container .post-detail .reaction{
  position: absolute;
  right: 0;
  top: 0;
}

.post-content .post-container .post-detail .post-comment{
  display: inline-flex;
  margin: 10px auto;
  width: 100%;
}

.post-content .post-container .post-detail .post-comment img.profile-photo-sm{
  margin-right: 10px;
}

.post-content .post-container .post-detail .post-comment .form-control{
  height: 30px;
  border: 1px solid #ccc;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  margin: 7px 0;
  min-width: 0;
}

img.profile-photo-md {
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

img.profile-photo-sm {
    height: 40px;
    width: 40px;
    border-radius: 50%;
}

.text-green {
    color: #8dc63f;
}

.text-red {
    color: #ef4136;
}

.following {
    color: #8dc63f;
    font-size: 12px;
    margin-left: 20px;
}

    </style>
</head>
<body>
  <?php
  include("header.php");
  $user=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
  $row_user=mysqli_fetch_array($user);

  $sql=mysqli_query($con,"SELECT * FROM `post` WHERE `id`='$_GET[rn]'");
  $row=mysqli_fetch_array($sql);
  $userpublish=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$row[iduser]'");
  $row_publish=mysqli_fetch_array($userpublish);
  ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="post-content">
<?php
if($row['type']==="image"){
?>
<img src="../user/img/post/image/<?php echo$row['file'];?>" alt="post-image" class="img-responsive post-image">
<?php
}elseif($row['type']==="video"){?>
<video src="https://www.bootdey.com/image/400x150/FFB6C1/000000"  class="img-responsive post-image">
</video>

<?php
}
?>

<div class="post-container">
<?php 
    if($row_publish['img']===""){
    ?>
<img class="profile-photo-md pull-left" src="../user/img/profile/profile.png" >

<?php
    }else{
        ?>
<img class="profile-photo-md pull-left" src="../user/img/profile/<?php echo$row_publish['img'];?>">

        <?php
    }?>
<div class="post-detail">
<div class="user-info">
<h5><a href="timeline.html" class="profile-link"><?php echo$row_publish['fullname'];?></a> </h5>
<p class="text-muted">Published <?php echo$row['data'];?> || <?php echo$row['time'];?> </p>
</div>
<?php
$checklike=mysqli_query($con,"SELECT * FROM `like_post` WHERE `id_user`=$_SESSION[user_id] AND `id_post`='$row[id]'");
if(mysqli_num_rows($checklike)>0){
  ?>
  <div class="reaction">
<a href="" class="btn text-blue"><i class="fa fa-thumbs-up"></i>dislike 
<?php

$sqli="SELECT COUNT(*) as total FROM like_post WHERE `id_post`='$_GET[rn]'";
$ss=mysqli_query($con,$sqli);
$ff=mysqli_fetch_assoc($ss);
 echo $ff['total'];
?>
</a>
</div>
  <?php
}else{
?>
<div class="reaction">
<a href="php/like.php?rn=<?php echo$row['id'];?>" class="btn text-green"><i class="fa fa-thumbs-up"></i>like 
<?php

$sqli="SELECT COUNT(*) as total FROM like_post WHERE `id_post`='$_GET[rn]'";
$ss=mysqli_query($con,$sqli);
$ff=mysqli_fetch_assoc($ss);
 echo $ff['total'];
?>
</a>
</div>
<?php
}
?>
<div class="line-divider"></div>
<div class="post-text">
<p><?php echo$row['post'];?> <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
<p><a href="php/delet_post.php?rn=<?php echo$row['id'];?>">Delete Post</a></p>
</div>
<?php
$sql_comment=mysqli_query($con,"SELECT * FROM `comment` WHERE `id_post`='$_GET[rn]'");
while($row_comment=mysqli_fetch_array($sql_comment)){
?>
<div class="line-divider"></div>
<div class="post-comment">
  <?php 

  $sql_user_comment=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$row_comment[id_user]'");
  $row_user_comment=mysqli_fetch_array($sql_user_comment);
?>
<?php 
    if($row_user_comment['img']===""){
    ?>
<img class="profile-photo-sm" src="../user/img/profile/profile.png" >

<?php
    }else{
        ?>
<img class="profile-photo-sm" src="../user/img/profile/<?php echo$row_user_comment['img'];?>">

        <?php
    }

    
    ?>

<p><a href="" class="profile-link"><?php echo$row_user_comment['fullname'];?> </a><i class="em em-laughing"></i> <?php echo$row_comment['comment'];?> </p>
<p><a href="php/delete_comment.php?rn=<?php echo$row['id'];?>"><button>delete comment</button></a></p>
</div>
<?php
}?>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>