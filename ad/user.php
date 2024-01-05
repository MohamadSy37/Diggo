<?php
include("header.php");
?>
<style>
    .home-content .sales-boxes .recent-sales{
        width: 100%;
    }
</style>
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">all user</div>
            <div class="sales-details">

              <ul class="details">

                <li class="topic">#</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php echo$row['id'];?></a></li>
                <?php
                                }
                              }?>
              </ul>
              <ul class="details">
                <li class="topic">Name</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php echo$row['username'];?></a></li>
                <?php
                                }
                              }?>
              </ul>
              <ul class="details">
                <li class="topic">fullname</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php echo$row['fullname'];?></a></li>
                <?php
                                }
                              }?>
              </ul>
              <ul class="details">
                <li class="topic">email</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php echo$row['email'];?></a></li>
                <?php
                                }
                              }?>
              </ul>
              <ul class="details">
                <li class="topic">about</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php
                if($row['about']===""){
                  echo"NO write";
                }else{
                 echo$row['about'];?>
<?php
                                }?>
                                </a></li>
                                <?php
                                }
                              }?>
              </ul>
              <ul class="details">
                <li class="topic">date Join</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php echo$row['data_join'];?></a></li>
                <?php
                                }
                              }?>
              </ul>
              <ul class="details">
                <li class="topic">action</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="php/delete_user.php?rn=<?php echo$row['id'];?>"><button>Delete</button></a></li>
                <?php
                                }
                              }?>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
