<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garbho</title>

    <?php

    $icon = LayoutController::ctrLayoutStyle();

    echo '<link rel="icon" href="http://localhost/Sys01/backend/'.$icon["icon"].'">';
    
    /* Keep the static route of the project*/

    $url =  Route::frontRoute();

    ?>
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/layout.css">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/header.css">
    <link rel="stylesheet" href="<?php echo $url; ?>views/css/slide.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="<?php echo $url; ?>views/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>views/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>views/js/plugins/jquery.easing.js"></script>


</head>
<body>
    <!--Header module-->
    <?php
        include "modules/header.php";
        /* ====================================
          DINAMIC URL CONTENT
        ========================================*/
        $routes = array();
        $emptyRoute= null;
          

        //if the $_GET has a route value then execute this block
        if (isset($_GET["route"])) 
        {
            //explode separates the routes
            $routes = explode("/", $_GET["route"]); 
            $item = "route";
            //stores the value of the item
            $v = $routes[0];

             /* ====================================
                CATEGORIES FRIENDLY URLS
                ========================================*/

            //Calling the object with his method
            $routeCategories = ProductsController::ctrShowCategories($item, $v);

            //if the value of the route is equal to a route
            if($v == $routeCategories["route"])
            {
                //fill the empty route with the value of the route
                $emptyRoute = $v;
            }

             /* ====================================
               SUBCATEGORIES FRIENDLY URLS
                ========================================*/

            $routeSubCategories = ProductsController::ctrShowSubcategories($item, $v);

            foreach ($routeSubCategories as $key => $value) {

                if($v == $value["route"])
                {
                    //fill the empty route with the value of the route
                    $emptyRoute = $v;
                }
            }
             /* ====================================
                WHITE LIST OF FRIENDLY URL 
                ========================================*/

            //if routes has a route return the products with the given route
            if($emptyRoute != null)
            {
                include "modules/products.php";
                //otherwise show the 4040 not found error
            }else{
                include "modules/error404.php";

            }
            //if theres no route then show slider
        }else {
            include "modules/slide.php";
            
        }
    ?>
    <script src="<?php echo $url; ?>views/js/header.js"></script>
    <script src="<?php echo $url; ?>views/js/layout.js"></script>
    <script src="<?php echo $url; ?>views/js/slide.js"></script>
    
</body>
</html>