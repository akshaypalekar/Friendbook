<!DOCTYPE html>
<?php
session_start();
include 'Helper.php';
include 'Header.php';
$x=$_SESSION['user_status'];

if($x=='logged_in')
{
}
else 
{
echo "error";
header("location: Homepage.php");
}
?>
<html>

<head>

<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="hback">
Hello 
<?php

$email=$_SESSION['email'];

$obj=new Helper();
$result=$obj->select("fname,lname", "user", "`email`='$email'");
foreach($result as $r) 
{ 
    echo $r['fname']." ".$r['lname']; 
} 
?>

</div> 
<div id="left_bar" style="border: 1px solid black; width: 150px; height:500px; ">

<?php
$email=$_SESSION['email'];


$obj=new Helper();
$result=$obj->select("image, fname, lname", "user", "`email`='$email'");
foreach($result as $r) 
{ 
    echo "<table>"; 
	
    echo  "<tr><td><img src=". $r['image']. " height='50' width='50'></img></td>
	<td>" . $r['fname'] . " " . $r['lname'] . "</br><a href='Display_profile.php'>Edit</a></td></tr>"; 
     	
    echo "</table>";
} 



?>


</div>

</body>
</html>