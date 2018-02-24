<?php
session_start();
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$con=mysql_connect('localhost','root','');

mysql_select_db('friendbook',$con);

$sql="SELECT email,password, sr_no FROM user WHERE email='$email' and password='$password'";
$result = mysql_query($sql);
while($r = mysql_fetch_array($result))
{
$sr_no=$r['sr_no'];
}
$row= mysql_num_rows(mysql_query($sql,$con));
mysql_close($con);
if(!($row>0))
{
$user_invalid=1;
$_SESSION['user_invalid']=$user_invalid;
header("location:Homepage.php");
}

else
{

$status='logged_in';
$_SESSION['user_status']=$status;
$_SESSION['email']=$email;
$_SESSION['sr_no']=$sr_no;
header("location:User_page.php");


}
?>