<?php
session_start();
include 'Helper.php';
$msg=$_REQUEST['msg'];
$from=$_SESSION['sr_no'];;
$to=$_REQUEST['to'];
$time= date('l d/m/Y h:i:s A');
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("connection not established");
}

mysql_select_db('friendbook',$con);
$sql= "CREATE TABLE IF NOT EXISTS message
(
id int(11) PRIMARY KEY AUTO_INCREMENT,
from_id varchar(20),
to_id varchar(20),
message text,
time varchar(100)
)";
mysql_query($sql) or die(mysql_error());

$obj=new Helper();
$obj->insert("message","`from_id`, `to_id`, `message`, `time`","'$from', '$to', '$msg', '$time'");


?>