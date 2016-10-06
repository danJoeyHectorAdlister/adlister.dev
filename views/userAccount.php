<?php
require_once __DIR__ . "/../utils/Auth.php";

if (!Auth::check()) {
	header("Location: http://adlister.dev/login");
	die;
}

?>

<br><br>
<div class="container well span6 col-sm-4 col-sm-offset-4">
	<div class="row">
        <div class="span2" >
		    <!-- <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle"> -->
        </div>
        
        <div class="span8 text-center">
            <h3>Account</h3>
            <h6>Username: YourNameHere</h6>
            <h6>Email: MyEmail@servidor.com</h6>
            <h6>Password: password</h6>  
            <button type="button" class="btn btn-primary">Edit Profile</button>  
        </div>
        <div class="span8 text-center">
            <h3>Your Ads</h3>
            <h6>insert ads here</h6>
            <h6>insert ads here</h6>    
            <button type="button" class="btn btn-primary">Edit Ads</button>
        </div>  
	</div>

</div>