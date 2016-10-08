<?php
require_once __DIR__ . "/../utils/Auth.php";
require_once __DIR__ . "/../utils/Input.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/Ad.php";


// receives info from form
$name = Input::get('name');
$price = Input::get('price');
$description = Input::get('description');
$pic = Input::get('pic');
$itemId = $_REQUEST['id'];

// places info from form into User database. Also retrieves user session id. If info does not match current table info, then table is updated
if( !empty($name) && !empty($price) && !empty($description) ) {
	$imageUrl = saveUploadedImage('pic');
	$ad = new Ad;
	$ad->name = $name;
	$ad->price = $price;
	$ad->description = $description;
	$ad->image_url = $imageUrl;
	$ad->id = $itemId;
	$ad->save();
} else {
	// var_dump("Invalid Parameters");
}

// variables created to represent current ad info
$ad = Ad::find($_REQUEST['id']);
$currentName = $ad->attributes['name'];
$currentPrice = $ad->attributes['price'];
$currentDescription = $ad->attributes['description'];
$currentPic = $ad->attributes['image_url'];

?>


<div class="container col-sm-4 col-sm-offset-4">
	<form method="POST" action="" id="editItem" enctype="multipart/form-data">	
		<div class="form-group">
			<label>Title</label>
			<input  class="form-control" placeholder="Title" name="name" value="<?= $currentName ?>">
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			<div class="input-group">
				<div class="input-group-addon">$</div>
				<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" name="price" value="<?= $currentPrice ?>">	  			
			</div>
			<br>
			<textarea class="form-control" rows="3" placeholder="Description" name="description"><?= $currentDescription ?></textarea>
		</div>
		<div>
		<h5>Select image for Ad.</h5>
		<input type="file" name="pic" accept="image/*">
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>



