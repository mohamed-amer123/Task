<?php


class Customer
{
	private $name;
	function __construct($name)
	{
		$this->set_name($name);	
	}

	public function set_name($name)
	{
		$this->name=$name;
		
	}
		
	public function get_name()
	{
		return $this->name;
		
	}
}


?>