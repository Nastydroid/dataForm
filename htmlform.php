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
	<input type="radio" value= "female"name="gender"/>female
	<input type="radio" value="male" name="gender"> male
	<input type="radio" value="others" name="gender">others
</p>

<p>
	<label for name="email">Email address</label><br/>
	<input type="text" name="email" placeholder="enter your email:"required/>
	
</p>

<p>

	<label for ='message'>your message</label><br/>
	<textarea name="message" cols="30" rows="5"></textarea>
</p>
	
<p>
	<input type="checkbox" name="check" required/>by clicking this box it shows you have accepted the terms and conditions
	
</p>

	<button type="submit">SUBMIT </button> </fieldset>

</form>
</body>
</html>
