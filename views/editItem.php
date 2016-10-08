<?php
require_once __DIR__ . "/../utils/Auth.php";
require_once __DIR__ . "/../utils/Input.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/Ad.php";


// receives info from form
$title = Input::get('title');
$price = Input::get('price');
$description = Input::get('description');
$pic = Input::get('pic');
$itemId = $_REQUEST['id'];
// $ad = Model::find($id);

// findItemByUserId($_SESSION["LOGGED_IN_ID"]);

// places info from form into User database. Also retrieves user session id. If info does not match current table info, then table is updated
if( !empty($title) && !empty($price) && !empty($description) && !empty($pic) ) {
	$ad = new Ad;
	$ad->title = $title;
	$ad->price = $price;
	$ad->description = $description;
	$ad->pic = $pic;
	$ad->id = $itemId;
	$ad->save();
} else {
	// var_dump("Invalid Parameters");
}

// variables created to represent current user info
$ad = $itemId;
var_dump($ad);
// $title = $ad->attributes['title'];
var_dump($_REQUEST);
var_dump($_SESSION);
// $username = $user->attributes['username'];
// $email = $user->attributes['email'];
// $name = $user->attributes['name'];


?>




<!-- <form method="POST">				
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
</form> -->


<div class="container col-sm-4 col-sm-offset-4">
	<form method="POST" action="" id="editItem">	
		<div class="form-group">
			<label>Title</label>
			<input  class="form-control" placeholder="Title" name="title">
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			<div class="input-group">
				<div class="input-group-addon">$</div>
				<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" name="price">	  			
			</div>
			<br>
			<textarea class="form-control" rows="3" placeholder="Description" name="description"></textarea>
		</div>
		<div>
		<h5>Select image for Ad.</h5>
		<input type="file" name="pic" accept="image/*">
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>