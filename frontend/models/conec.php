<?php

/**
 * 
 */
class Conection
{
	
	public function conect()
	{
		$query = new PDO("mysql:host=localhost; dbname=garbho-ecommerce",
						 "root", "", 
						 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						 	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);
		return $query;
	}
}