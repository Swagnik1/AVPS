<?php
session_start();
session_destroy();
header("location:http://localhost/Project/login.php");
?>