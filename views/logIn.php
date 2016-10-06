<?php
require_once __DIR__ . '/../utils/Auth.php';


$username = Input::get('username');
$password = Input::get('password');



// check credentials
if ((!empty($username)) && (!empty($password)))
	if (Auth::attempt($username, $password)) {
		header("Location: http://adlister.dev/userAccount");
		die;
	} else {
		var_dump("Enter correct username and password");
	}
?>


<div class="container col-sm-4 col-sm-offset-4">
	<form method="POST">
	 <div class="form-group">
	    <label>Username</label>
	    <input type="username" name="username" class="form-control" id="InputUsername" placeholder="Username">
	  </div>	
	  <div class="form-group">
	    <label>Password</label>
	    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>