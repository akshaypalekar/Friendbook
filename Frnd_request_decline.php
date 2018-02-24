<?php
session_start();
include 'Helper.php';
$from=@$_REQUEST['from'];
$to=$_SESSION['sr_no'];

$obj=new Helper();
$obj->delete("friend", "from_id='$from' and to_id='$to'");

header("Location: Frnd_request.php");

?>