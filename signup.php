<!DOCTYPE>
<html>
<head>
<link rel="styleSheet" type="text/css" href="Css/sign_up.css"/>
<title>
Sign up
</title>
<body>
<h2>Sign up</h2>
<form method="post">

<label class="Name">Name:-</label>
<input type="text" name="first_name" placeholder="First Name" required>
<input type="text" name="second_name" placeholder="Second Name">
<input type="text" name="third_name" placeholder="Third Name" required><br>
<label>User Name:-</label>
<input type="text" name="User Name" placeholder="User Name" required><br>

<label class="pass">password:-</label>
<input type="password" name="pass" placeholder="Password" maxlength=10 required><br>

<label class="conpass">confirm Password:-</label>
<input type="password" name="confirmpass" placeholder="Confirm Passwors" maxlength=10 required><br>

<input type="submit" name="submit" Value="submit" >
<input type="button" name="Cancel" value="cancel" onclick="window.location.href='Login.html'">
</form>
</body>
</html>