<html>
<title>Friendbook</title>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
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
<div id="hback">
<div id="head"><span id="friendbook"><b>Friendbook</b></span>
<div id="log">
<form action="Login_authen.php" method="post">
<table>
<tr><td><span id="email">Email</span></td><td><span id="pass">Password</span></td></tr>
<tr><td><input type="email" name="email" id="email" placeholder="email"></td><td><input type="password" name="password" id="password" placeholder="password"></td><td>
<input type="submit" value="Log In" id="submit"></td></tr>
</form>
<div id="form">
<span id="welcome">Welcome to Friendbook</span></br>
<span id="connect">Connect with friends and the world around you</span>
<div id="formin">
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
<input type="submit" value="Sign Up for Friendbook" id="signin"></br>
<span id="terms">&nbsp&nbsp&nbsp&nbsp&nbspBy clicking Sign Up for Friendbook, you agree to</br> our Terms and that you have read our Data usage policy</span>
</div>
</div>

</table>
</form>
</div>
</div>
</div>
</body>

</html>