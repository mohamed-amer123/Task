<?php
namespace  app\controllers ;

class Controller {
	var $name;
	var $location;
	var $phone;
	var $car_details= array('basic_inspection' => 50 ,'oil_cahnge'=> 85 ,'tire_rotation'=> 23.5);

   public function __construct($name , $location , $phone)
   {
   	$this->name = $name;
   	$this->location = $location;
   	$this->phone = $phone;
    echo "Welcome to our CAR SHOP ".$name;
    echo "our prise : <li>".$this->car_details['basic_inspection']." $ for basic inspection</li><li>".$this->car_details['oil_cahnge']." $ for oil changing </li><li>".$this->car_details['tire_rotation']." $ for tire rotetion</li>";
   }

   public function calculate ($value)
   {
   	$counter = 0;
   	$data ;

   	if (count($value)== 1) {
   		switch ($value[0]) {
   			case 2:
   				$data=$this->car_details['oil_cahnge'];
   				break;
   			case 3:
   				$data=$this->car_details['tire_rotation'];
   				break;
   			
   			default:
   				$data=0;
   				break;
   		}
   		return $data+$this->car_details['basic_inspection'];

   	}else{
   		
   		$sum=0;
   		while(count($value)-1>=$counter){
   		switch ($value[$counter]) {
   			case 2:
   				$data=$this->car_details['oil_cahnge'];
   				break;
   			case 3:
   				$data=$this->car_details['tire_rotation'];
   				break;
   			default:
   				$data=0;
   				break;
   		
   		}
   		$sum=$sum+$data;
   		$counter++;  	
   		}
   		return $sum+$this->car_details['basic_inspection'];
    }

   	
   }



}

?>