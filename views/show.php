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
     <div class="row col-sm-4 col-sm-offset-4 oneItemDiv">
    
<!-- This for each loop will go through all items with id and display them
since only one item can be clicked on at a time it will always only be one -->
        <div class="oneItem editThis container">
            <img class="shadow" src="<?= $ad->image_url   ?>" height='252' width='302'>
            <div class="showBox">
                <h4><?= $ad->name; ?></h4>
                <p class="featuredItem"><?= $ad->description ?></p>
                <h5>$<?= $ad->price; ?></h5>
                <br>    
                <a href="<?= $ad->url ?>"><?= $ad->url ?></a>
            </div>
        </div>
<?php if ($conditionForDeleteUser): ?>

            <form method="POST">
                
                <input name="ad_delete" type="hidden" value="<?= $_REQUEST['id'] ?>">

                <button type="submit" class="btn btn-primary">Delete</button>
                <br>

            </form>

<?php endif; ?>



<?php if ($conditionForDeleteUser): ?>
                <br>
                <a href="http://adlister.dev/editItem?id=<?= $ad->id ?>"><button class="btn btn-primary">Edit</button></a>

<?php endif; ?>
        </div>
        </div>

    </div>


