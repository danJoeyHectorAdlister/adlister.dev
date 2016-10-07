<?php

          


// This conditional makes sure the id of the item selected is set

if (isset($_REQUEST['id'])) {
     $id = $_REQUEST['id'];
 } 

$ad = Ad::find($id);

if (isset($_REQUEST['ad_delete'])) {
    $ad->delete();
    header('Location: http://adlister.dev/');
    exit;
}

$conditionForDeleteUser = isset($_SESSION['LOGGED_IN_ID'])
&&$_SESSION['LOGGED_IN_ID'] == $ad->attributes['user_id'];

?>

 <div class="container">
     <div class="row">
    
<!-- This for each loop will go through all items with id and display them
since only one item can be clicked on at a time it will always only be one -->
 
        <div class="col-sm-4 col-sm-offset-4 showPage">
            <img class="shadow" src="<?= $ad->image_url   ?>" height='252' width='302'>
            <div class="showBox">
                <p><?= $ad->name; ?></p>
                <p class="featuredItem"><?= $ad->description ?></p>
                <p>$<?= $ad->price; ?></p>
                <br>    
                <a href="<?= $ad->url ?>"><?= $ad->url ?></a>
            </div>

<?php if ($conditionForDeleteUser): ?>

            <form method="POST">
                
                <input name="ad_delete" type="hidden" value="<?= $_REQUEST['id'] ?>">

                <button type="submit" class="btn btn-primary">Delete</button>

            </form>

<?php endif; ?>



<?php if ($conditionForDeleteUser): ?>
               
                <a href="http://adlister.dev/editItem?id=<?= $ad->id ?>">Edit</a>

<?php endif; ?>
        </div>
        </div>

    </div>


