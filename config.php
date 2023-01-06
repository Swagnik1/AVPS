<?php

$db = mysqli_connect("localhost","root","","login_info");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>