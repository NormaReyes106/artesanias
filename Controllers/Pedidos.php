<?php 

	class Pedidos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Pedidos()
		{
			$data['page_id'] = 6;
			$data['page_tag'] = " NODESS TESSFP  ";
			$data['page_name'] = "pedidos";
			$data['page_title'] = "Pedidos";
			
			$this->views->getView($this,"pedidos",$data);
		}

	}
 ?>