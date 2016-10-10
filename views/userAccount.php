<?php
require_once __DIR__ . "/../utils/Auth.php";
require_once __DIR__ . "/../utils/Input.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/Ad.php";
// verifies that user is logged in. If not logged in, sends them to login page
if (!Auth::check()) {
	header("Location: http://adlister.dev/login");
	die;
}

// receives info from form
$name = Input::get('name');
$username = Input::get('userName');
$email = Input::get('email');
$password = Input::get('password');
$verifyPassword = Input::get('verifyPassword');

// places info from form into User database. Also retrieves user session id. If info does not match current table info, then table is updated
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

// variables created to represent current user info
$user = User::find($_SESSION['LOGGED_IN_ID']);
$username = $user->attributes['username'];
$email = $user->attributes['email'];
$name = $user->attributes['name'];

// var_dump($_SESSION);

// *************************************** variables created that find item by user ***************************************************************

$ownerOfItem = Auth::id();
$userItem = Ad::findItemByUserId($ownerOfItem);
?>

<br><br>

<div class="accountBox container well span6 col-sm-4 col-sm-offset-4">
	<div class="row userAccount">
		<div class="span2" >
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
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="span8 text-center">


			<div class="container">
				<div class="row centered">
					<!-- This for each loop loops through all items in db and displays them -->
					<?php 
					if(!empty($userItem)):
						foreach ($userItem->attributes as $attribute=>$value): 
							?>

						<center><div class="col-sm-5 userItems">
							<br>

							<h3>Your Ads</h3> 
							<a href="/show?id=<?= $value['id'] ?>"><img src="<?= $value['image_url']   ?>" height='252' width='302'></a>
							<p> <?= $value['name']; ?> </p>	
							<p class="featuredItem"><?= $value['description']; ?></p>
							<p>$<?= $value['price']; ?></p>
							<br>    
							<a href="<?= $value['url'] ?>"><?= $value['url'] ?></a>
						</div>
				</div>
					<?php endforeach; endif;?>                 
				</div></center>
			</div>
		</div>  
	</div>
</div>



<div>


</div>










