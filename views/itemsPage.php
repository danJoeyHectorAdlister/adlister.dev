 <?php

          // requirements made for other files necessary


require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

// call the all() method from the ad class to use the loop

$ads = Ad::all();


?>


 <div class="container">
     <div class="row">
    
 
<!-- This for each loop loops through all items in db and displays them -->

        <?php foreach ($ads->attributes as $attribute=>$value): ?>
        
        <div class="col-sm-4">
            <a href="/show?id=<?= $value['id'] ?>"><img src="<?= $value['image_url']   ?>" height='252' width='302'></a>
            <br>
            <p><?= $value['name']; ?></p>
            <p class="featuredItem"><?= $value['description']; ?></p>
            <p>$<?= $value['price']; ?></p>
            <br>    
            <a href="<?= $value['url'] ?>"><?= $value['url'] ?></a>

        </div>

        <?php endforeach;?>







                    
    </div>
</div>