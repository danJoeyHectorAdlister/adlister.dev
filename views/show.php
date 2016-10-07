<?php

          
// make the necessary requirements

require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

// This conditional makes sure the id of the item selected is set

if (isset($_REQUEST['id'])) {
     $id = $_REQUEST['id'];
 } 

$ads = Ad::find($id);

?>


 <div class="container">
     <div class="row">
    
 
<!-- This for each loop will go through all items with id and display them
since only one item can be clicked on at a time it will always only be one -->

        <?php foreach ($ads->attributes as $attribute=>$value): ?>


        
        <div class="col-sm-6">
            <img src="<?= $value['image_url']   ?>" height='252' width='302'>
            <br>
            <p><?= $value['name']; ?></p>
            <p class="featuredItem"><?= $value['description']; ?></p>
            <p><?= $value['price']; ?></p>
            <br>    
            <a href="<?= $value['url'] ?>"><?= $value['url'] ?></a>

        </div>

        <?php endforeach;?>







                    
    </div>
</div>

