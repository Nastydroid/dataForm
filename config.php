<?php


	$firstName=$_POST['first_name'];
	$lastName=$_POST["last_name"];
	$email_ad=$_POST["email"];
	$sex=$_POST["gender"];
	$user_text=$_POST["message"];

	$input= "firstname:" . $firstName .PHP_EOL . "lastname:" .$lastName .PHP_EOL. "gender:". $sex  .PHP_EOL. "email:" . $email_ad . PHP_EOL. "user_message:".  $user_text  ;

	$fp = fopen("$firstName.txt", "w");

	fwrite($fp, $input);

	fclose($fp);

	echo"<h1>Thanks for contacting me,i will respond to this soon</h1>";

?>