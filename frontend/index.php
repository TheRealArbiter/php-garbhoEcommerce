<?php
//Controllers 
require_once "controllers/layout.controller.php";
require_once "controllers/products.controller.php";
require_once "controllers/slide.controller.php";

//Models
require_once "models/layout.model.php";
require_once "models/products.model.php";
require_once "models/slide.model.php";
require_once "models/routes.php";
//require_once  "controllers/ProductsController.php";

//Models

//require_once  "models/LayoutModel.php";
//require  "models/ProductsModel.php";

//require  "models/routes.php";

$layout = new LayoutController();
$layout->layout();