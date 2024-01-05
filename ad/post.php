<?php
include("header.php");
?>
<style>
    .home-content .sales-boxes .recent-sales{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .home-content .sales-boxes{
        flex-direction: column;
        gap: 20px;
    }
    .box img{
      width: 400px;
    }
</style>
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">all post</div>
            </div>
            <?php
            $sql=mysqli_query($con,"SELECT * FROM  `post` WHERE 1");
            if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_array($sql)){
                    $sql_user=mysqli_query($con,"SELECT * FROM `user` WHERE NOT `type`='admin'");
                    $row_user=mysqli_fetch_array($sql_user);
                    ?>
            <div class="recent-sales box">
                <?php
                if($row['type']==="image"){
                ?>
                <img src="../user/img/post/image/<?php echo$row['file'];?>" alt="">
                <?php
                }else{
                ?>
                    <video src="../user/img/post/video/<?php echo$row['file'];?>" controls></video>
                    <?php
                }?>
                <span><?php echo$row_user['username'];?></span>
                <span><?php echo$row['data'];?>||<?php echo$row['time'];?></span>
                <a href="view_post.php?rn=<?php echo$row['id'];?>"><span>view post</span></a>
                <p><?php echo$row['post'];?></p>
            </div>
            
            <?php
                }
            }
            ?> 
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
