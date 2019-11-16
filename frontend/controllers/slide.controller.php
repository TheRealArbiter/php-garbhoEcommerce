<?php
 
 /**
  * Method who controlls the slide
  */
 class SlideController
 {
 	
 	public function ctrShowSlide()
 	{
 		//calls the slide table
 		$table = 'slide';
 		//attach the call to the SlidModel method mdlShowSlide
 		$res = SlideModel::mdlShowSlide($table);
 		//return the response
 		return  $res;
 	}
 }