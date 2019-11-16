<?php

require_once "../controllers/layout.controller.php";
require_once "../models/layout.model.php";

/**
 * 
 */
class LayoutAjax
{
	
	public function ajaxLayoutStyle()
	{
		$response =LayoutController::ctrLayoutStyle();

		echo json_encode($response);
	}
}

$object =  new LayoutAjax();
$object -> ajaxLayoutStyle();