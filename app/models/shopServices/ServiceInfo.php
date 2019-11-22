<?php 
namespace app\models;

class ServiceInfo
{
	private $name ;
	private $price ;

	function __construct($name,$price)
	{
		$this->set_name($name);
		$this->set_price($price);
	}

	public function set_name($name)
	{
		$this->name=$name;	
	}

	public function set_price($price)
	{
		$this->price=$price;
	}

	public function get_name()
	{
		return $this->name;	
	}

	public function get_price()
	{
		return $this->price;
	}

}


 ?>