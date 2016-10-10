<!--partial view for navbar-->

<?php
    require_once __DIR__ . "/../../utils/Auth.php";
?>




 <nav id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <?php 
                    if(Auth::check()){ ?>
                        <ul class="nav navbar-nav">                    
                        <li>
                            <a class="page-scroll pipe active" href="items">Items</a>
                        </li>
                        <li>
                            <a class="page-scroll pipe active" href="userAccount">Account</a>
                        </li>
                        <li>
                            <a class="page-scroll pipe active" href="createAd">Create Ad</a>
                        </li>
                        <li>
                            <a class="page-scroll pipe active" id="logout" href="logout">Logout</a>
                        </li>
                    </ul>
                <?php
                    } else {
                ?>
                    <ul class="nav navbar-nav">                    
                        <li>
                            <a class="page-scroll pipe active" href="items">Items</a>
                        </li>
                        <li>
                            <a class="page-scroll pipe active" href="login">Login</a>
                        </li>
                        <li>
                            <a class="page-scroll pipe active" href="signUp">Signup</a>
                        </li>
                    </ul> 
                <?php 
                    } 
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>