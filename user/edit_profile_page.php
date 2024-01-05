<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>edit profile page </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    background:#f8f8f8
}
    </style>
</head>
<body>
    <?php
    session_start();
        include("header.php");
        include("../php/db_con.php");
        $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
        $row=mysqli_fetch_array($sql);
    ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
<div class="col-12 col-lg-auto mb-3" style="width: 200px;">
</div>
<div class="col">
<div class="row">
<div class="col mb-3">
<div class="card">
<div class="card-body">
<form action="php/edit_info.php" enctype="multipart/form-data" method="post" class="e-profile">

<div class="row">
<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
<div class="text-center text-sm-left mb-2 mb-sm-0">
<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo$row['fullname'];?></h4>
<p class="mb-0">@<?php echo$row['username'];?></p>
<div class="text-muted"><small><?php echo$row['time'];?></small></div>
<div class="mt-2">
    <input type="file" name="file" hidden id="file">
<label class="btn btn-primary" for="file" type="button">
<i class="fa fa-fw fa-camera"></i>
<span>Change Photo</span>
</label>
</div>
</div>
<div class="text-center text-sm-right">
<div class="text-muted"><small>Joined <?php echo$row['data_join'];?></small></div>
</div>
</div>
</div>
<ul class="nav nav-tabs">
<li class="nav-item"><a href class="active nav-link">Settings</a></li>
</ul>
<div class="tab-content pt-3">
<div class="tab-pane active">
<form class="form" novalidate>
<div class="row">
<div class="col">
<div class="row">
<div class="col">
<div class="form-group">
<label>Full Name</label>
<input class="form-control"  type="text" name="name" placeholder="John Smith" value="<?php echo$row['fullname'];?>">
</div>
</div>
<div class="col">
<div class="form-group">
<label>Username</label>
<input class="form-control" type="text" name="username" placeholder="johnny.s" value="<?php echo$row['username'];?>">
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="form-group">
<label>Email</label>
<input class="form-control" value="<?php echo$row['email'];?>" name="email" type="text" placeholder="<?php echo$row['email'];?>">
</div>
</div>
</div>
<div class="row">
<div class="col mb-3">
<div class="form-group">
<label>About</label>
<textarea class="form-control" name="about" rows="5" value="<?php echo$row['about'];?>" placeholder="My Bio"></textarea>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-6 mb-3">
<div class="mb-2"><b>Change Password</b></div>
<div class="row">
<div class="col">
<div class="form-group">
<label>Current Password</label>
<input class="form-control" name="password" type="password" placeholder="••••••">
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="form-group">
<label>New Password</label>
<input class="form-control" name="new_password" type="password" placeholder="••••••">
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="form-group">
<label>Confirm <span class="d-none d-xl-inline">Password</span></label>
<input class="form-control" type="password" name="renew_password" placeholder="••••••"></div>
<button class="btn btn-primary" name="edit" type="submit">Save Changes</button>
</div>
</div>
</div>


</form>
</div>
</div>
</form><!--end form-->
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>