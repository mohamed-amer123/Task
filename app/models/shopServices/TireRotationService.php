<?php

use app\models\ServiceInfo ;

class TireRotationService implements IService 
{
	
	
	private $serviceInfo;

	function __construct(){
		$this->serviceInfo = new ServiceInfo("TireRotationService",23.5);
	}
	
	public function get_name()
	{
		return $this->serviceInfo->get_name();
	}

	public function get_price()
	{
		return $this->serviceInfo->get_price();
	}

}



?>