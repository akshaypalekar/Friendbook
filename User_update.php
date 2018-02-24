<!DOCTYPE html>
<?php
session_start();
include 'Helper.php';
include 'Header.php';
?>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">
function validate()
	{
		var mob=document.getElementById('mob').value;
		if(mob)
		{
		if (mob.length<10 || mob.length>10 )
		{
		
			document.getElementById('mob').value ="";
			alert("Mobile Number must be 10 Digits");
		}
		}
		
		var work_no=document.getElementById('work_no').value;
		if(work_no)
		{
		if (work_no.length<8 || work_no.length>10 )
		{
		
			document.getElementById('work_no').value ="";
			alert("Work Number must be 10 or 8 Digits");
		}
		}
	}
</script>
</head>
<body>
<?php
if(isset($_REQUEST['Edit_personal']))
{
?>
<form action="User_update_db.php?Personal_update" method="post">
Name: <input type="text" name="fname" id="fname" placeholder="First Name">
<input type="text" name="lname" id="lname" placeholder="Last Name"></br>
Birth date: 
<input type="number" name="day" id="day" placeholder="dd">
<input type="number" name="month" id="month" placeholder="mm">
<input type="number" name="year" id="year" placeholder="yyyy"></br>
<input type="submit" value="Submit">
</form>
<?php
}
if(isset($_REQUEST['Edit_contact']))
{
?>
<form action="User_update_db.php?Contact_update" method="post">
Mobile: <input type="text" name="mob" id="mob" onblur="javascript:validate()" ></br>
Workplace: <input type="number" name="work_no" id="work_no" onblur="javascript:validate()" ></br>
<input type="submit" value="Submit">
</form>
<?php
}
if(isset($_REQUEST['Edit_work_edu']))
{
?>
<form action="User_update_db.php?Work_edu_update"  method="post">
Occupation: <input type="text" name="occupation" id="occupation" ></br>
College: <input type="text" name="college" id="college"></br>
School: <input type="text" name="school" id="school" ></br>
Professional Skill: <textarea rows="4" cols="50" name="skills" id="skills" ></textarea></br>
<input type="submit" value="Submit">
</form>
<?php
}
if(isset($_REQUEST['Edit_living']))
{
?>
<form action="User_update_db.php?Living_update" method="post">
Current City: <input type="text" name="city" id="city"></br>
<input type="submit" value="Submit">
</form>
<?php
}
if(isset($_REQUEST['Edit_photo']))
{
?>
<form action="User_update_db.php?Photo_update" method="post" enctype="multipart/form-data">
<label for="file">Image</label><input type="file" name="file" id="file" required></br>
<input type="submit" value="Submit">
</form>
<?php
}
?>
</body>
</html>
