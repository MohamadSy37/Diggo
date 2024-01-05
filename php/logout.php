<?php
include("conn.php");
session_start();

    session_unset();
session_write_close();
session_destroy();
header("location: ../join/index.php");
?>
