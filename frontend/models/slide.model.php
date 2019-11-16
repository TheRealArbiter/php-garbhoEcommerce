<?php


require_once "conec.php";

/**
 * 
 */
class SlideModel
{
	static public function mdlShowSlide($table) 
	{
		$query = Conection::conect()->prepare("SELECT * FROM $table");

		$query-> execute();

		return $query->fetchAll();

		return $query->close();

		$query = null;
	}
	
}