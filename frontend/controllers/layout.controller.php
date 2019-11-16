<?php

class LayoutController {
	/*Call the layout*/
    public function layout() 
    {
        include "views/layout.php";
        
    }

    /*calls all dinamic styles*/
    public function ctrLayoutStyle()
    {
    	$table = "layout";
    	$response = LayoutModel::mdlLayoutStyle($table);

    	return $response;
    }
}