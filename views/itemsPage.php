 <?php

          // requirements made for other files necessary


require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

// call the all() method from the ad class to use the loop

$ads = Ad::all();


?>


 <div class="container">
    <h1 class="animated flipInX homeTitle">SHUT UP AND TAKE MY MONEY!!!</h1>
    <div class="row">
    

        
            
            <!-- Placeholder for featured items.-->

        
 
<!-- This for each loop loops through all items in db and displays them -->

       
        <?php foreach ($ads->attributes as $attribute=>$value): ?>
        
        <div class="col-sm-4 editThis animated slideInUp ">

            <a href="/show?id=<?= $value['id'] ?>"><img class="shadow" src="<?= $value['image_url'] ?>" height='252' width='302'></a>
            
            
            <div class="itemInfoBox">
                <!-- <div class="itemInfo"> -->
                    
                    <h4 class="itemName"><?= $value['name']; ?></h4>
                    <p class="description"><?= $value['description']; ?></p>
                    <h5>$<?= $value['price']; ?></h5>
                       
                    <h4><a href="<?= $value['url'] ?>"><?= $value['url'] ?></a></h4>
                </div>
            <!-- </div> -->
        </div>


        <?php endforeach;?>
        <br>
        <br>






                    
    </div>
</div>