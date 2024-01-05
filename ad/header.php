<?php
include("../php/db_con.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <img src="../images/logo.png" alt="">
        <span class="logo_name"></span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="user.php">
            <i class="bx bx-box"></i>
            <span class="links_name">user</span>
          </a>
        </li>
        <li>
          <a href="post.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">post</span>
          </a>
        </li>
        <li>
          <a href="edit_info.php">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Edit profile</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../php/logout.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
            <?php
            $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
            $row=mysqli_fetch_array($sql);
        ?>
        <div class="profile-details">
            <?php
            if($row['img']===""){
                ?>
                <img src="../images/profile.png" alt="" srcset="">
                <?php
            }else{
            ?>
          <img src="images/<?php echo$row['img'];?>" alt="" />
          <?php
            }
          ?>
          <span class="admin_name"><?php echo$row['username'];?></span>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total user</div>
              <div class="number">
                        <?php 
                        $sqli="SELECT COUNT(*) as total FROM user WHERE `type`='user'";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                        echo $ff['total'];
                        ?>
                        </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Post</div>
              <div class="number">
              <?php 
                        $sqli="SELECT COUNT(*) as total FROM post WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                        echo $ff['total'];
                        ?>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total like</div>
              <div class="number">
              <?php 
                        $sqli="SELECT COUNT(*) as total FROM like_post WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                        echo $ff['total'];
                        ?>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total comment</div>
              <div class="number">
              <?php 
                        $sqli="SELECT COUNT(*) as total FROM comment WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                        echo $ff['total'];
                        ?>
              </div>
            </div>
          </div>
        </div>
