<?php
	class CarShopService
	{
		private $carShop ;
		function __construct($carShop)
		{
			$this->carShop=$carShop;	
		}
		public function interested($services)
		{
			$total_price=  $this->total_price($services);
			if (!$this->is_contain_core_service($services)) {
				$total_price+=$this->carShop->get_core_service()->get_price();
			}
			return  $total_price;
		}
		public function enquired($services)
		{
			return  $this->total_price($services);
		}
		
		private function total_price($services)
		{
			$total_price = 0 ; 
			foreach ($services as $service) {
				if($this->carShop->get_services()[$service]){
					 $total_price+=$this->carShop->get_services()[$service]->get_price();
				}	
			}
			return $total_price;
		}

		private function is_contain_core_service($services)
		{
		 	$core_service = $this->carShop->get_core_service()->get_name();
		 	return in_array($core_service,$services);
		}

	}
?>