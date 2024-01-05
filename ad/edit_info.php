<?php
include("header.php");
if(isset($_GET['rn'])){
	$error=$_GET['rn'];
	echo"<script>alert('".$error.".');</script>";
}
?>
<style>
    .home-content .sales-boxes .recent-sales{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .input{
        display: flex;
        flex-direction: column;
        margin: 20px;
    }
    .input input{
        padding: 8px;
    }
    .home-content .sales-boxes{
        flex-direction: column;
        gap: 20px;
    }
</style>
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Edit Info</div>
            </div>
            
            <div class="recent-sales box">
                <form action="php/updata.php" enctype="multipart/form-data" method="post">
                    <div class="input">
                        <label for="username">username</label>
                        <input type="text" name="name" value="<?php echo$row['username'];?>" id="username">
                    </div>
                    <div class="input">
                        <label for="email">email</label>
                        <input type="email" name="email" value="<?php echo$row['email'];?>" id="email">
                    </div>
                    <div class="input">
                        <label for="img">img</label>
                        <input type="file" name="file" value="../user/imh/profile<?php echo$row['username'];?>" id="img">
                    </div>
                    <div class="input">
                        <label for="Password">Password</label>
                        <input type="Password" name="password" id="Password">
                    </div>
                    <input type="submit" name="info" value="send">

                </form>
            </div>
            <div class="recent-sales box">
            <div class="title">Edit Password</div>

                <form action="php/updata.php" method="post">
                    <div class="input">
                    <label for="Password">Password</label>
                        <input type="Password" name="password" id="Password">
                    </div>
                    <div class="input">
                    <label for="NewPassword">NewPassword</label>
                        <input type="Password" name="newpassword" id="NewPassword">
                    </div>
                    <div class="input">
                    <label for="reNewPassword">reNewPassword</label>
                        <input type="Password" name="repassword" id="reNewPassword">
                    </div>
                    <input type="submit" name="epassword" value="send">

                </form>
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
