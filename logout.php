<?php
session_start();
if(session_destroy())
{
// Redirecting To Logout Page
header("Location: login.php");
exit();
}
?>