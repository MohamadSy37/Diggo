<?php
session_start();
include("../php/db_con.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>social network wall activities - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<style type="text/css">
    	
body{margin-top:20px;
background:#eee;
margin: 0;
}

.form-control {
    border: 1px solid #d1d4d7;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    color: #3d3f42;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}

.activity .panel .panel-heading {
    line-height: 20px;
    height: 70px;
    padding-top: 15px
}

.activity .panel .panel-heading img {
    height: 40px;
    margin: 0 15px 15px 0;
    float: left
}

.activity .panel .panel-heading .small {
    color: #d1d4d7
}

.activity .panel .panel-heading .pull-right {
    font-size: 12px;
    color: #d1d4d7
}

.activity .panel .panel-heading .pull-right i {
    font-size: 14px
}

.activity .panel .panel-body .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden
}

.activity .panel .panel-body .video-container iframe,
.activity .panel .panel-body .video-container object,
.activity .panel .panel-body .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.activity .panel .panel-body .actions {
    background: #f8f9fa;
    margin: 15px -15px 0 -15px;
    padding: 0 20px 0 10px;
    line-height: 50px;
    font-size: 12px
}

.activity .panel .panel-body .actions .btn {
    font-size: 12px;
    text-decoration: none
}

.activity .panel .panel-body .media-object {
    width: 30px
}

.activity .panel .panel-body .media .media-body .media-heading {
    font-weight: 500
}

.activity .panel .panel-body .media .media-body .small {
    color: #d1d4d7
}

.activity .panel .panel-body .media .media-body p {
    margin-top: 10px;
    font-size: 12px
}
#file{
    display: none;
}
.profile-page .profile-header {
    box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    border: 1px solid #f2f4f9;
}

.profile-page .profile-header .cover {
    position: relative;
    border-radius: .25rem .25rem 0 0;
}


.profile-page .profile-header .cover figure {
    margin-bottom: 0;
}

@media (max-width: 767px) {
    .profile-page .profile-header .cover figure {
        height: 110px;
        overflow: hidden;
    }
}

@media (min-width: 2400px) {
    .profile-page .profile-header .cover figure {
        height: 280px;
        overflow: hidden;
    }
}

.profile-page .profile-header .cover figure img {
    border-radius: .25rem .25rem 0 0;
    width: 100%;
}

@media (max-width: 767px) {
    .profile-page .profile-header .cover figure img {
        -webkit-transform: scale(2);
        transform: scale(2);
        margin-top: 15px;
    }
}

@media (min-width: 2400px) {
    .profile-page .profile-header .cover figure img {
        margin-top: -55px;
    }
}

.profile-page .profile-header .cover .gray-shade {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: linear-gradient(rgba(255, 255, 255, 0.1), #fff 99%);
}

.profile-page .profile-header .cover .cover-body {
    position: absolute;
    bottom: -20px;
    left: 0;
    z-index: 2;
    width: 100%;
    padding: 0 20px;
}

.profile-page .profile-header .cover .cover-body .profile-pic {
    border-radius: 50%;
    width: 100px;
}

@media (max-width: 767px) {
    .profile-page .profile-header .cover .cover-body .profile-pic {
        width: 70px;
    }
}

.profile-page .profile-header .cover .cover-body .profile-name {
    font-size: 20px;
    font-weight: 600;
    margin-left: 17px;
}

.profile-page .profile-header .header-links {
    padding: 15px;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    background: #fff;
    border-radius: 0 0 .25rem .25rem;
}

.profile-page .profile-header .header-links ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.profile-page .profile-header .header-links ul li a {
    color: #000;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
}

.profile-page .profile-header .header-links ul li:hover,
.profile-page .profile-header .header-links ul li.active {
    color: #727cf5;
}

.profile-page .profile-header .header-links ul li:hover a,
.profile-page .profile-header .header-links ul li.active a {
    color: #727cf5;
}

.profile-page .profile-body .left-wrapper .social-links a {
    width: 30px;
    height: 30px;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row {
    margin-right: 0;
    margin-left: 0;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div {
    padding-left: 3px;
    padding-right: 3px;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div figure {
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    margin-bottom: 6px;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div figure:hover {
    -webkit-transform: scale(1.06);
    transform: scale(1.06);
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div figure img {
    border-radius: .25rem;
}

.rtl .profile-page .profile-header .cover .cover-body .profile-name {
    margin-left: 0;
    margin-right: 17px;
}
.img-xs {
    width: 37px;
    height: 37px;
}
.rounded-circle {
    border-radius: 50% !important;
}
img {
    vertical-align: middle;
    border-style: none;
}

.card-header:first-child {
    border-radius: 0 0 0 0;
}
.card-header {
    padding: 0.875rem 1.5rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 1px solid #f2f4f9;
}

.card-footer:last-child {
    border-radius: 0 0 0 0;
}
.card-footer {
    padding: 0.875rem 1.5rem;
    background-color: rgba(0, 0, 0, 0);
    border-top: 1px solid #f2f4f9;
}

.grid-margin {
    margin-bottom: 1rem;
}

.card {
    box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    -webkit-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    -moz-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    -ms-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
}
.rounded {
    border-radius: 0.25rem !important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #f2f4f9;
    border-radius: 0.25rem;
}
    </style>
    <?php
include("header.php");
?>
<div class="container">
<div class="row activity">
<div class="row-md-6">
<form action="php/add_post.php" enctype="multipart/form-data" method="post" class="panel panel-default">
<div class="panel-body">
<textarea name="post"  class="form-control" placeholder="What are you doing now?">
</textarea>
<input type="file" name="file" id="file">
</div>
<div class="panel-footer">
<div class="btn-group">
<label for="file" class="btn btn-link"><i class="fa fa-camera"></i></label>
<label for="file" class="btn btn-link"><i class="fa fa-video-camera"></i></label>
</div>
<div class="pull-right">
<button type="submit" name="send" class="btn btn-success">submit</button>
</div>
</div>
</form>

<!--start post-->
<?php
    $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
    $req=mysqli_fetch_array($sql);
$sql_post=mysqli_query($con,"SELECT * FROM `post` WHERE 1");
while($row_post=mysqli_fetch_array($sql_post)){
    $sql_frend=mysqli_query($con,"SELECT * FROM `frends` WHERE `id_user`='$_SESSION[user_id]' AND `id_send`='$row_post[iduser]'");
    $sql_frend_send=mysqli_query($con,"SELECT * FROM `frends` WHERE `id_user`='$row_post[iduser]' AND `id_send`='$_SESSION[user_id]'");
    
    if($row_post['iduser']===$_SESSION['user_id']){
?>
<div class="col-md-12 grid-margin">
<div class="card rounded">
<div class="card-header">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
    
<?php 
    if($req['img']===""){
    ?>
<img class="img-xs rounded-circle" src="img/profile/profile.png" >

<?php
    }else{
        ?>
<img class="img-xs rounded-circle" src="img/profile/<?php echo$req['img'];?>">

        <?php
    }?>
<div class="ml-2">
<p><?php echo$req['fullname'];?></p>
<p class="tx-11 text-muted"><?php echo$row_post['data'];?></p>
<p class="tx-11 text-muted"><?php echo$row_post['time'];?></p>
</div>
</div>
<div class="dropdown">
<button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
<circle cx="12" cy="12" r="1"></circle>
<circle cx="19" cy="12" r="1"></circle>
<circle cx="5" cy="12" r="1"></circle>
</svg>
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
<a class="dropdown-item d-flex align-items-center" href="php/Delete_post.php?rn=<?php echo$row_post['id'];?>">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
<circle cx="12" cy="12" r="10"></circle>
<line x1="8" y1="15" x2="16" y2="15"></line>
<line x1="9" y1="9" x2="9.01" y2="9"></line>
<line x1="15" y1="9" x2="15.01" y2="9"></line>
</svg> <span class>Delete post</span></a>

</div>
</div>
</div>
</div>
<div class="card-body">
<p class="mb-3 tx-14"><?php echo$row_post['post'];?></p>
<?php
if($row_post['type']==="image"){
?>
<img class="img-fluid" src="img/post/image/<?php echo$row_post['file'];?>" width="100%" alt>
<?php
}elseif($row_post['type']==="video"){?>
<video src="img/post/video/<?php echo$row_post['file'];?>" width="100%" >
</video>
<?php
}?>
</div>
<div class="card-footer">
<div class="d-flex post-actions">
<a href="post.php?rn=<?php echo$row_post['id'];?>" class="d-flex align-items-center text-muted mr-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
</svg>
<p class="d-none d-md-block ml-2">Like</p>
</a>
<a href="post.php?rn=<?php echo$row_post['id'];?>" class="d-flex align-items-center text-muted mr-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
</svg>
<p class="d-none d-md-block ml-2">Comment</p>
</a>
</div>
</div>
</div>
</div>

<?php
    }elseif(mysqli_num_rows($sql_frend)>0){
?>

<div class="col-md-12 grid-margin">
<div class="card rounded">
<div class="card-header">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
    
<?php 
    if($req['img']===""){
    ?>
<img class="img-xs rounded-circle" src="img/profile/profile.png" >

<?php
    }else{
        ?>
<img class="img-xs rounded-circle" src="img/profile/<?php echo$req['img'];?>">

        <?php
    }?>
<div class="ml-2">
<p><?php echo$req['fullname'];?></p>
<p class="tx-11 text-muted"><?php echo$row_post['data'];?></p>
<p class="tx-11 text-muted"><?php echo$row_post['time'];?></p>
</div>
</div>
</div>
</div>
<div class="card-body">
<p class="mb-3 tx-14"><?php echo$row_post['post'];?></p>
<?php
if($row_post['type']==="image"){
?>
<img class="img-fluid" src="img/post/image/<?php echo$row_post['file'];?>" width="100%" alt>
<?php
}elseif($row_post['type']==="video"){?>
<video  src="img/post/video/<?php echo$row_post['file'];?>" width="100%" class="video" controls>
</video>
<?php
}?>
</div>
<div class="card-footer">
<div class="d-flex post-actions">
<a href="post.php?rn=<?php echo$row_post['id'];?>" class="d-flex align-items-center text-muted mr-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
</svg>
<p class="d-none d-md-block ml-2">Like</p>
</a>
<a href="post.php?rn=<?php echo$row_post['id'];?>" class="d-flex align-items-center text-muted mr-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
</svg>
<p class="d-none d-md-block ml-2">Comment</p>
</a>
</div>
</div>
</div>
</div>
<?php
    }elseif(mysqli_num_rows($sql_frend_send)>0){
        ?>
        
<div class="col-md-12 grid-margin">
<div class="card rounded">
<div class="card-header">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center">
    
<?php 
    if($req['img']===""){
    ?>
<img class="img-xs rounded-circle" src="img/profile/profile.png" >

<?php
    }else{
        ?>
<img class="img-xs rounded-circle" src="img/profile/<?php echo$req['img'];?>">

        <?php
    }?>
<div class="ml-2">
<p><?php echo$req['fullname'];?></p>
<p class="tx-11 text-muted"><?php echo$row_post['data'];?></p>
<p class="tx-11 text-muted"><?php echo$row_post['time'];?></p>
</div>
</div>

<div class="dropdown">
<button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
<circle cx="12" cy="12" r="1"></circle>
<circle cx="19" cy="12" r="1"></circle>
<circle cx="5" cy="12" r="1"></circle>
</svg>
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
<a class="dropdown-item d-flex align-items-center" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
<circle cx="12" cy="12" r="10"></circle>
<line x1="8" y1="15" x2="16" y2="15"></line>
<line x1="9" y1="9" x2="9.01" y2="9"></line>
<line x1="15" y1="9" x2="15.01" y2="9"></line>
</svg> <span class>Delete post</span></a>
<a class="dropdown-item d-flex align-items-center" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
<polyline points="10 9 15 4 20 9"></polyline>
<path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
</svg> <span class>Update post</span></a>

</div>
</div>
</div>
</div>
<div class="card-body">
<p class="mb-3 tx-14"><?php echo$row_post['post'];?></p>
<?php
if($row_post['type']==="image"){
?>
<img class="img-fluid" src="img/post/image/<?php echo$row_post['file'];?>" width="100%" alt>
<?php
}elseif($row_post['type']==="video"){?>

<video src="img/post/video/<?php echo$row_post['file'];?>" controls></video>
<?php
}?>
</div>
<div class="card-footer">
<div class="d-flex post-actions">
<a href="post.php?rn=<?php echo$row_post['id'];?>" class="d-flex align-items-center text-muted mr-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
</svg>
<p class="d-none d-md-block ml-2">Like</p>
</a>
<a href="post.php?rn=<?php echo$row_post['id'];?>" class="d-flex align-items-center text-muted mr-4">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
</svg>
<p class="d-none d-md-block ml-2">Comment</p>
</a>
</div>
</div>
</div>
</div>
        <?php
    }
}?>


<!--end post-->
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	

</script>
</body>
</html>