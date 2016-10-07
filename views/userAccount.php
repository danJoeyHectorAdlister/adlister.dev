<?php
require_once __DIR__ . "/../utils/Auth.php";
require_once __DIR__ . "/../utils/Input.php";
require_once __DIR__ . "/../models/User.php";

if (!Auth::check()) {
	header("Location: http://adlister.dev/login");
	die;
}

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
	$user->id = $_SESSION['LOGGED_IN_ID'];
	$user->save();
} else {
	// var_dump("Invalid Parameters");
}

	$user = User::find($_SESSION['LOGGED_IN_ID']);
	$username = $user->attributes['username'];
	$email = $user->attributes['email'];
	$name = $user->attributes['name'];


?>

<br><br>
<div class="container well span6 col-sm-4 col-sm-offset-4">
	<div class="row">
		<div class="span2" >
			<!-- <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle"> -->
		</div>
		
		<div class="span8 text-center">
			<h3>Account</h3>	
			<h6>Username: <?= $username; ?></h6>
			<h6>Email: <?= $email; ?></h6>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit Profile</button>  
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Update Profile</h4>
					</div>
					<div class="modal-body">
						<form method="POST">

			
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" name="name" placeholder="Name" value="<?php echo $name ?>">
						</div>
						<div class="form-group">
							<label>User Name</label>
							<input class="form-control" name="userName" placeholder="Username" value="<?php echo $username ?>">
						</div>
						<div class="form-group">
							<label>Email address</label>
							<input type="email" class="form-control" name="email" id="InputEmail" placeholder="Email" value="<?php echo $email ?>">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password" value="echo here">
						</div>
						<div class="form-group">
							<label>Verify Password</label>
							<input type="password" class="form-control" name="verifyPassword" id="VerifyPassword" placeholder="Password" value="echo here">
						</div>

						<?php
							// endforeach;
						?>

						<!-- 	<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" placeholder="Name" value="echo here">
							</div>
							<div class="form-group">
								<label>User Name</label>
								<input class="form-control" name="userName" placeholder="Username" value="echo here">
							</div>
							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" name="email" id="InputEmail" placeholder="Email" value="echo here">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password" value="echo here">
							</div>
							<div class="form-group">
								<label>Verify Password</label>
								<input type="password" class="form-control" name="verifyPassword" id="VerifyPassword" placeholder="Password" value="echo here">
							</div> -->

							<!-- ****************************************************************************************** -->

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<!-- submit button at the footer of modal.  -->
			 <!-- <div class="modal-footer">
			   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			   <button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div>
	</div>
</div>
<div class="span8 text-center">
	<h3>Your Ads</h3>
	<h6>insert ads here</h6>
	<h6>insert ads here</h6>    
	<button type="button" class="btn btn-primary">Edit Ads</button>
</div>  
</div>
</div>


<!-- Button trigger modal -->
<!-- <div class="container">
  <button type="button" class="btn btn-primary btn-lg col-sm-4 col-sm-offset-4" data-toggle="modal" data-target="#myModal">
   Edit Profile
  </button>
</div> -->









