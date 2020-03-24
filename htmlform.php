<html>
<head>
<title>contact me</title>
<style>
	body{
		background-color: powderblue;
	}

	h3{color: green;}
</style>
</head>

<body>
	<h3>Contact me using the form below and expect a response from me.</h3>

<form name='contact' action= "config.php" method="POST" autocomplete="off">
	<fieldset><legend>CONTACT ME</legend>
<div class="yellow-background">
<p>
	<label for name="first_name">first name</label><br />
	<input type = "text" name= "first_name" placeholder = "enter your first name:"/>

</p>

<p>
	<label for name="last_name">Last Name</label><br />
	<input type = 'text' name= 'last_name' placeholder="enter your last name:"/>
	
</p>

<p>
	<label for name="gender">gender</label><br/>
	<select name= "gender" size="1">
	<option value="male">male</option>
	<option value="female">female</option>
	<option value="others">others</option>
	</select>
</p>

<p>
	<label for name="email">Email address</label><br/>
	<input type="text" name="email" placeholder="enter your email:"required/>
	
</p>

<p>

	<label for ='message'>your message</label><br/>
	<input type ="text" name="message" placeholder='enter your message'/>
</p>

	<button type="submit">SUBMIT </button> </fieldset>

</form>
</body>
</html>
