<!DOCTYPE html>
<?php
session_start();
include 'Helper.php';
include 'Header.php';
$to=@$_REQUEST['to'];
$from=$_SESSION['sr_no'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="friend" style="border: 1px solid black; width: 150px; height:500px; ">

<?php
$email=$_SESSION['email'];


$obj=new Helper();
$result=$obj->select("image, fname, lname", "user", "`sr_no`='$to'");
foreach($result as $r) 
{ 
    
    echo "<table>"; 
    echo  "<tr><td><img src=". $r['image']. " height='50' width='50'></img></td>
	<td>" . $r['fname'] . " " . $r['lname'] . "</td></tr>"; 
   	

} 
$res=$obj->select("id, from_id, to_id, status", "friend", "`from_id`='$from' and `to_id`='$to' ");
if(is_array($res))
{
foreach($res as $r) 
{ 
if($r['status']==0)
{
echo "Friend Request Sent.";}

else
{
 echo "Already Friend";
}
}
}
else
{
echo "<a href='Friend_add_friend.php?to=$to'>Add Friend</a>"; 
}

?>
</body>
</html>