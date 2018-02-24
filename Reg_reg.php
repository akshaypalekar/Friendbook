<html>
<head>
<script type="text/javascript">
function validate()
	{
		var pass=document.getElementById('password').value;
		var cpass=document.getElementById('cpassword').value;
		var email=document.getElementById('email').value;
		var cemail=document.getElementById('cemail').value;
		if(pass)
		{
		if (pass.length<7)
		{
		
			document.getElementById('password').value ="";
			alert("Password Must be greater than 6 Characters.");
		}
		
		if (cpass)
	    {
		if(pass!=cpass)
		{
			document.getElementById('password').value ="";
			document.getElementById('cpassword').value ="";
			alert("Passwords do not Match.");
		
		}
		}
		}
		
		
				
		
		if (cemail)
	    {
		if(email!=cemail)
		{
			document.getElementById('email').value ="";
			document.getElementById('cemail').value ="";
			alert("Emails do not Match.");
		
		}
		}
		
		
		
	}
</script>
</head>
<body>
Welcome to Friendbook</br>
Connect with friends and the world around you.</br>
<form action="Reg_authen.php" method="post">
<input type="text" name="fname" id="fname" placeholder="First Name" required>
<input type="text" name="lname" id="lname" placeholder="Last Name" required></br>

<input type="email" name="email" id="email" placeholder="Your Email" onblur="javascript:validate()"  required></br>
<input type="email" name="cemail" id="cemail" placeholder="Re-Enter Email" onblur="javascript:validate()"  required></br>
<input type="password" name="password" id="password" placeholder="Password" onblur="javascript:validate()" required><br>
<input type="password" name="cpassword" id="cpassword" placeholder="Re-Enter Password" onblur="javascript:validate()" required><br>

Birthday</br><input type="text" name="day" id="month" placeholder="dd" required>
<input type="text" name="month" id="month" placeholder="mm"  required>
<input type="text" name="year" id="year" placeholder="yyyy"  required></br>

<input type="radio" name="sex" value="male" required>Male
<input type="radio" name="sex" value="female" required>Female</br>
<input type="submit" value="Sign Up for Friendbook">
By clicking Sign Up for Friendbook, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.
</form>
</body>
</html>