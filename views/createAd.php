<?php

require_once __DIR__ . '/../utils/helper_functions.php';

require_once __DIR__ . '/../utils/Input.php';


require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';



$conditionsForEntry = 
	!empty(Input::has('name'))
	&&!empty(Input::has('price'))
	&&!empty(Input::has('description'))
	&&isset($_POST);



if ($conditionsForEntry) {
	$imageUrl = saveUploadedImage('pic');

	var_dump($imageUrl);

	$ad = new Ad;

	$ad->name=Input::get('name');
	$ad->description=Input::get('description');
	$ad->price=Input::get('price');
	$ad->image_url = $imageUrl;
	$ad->featured = 0;
	$ad->save();

}





?>


<div class="container col-sm-4 col-sm-offset-4">
	<form method="POST" enctype="multipart/form-data">	
		<div class="form-group">
			<input  class="form-control" placeholder="Name" name="name">
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
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>