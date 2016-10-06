<?php

require_once __DIR__ . '/../models/Ad.php';

require_once __DIR__ . '/../models/Model.php';

require_once __DIR__ . '/../models/User.php';

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

            <h1>SHUT UP AND TAKE MY MONEY!!!</h1>
            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->

        </div>

 <div class="container">
     <div class="row">
    
 


        <?php foreach ($ads->attributes as $attribute=>$value): ?>
        
        <div class="col-sm-6">
            <a href="/show?id=<?= $value['id'] ?>"><img src="<?= $value['image_url']   ?>" height='252' width='302'></a>
            <br>
            <h4><?= $value['name']; ?></h4>
            <p class="featuredItem"><?= $value['description']; ?></p>
            <p>$<?= $value['price']; ?></p>
            <br>    
            <a href="<?= $value['url'] ?>"><?= $value['url'] ?></a>
        </div>

        <?php endforeach;?>



    



                    
    </div>
</div>

    </section>

</div>