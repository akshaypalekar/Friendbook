<?php

session_start();
include 'Helper.php';
$email=$_SESSION['email'];
$obj=new Helper();
if(isset($_REQUEST['Personal_update']))
{
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$day=$_REQUEST['day'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
$str="UPDATE user SET fname='$fname', lname='$lname', day='$day', month='$month', year='$year' WHERE email='$email'";
$obj->execute($str);
}
else if(isset($_REQUEST['Contact_update']))
{
$mob=$_REQUEST['mob'];
$work_no=$_REQUEST['work_no'];
$str="UPDATE user SET mob='$mob', work_no='$work_no' WHERE email='$email'";
$obj->execute($str);
}
else if(isset($_REQUEST['Work_edu_update']))
{
$occupation=$_REQUEST['occupation'];
$college=$_REQUEST['college'];
$school=$_REQUEST['school'];
$skills=$_REQUEST['skills'];
$str="UPDATE user SET occupation='$occupation', college='$college', school='$school', skills='$skills' WHERE email='$email'";
$obj->execute($str);
}
else if(isset($_REQUEST['Living_update']))
{
$city=$_REQUEST['city'];
$str="UPDATE user SET city='$city' WHERE email='$email'";
$obj->execute($str);
}

else if(isset($_REQUEST['Photo_update']))
{
  $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
	  $src="images/".$_FILES["file"]["name"];


$str="UPDATE user SET image='$src' WHERE email='$email'";
$obj->execute($str);
}
}
}
}

header("Location: Display_profile.php");
?>