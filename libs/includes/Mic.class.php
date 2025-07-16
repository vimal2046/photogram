<?php

//for  creating classs we use keyword called class

/** 
 
* Access Specifiers
*---------------------
* public
* private
* protected

*/
class Mic
{
   public $brand;
   public $color;
   public $usb_port;
   public $model;
   public $light;
   public $price;


  

   public function setLight($light){
     
     print $light;
     print $this->light;
   
   }

   private function setModel(){
    return $this->model;  
   }

}