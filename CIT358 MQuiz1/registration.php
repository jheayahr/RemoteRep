<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form>
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label>Username: <input type="text" name="uname" /><br />
		<label></label>Email: <input type="text" name="email" /><br />
		<label></label>Confirm Email: <input type="text" name="c_email" /><br />
		<label></label>Password: <input type="password" name="pass" /><br />
		<label></label>Confirm Password: <input type="password" name="cpass" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label>First Name: <input type="text" name="fname" /><br />
		<label></label>Last Name: <input type="text" name="lname" /><br />
		<label></label>Contact Number: <input type="text" name="contact" /><br />
		<label></label>Address: <textarea rows="2" cols="20" name="address" ></textarea><br />
		<label></label>City: <input type="text" name="city" /><br />
		<label></label>State: <input type="text" name="state" /><br />
		<label></label>Zip: <input type="text" name="zip" />
	</fieldset>
	<input type="submit" value="Register" onClick="return submit_form();" />
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>