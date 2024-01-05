<style>
    body{
        margin: 0;
    }
    nav a {
    text-decoration: none;
   }
   li {
    list-style: none;
   }
   .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-image:linear-gradient(to top left,#0A2558,#7095d9);
    color: #fff;
   }
   .nav-links a {
    color: #fff;
   }
   /* LOGO */
   .logo {
    font-size: 32px;
   }
   /* NAVBAR MENU */
   .menu {
    display: flex;
    gap: 1em;
    font-size: 18px;
   }
   .menu li:hover {
    background-color: #7095d9;
    border-radius: 5px;
    transition: 0.3s ease;
   }
   .menu li {
    padding: 5px 14px;
   }
   
   /*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
    display: none;
   } 
   /*HAMBURGER MENU*/
   .hamburger {
    display: none;
    font-size: 24px;
    user-select: none;
   }
   /* APPLYING MEDIA QUERIES */
   @media (max-width: 768px) {
   .menu { 
    display:none;
    position: absolute;
    background-image:linear-gradient(to bottom right,#0A2558,#7095d9);
    top: 85px;
    right: 0;
    left: 0;
    text-align: center;
    z-index: 999;
    padding: 16px 0;
   }
   .menu li:hover {
    display: inline-block;
    background-color:#7095d9;
    transition: 0.3s ease;
   }
   .menu li + li {
    margin-top: 12px;
   }
   input[type=checkbox]:checked ~ .menu{
    display: block;
   }
   .hamburger {
    display: block;
   }
   .dropdown {
    left: 50%;
    top: 30px;
    transform: translateX(35%);
   }
   .dropdown li:hover {
    background-color: #4c9e9e;
   }
   }
   nav input{
    color: #3d3f42;
   }
   nav{
    margin: 0;
   }
   .search{
    display: flex;
   }

    </style>
<?php
include("../php/db_con.php");

?>
<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">Diigo</div>
    <!-- NAVIGATION MENU -->

    <ul class="nav-links">
      <!-- USING CHECKBOX HACK -->
      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>
      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="user_profile.php">Profile</a></li>
        <li><a href="all_chat.php">Chat</a></li>
        <li><a href="friend_list.php">Add Friends</a></li>
        <li><a href="../php/logout.php">logout</a></li>
      </div>
    </ul>
  </nav>
