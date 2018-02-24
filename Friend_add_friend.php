<?php
session_start();
include 'Helper.php';

$to=$_REQUEST['to'];
$from=$_SESSION['sr_no'];
$status=0;

$con=mysql_connect('localhost','root','');
if(!$con)
{
die("connection not established");
}

mysql_select_db('friendbook',$con);
$sql= "CREATE TABLE IF NOT EXISTS friend
(
id int(11) PRIMARY KEY AUTO_INCREMENT,
from_id varchar(20),
to_id varchar(20),
status tinyint
)";
mysql_query($sql) or die(mysql_error());

$obj=new Helper();
$obj->insert("friend","`to_id`, `from_id`, `status`","'$to', '$from', '$status' ");
$_SESSION['to']=$to;

header("Location: Display_friend_profile.php?to=$to");

?>