<?php

//for  creating classs we use keyword called class

/*

* Access Specifiers
*---------------------
* public
* private
* protected

*/
class Mic {
//objects of the class
  private $brand;
  public $color;
  public $usb_port;
  private $model;
  public $light;
  public $price;

public function __construct($brand)
{
  printf("Constructing object... and brand is ".$brand."\n");
   $this->brand = ucwords($brand);
}

public function getBrand(){
    return $this->brand;
}
public function setLight($light){
    print("-----".$light);
    $this->light = $light; // refers to the 'light' property of the current object instance

}
private function getModel(){
  return $this -> model;
}
  
public function setModel($model){
  $this->model = ucwords($model);
  
}

public function getModelProperty(){
  return $this->getModel();
}
}

