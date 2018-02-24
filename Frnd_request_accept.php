<?php
session_start();
include 'Helper.php';
$from=@$_REQUEST['from'];
$to=$_SESSION['sr_no'];

$obj=new Helper();
$str="update friend set status=1 where from_id='$from' and to_id='$to'";
$obj->execute($str);
header("Location: Frnd_request.php");

?>

