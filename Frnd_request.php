<!DOCTYPE html>
<?php
session_start();
include 'Helper.php';
include 'Header.php';
$from=$_SESSION['sr_no'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<?php
$obj=new Helper();
$result=$obj->select("*", "user a, friend b", "(a.sr_no = b.from_id AND b.to_id ='$from') AND b.status =  '0'");

foreach($result as $r) 
{ 
    
    echo "<table border='1'>"; 
    echo  "<tr><td><img src=". $r['image']. " height='50' width='50'></img></td>
	<td>" . $r['fname'] . " " . $r['lname'] . "</td><td><a href='Frnd_request_accept.php?from=". $r['from_id'] ."'>Accept</a></td>
	<td><a href='Frnd_request_decline.php?from=". $r['from_id'] ."'>Decline</a></td></tr>"; 
   	

} 
?>
</body>
</html>
