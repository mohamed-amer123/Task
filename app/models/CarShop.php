<?php


class CarShop
{
	private $core_service;
	private $name;
	private $location;
	private $phone;
	private $services ; 

	function __construct($name,$location,$phone)
	{
		$this->name = $name;
		$this->location = $location;
		$this->phone = $phone;

	}
	public function get_shop_data($data)
	{
		switch ($data) {
			case 'name':
				return $this->name;
				break;
			case 'location':
				return $this->location;
				break;
			case 'phone':
				return $this->phone;
				break;
			
			default:
				
				break;
		}
	}
	public function set_core_service($core_service)
	{
		$this->core_service = $core_service;
	}

	public function get_core_service()
	{
		return $this->core_service;
	}

	public function remove_service($service)
	{
	    	unset($this->services[$service->get_name()]);		
	
	}
	
	public function add_service($service)
	{
		$this->services[$service->get_name()]=$service;  	
	}
	
	public function get_services()
	{
		return $this->services;
	}

}

  ?>