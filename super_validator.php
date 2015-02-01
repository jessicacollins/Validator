<?php  

	require('validator.php');

	$validate = new Validator;
	$validate->email($_GET['email']);
	$validate->username($_GET['username']);
	$validate->password($_GET['password']);
	$validate->phoneNumber($_GET['phone']);
	$validate->number($_GET['num']);


	if (count($validate->errorMessages) > 0) {
		print_r($validate->errorMessages);
	} else {
		echo 'form is good';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Super Validator</h1>
	<form action="">
		<label>Email: <input type="email" name="email"></label><br><br>
		<label>Username: <input type="text" name="username"></label><br><br>
		<label>Password: <input type="password" name="password"></label><br><br>
		<label>Phone Number: <input type="tel" name="phone"></label><br><br>
		<label>Number: <input type="number" name="num"></label><br><br>
	<button>Submit</button>



	</form>
</body>
</html>