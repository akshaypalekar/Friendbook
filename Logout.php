
<?php
session_start();
if(isset($_SESSION['user_status']))
{
unset($_SESSION['user_status']);
unset($_SESSION['email']);
}

header("location: Homepage.php");
?>