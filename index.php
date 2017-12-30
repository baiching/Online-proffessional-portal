<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
</head>
<body>


<!-- Header part starts  -->
<div class="headback">
<div class="Mid">
<div class="mid0">
	<form action="login.php" method="POST">
		<div class="mid1">
			<input type="text" placeholder="Enter Email Address" name="email">
			<input type="password"  placeholder="Password" name="pass">
		</div>
		<div class="mid2">
			<input type="submit" value="Log In" name="login">
		</div>
	</form>
	
	</div>
	<div class="mid">
		<h2>PROFETIONAL PORTFOLIO PORTAL</h2>
	</div>
</div>
</div>

<!-- body part starts -->
<div class="web-body">
<div class="blar">
	
	<div class="regbox">
	<div class="regin">
		<h2>Regestration</h2>
		<p>Please provide the following informations to regester</p>
	</div>
	<form action="DB/DatabaseRegester.php" method="post" onsubmit="return Validate()" name="vform">
	<div class="name">
		<label for="name1">First Name : </label>
		<input type="text" id = "name" name="fname">
		<div id="name_error" class="val_error"></div>
	</div>
	<div class="email">
		<label for="name2">Last Name : </label>
		<input type="text" id = "email" name="lname">
		<div id="pnum_error" class="val_error"></div>
	</div>
	<div class="phone">
		<label for="mail">Email : </label>
		<input type="email" id = "mail" name="uemail">
		<div id="email_error" class="val_error"></div>
	</div>
	<div class="pass">
		<label for="pass">Password : </label>
		<input type="password" id = "pass" name="upass">
		<div id="pass_error" class="val_error"></div>
	</div>
	<div class="cpass">
		<label for="cpass">Confirm Password : </label>
		<input type="password" id = "cpass" name="ucpass">
		<div id="cpass_error" class="val_error"></div>
	</div>
	<div class="regest">
		<input type="submit" value="Regester" name="submit">
	</div>
	</form>
	</div>
</div>
</div>
</body>
</html>

<!-- adding javascript -->
<script type="text/javascript">
	var username = document.forms["vform"]["fname"];
	var phone = document.forms["vform"]["lname"];
	var email = document.forms["vform"]["uemail"];
	var password = document.forms["vform"]["upass"];
	var cpassword = document.forms["vform"]["ucpass"];

	//displaying all errors
	var name_error = document.getElementById("name_error");
	var email_error = document.getElementById("email_error");
	var pass_error = document.getElementById("pass_error");
	var pnum_error = document.getElementById("pnum_error");
	var cpass_error = document.getElementById("cpass_error");

	//setting up event handlers
	username.addEventListener("blur", nameVerify, true);
	phone.addEventListener("blur", phoneVerify, true);
	email.addEventListener("blur", emailVerify, true);
	password.addEventListener("blur", passwordVerify, true);
	cpassword.addEventListener("blur", passwordVerify, true);

	//validation funtion
	function Validate(){
		//username validation
		if(username.value == ""){
			username.style.border = "1px solid red";
			name_error.textContent = "Firstname is required";
			username.focus();
			return false;
		}
		//last name validation
		if(phone.value == ""){
			phone.style.border = "1px solid red";
			pnum_error.textContent = "lastname is required";
			phone.focus();
			return false;
		}
		//email validation
		if(email.value == ""){
			email.style.border = "1px solid red";
			email_error.textContent = "email is required";
			email.focus();
			return false;
		}
		//password validation
		if(password.value == ""){
			password.style.border = "1px solid red";
			pass_error.textContent = "password is required";
			password.focus();
			return false;
		}
		//confirm password validation
		if(cpassword.value == ""){
			cpassword.style.border = "1px solid red";
			cpass_error.textContent = "password is required";
			cpassword.focus();
			return false;
		}
	}

	//event handler functions
	function nameVerify(){
		if(username.value != ""){
			username.style.border = "1px solid #5E6E66";
			name_error.innerHTML = "";
			return true;
		}
	}
	//event handler functions
	function emailVerify(){
		if(email.value != ""){
			email.style.border = "1px solid #5E6E66";
			email_error.innerHTML = "";
			return true;
		}
	}
	function phoneVerify(){
		if(phone.value != ""){
			phone.style.border = "1px solid #5E6E66";
			pnum_error.innerHTML = "";
			return true;
		}
	}
	function passwordVerify(){
		if(password.value != ""){
			password.style.border = "1px solid #5E6E66";
			pass_error.innerHTML = "";
			return true;
		}
	}
	function passwordVerify(){
		if(cpassword.value != ""){
			cpassword.style.border = "1px solid #5E6E66";
			cpass_error.innerHTML = "";
			return true;
		}
	}

</script>