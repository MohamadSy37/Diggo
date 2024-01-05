<?php
if(isset($_GET['rn'])){
	$error=$_GET['rn'];
	echo"<script>alert('".$error.".');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">LOGIN <span class="and">&</span> SIGN UP</h1>
        <div class="forms">
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login" action="../php/login.php" method="post">
              <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" name="email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" name="password" type="password" required>
                </div>
              </fieldset>
              <button type="submit" name="log" class="btn-login">Login</button>
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup" action="../php/join.php" method="post">
              <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" name="email" type="email" required>
                </div>
                <div class="input-block">
                  <label for="signup-usename">Username</label>
                  <input id="signup-usename"name="username" type="text" required>
                </div>
                <div class="input-block">
                  <label for="signup-fullName">fullName</label>
                  <input id="signup-fullName" name="fullName" type="text" required>
                </div>
                <div class="input-block">
                  <label for="signup-password">Password</label>
                  <input id="signup-password" type="password" name="password" required>
                </div>
                <div class="input-block">
                  <label for="signup-password-confirm">Confirm password</label>
                  <input id="signup-password-confirm" name="repassword" type="password" required>
                </div>
                <div class="input-block">
                  <label for="signup-date">The day of birth</label>
                  <input id="signup-date" name="birth" type="date" required>
                </div>
                <style>
                  .gender{
                    display: flex;
                        }
                </style>
                <div class="input-block">
                  <label for="signup Gender">Gender</label>
                  <div class="gender">
                  <label for="male">male</label>
                  <input type="radio" name="Gender" value="male" id="male">

                  <label for="female">female</label>
                  <input type="radio" name="Gender" value="female" id="female">
                  </div>
                </div>
              </fieldset>
              <button type="submit" name="join" class="btn-signup">Continue</button>
            </form>
          </div>
        </div>
      </section>
      <script src="script.js"></script>
</body>
</html>