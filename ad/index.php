<?php
include("header.php");
?>
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Recent Join</div>
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
                            }    }?>
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
                <li class="topic">email</li>
                <?php
                $sql=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `id`='$_SESSION[user_id]'");
                if(mysqli_num_rows($sql)){
                                while($row=mysqli_fetch_array($sql)){

                ?>
                <li><a href="#"><?php echo$row['email'];?></a></li>
                <?php
                              }  }?>
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
                           }     }?>
              </ul>
              <?php




              ?>
            </div>
            <div class="button">
              <a href="#">See All</a>
            </div>
          </div>
          <div class="top-sales box">
            <div class="title">Last Post</div>

            <ul class="top-sales-details">
            <?php
            $sql_post=mysqli_query($con,"SELECT * FROM `post` WHERE 1");
            while($row_post=mysqli_fetch_array($sql_post)){
              
            ?>
              <li>
                <a href="#">
                  <img src="../user/img/post/image/<?php echo$row_post['file'];?>" alt="" />
                  <span class="product"><?php echo$row_post['post'];?></span>
                </a>
                <span class="price"><?php echo$row_post['data'];?>||<?php echo$row_post['time'];?></span>
              </li>
              <?php
            }
            ?>
            </ul>
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
