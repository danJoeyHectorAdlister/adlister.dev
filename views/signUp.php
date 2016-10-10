<?php
require_once __DIR__ . '/../utils/Auth.php';


$name = Input::get('name');
$username = Input::get('userName');
$email = Input::get('email');
$password = Input::get('password');
$verifyPassword = Input::get('verifyPassword');

if( (!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($verifyPassword)) && ($password == $verifyPassword) ) {
	$user = new User;
	$user->name = $name;
	$user->username = $username;
	$user->email = $email;
	$user->password = $password;
	$user->save();
	header("Location: http://adlister.dev/login");
} else {
	// var_dump("Invalid Parameters");
}

?>


<div class="container col-sm-4 col-sm-offset-4">
	<h1 class="adForm">Create an account!</h1>
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