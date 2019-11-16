<?php

require_once "conec.php";

class ProductsModel
{
    static public function mdlShowCategories($table, $item, $v)
    {
        //checks if  item has a value
        if ($item !=null) {
            //$item can bring the item, id and value or the route
            $con = Conection::conect()->prepare("SELECT * FROM $table WHERE $item= :$item");
            $con-> bindParam(":".$item, $v, PDO::PARAM_STR);
            $con-> execute();
            return $con->fetch();
            
            
        }else{
            $con = Conection::conect()->prepare("SELECT * FROM $table");
            $con-> execute();
            return $con->fetchAll();
        }

        $con-> close();
        $con = null;
       
    }

    static public function mdlShowSubcategories($table, $item, $v)
    {
        $con = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        //binding making the logical operation $item is equal to $v wich is the value of the route
        $con-> bindParam(":".$item, $v, PDO::PARAM_INT);
        $con-> execute();
        return $con->fetchAll();
        $con-> close();
        $con = null;
    }
}
