<?php
require_once __DIR__ . '/../utils/Auth.php';


$name = Input::get('name');
var_dump($name);
$username = Input::get('userName');
var_dump($username);
$email = Input::get('email');
var_dump($email);
$password = Input::get('password');
var_dump($password);
$verifyPassword = Input::get('verifyPassword');
var_dump($verifyPassword);

if( (!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($verifyPassword)) && ($password == $verifyPassword) ) {
	$user = new User;
	$user->name = $name;
	$user->username = $username;
	$user->email = $email;
	$user->password = $password;
	$user->save();
} else {
	var_dump("Invalid Parameters");
}

?>


<div class="container col-sm-4 col-sm-offset-4">
	<form method="POST">
		<div class="form-group">
			<label>Name</label>
			<input class="form-control" name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<label>User Name</label>
			<input class="form-control" name="userName" placeholder="Username">
		</div>
		<div class="form-group">
			<label>Email address</label>
			<input type="email" class="form-control" name="email" id="InputEmail" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Verify Password</label>
			<input type="password" class="form-control" name="verifyPassword" id="VerifyPassword" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>