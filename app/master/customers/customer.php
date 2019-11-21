<?php
namespace master\customers;

use app\controllers\Controller as Controller;

class Customer extends Controller{
	public $name ;

	public function __construct($value)
	{
		$this->name=$value;
		echo "Welcome " . $this->name;


	}

	public function intersted($service)
	{
		$cost=$this->calculate($service);
		echo "these interested jops will cost = " .$cost ." $ ";


	}
	public function enquired($service)
	{
		$cost=0;
		if(in_array(1, $service))
		{
			$cost=$this->calculate($service);
		}else{
			$cost=$this->calculate($service)-$this->car_details['basic_inspection'];

		}
		echo "enquired services will cost = ".$cost." $";
	}
}
?>