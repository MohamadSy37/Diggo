<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

  <link rel="stylesheet" href="style.css">
  <style>
        body{
            display: contents;
        }
        .body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #f7f7f7;
  padding: 0 10px;
}
    </style>
</head>
<body>
  <?php 
  session_start();
  include_once "../php/db_con.php";
?>
<?php include_once "header.php"; ?>
<body>
  <div class="body">
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $sql = mysqli_query($con, "SELECT * FROM user WHERE id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: all_chat.php");
          }
        ?>
        <a href="all_chat.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <?php 
        if($row['img']!==""){
?>
        <img src="img/profile/<?php echo $row['img']; ?>" alt="">

<?php
        }else{
          ?>
        <img src="img/profile/profile.png" alt="">
        <?php
        }
        ?>
        <div class="details">
          <span><?php echo $row['fullname'];?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
  </div>
  <script src="javascript/chat.js"></script>

</body>
</html>
