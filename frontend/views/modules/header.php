
<!--Header section-->

<div class="container-fluid topBar" id="top">
    <div class="container">
        <div class="row">
            <!--Social media-->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>

                    <?php

                    $social = LayoutController:: ctrLayoutStyle();

                    $jsonSocialMedia = json_decode($social["socialNetworks"], true);

                    foreach ($jsonSocialMedia as $key => $value) {
                        echo' <li>
                                <a href="'.$value["url"].'">
                                    <i class="fa '.$value["network"].' socialNet '.$value["style"].'"></i>
                                </a>
                            </li>';
                    }
                    ?>
                  
                </ul>
            </div>
            <!--Register form-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 register">
                <ul>
                    <li><a href="#modalLogin" data-toggle="modal">Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRegister" data-toggle="modal">Regístrate</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="container-fluid">
    <div class="container">
        <div class="row" id="header">
            <!--Logo-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logo">
                <a href="#">
                    <img src="http://localhost/Sys01/backend/<?php echo $social["logo"]; ?>" class="img-responsive">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" >
                <!--Categories Btn-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategories">
                    <p>CATEGORIAS
                        <span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </p>
                </div>
                <!--Search Bar-->
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="finder">
                    <input type="search" name="Buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <a href="#">
                            <button class="btn btn-default backColor" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
                <!--End Search Bar-->

            </div>
            <!--End Categories-->
            <!--Start Shopping cart-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="shopping-cart">
                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                    <p>Su carrito <span class="cartItems"></span><br> MXN <span class="totalCart"></span></p>
                </a>
            </div>
        </div>

            <!--End shopping-cart -->
            <!--Start Categories-->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 backColor" id="categories">

                    <?php
                /* ====================================
                SHOW CATEGORIES IN DROPDOWN
                ========================================*/
                        //declare variables to use forward
                        $item = null;
                        $v = null;
                        //Get the control method that makes the call to the model
                        $categories = ProductsController::ctrShowCategories($item, $v);

                        foreach ($categories as $key => $value)
                         {
                            echo '  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                        <h4>
                                            <a href="'.$value["route"].'" class=pixelCategories>'.$value["category"].'</a>
                                        </h4>
                                        <hr>
                                        <ul>';
                        /* ====================================
                        SUBCATEGORIES FRIENDLY URLS
                        ========================================*/

                        //get 
                        //item stores the category
                        $item = "id_category";
                        //while v stores the category´s id
                        $v = $value["id"];
                        
                                $subcategories = ProductsController::ctrShowSubcategories($item, $v);
                                //Loop through the array an find the route according to the value of the route
                                foreach ($subcategories as $key => $value) {
                                    echo'<li><a href="'.$value["route"].'" class="pixelSubCategories">'.$value["subcategory"].'</a></li>';
                                }
                                echo  '</ul>
                            </div>';
                        }
                    ?>
            </div>  
            <!--End Categories-->
    </div>
</header>