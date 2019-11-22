<?php

use app\models\ServiceInfo ;

class OilChangeService implements IService 
{
	
	private $serviceInfo;

	function __construct(){
		$this->serviceInfo = new ServiceInfo("OilChangeService",85);
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