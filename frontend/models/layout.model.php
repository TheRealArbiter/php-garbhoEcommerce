<?php

require_once "conec.php";

/**
 * 
 */
class LayoutModel
{
	
	//static method
	static public function mdlLayoutStyle($table)
	{
		$stmt =  Conection::conect() -> prepare("SELECT * FROM $table");
		$stmt -> execute();
		return $stmt->fetch();
		$stmt-> close();
	}
}