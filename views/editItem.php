<?php



?>



<div class="container col-sm-4 col-sm-offset-4">
	<form method="POST" action="adlister.dev" id="editItem">	
		<div class="form-group">
			<label>Title</label>
			<input  class="form-control" placeholder="Title">
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