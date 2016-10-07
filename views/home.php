<?php

// All necessary files are required

require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

// This is calling the find featured item function set in the ad class

$ads = Ad::findFeaturedItem();

?>


<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">
              
                <!-- <h1 class="text-center">Welcome To Adlister</h1> -->

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">
            <h1 class="animated bounceIn homeTitle">SHUT UP AND TAKE MY MONEY!!!</h1>
            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->

        </div>

 <div class="container">
     <div class="row">
    
 
<!-- This for each loop will loop through the featured ads (in the db, they have
    the featured column set to 1) -->

        <?php foreach ($ads->attributes as $attribute=>$value): ?>
        
        <div class="col-sm-4">
            <a href="/show?id=<?= $value['id'] ?>"><img class="shadow" src="<?= $value['image_url'] ?>" height='252' width='302'></a>
            <br>
            <br>
            <div class="itemInfoBox">
                <div class="itemInfo">
                    
                    <h4><?= $value['name']; ?></h4>
                    <p class=""><?= $value['description']; ?></p>
                    <p>$<?= $value['price']; ?></p>
                       
                    <a href="<?= $value['url'] ?>"><?= $value['url'] ?></a>
                </div>
            </div>
        </div>


        <?php endforeach;?>
        <br>
        <br>



    



                    
    </div>
</div>

    </section>

</div>
<br>