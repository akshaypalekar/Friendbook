<!DOCTYPE html>
<?php
session_start();
include 'Header.php';
include 'Helper.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="edit">


<?php

$email=$_SESSION['email'];

$obj=new Helper();
$result=$obj->select("fname,lname,email,day,month,year,mob,work_no,occupation,college,school,skills,city,image", "user", "`email`='$email'");
foreach($result as $r) 
{ 

echo "<fieldset>";
echo "<legend><b>Profile Photo|</b><a href='User_update.php?Edit_photo'>edit</a></legend>";
echo "<table>"; 
echo "<tr><td><img src=". $r['image']. " height='50' width='50'></img></tr>";
echo "</table>";
echo "</fieldset>";


echo "<fieldset>";
echo "<legend><b>Personal Information|</b><a href='User_update.php?Edit_personal'>edit</a></legend>";
echo "<table>"; 
echo  "<tr><td>  Name: </td><td>" . $r['fname'] . " " . $r['lname'] . "</td></tr>";
echo  "<tr><td>  Email: </td><td>" . $r['email'] . "</td></tr>";
echo  "<tr><td>  Birth Date: </td><td>" . $r['day'] . "/" . $r['month'] . "/" . $r['year'] . "</td></tr>";
echo "</table>";
echo "</fieldset>";

echo "<fieldset>";
echo "<legend><b>Contact Information|</b><a href='User_update.php?Edit_contact'>edit</a></legend>";
echo "<table>";
echo  "<tr><td>  Mobile: </td><td>" . $r['mob'] . "</td></tr>";
echo  "<tr><td>  Work: </td><td>" . $r['work_no'] . "</td></tr>";
echo "</table>";
echo "</fieldset>";

echo "<fieldset>";
echo "<legend><b>Work and Education|</b><a href='User_update.php?Edit_work_edu'>edit</a></legend>";
echo "<table>";
echo  "<tr><td>  Occupation: </td><td>" . $r['occupation'] . "</td></tr>";
echo  "<tr><td>  College: </td><td>" . $r['college'] . "</td></tr>";
echo  "<tr><td>  School: </td><td>" . $r['school'] . "</td></tr>";
echo  "<tr><td>  Professional Skill: </td><td>" . $r['skills'] . "</td></tr>";
echo "</table>";
echo "</fieldset>";

echo "<fieldset>";
echo "<legend><b>Living|</b><a href='User_update.php?Edit_living'>edit</a></legend>";
echo "<table>";
echo  "<tr><td>  Current City: </td><td>" . $r['city'] . "</td></tr>";
echo "</table>";
echo "</fieldset>";
} 
?>


</div>
</body>
</html>