<?php

class ProductsController
{
    //Returns the categories in dropdown header
   static public function ctrShowCategories($item, $v)
    {
        $table = "categories";
        //function witch executes the SQL sentence to the db
        $res = ProductsModel::mdlShowCategories($table, $item, $v);
        return $res;
    }


    //Returns the subcategory of a category
   static public function ctrShowSubcategories($item, $v)
    {
        //declare the table we want to work with
        $table = "subcategories";
        //function witch executes the SQL sentence to the db
        $res = ProductsModel::mdlShowSubCategories($table, $item, $v);
        return $res;
    }
    
}
